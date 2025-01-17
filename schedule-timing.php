<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
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
                        <div class="mb-2">
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
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
                            <div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
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
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Name</th>
										<th>Job Title</th>
										<th>User Available Timings</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-32.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
												</div>
											</div>
										</td>
                                        <td>Accountant</td>
                                        <td>
                                            <div>
                                                <p class="mb-0">11-03-2020 - 11:00 AM-12:00 PM</p>
                                                <p class="mb-0">12-03-2020 - 10:00 AM-11:00 AM</p>
                                                <p class="mb-0">01-01-1970 - 10:00 AM-11:00 AM</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#schedule_timing" class="btn btn-dark">Schedule Timing</a>
                                            </div>
                                        </td>
									</tr>
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Brian Villalobos</a></h6>
												</div>
											</div>
										</td>
                                        <td>Accountant</td>
                                        <td>
                                            <div>
                                                <p class="mb-0">11-03-2020 - 11:00 AM-12:00 PM</p>
                                                <p class="mb-0">12-03-2020 - 10:00 AM-11:00 AM</p>
                                                <p class="mb-0">01-01-1970 - 10:00 AM-11:00 AM</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#schedule_timing" class="btn btn-dark">Schedule Timing</a>
                                            </div>
                                        </td>
									</tr>
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-01.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
												</div>
											</div>
										</td>
                                        <td>Accountant</td>
                                        <td>
                                            <div>
                                                <p class="mb-0">11-03-2020 - 11:00 AM-12:00 PM</p>
                                                <p class="mb-0">12-03-2020 - 10:00 AM-11:00 AM</p>
                                                <p class="mb-0">01-01-1970 - 10:00 AM-11:00 AM</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#schedule_timing" class="btn btn-dark">Schedule Timing</a>
                                            </div>
                                        </td>
									</tr>
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

		<!-- Add Schedule Modal -->
		<div id="schedule_timing" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Schedule</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="row">
								<div class="col-sm-6">
									<div class="input-block mb-3">
										<label class="col-form-label">Department <span class="text-danger">*</span></label>
										<select class="select">
											<option value="">Select</option>
											<option value="">Development</option>
											<option value="1">Finance</option>
											<option value="2">Finance and Management</option>
											<option value="3">Hr & Finance</option>
											<option value="4">ITech</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-block mb-3">
										<label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
										<select class="select">
											<option value="">Select </option>
											<option value="1">Richard Miles </option>
											<option value="2">John Smith</option>
											<option value="3">Mike Litorus </option>
											<option value="4">Wilmer Deluna</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-block mb-3">
										<label class="col-form-label">Date</label>
										<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="input-block mb-3">
										<label class="col-form-label">Shifts <span class="text-danger">*</span></label>
										<select class="select">
											<option value="">Select </option>
											<option value="1">10'o clock Shift</option>
											<option value="2">10:30 shift</option>
											<option value="3">Daily Shift </option>
											<option value="4">New Shift</option>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">End Time   <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
										<div class="input-group time">
											<input class="form-control timepicker"><span class="input-group-text"><i class="fa-regular fa-clock"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="input-block mb-3">
										<label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
										<input class="form-control timepicker" type="text">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-block mb-3">
										<label class="col-form-label">Accept Extra Hours </label>
										<div class="form-check form-switch">
											<input type="checkbox" class="form-check-input" id="customSwitch1" checked="">
											<label class="form-check-label" for="customSwitch1"></label>
										  </div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input-block mb-3">
										<label class="col-form-label">Publish </label>
										<div class="form-check form-switch">
											<input type="checkbox" class="form-check-input" id="customSwitch2" checked="">
											<label class="form-check-label" for="customSwitch2"></label>
										  </div>
									</div>
								</div>
							</div>
						
							<div class="submit-section">
								<button class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Schedule Modal -->
    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>