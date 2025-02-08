<?php include 'layouts/session.php';

$leave_type = $conn->prepare("SELECT * FROM `leave_type`");
$leave_type->execute();
$leave_type = $leave_type->fetchAll(PDO::FETCH_ASSOC);

$leaves = $conn->prepare("
    SELECT leaves.*, users.name AS user_name, role.name AS role_name , leave_type.leave_name
    FROM leaves
    JOIN users ON users.id = leaves.user_id
	JOIN leave_type ON leave_type.id = leaves.leave_type
    JOIN role ON role.id = users.role_id WHERE `leaves`.`user_id` = ?
	AND DATE(`leaves`.`created_at`) >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
    ORDER BY leaves.created_at DESC
");
$leaves->execute([$userId]);
$leaves = $leaves->fetchAll(PDO::FETCH_ASSOC);


$Casual = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = 1 AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
$Casual->execute([$userId]);
$Casual = $Casual->fetch(PDO::FETCH_ASSOC);

$Sick = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = 2 AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
$Sick->execute([$userId]);
$Sick = $Sick->fetch(PDO::FETCH_ASSOC);

$Privilege = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = 3 AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
$Privilege->execute([$userId]);
$Privilege = $Privilege->fetch(PDO::FETCH_ASSOC);

$Bonus = $conn->prepare("SELECT balance FROM `user_leave_balances` WHERE leave_type_id = 4 AND `year` = YEAR(CURDATE()) AND `user_id` = ?");
$Bonus->execute([$userId]);
$Bonus = $Bonus->fetch(PDO::FETCH_ASSOC);

$usepl = $conn->prepare("SELECT SUM(`use`) as use_pl FROM `leaves` WHERE leave_type = 'Privilege Leave' AND `user_id` = ? AND YEAR(form_date) = YEAR(CURDATE()) AND `status` = 'approve'");
$usepl->execute([$userId]);
$usepl = $usepl->fetch(PDO::FETCH_ASSOC);

$usecl = $conn->prepare("SELECT SUM(`use`) as use_cl FROM `leaves` WHERE leave_type = 'Casual Leave' AND `user_id` = ?  AND YEAR(form_date) = YEAR(CURDATE()) AND `status` = 'approve'");
$usecl->execute([$userId]);
$usecl = $usecl->fetch(PDO::FETCH_ASSOC);

$usesl = $conn->prepare("SELECT SUM(`use`) as use_sl FROM `leaves` WHERE leave_type = 'Sick Leave' AND `user_id` = ?  AND YEAR(form_date) = YEAR(CURDATE()) AND `status` = 'approve'");
$usesl->execute([$userId]);
$usesl = $usesl->fetch(PDO::FETCH_ASSOC);

$uselb = $conn->prepare("SELECT SUM(`use`) as use_sl FROM `leaves` WHERE leave_type = 'Leave Bonus' AND `user_id` = ?  AND YEAR(form_date) = YEAR(CURDATE()) AND `status` = 'approve'");
$uselb->execute([$userId]);
$uselb = $uselb->fetch(PDO::FETCH_ASSOC);


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
						<h2 class="mb-1">Leaves</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Leaves</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Leaves Info -->
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card bg-green-img">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="avatar avatar-md rounded-circle bg-white d-flex align-items-center justify-content-center">
												<i class="ti ti-user-check text-success fs-18"></i>
											</span>
										</div>
									</div>
									<div class="text-end">
										<p class="mb-1">Casual Leave</p>
										<h4><?php echo $Casual['balance'] - $usecl['use_cl'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-pink-img">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="avatar avatar-md rounded-circle bg-white d-flex align-items-center justify-content-center">
												<i class="ti ti-user-edit text-pink fs-18"></i>
											</span>
										</div>
									</div>
									<div class="text-end">
										<p class="mb-1">Privilege Leave</p>
										<h4><?php echo $Privilege['balance'] - $usepl['use_pl'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-yellow-img">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="avatar avatar-md rounded-circle bg-white d-flex align-items-center justify-content-center">
												<i class="ti ti-user-exclamation text-warning fs-18"></i>
											</span>
										</div>
									</div>
									<div class="text-end">
										<p class="mb-1">Sick Leave</p>
										<h4><?php echo $Sick['balance'] - $usesl['use_sl'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="card bg-blue-img">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="avatar avatar-md rounded-circle bg-white d-flex align-items-center justify-content-center">
												<i class="ti ti-user-question text-info fs-18"></i>
											</span>
										</div>
									</div>
									<div class="text-end">
										<p class="mb-1">Leave Bonus</p>
										<h4><?php echo $Bonus['balance'] - $uselb['use_bl'] ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Leaves Info -->

				<!-- Leaves list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Leave List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" name="date" id="dateRange">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="me-3">
								<select id="leaveType" name="leaveType" class="form-select btn-sm btn-white">
									<option value="" selected>Select Leave Type</option>
									<?php
									foreach ($leave_type as $value) {
										echo '<option value="' . $value['id'] . '">' . $value['leave_name'] . '</option>';
									}
									?>
								</select>
							</div>

							<div class="me-3">
								<select id="selectedStatus" class="form-select">
									<option value="">Select Status</option>
									<option value="pending">Pending</option>
									<option value="approve">Approve</option>
									<option value="cancel">Cancel</option>
								</select>
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
										<th>Employee</th>
										<th>Leave Type</th>
										<th>From</th>
										<th>To</th>
										<th>No of Days</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($leaves as $value) {
										

										if ($value['approved_by'] != '') {
											$user = $conn->prepare("SELECT `name` FROM `users` WHERE `id` = ?");
											$user->execute([$value['approved_by']]);
											$user = $user->fetch(PDO::FETCH_ASSOC);
										}

										echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="' . ($value['profile'] ?? 'assets/img/users/user-32.jpg') . '" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">' . $value['user_name'] . '</a></h6>
													<span class="fs-12 fw-normal ">' . ucfirst($value['role_name']) . '</span>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">' . $value['leave_name'] . '</p>
											</div>
										</td>
										<td>
											' . date('d M, Y', strtotime($value['form_date'])) . '
										</td>
										<td>
											' . date('d M, Y', strtotime($value['end_date'])) . '
										</td>
										<td>
											' . (($value['leave_option'] == 'first_half' || $value['leave_option'] == 'second_half') 
											? 0.5 
											: calculateLeaveDays($value['form_date'], $value['end_date'], $conn)) . ' Days
											<br>
											Use Balance '.($value['use'] ?? 0).'
										</td>
										<td>
											<span  class="' . ($value['status'] == 'cancel' ? 'text-danger' : ($value['status'] == 'approve' ? 'text-success' : '')) . '">' . ucfirst($value['status']) . ' </span><br>
											'.$user['name'].'
										</td>
										
									</tr>';
									} ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Leaves list -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Leaves -->
		<div class="modal fade" id="add_leaves">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Leave</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="applyLeaves">
						<input type="hidden" value="applyLeaves" name="type">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select" name="leave_type">
											<option value="">Select</option>
											<?php foreach ($leave_type as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['leave_name'] . '</option>';
											} ?>
											<option value="unpaid">Unpaid Leave</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Leave Option</label>
										<select class="select" id="leave_option" name="leave_option">
											<option>Select</option>
											<option value="full_day">Full Day</option>
											<option value="first_half">First Half</option>
											<option value="second_half">Second Half</option>
										</select>
									</div>
								</div>
								<div id="full_day" class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">From </label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="start_date">
												<span class="input-icon-addon">
													<i class="ti ti-calendar text-gray-7"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">To </label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="end_date">
												<span class="input-icon-addon">
													<i class="ti ti-calendar text-gray-7"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div id="half_day" class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label class="form-label">Half Day </label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="date">
												<span class="input-icon-addon">
													<i class="ti ti-calendar text-gray-7"></i>
												</span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3" name="reason"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Leave</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Leaves -->

		<!-- Edit Leaves -->
		<div class="modal fade" id="edit_leaves">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Leave</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="leaves.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Employee Name</label>
										<select class="select">
											<option selected>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select">
											<option selected>Medical Leave</option>
											<option>Casual Leave</option>
											<option>Annual Leave</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">From </label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" value="14 Jan 24" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">To </label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" value="15/01/24" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" value="15/01/24" disabled>
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<select class="select">
											<option>Select</option>
											<option>Full DAy</option>
											<option selected>First Half</option>
											<option>Second Half</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No of Days</label>
										<input type="text" class="form-control" value="01" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Remaining Days</label>
										<input type="text" class="form-control" value="07" disabled>
									</div>
								</div>

								<div class="col-md-12">
									<div class="d-flex align-items-center mb-3">
										<div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option4" id="leave6">
											<label class="form-check-label" for="leave6">
												Full Day
											</label>
										</div>
										<div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option5" id="leave5">
											<label class="form-check-label" for="leave5">
												First Half
											</label>
										</div>
										<div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option6" id="leave4">
											<label class="form-check-label" for="leave4">
												Second Half
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"> Going to Hospital </textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Leaves -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Reject</h4>
						<p class="mb-3">You want to reject leave application, this cant be undone once you reject.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a id="delete-btn" class="btn btn-danger">Yes, Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->
	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<script>
		const fullDaySection = $('#full_day');
		const halfDaySection = $('#half_day');

		// Hide sections initially
		fullDaySection.hide();
		halfDaySection.hide();
		$('#leave_option').change(function() {
			const selectedOption = $(this).val();

			if (selectedOption === 'full_day') {
				fullDaySection.show(); // Show full day section
				halfDaySection.hide(); // Hide half day section
			} else if (selectedOption === 'first_half' || selectedOption === 'second_half') {
				fullDaySection.hide(); // Hide full day section
				halfDaySection.show(); // Show half day section
			} else {
				// If "Select" is chosen, hide both sections
				fullDaySection.hide();
				halfDaySection.hide();
			}
		});

		$('#applyLeaves').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/leaveApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$(document).ready(function() {
			// Handle date range input change
			$('#dateRange').on('change', function() {
				fetchFilteredData();
			});

			// Handle status filter click
			$('#leaveType').on('click', function() {
				fetchFilteredData();
			});


			$('#selectedStatus').on('click', function() {
				fetchFilteredData();
			});

			// Fetch data based on filters
			function fetchFilteredData() {
				const dateRange = $('#dateRange').val();
				const leaveType = $('#leaveType').val();
				const status = $('#selectedStatus').val();

				$.ajax({
					url: 'settings/api/leaveApi.php',
					method: 'POST',
					data: {
						dateRange: dateRange,
						leave_type: leaveType,
						status: status,
						type: 'myFilterLeave',
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
		});
	</script>
</body>

</html>