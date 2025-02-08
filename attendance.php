<?php

include 'layouts/session.php';

$page_name = 'attendance';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

$sql = $conn->prepare('
    SELECT 
        `attendance`.*, 
        `users`.`name` AS `user_name`, 
        `users`.`employee_id`, 
        `role`.`name` AS `role_name`,
		`shift`.`name` AS `shift_name`
    FROM 
        `attendance`
    JOIN 
        `users` ON `attendance`.`user_id` = `users`.`id`
    JOIN 
        `role` ON `users`.`role_id` = `role`.`id`
	LEFT JOIN
        `shift` ON `attendance`.`shift_id` = `shift`.`id`
	 WHERE 
        `attendance`.`date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
    ORDER BY 
        `attendance`.`date` DESC
');
$sql->execute();
$attendance = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT * FROM `role`");
$sql->execute();
$role = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>UniqueMaps Admin Template</title>
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>
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
						<h2 class="mb-1">Employee Attendance</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Employee Attendance</li>
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
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Employee Attendance</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input id="dateRange" type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="me-3">
								<select id="selectedStatus" class="form-select">
									<option value="">Select Status</option>
									<option value="present">Present</option>
									<option value="absent">Absent</option>
								</select>
							</div>
							<div class="me-3">
								<select id="selectedRole" class="form-select">
									<option value="">Select Role</option>
									<?php
									foreach ($role as $value) {
										echo '  <option value=' . $value['id'] . '>' . ucfirst(str_replace('_', ' ', $value['name'])) . '</option>';
									}
									?>

								</select>
							</div>

						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th>Sno.</th>
										<th>Date</th>
										<th>Name</th>
										<th>Check In</th>
										<th>Check Out</th>
										<th>Shift</th>
										<th>Taken / Task Time</th>
										<th>Production Hours</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 0;foreach ($attendance as $key => $value) {
										if ($value['clock_out_time'] != '') {
											$attendance_clock_out = date('h:i A', strtotime($value['clock_out_time']));
										} else {
											$attendance_clock_out = '';
										}


										if ($value['regularisation'] == 1) {
											$status = '<span class="text-danger" data-bs-toggle="modal" data-bs-target="#regularisation" onclick="addRegularisation(' . $value['id'] . ',\'' . $value['clock_out_time'] . '\')" style="cursor: pointer">Regularization Accept </span>';
										} else {
											$status = '';
										}

										if ($roleId != 1 && !(in_array('attendance-regulation', $pageAccessList))) {
											$status = '';
										}

										$eff = $conn->prepare("SELECT SUM(taken_time) as taken_time , SUM(total_time) as total_time FROM `efficiency` WHERE user_id = ? AND DATE(created_at) = ?");
										$eff->execute([$value['user_id'],$value['date'] ]);
										$eff = $eff->fetch(PDO::FETCH_ASSOC);

									?>
										<tr>
											<td>
												<?php echo ++$i; ?>
											</td>
											<td>
												<?php echo date('d M, Y', strtotime($value['date'])) ?>
											</td>

											<td>
												<?php echo $value['user_name'] ?>
												<br>
												<span class="badge badge-success-transparent d-inline-flex align-items-center">
													<?php echo ucfirst($value['role_name']) ?>
												</span>
												<?php if ($value['not_allowed'] == 1) {
													echo '<span class="badge badge-danger-transparent d-inline-flex align-items-center">Absent</span>';
												} ?>


											</td>
											<td><?php echo date('h:i A', strtotime($value['clock_in_time'])) ?></td>
											<td>
												<?php echo $attendance_clock_out ?>
												<br>
												<?php echo $status ?>
											</td>
											<td><?php echo $value['shift_name'] ?></td>
											<td><?php echo round($eff['taken_time'],2) ?>Min / <?php echo round($eff['total_time'],2) ?>Min</td>
											<td>
												<span class="badge badge-success d-inline-flex align-items-center">
													<i class="ti ti-clock-hour-11 me-1"></i><?php echo $value['hours'] ?> Hrs
												</span>
											</td>
										</tr>
									<?php
									} ?>


								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<div class="modal fade" id="regularisation">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Accept Regularisation</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="addRegularisation">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Time</label>
                                        <input type="hidden" value="approveAttendance" name="type">
                                        <input type="time" class="form-control" id="clockout_time" name="clockout_time" required>
                                        <input type="hidden" name="id" id="attendance_id" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script src="assets/js/circle-progress.js"></script>
	<script>
		$('#addRegularisation').submit(function() {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/attendanceApi.php',
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

        
		function addRegularisation(id,time) {
            $('#attendance_id').val(id);
			$('#clockout_time').val(time);
        }

		$(document).ready(function() {
			// Handle date range input change
			$('#dateRange').on('change', function() {
				fetchFilteredData();
			});

			// Handle status filter click
			$('#selectedStatus').on('click', function() {
				fetchFilteredData();
			});

			$('#selectedRole').on('click', function() {
				fetchFilteredData();
			});

			// Fetch data based on filters
			function fetchFilteredData() {
				const dateRange = $('#dateRange').val();
				const status = $('#selectedStatus').val();
				const role = $('#selectedRole').val();

				$.ajax({
					url: 'settings/api/attendanceApi.php',
					method: 'POST',
					data: {
						dateRange: dateRange,
						status: status,
						role: role,
						type: 'filterAttandace',
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