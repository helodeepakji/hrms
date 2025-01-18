<?php

include 'layouts/session.php';
$sql = $conn->prepare('
    SELECT 
        `attendance`.*, 
        `users`.`name` AS `user_name`, 
        `users`.`employee_id`, 
        `role`.`name` AS `role_name`
    FROM 
        `attendance`
    JOIN 
        `users` ON `attendance`.`user_id` = `users`.`id`
    JOIN 
        `role` ON `users`.`role_id` = `role`.`id`
	 WHERE 
        `attendance`.`date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
    ORDER BY 
        `attendance`.`date` DESC
');
$sql->execute();
$attendance = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Smarthr Admin Template</title>
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
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="attendance-admin.php" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-brand-days-counter"></i></a>
								<a href="attendance-admin.php" class="btn btn-icon btn-sm"><i class="ti ti-calendar-event"></i></a>
							</div>
						</div>
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
							<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#attendance_report"><i class="ti ti-file-analytics me-2"></i>Report</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
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
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Present</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Absent</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th>Date</th>
										<th>Name</th>
										<th>Check In</th>
										<th>Check Out</th>
										<th>Shift</th>
										<th>Working Hours</th>
										<th>Production Hours</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($attendance as $key => $value) {
									?>
									<tr>
										<td>
											<?php echo date('d M, Y',strtotime($value['date'])) ?>
										</td>
										
										<td>
										<?php echo $value['user_name'] ?>
										<br>
											<span class="badge badge-success-transparent d-inline-flex align-items-center">
											<?php echo ucfirst($value['role_name']) ?>
											</span>
											<?php if($value['not_allowed'] == 1){
												echo '<span class="badge badge-danger-transparent d-inline-flex align-items-center">Absent</span>';
											} ?>
											
											
										</td>
										<td><?php echo date('h:i A',strtotime($value['clock_in_time'])) ?></td>
										<td>
										<?php echo date('h:i A',strtotime($value['clock_out_time'])) ?>
										</td>
										<td>30 Min</td>
										<td>20 Min</td>
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
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Attendance Report -->
		<div class="modal fade" id="attendance_report">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Attendance</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="card shadow-none bg-transparent-light">
							<div class="card-body pb-1">
								<div class="row">
									<div class="col-sm-3">
										<div class="mb-3">
											<span>Date</span>
											<p class="text-gray-9 fw-medium">15 Apr 2025</p>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="mb-3">
											<span>Punch in at</span>
											<p class="text-gray-9 fw-medium">09:00 AM</p>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="mb-3">
											<span>Punch out at</span>
											<p class="text-gray-9 fw-medium">06:45 PM</p>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="mb-3">
											<span>Status</span>
											<p class="text-gray-9 fw-medium">Present</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card shadow-none border mb-0">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3">
										<div class="mb-4">
											<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-dark-transparent me-1"></i>Total Working hours</p>
											<h3>12h 36m</h3>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="mb-4">
											<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-success me-1"></i>Productive Hours</p>
											<h3>08h 36m</h3>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="mb-4">
											<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-warning me-1"></i>Break hours</p>
											<h3>22m 15s</h3>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="mb-4">
											<p class="d-flex align-items-center mb-1"><i class="ti ti-point-filled text-info me-1"></i>Overtime</p>
											<h3>02h 15m</h3>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 mx-auto">
										<div class="progress bg-transparent-dark mb-3" style="height: 24px;">
											<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 18%;"></div>
											<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
											<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 28%;"></div>
											<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 17%;"></div>
											<div class="progress-bar bg-success rounded me-2" role="progressbar" style="width: 22%;"></div>
											<div class="progress-bar bg-warning rounded me-2" role="progressbar" style="width: 5%;"></div>
											<div class="progress-bar bg-info rounded me-2" role="progressbar" style="width: 3%;"></div>
											<div class="progress-bar bg-info rounded" role="progressbar" style="width: 2%;"></div>
										</div>

									</div>
									<div class="co-md-12">
										<div class="d-flex align-items-center justify-content-between">
											<span class="fs-10">06:00</span>
											<span class="fs-10">07:00</span>
											<span class="fs-10">08:00</span>
											<span class="fs-10">09:00</span>
											<span class="fs-10">10:00</span>
											<span class="fs-10">11:00</span>
											<span class="fs-10">12:00</span>
											<span class="fs-10">01:00</span>
											<span class="fs-10">02:00</span>
											<span class="fs-10">03:00</span>
											<span class="fs-10">04:00</span>
											<span class="fs-10">05:00</span>
											<span class="fs-10">06:00</span>
											<span class="fs-10">07:00</span>
											<span class="fs-10">08:00</span>
											<span class="fs-10">09:00</span>
											<span class="fs-10">10:00</span>
											<span class="fs-10">11:00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Attendance Report -->


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script src="assets/js/circle-progress.js"></script>
</body>

</html>