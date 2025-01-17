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
						<h2 class="mb-1">Clients</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Client List</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="clients.php" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
								<a href="clients-grid.php" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_client" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Client</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Clients Info -->
				 <div class="row">
					<div class="col-xl-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="p-2 br-10 bg-pink-transparent border border-pink d-flex align-items-center justify-content-center">
												<i class="ti ti-users-group text-pink fs-18"></i>
											</span>
										</div>
										<div>
											<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Total Clients</p>
											<h4>300</h4>
										</div>
									</div>
									<span class="badge bg-transparent-purple d-inline-flex align-items-center fw-normal">
										<i class="ti ti-arrow-wave-right-down me-1"></i>
										+19.01%
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="p-2 br-10 bg-success-transparent border border-success d-flex align-items-center justify-content-center">
												<i class="ti ti-user-share fs-18"></i>
											</span>
										</div>
										<div>
											<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Active Clients</p>
											<h4>270</h4>
										</div>
									</div>
									<span class="badge bg-transparent-primary text-primary d-inline-flex align-items-center fw-normal">
										<i class="ti ti-arrow-wave-right-down me-1"></i>
										+19.01%
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="p-2 br-10 bg-danger-transparent border border-danger d-flex align-items-center justify-content-center">
												<i class="ti ti-user-pause fs-18"></i>
											</span>
										</div>
										<div>
											<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Inactive Clients</p>
											<h4>30</h4>
										</div>
									</div>
									<span class="badge bg-transparent-dark text-dark d-inline-flex align-items-center fw-normal">
										<i class="ti ti-arrow-wave-right-down me-1"></i>
										+19.01%
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center">
										<div class="flex-shrink-0 me-2">
											<span class="p-2 br-10 bg-info-transparent border border-info d-flex align-items-center justify-content-center">
												<i class="ti ti-user-plus fs-18"></i>
											</span>
										</div>
										<div>
											<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">New Clients</p>
											<h4>300</h4>
										</div>
									</div>
									<span class="badge bg-transparent-secondary text-dark d-inline-flex align-items-center fw-normal">
										<i class="ti ti-arrow-wave-right-down me-1"></i>
										+19.01%
									</span>
								</div>
							</div>
						</div>
					</div>
				 </div>
				 <!-- /Clients Info -->

				<!-- Clients list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Client List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
										<th>Client ID</th>
										<th>Client Name</th>
										<th>Company Name</th>
										<th>Email</th>
										<th>Phone</th>
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
										<td><a href="client-details.php">Cli-001</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-39.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Michael Walker</a></h6>
													<span class="fs-12 fw-normal ">CEO</span>
												</div>
											</div>
										</td>
										<td>BrightWave Innovations</td>
										<td>
											michael@example.com
										</td>
										<td>
											(163) 2459 315
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-002</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-40.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Sophie Headrick</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>
										<td>Stellar Dynamics</td>
										<td>
											sophie@example.com
										</td>
										<td>
											(146) 1249 296
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-003</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-41.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Cameron Drake</a></h6>
													<span class="fs-12 fw-normal ">Director</span>
												</div>
											</div>
										</td>
										<td>Quantum Nexus</td>
										<td>
											cameron@example.com
										</td>
										<td>
											(135) 3489 516
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-004</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-42.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Doris Crowley</a></h6>
													<span class="fs-12 fw-normal ">Consultant</span>
												</div>
											</div>
										</td>
										<td>EcoVision Enterprises</td>
										<td>
											doris@example.com
										</td>
										<td>
											(158) 3459 596
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-005</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-44.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Thomas Bordelon</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>
										<td>Aurora Technologies</td>
										<td>
											thomas@example.com
										</td>
										<td>
											(196) 4862 196
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-006</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-45.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Kathleen Gutierrez</a></h6>
													<span class="fs-12 fw-normal ">Director</span>
												</div>
											</div>
										</td>
										<td>BlueSky Ventures</td>
										<td>
											kathleen@example.com
										</td>
										<td>
											(163) 6498 256
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-007</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-46.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Bruce Wright</a></h6>
													<span class="fs-12 fw-normal ">CEO</span>
												</div>
											</div>
										</td>
										<td>TerraFusion Energy</td>
										<td>
											bruce@example.com
										</td>
										<td>
											(154) 6481 075
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-008</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-47.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Estelle Morgan</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>
										<td>UrbanPulse Design</td>
										<td>
											estelle@example.com
										</td>
										<td>
											(184) 6348 195
										</td>
										<td>
											<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Inactive
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-009</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-48.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Stephen Dias</a></h6>
													<span class="fs-12 fw-normal ">CEO</span>
												</div>
											</div>
										</td>
										<td>Nimbus Networks</td>
										<td>
											stephen@example.com	
										</td>
										<td>
											(175) 2496 125
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="client-details.php">Cli-010</a></td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="client-details.php" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-43.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="client-details.php">Angela Thomas</a></h6>
													<span class="fs-12 fw-normal ">Consultant</span>
												</div>
											</div>
										</td>
										<td>Epicurean Delights</td>
										<td>
											angela@example.com
										</td>
										<td>
											(132) 3145 977
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Clients list -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Client -->
		<div class="modal fade" id="add_client">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Client</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="clients.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Permissions</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<i class="ti ti-photo"></i>
													</div>                                              
													<div class="profile-upload">
														<div class="mb-2">
															<h6 class="mb-1">Upload Profile Image</h6>
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
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">First Name <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="email" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email<span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control">
												</div>		
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Save </button>
									</div>
							</div>
							<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
								<div class="modal-body pb-0 ">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Enable Options</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-check-md form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Enable all Module
													</label>
												</div>
												<div class="form-check form-check-md d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Select All
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive permission-table border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Holidays
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Leaves
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Clients
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Projects
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Tasks
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Chats
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Assets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Timing Sheets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Save </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Client -->

		<!-- Edit Client -->
		<div class="modal fade" id="edit_client">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="clients.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab2" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Basic Information</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Permissions</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<i class="ti ti-photo"></i>
													</div>                                              
													<div class="profile-upload">
														<div class="mb-2">
															<h6 class="mb-1">Upload Profile Image</h6>
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
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">First Name <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Michael">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="email" class="form-control" value="Walker">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Michael Walker">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email<span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="michael@example.com">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control" value="1234">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control" value="1234">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="(163) 2459 315">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control" value="BrightWave Innovations">
												</div>		
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Save </button>
									</div>
							</div>
							<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
								<div class="modal-body pb-0 ">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Enable Options</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-check-md form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Enable all Module
													</label>
												</div>
												<div class="form-check form-check-md d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Select All
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive permission-table border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Holidays
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
															Leaves
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center" checked>
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Clients
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Projects
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Tasks
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Chats
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Assets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Timing Sheets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Save </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Client -->

		<!-- Add Client Success -->
		<div class="modal fade" id="success_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center p-3">
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Client Added Successfully</h5>
							<p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#CLT - 0024</span>
							</p>
							<div>
								<div class="row g-2">
									<div class="col-6">
										<a href="clients.php" class="btn btn-dark w-100">Back to List</a>
									</div>
									<div class="col-6">
										<a href="client-details.php" class="btn btn-primary w-100">Detail Page</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Client Success -->

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
							<a href="clients.php" class="btn btn-danger">Yes, Delete</a>
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