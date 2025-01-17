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
						<h2 class="mb-1">Projects</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Projects</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="projects.php" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
								<a href="projects-grid.php" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_project" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Project</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Project list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Project List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
									</li>
								</ul>
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
										<th>Project ID</th>
										<th>Project Name</th>
										<th>Leader</th>
										<th>Team</th>
										<th>Deadline</th>
										<th>Priority</th>
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
										<td><a href="project-details.php">PRO-001</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Office Management App</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-39.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Michael Walker</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+1
												</a>
											</div>
										</td>
										<td>
											12 Sep 2024           
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> High
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-002</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Clinic Management</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Brian Villalobos</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-06.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-07.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-08.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+1
												</a>
											</div>
										</td>
										<td>
											24 Oct 2024    
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Low
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-003</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Educational Platform</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-01.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Harvey Smith</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+1
												</a>
											</div>
										</td>
										<td>
											18 Feb 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span> Medium
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-004</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Chat & Call  Mobile App</a> </h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Stephan Peralt</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+3
												</a>
											</div>
										</td>
										<td>
											17 Oct 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span> Medium
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-005</a></td>
										<td><h6 class="fw-medium"> <a href="project-details.php">Travel Planning Website</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Doglas Martini</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+2
												</a>
											</div>
										</td>
										<td>
											20 Jul 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span> Medium
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-006</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Service Booking Software</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-02.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Linda Ray</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+4
												</a>
											</div>
										</td>
										<td>
											10 Apr 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> High
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-007</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Hotel Booking App</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-35.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Elliot Murray</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+4
												</a>
											</div>
										</td>
										<td>
											10 Apr 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span> Medium
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-008</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Car & Bike Rental Software</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-36.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Rebecca Smtih</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-26.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+2
												</a>
											</div>
										</td>
										<td>
											22 Feb 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Low
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Inactive
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-009</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">Food Order App</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-37.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Connie Waters</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-27.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+3
												</a>
											</div>
										</td>
										<td>
											03 Nov 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span> Medium
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
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
										<td><a href="project-details.php">PRO-010</a></td>
										<td><h6 class="fw-medium"><a href="project-details.php">POS Admin Software</a></h6></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="assets/img/users/user-38.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">Lori Broaddus</a></h6>
												</div>
											</div>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
												</span>
												<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12 fw-medium" href="javascript:void(0);">
													+4
												</a>
											</div>
										</td>
										<td>
											17 Dec 2024
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> High
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>High</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-warning d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-warning"></i></span>Medium</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Low</a>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- / Project list  -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

<!-- Add Project -->
<div class="modal fade" id="add_project" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header header-border align-items-center justify-content-between">
				<div class="d-flex align-items-center">
					<h5 class="modal-title me-2">Add Project </h5>
					<p class="text-dark">Project ID : PRO-0004</p>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="add-info-fieldset ">
				<div class="contact-grids-tab p-3 pb-0">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
						  </li>
						  <li class="nav-item" role="presentation">
							<button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-selected="false">Members</button>
						  </li>
					</ul>
				</div>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
					<form action="projects.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<i class="ti ti-photo text-gray-2 fs-16"></i>
										</div>                                              
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Project Logo</h6>
												<p class="fs-12">Image should be below 4 mb</p>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" class="form-control image-sign" multiple="">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Project Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Client</label>
										<select class="select">
											<option>Select</option>
											<option>Anthony Lewis</option>
											<option>Brian Villalobos</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Start Date</label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">End Date</label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Priority</label>
												<select class="select">
													<option>Select</option>
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Project Value</label>
												<input type="text" class="form-control" value="$">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Price Type</label>
												<input type="text" class="form-control" value="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Description</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-block mb-0">
										<label class="form-label">Upload Files</label>
										<input class="form-control" type="file">
									</div>
								</div>
							</div>								
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end">
								<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>
					</div>
					<div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab" tabindex="0">
					<form action="projects.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Team Members</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Jerald,Andrew,Philip,Davis">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Team Leader</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Hendry,James">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Project Manager</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Dwight">
									</div>
								</div>
								<div class="col-md-12">
									<div>
										<label class="form-label">Tags</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab,Promotion,Rated">
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
							<div class="d-flex align-items-center justify-content-end">
								<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#success_modal">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- /Add Project -->

<!-- Edit Project -->
<div class="modal fade" id="edit_project" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header header-border align-items-center justify-content-between">
				<div class="d-flex align-items-center">
					<h5 class="modal-title me-2">Edit Project </h5>
					<p class="text-dark">Project ID : PRO-0004</p>
				</div>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="add-info-fieldset ">
				<div class="contact-grids-tab p-3 pb-0">
					<ul class="nav nav-underline" id="myTab1" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="basic-tab1" data-bs-toggle="tab" data-bs-target="#basic-info1" type="button" role="tab" aria-selected="true">Basic Information</button>
						  </li>
						  <li class="nav-item" role="presentation">
							<button class="nav-link" id="member-tab1" data-bs-toggle="tab" data-bs-target="#member1" type="button" role="tab" aria-selected="false">Members</button>
						  </li>
					</ul>
				</div>
					<div class="tab-content" id="myTabContent1">
						<div class="tab-pane fade show active" id="basic-info1" role="tabpanel" aria-labelledby="basic-tab1" tabindex="0">
					<form action="projects.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
										<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
											<i class="ti ti-photo text-gray-2 fs-16"></i>
										</div>                                              
										<div class="profile-upload">
											<div class="mb-2">
												<h6 class="mb-1">Upload Project Logo</h6>
												<p class="fs-12">Image should be below 4 mb</p>
											</div>
											<div class="profile-uploader d-flex align-items-center">
												<div class="drag-upload-btn btn btn-sm btn-primary me-2">
													Upload
													<input type="file" class="form-control image-sign" multiple="">
												</div>
												<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Project Name</label>
										<input type="text" class="form-control" value="Office Management">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Client</label>
										<select class="select">
											<option>Select</option>
											<option selected>Anthony Lewis</option>
											<option>Brian Villalobos</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Start Date</label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">End Date</label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024">
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Priority</label>
												<select class="select">
													<option>Select</option>
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Project Value</label>
												<input type="text" class="form-control" value="$">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Price Type</label>
												<input type="text" class="form-control" value="">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Description</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-block mb-0">
										<label class="form-label">Upload Files</label>
										<input class="form-control" type="file">
									</div>
								</div>
							</div>								
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end">
								<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
						</div>
					</form>
					</div>
					<div class="tab-pane fade" id="member1" role="tabpanel" aria-labelledby="member-tab1" tabindex="0">
					<form action="projects.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Team Members</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Jerald,Andrew,Philip,Davis">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Team Leader</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Hendry,James">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label me-2">Project Manager</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Dwight">
									</div>
								</div>
								<div class="col-md-12">
									<div>
										<label class="form-label">Tags</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab,Promotion,Rated">
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
							<div class="d-flex align-items-center justify-content-end">
								<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#success_modal">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- /Edit Project -->

<!-- Add Project Success -->
<div class="modal fade" id="success_modal" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center p-3">
					<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
					<h5 class="mb-2">Project  Added Successfully</h5>
					<p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#pro - 0004</span>
					</p>
					<div>
						<div class="row g-2">
							<div class="col-6">
								<a href="projects.php" class="btn btn-dark w-100">Back to List</a>
							</div>
							<div class="col-6">
								<a href="project-details.php" class="btn btn-primary w-100">Detail Page</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Add Project Success -->

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
					<a href="projects-grid.php" class="btn btn-danger">Yes, Delete</a>
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