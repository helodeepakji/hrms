<?php include 'layouts/session.php';

$sql = "SELECT 
    u.id, 
    u.name, 
    u.role_id, 
    r.name AS role_name, 
    u.profile, 
    wr.id AS roster_id,  -- Corrected column alias
    wr.week_start, 
    wr.week_end, 
    s.start_time, 
    s.end_time 
FROM users u
JOIN role r ON u.role_id = r.id
JOIN weekly_roster wr ON u.id = wr.user_id
JOIN shift s ON wr.shift_id = s.id
WHERE u.`is_terminated` = 0 
AND wr.week_start >= DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY)
AND wr.week_end <= DATE_ADD(DATE_SUB(CURDATE(), INTERVAL WEEKDAY(CURDATE()) DAY), INTERVAL 6 DAY)
ORDER BY u.id, wr.week_start;
";

$sql = $conn->prepare($sql);
$sql->execute();
$sql = $sql->fetchAll(PDO::FETCH_ASSOC);
$users = [];

foreach ($sql as $row) {
	$users[$row['id']]['roster_id'] = $row['roster_id'];
	$users[$row['id']]['name'] = $row['name'];
	$users[$row['id']]['role_name'] = $row['role_name'];
	$users[$row['id']]['profile'] = $row['profile'] == '' ? 'assets/img/users/user-32.jpg' : $row['profile'];
	$users[$row['id']]['shifts'][] = [
		'week_start' => $row['week_start'],
		'week_end' => $row['week_end'],
		'start_time' => date("h:i A", strtotime($row['start_time'])),
		'end_time' => date("h:i A", strtotime($row['end_time']))
	];
}


$employee = $conn->prepare("SELECT `users`.*, `role`.`name` AS `role` FROM `users` JOIN `role` ON `role`.`id` = `users`.`role_id` WHERE `is_terminated` = 0 ORDER BY `users`.`name` ASC");
$employee->execute();
$employee = $employee->fetchAll(PDO::FETCH_ASSOC);

$shifts = $conn->prepare("SELECT * FROM `shift`");
$shifts->execute();
$shifts = $shifts->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>UniqueMaps Admin Template</title>
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
</head>

<body>
	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<div class="main-wrapper">
		<?php include 'layouts/menu.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Schedule Timing</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Schedule Timing</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
						<div class="mb-2 ms-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#create_roster"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Create Roster</a>
						</div>
						<div class="mb-2 ms-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu dropdown-menu-end p-3">
									<li>
										<a onclick="exportAsPDF()" class="dropdown-item rounded-1">
											<i class="ti ti-file-type-pdf me-1"></i>Export as PDF
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Schedule Timing List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" id="dateRange">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Name</th>
										<th>Role</th>
										<th>User Available Timings</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $userId => $user) { ?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center file-name-icon">
													<a href="#" class="avatar avatar-md border avatar-rounded">
														<img src="<?= htmlspecialchars($user['profile']) ?>" class="img-fluid" alt="img">
													</a>
													<div class="ms-2">
														<h6 class="fw-medium"><a href="#"><?= htmlspecialchars($user['name']) ?></a></h6>
													</div>
												</div>
											</td>
											<td><?= htmlspecialchars($user['role_name']) ?></td>
											<td>
												<div>
													<?php foreach ($user['shifts'] as $shift) { ?>
														<p class="mb-0">
															<?= date("d-m-Y", strtotime($shift['week_start'])) ?> -
															<?= htmlspecialchars($shift['week_end']) ?>
															<br>
															<?= htmlspecialchars($shift['start_time']) ?> -
															<?= htmlspecialchars($shift['end_time']) ?>
														</p>
													<?php } ?>
												</div>
											</td>
											<td>
												<div>
													<a href="#" class="btn btn-dark" onclick="getDelete(<?= htmlspecialchars($user['roster_id']) ?>)">
														Delete
													</a>
												</div>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->
		<!-- Add Employee -->
		<div class="modal fade" id="create_roster">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Create Roster</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="createRoster">
						<input type="hidden" name="type" value="createRoster">
						<div class="modal-body pb-0 ">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee</label>
										<select class="select2" name="user_id[]" multiple required>
											<option>Select</option>
											<?php foreach ($employee as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . ' (' . $value['role'] . ')</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Shift</label>
										<select class="select" name="shift_id" required>
											<option>Select</option>
											<?php foreach ($shifts as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Week Start Date <span class="text-danger">
												*</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy" name="start_date" required>
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Week End Date<span class="text-danger">
												*</span></label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy" name="end_date" required>
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2"
								data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>

					</form>
				</div>
			</div>
		</div>
		<!-- /Add Employee -->

	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<script>
		$('#createRoster').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/shiftApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);

				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});


		function getDelete(id) {
			$.ajax({
				url: 'settings/api/shiftApi.php',
				type: 'GET',
				data: {
					type: 'deleteRoster',
					id: id
				},
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		$('#dateRange').change(() => {
			filterTable();
		});

		function filterTable() {
			var dateRange = $('#dateRange').val();
			$.ajax({
				url: 'settings/api/shiftApi.php',
				method: 'POST',
				data: {
					dateRange: dateRange,
					type: 'FilterRoster',
				},
				success: function(response) {
					$('.datatable').DataTable().destroy();
					$('tbody').html(response);
					$('.datatable').DataTable();
				},
				error: function() {
					alert('Error fetching data.');
				},
			});
		}

		function exportAsPDF() {
			window.print();
		}
	</script>
</body>

</html>