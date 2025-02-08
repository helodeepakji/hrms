<?php include 'layouts/session.php';

$page_name = 'total-efficiency';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}
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
						<h2 class="mb-1">Total Efficiency</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Performance
								</li>
								<li class="breadcrumb-item active" aria-current="page">Total Efficiency</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Performance Indicator list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Total Efficiency List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input id="dateRange" type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
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
										<th>Designation</th>
										<th>Department</th>
										<th>Appraisal Date</th>
										<th>Status</th>
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
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-32.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
												</div>
											</div>
										</td>
										<td>Web Designer</td>
										<td>
											Designing
										</td>
										<td>
											14 Jan 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance_appraisal"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Brian Villalobos</a></h6>
												</div>
											</div>
										</td>
										<td>Web Developer</td>
										<td>
											Developer
										</td>
										<td>
											21 Jan 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance_appraisal"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-01.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
												</div>
											</div>
										</td>
										<td>IOS Developer</td>
										<td>
											Developer
										</td>
										<td>
											18 Feb 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance_appraisal"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
												</div>
											</div>
										</td>
										<td>Android Developer</td>
										<td>
											Developer
										</td>
										<td>
											24 Feb 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance_appraisal"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
												</div>
											</div>
										</td>
										<td>DevOps Engineer</td>
										<td>
											DevOps
										</td>
										<td>
											11 Mar 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance_appraisal"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Performance Indicator list -->

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Appraisal -->
		<div class="modal fade" id="add_performance_appraisal">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Appraisal</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="performance-appraisal.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee</label>
										<select class="select">
											<option>Select</option>
											<option>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Appraisal Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<ul class="nav appraisal-tab nav-pills mb-3" id="pills-tab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link border   active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#technical" type="button" role="tab" aria-selected="true">Technical</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link border" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#organization" type="button" role="tab" aria-selected="false">Organizational</button>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<div class="tab-content appraisal-tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active" id="technical" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
											<div class="card">
												<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
													<h5>Technical Competencies</h5>
												</div>
												<div class="card-body p-0">
													<div class="table-responsive">
														<table class="table ">
															<thead class="thead-light">
																<tr>
																	<th>Indicator</th>
																	<th>Expected Value</th>
																	<th>Set Value</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Customer Experience
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Marketing
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Management
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Administration
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Presentation Skill
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Quality Of Work
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Efficiency
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="organization" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
											<div class="card">
												<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
													<h5>Organizational Competencies</h5>
												</div>
												<div class="card-body p-0">
													<div class="table-responsive">
														<table class="table ">
															<thead class="thead-light">
																<tr>
																	<th>Indicator</th>
																	<th>Expected Value</th>
																	<th>Set Value</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Integrity
																	</td>
																	<td>
																		Beginner
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Professionalism
																	</td>
																	<td>
																		Beginner
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Team Work
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Critical Thinking
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Conflict Management
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Attendance
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Ability To Meet Deadline
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Appraisal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Appraisal -->

		<!-- Edit  Appraisal -->
		<div class="modal fade" id="edit_performance_appraisal">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Appraisal</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="performance-appraisal.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Employee</label>
										<select class="select">
											<option>Select</option>
											<option selected>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Appraisal Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<ul class="nav appraisal-tab nav-pills mb-3" id="pills-tab2" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link border   active" id="pills-home-tab2" data-bs-toggle="pill" data-bs-target="#edit_technical" type="button" role="tab" aria-selected="true">Technical</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link border" id="pills-profile-tab2" data-bs-toggle="pill" data-bs-target="#edit_organization" type="button" role="tab" aria-selected="false">Organizational</button>
										</li>
									</ul>
								</div>
								<div class="col-md-12">
									<div class="tab-content appraisal-tab-content" id="pills-tabContent2">
										<div class="tab-pane fade show active" id="edit_technical" role="tabpanel" aria-labelledby="pills-home-tab2" tabindex="0">
											<div class="card">
												<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
													<h5>Technical Competencies</h5>
												</div>
												<div class="card-body p-0">
													<div class="table-responsive">
														<table class="table ">
															<thead class="thead-light">
																<tr>
																	<th>Indicator</th>
																	<th>Expected Value</th>
																	<th>Set Value</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Customer Experience
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Marketing
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Management
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Administration
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Presentation Skill
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Quality Of Work
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Efficiency
																	</td>
																	<td>
																		Expert / Leader
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="edit_organization" role="tabpanel" aria-labelledby="pills-profile-tab2" tabindex="0">
											<div class="card">
												<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
													<h5>Organizational Competencies</h5>
												</div>
												<div class="card-body p-0">
													<div class="table-responsive">
														<table class="table ">
															<thead class="thead-light">
																<tr>
																	<th>Indicator</th>
																	<th>Expected Value</th>
																	<th>Set Value</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Integrity
																	</td>
																	<td>
																		Beginner
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Professionalism
																	</td>
																	<td>
																		Beginner
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Team Work
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Critical Thinking
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Conflict Management
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Attendance
																	</td>
																	<td>
																		Intermediate
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>
																		Ability To Meet Deadline
																	</td>
																	<td>
																		Advanced
																	</td>
																	<td>
																		<select class="select">
																			<option>None</option>
																			<option> Beginner</option>
																			<option> Intermediate</option>
																			<option> Advanced</option>
																			<option> Expert / Leader</option>
																		</select>
																	</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Appraisal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit  Appraisal -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Delete</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="performance-appraisal.php" class="btn btn-danger">Yes, Delete</a>
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

</body>

</html>