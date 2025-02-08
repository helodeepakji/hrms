<?php include 'layouts/session.php'; ?>
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
						<h2 class="mb-1">Todo</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Application
								</li>
								<li class="breadcrumb-item active" aria-current="page">Todo</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="d-flex align-items-center border rounded p-1 me-2">
							<a href="todo-list.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-list-tree"></i></a>
							<a href="todo.php" class="btn btn-icon btn-sm"><i class="ti ti-table"></i></a>
						</div>
						<div class="">
							<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_todo"><i class="ti ti-circle-plus me-2"></i>Create New</a>
						</div>
						<div class="ms-2 mb-0 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5 class="d-flex align-items-center">Todo Lists <span class="badge bg-soft-pink ms-2">200 Employees</span></h5>
						<div class="d-flex align-items-center flex-wrap row-gap-3">
							<div class="input-icon-start me-2 position-relative">
								<span class="icon-addon">
									<i class="ti ti-calendar"></i>
								</span>
								<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
							</div>
							<div class="input-icon position-relative w-120 me-2">
								<span class="input-icon-addon">
									<i class="ti ti-calendar"></i>
								</span>
								<input type="text" class="form-control datetimepicker" placeholder="Due Date">
							</div>
							<div class="dropdown me-2">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									 Tags
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">All Tags</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Urgent</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">High</a>
									</li>
									<li>	
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Medium</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-2">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Assignee
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Sophie</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Cameron</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Doris</a>
									</li>
									<li>	
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Rufana</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-2">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Inprogress</a>
									</li>
									<li>	
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Onhold</a>
									</li>
								</ul>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center fs-12" data-bs-toggle="dropdown">
									<span class="fs-12 d-inline-flex me-1">Sort By : </span>
									Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 1 month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 1 year</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0">

						<!-- Student List -->
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Company Name</th>
										<th>Tags</th>
										<th>Assignee</th>
										<th>Created On</th>
										<th>Progress</th>
										<th>Due Date</th>
										<th>Status</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-danger me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Respond to any pending messages</p>
										</td>
										<td>
											<span class="badge badge-info">Social</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>14 Jan 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 100%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>14 Jan 2024</td>
										<td>
											<span class="badge badge-soft-success d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Completed
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star-filled filled"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-purple me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Update calendar and schedule</p>
										</td>
										<td>
											<span class="badge badge-purple">Meetings</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>21 Jan 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 15%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 15%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>21 Jan 2024</td>
										<td>
											<span class="badge badge-soft-dark d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Pending
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-purple me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Respond to any pending messages</p>
										</td>
										<td>
											<span class="badge bg-pink">Research</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-06.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>20 Feb 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 45%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 45%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>20 Feb 2024</td>
										<td>
											<span class="badge bg-transparent-purple d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Inprogress
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-warning me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Attend team meeting at 10:00 AM</p>
										</td>
										<td>
											<span class="badge bg-skyblue">Web Design</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-06.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-07.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>15 Mar 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 40%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-warning rounded" role="progressbar" style="width: 40%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>15 Mar 2024</td>
										<td>
											<span class="badge bg-transparent-purple d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Inprogress
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-purple me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Check and respond to emails</p>
										</td>
										<td>
											<span class="badge badge-secondary">Reminder</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-08.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>12 Apr 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 65%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-purple rounded" role="progressbar" style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>12 Apr 2024</td>
										<td>
											<span class="badge badge-soft-dark d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Pending
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-warning me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Coordinate with department head</p>
										</td>
										<td>
											<span class="badge badge-danger">Internal</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>20 Apr 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 85%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-pink rounded" role="progressbar" style="width: 85%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>20 Apr 2024</td>
										<td>
											<span class="badge bg-soft-pink d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Onhold
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-success me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Plan tasks for the next day</p>
										</td>
										<td>
											<span class="badge badge-info">Social</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>06 Jul 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 100%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-success rounded" role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>06 Jul 2024</td>
										<td>
											<span class="badge badge-soft-success d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Completed
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-success me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Finalize project proposal</p>
										</td>
										<td>
											<span class="badge badge-success">Projects</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>02 Sep 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 65%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-danger rounded" role="progressbar" style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>02 Sep 2024</td>
										<td>
											<span class="badge bg-soft-pink d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Onhold
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-purple me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Submit to supervisor by EOD</p>
										</td>
										<td>
											<span class="badge badge-secondary">Reminder</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>15 Nov 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 75%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-purple rounded" role="progressbar" style="width: 75%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>15 Nov 2024</td>
										<td>
											<span class="badge bg-transparent-purple d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Inprogress
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
												<span class="mx-2 d-flex align-items-center rating-select"><i class="ti ti-star"></i></span>
												<span class="d-flex align-items-center"><i class="ti ti-square-rounded text-success me-2"></i></span>
											</div>
										</td>
										<td>
											<p class="fw-medium text-dark">Prepare presentation slides</p>
										</td>
										<td>
											<span class="badge bg-pink">Research</span>
										</td>
										<td>
											<div class="avatar-list-stacked avatar-group-sm">
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
												</span>
												<span class="avatar avatar-rounded">
													<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
												</span>
											</div>
										</td>
										<td>10 Dec 2024</td>
										<td>
											<span class="d-block mb-1">Progress : 90%</span>
											<div class="progress progress-xs flex-grow-1 mb-2" style="width: 190px;">
												<div class="progress-bar bg-pink rounded" role="progressbar" style="width: 90%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
										<td>10 Dec 2024</td>
										<td>
											<span class="badge badge-soft-dark d-inline-flex align-items-center">
												<i class="ti ti-circle-filled fs-5 me-1"></i>
												Pending
											</span>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edit_todo">
													<i class="ti ti-edit"></i>
												</a>
												<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal">
													<i class="ti ti-trash"></i>
												</a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /Student List -->
					</div>
				</div>
			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="#" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Todo -->
		<div class="modal fade" id="add_todo">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Todo</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="todo.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Todo Title</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<select class="select">
											<option>Select</option>
											<option>Internal</option>
											<option>Projects</option>
											<option>Meetings</option>
											<option>Reminder</option>
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option>Medium</option>
											<option>High</option>
											<option>Low</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3 summer-description-box notes-summernote">
										<label class="form-label">Descriptions</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Add Assignee</label>
										<select class="select">
											<option>Select</option>
											<option>Sophie</option>
											<option>Cameron</option>
											<option>Doris</option>
											<option>Rufana</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-0">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Completed</option>
											<option>Pending</option>
											<option>Onhold</option>
											<option>Inprogress</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add New Todo</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Todo -->

		<!-- Edit Todo -->
		<div class="modal fade" id="edit_todo">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Todo</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="todo.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Todo Title</label>
										<input type="text" class="form-control" value="Update calendar and schedule">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<select class="select">
											<option>Select</option>
											<option selected>Internal</option>
											<option>Projects</option>
											<option>Meetings</option>
											<option>Reminder</option>
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option>Medium</option>
											<option selected>High</option>
											<option>Low</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3 summer-description-box notes-summernote">
										<label class="form-label">Descriptions</label>
										<div class="summernote"></div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Add Assignee</label>
										<select class="select">
											<option>Select</option>
											<option selected>Sophie</option>
											<option>Cameron</option>
											<option>Doris</option>
											<option>Rufana</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-0">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Completed</option>
											<option>Pending</option>
											<option>Onhold</option>
											<option>Inprogress</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Todo -->

		<!-- Todo Details -->
		<div class="modal fade" id="view_todo">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content border-0">
					<div class="modal-header bg-dark">
						<h4 class="modal-title text-white">Respond to any pending messages</h4>
						<span class="badge badge-danger d-inline-flex align-items-center"><i class="ti ti-square me-1"></i>Urgent</span>
						<span><i class="ti ti-star-filled text-warning"></i></span>
						<a href="#"><i class="ti ti-trash text-white"></i></a>
						<button type="button" class="btn-close custom-btn-close bg-transparent fs-16 text-white position-static" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="mb-2">Task Details</h5>
						<div class="border rounded mb-3 p-2">
							<div class="row row-gap-3">
								<div class="col-md-4">
									<div class="text-center">
										<span class="d-block mb-1">Created On</span>
										<p class="text-dark">22 July 2025</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">
										<span class="d-block mb-1">Due Date</span>
										<p class="text-dark">22 July 2025</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="text-center">
										<span class="d-block mb-1">Status</span>
										<span class="badge badge-soft-success align-items-center justify-content-center">
											<i class="fas fa-circle fs-6 me-1"></i>Completed
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<h5 class="mb-2">Description</h5>
							<p>Hiking is a long, vigorous walk, usually on trails or footpaths in 
								the countryside. Walking for pleasure developed in Europe during the eighteenth century. 
								Religious pilgrimages have existed much longer but they involve walking long distances for a 
								spiritual purpose associated with specific 
								religions and also we achieve inner peace while we hike at a local park.
							</p>
						</div>
						<div class="mb-3">
							<h5 class="mb-2">Tags</h5>
							<div class="d-flex align-items-center">
								<span class="badge badge-danger me-2">Internal</span>
								<span class="badge badge-success me-2">Projects</span>
								<span class="badge badge-secondary">Reminder</span>
							</div>
						</div>
						<div>
							<h5 class="mb-2">Assignee</h5>
							<div class="avatar-list-stacked avatar-group-sm">
								<span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
								</span>
								<span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
								</span>
								<span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Todo Details -->

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
							<a href="todo-list.php" class="btn btn-danger">Yes, Delete</a>
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
<script src="assets/js/todo.js"></script>
</body>
</html>