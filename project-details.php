<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<!-- Fancybox CSS -->
<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
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

				<div class="row align-items-center mb-4">
					<div class="d-md-flex d-sm-block justify-content-between align-items-center flex-wrap">
						<h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="projects.php">
							<i class="ti ti-arrow-left me-2"></i>Back to List</a>
						</h6>
						<div class="d-flex">
							<div class="text-end">
								<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="ti ti-edit me-1"></i>Edit Project</a>
							</div>
							<div class="head-icons ms-2 text-end">
								<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
									<i class="ti ti-chevrons-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xxl-3 col-xl-4 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<h5 class="mb-3">Project Details</h5>
								<div class="list-group details-list-group mb-4">
									<div class="list-group-item">
										<span>Client</span>
										<p class="text-gray-9">EcoVision Enterprises</p>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Project Total Cost</span>
											<p class="text-gray-9">$1400</p>
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Hours of Work</span>
											<p class="text-gray-9">150 hrs</p>
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Created on</span>
											<p class="text-gray-9">14 Nov 2026</p>
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Started on</span>
											<p class="text-gray-9">15 Jan 2026</p>
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Due Date</span>
											<div class="d-flex align-items-center">
												<p class="text-gray-9 mb-0">15 Nov 2026</p>
												<span class="badge badge-danger d-inline-flex align-items-center ms-2"><i class="ti ti-clock-stop"></i>1</span>
											</div>
											
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Created by</span>
											<div class="d-flex align-items-center">
												<span class="avatar avatar-sm avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-02.jpg" alt="Img">
												</span>
												<p class="text-gray-9 mb-0">Cameron</p>
											</div>
											
										</div>
									</div>
									<div class="list-group-item">
										<div class="d-flex align-items-center justify-content-between">
											<span>Priority</span>
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
										</div>
									</div>
								</div>
								<h5 class="mb-3">Tasks Details</h5>
								<div class="bg-light p-2 rounded">
									<span class="d-block mb-1">Tasks Done</span>
									<h4 class="mb-2">0 / 0</h4>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar" role="progressbar"></div>						
									</div>
									<p>0% Completed</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-9 col-xl-8">
						<div class="card">
							<div class="card-body">
								<div class="bg-light rounded p-3 mb-3">
									<div class="d-flex align-items-center">
										<a href="project-details.php" class="flex-shrink-0 me-2">
											<img src="assets/img/social/project-01.svg" alt="Img">
										</a>
										<div>
											<h6 class="mb-1"><a href="project-details.php">Hospital Administration</a></h6>
											<p>Project ID : <span class="text-primary"> PRO-0004</span></p>
										</div>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-sm-3">
										<p class="d-flex align-items-center mb-3"><i class="ti ti-square-rounded me-2"></i>Status</p>
									</div>
									<div class="col-sm-9">
										<span class="badge badge-soft-purple d-inline-flex align-items-center mb-3"><i class="ti ti-point-filled me-1"></i>InProgress</span>
									</div>
									<div class="col-sm-3">
										<p class="d-flex align-items-center mb-3"><i class="ti ti-users-group me-2"></i>Team</p>
									</div>
									<div class="col-sm-9">
										<div class="d-flex align-items-center mb-3">
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/profiles/avatar-12.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Lewis</a></h6>
											</div>
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-19.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Leona</a></h6>
											</div>
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-33.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Pineiro</a></h6>
											</div>
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-37.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Moseley</a></h6>
											</div>
											<div>
												<a href="#" class="d-flex align-items-center fs-12"><i class="ti ti-circle-plus me-1"></i>Add New</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<p class="d-flex align-items-center mb-3"><i class="ti ti-user-shield me-2"></i>Team Lead</p>
									</div>
									<div class="col-sm-9">
										<div class="d-flex align-items-center mb-3">
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-42.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Ruth</a></h6>
											</div>
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-44.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Meredith</a></h6>
											</div>
											<div>
												<a href="#" class="d-flex align-items-center fs-12"><i class="ti ti-circle-plus me-1"></i>Add New</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<p class="d-flex align-items-center mb-3"><i class="ti ti-user-star me-2"></i>Project Manager</p>
									</div>
									<div class="col-sm-9">
										<div class="d-flex align-items-center mb-3">
											<div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
												<a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
													<img src="assets/img/users/user-45.jpg" alt="Img">
												</a>
												<h6 class="fs-12"><a href="#">Dwight</a></h6>
											</div>
											<div>
												<a href="#" class="d-flex align-items-center fs-12"><i class="ti ti-circle-plus me-1"></i>Add New</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<p class="d-flex align-items-center mb-3"><i class="ti ti-bookmark me-2"></i>Tags</p>
									</div>
									<div class="col-sm-9">
										<div class="d-flex align-items-center mb-3">
											<a href="#" class="badge task-tag bg-pink rounded-pill me-2">Admin Panel</a>
											<a href="#" class="badge task-tag badge-info rounded-pill">High Tech</a>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="mb-3">
											<h6 class="mb-1">Description</h6>
											<p>The Enhanced Patient Management System (EPMS) project aims to modernize and streamline 
												the patient management processes within. By integrating advanced technologies and optimizing existing
												workflows, the project seeks to improve patient care, enhance operational 
												efficiency, and ensure compliance with regulatory standards.
											</p>
										</div>
									</div>
									<div class="col-md-12">
										<div class="bg-soft-secondary p-3 rounded d-flex align-items-center justify-content-between">
											<p class="text-secondary mb-0">Time Spent on this project</p>
											<h3 class="text-secondary">65/120 <span class="fs-16">Hrs</span></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="custom-accordion-items">
							<div class="accordion accordions-items-seperate" id="accordionExample">
								<div class="accordion-item">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button">
											<h5>Tasks</h5>
											<div class=" ms-auto">
												<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo" aria-expanded="false" aria-controls="primaryBorderTwo">
													<i class="ti ti-chevron-down fs-18"></i>
												</a>
											</div>
										</div>
									</div>
									<div id="primaryBorderTwo" class="accordion-collapse collapse show border-top" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="list-group list-group-flush">
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center row-gap-3">
														<div class="col-md-7">
															<div class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3">
																<span><i class="ti ti-grid-dots me-2"></i></span>
																<div class="form-check form-check-md me-2">
																	<input class="form-check-input" type="checkbox">
																</div>
																<span class="me-2 d-flex align-items-center rating-select"><i class="ti ti-star-filled filled"></i></span>
																<div class="strike-info">
																	<h4 class="fs-14">Patient appointment booking</h4>
																</div>
															</div>
														</div>
														<div class="col-md-5">
															<div class="d-flex align-items-center justify-content-md-end flex-wrap row-gap-3">
																<span class="badge bg-soft-pink d-inline-flex align-items-center me-3"><i class="fas fa-circle fs-6 me-1"></i>Onhold</span>
																<div class="d-flex align-items-center">
																	<div class="avatar-list-stacked avatar-group-sm">
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
																		</span>
																	</div>
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_todo"><i class="ti ti-edit me-2"></i>Edit</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#view_todo"><i class="ti ti-eye me-2"></i>View</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center row-gap-3">
														<div class="col-md-7">
															<div class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3">
																<span><i class="ti ti-grid-dots me-2"></i></span>
																<div class="form-check form-check-md me-2">
																	<input class="form-check-input" type="checkbox">
																</div>
																<span class="me-2 rating-select d-flex align-items-center"><i class="ti ti-star"></i></span>
																<div class="strike-info">
																	<h4 class="fs-14">Appointment booking with payment gateway</h4>
																</div>
															</div>
														</div>
														<div class="col-md-5">
															<div class="d-flex align-items-center justify-content-md-end flex-wrap row-gap-3">
																<span class="badge bg-transparent-purple d-flex align-items-center me-3"><i class="fas fa-circle fs-6 me-1"></i>Inprogress</span>
																<div class="d-flex align-items-center">
																	<div class="avatar-list-stacked avatar-group-sm">
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																		</span>
																	</div>
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_todo"><i class="ti ti-edit me-2"></i>Edit</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#view_todo"><i class="ti ti-eye me-2"></i>View</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center row-gap-3">
														<div class="col-md-7">
															<div class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3">
																<span><i class="ti ti-grid-dots me-2"></i></span>
																<div class="form-check form-check-md me-2">
																	<input class="form-check-input" type="checkbox">
																</div>
																<span class="me-2 rating-select d-flex align-items-center"><i class="ti ti-star"></i></span>
																<div class="strike-info">
																	<h4 class="fs-14">Patient and Doctor video conferencing</h4>
																</div>
															</div>
														</div>
														<div class="col-md-5">
															<div class="d-flex align-items-center justify-content-md-end flex-wrap row-gap-3">
																<span class="badge badge-soft-success align-items-center me-3"><i class="fas fa-circle fs-6 me-1"></i>Completed</span>
																<div class="d-flex align-items-center">
																	<div class="avatar-list-stacked avatar-group-sm">
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																		</span>
																	</div>
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_todo"><i class="ti ti-edit me-2"></i>Edit</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#view_todo"><i class="ti ti-eye me-2"></i>View</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center row-gap-3">
														<div class="col-md-7">
															<div class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 todo-strike-content">
																<span><i class="ti ti-grid-dots me-2"></i></span>
																<div class="form-check form-check-md me-2">
																	<input class="form-check-input" type="checkbox" checked="">
																</div>
																<span class="me-2 rating-select d-flex align-items-center"><i class="ti ti-star"></i></span>
																<div class="strike-info">
																	<h4 class="fs-14">Private chat module</h4>
																</div>
															</div>
														</div>
														<div class="col-md-5">
															<div class="d-flex align-items-center justify-content-md-end flex-wrap row-gap-3">
																<span class="badge badge-secondary-transparent d-flex align-items-center me-3"><i class="fas fa-circle fs-6 me-1"></i>Pending</span>
																<div class="d-flex align-items-center">
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
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_todo"><i class="ti ti-edit me-2"></i>Edit</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#view_todo"><i class="ti ti-eye me-2"></i>View</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center row-gap-3">
														<div class="col-md-7">
															<div class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3">
																<span><i class="ti ti-grid-dots me-2"></i></span>
																<div class="form-check form-check-md me-2">
																	<input class="form-check-input" type="checkbox">
																</div>
																<span class="me-2 rating-select d-flex align-items-center"><i class="ti ti-star"></i></span>
																<div class="strike-info">
																	<h4 class="fs-14">Go-Live and Post-Implementation Support</h4>
																</div>
															</div>
														</div>
														<div class="col-md-5">
															<div class="d-flex align-items-center justify-content-md-end flex-wrap row-gap-3">
																<span class="badge bg-transparent-purple d-flex align-items-center me-3"><i class="fas fa-circle fs-6 me-1"></i>Inprogress</span>
																<div class="d-flex align-items-center">
																	<div class="avatar-list-stacked avatar-group-sm">
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																		</span>
																		<span class="avatar avatar-rounded">
																			<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																		</span>
																	</div>
																	<div class="dropdown ms-2">
																		<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
																			<i class="ti ti-dots-vertical"></i>
																		</a>
																		<ul class="dropdown-menu dropdown-menu-end p-3">
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_todo"><i class="ti ti-edit me-2"></i>Edit</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
																			</li>
																			<li>
																				<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#view_todo"><i class="ti ti-eye me-2"></i>View</a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<button class="btn bg-primary-transparent border-dashed border-primary w-100 text-start" data-bs-toggle="modal" data-bs-target="#add_todo">
													<i class="ti ti-plus me-2"></i>New task
												</button>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item ">
									<div class="accordion-header" id="headingThree">
										<div class="accordion-button">
											<div class="d-flex align-items-center flex-fill">
												<h5>Images</h5>
												<div class=" ms-auto d-flex align-items-center">
													<a href="#" class="btn btn-primary btn-xs d-inline-flex align-items-center me-3"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New</a>
													<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderThree" aria-expanded="false" aria-controls="primaryBorderThree">
														<i class="ti ti-chevron-down fs-18"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div id="primaryBorderThree" class="accordion-collapse collapse show border-top" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="media-images-slider owl-carousel">
												<a href="assets/img/media/media-big-08.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-08.jpg" class=" rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-09.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-09.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-10.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-10.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-11.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-11.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-12.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-12.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-13.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-13.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
												<a href="assets/img/media/media-big-14.jpg" data-fancybox="gallery" class="gallery-item">
													<img src="assets/img/media/media-14.jpg" class="rounded" alt="img">
													<div class="d-flex align-items-center hover-links">
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-maximize"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-link"></i></span>
														<span class="avatar avatar-md avatar-rounded"><i class="ti ti-trash"></i></span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="headingFour">
										<div class="accordion-button">
											<div class="d-flex align-items-center flex-fill">
												<h5>Files</h5>
												<div class=" ms-auto d-flex align-items-center">
													<a href="#" class="btn btn-primary btn-xs d-inline-flex align-items-center me-3"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New</a>
													<a href="#" class="d-flex align-items-center collapsed collapse-arrow"  data-bs-toggle="collapse" data-bs-target="#primaryBorderFour" aria-expanded="false" aria-controls="primaryBorderFour">
														<i class="ti ti-chevron-down fs-18"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div id="primaryBorderFour" class="accordion-collapse collapse show border-top" aria-labelledby="headingFour">
										<div class="accordion-body">
											<div class="files-carousel owl-carousel">
												<div class="card shadow-none mb-0">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
															<div class="d-flex align-items-center">
																<a href="#" class="avatar avatar-md bg-light me-2">
																	<img src="assets/img/icons/file-02.svg" class="w-auto h-auto" alt="img">
																</a>
																<div>
																	<h6 class="mb-1">Project_1.docx</h6>
																	<span>7.6 MB</span>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="fw-medium mb-0">15 May 2024, 6:53 PM</p>
															<span class="avatar avatar-sm avatar-rounded"><img src="assets/img/profiles/avatar-02.jpg" alt="Img"></span>
														</div>
													</div>
												</div>
												<div class="card shadow-none mb-0">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
															<div class="d-flex align-items-center">
																<a href="#" class="avatar avatar-md bg-light me-2">
																	<img src="assets/img/icons/file-01.svg" class="w-auto h-auto" alt="img">
																</a>
																<div>
																	<h6 class="mb-1">Proposal.pdf</h6>
																	<span>12.6 MB</span>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="fw-medium mb-0">15 May 2024, 6:53 PM</p>
															<span class="avatar avatar-sm avatar-rounded"><img src="assets/img/users/user-19.jpg" alt="Img"></span>
														</div>
													</div>
												</div>
												<div class="card shadow-none mb-0">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
															<div class="d-flex align-items-center">
																<a href="#" class="avatar avatar-md bg-light me-2">
																	<img src="assets/img/icons/file-04.svg" class="w-auto h-auto" alt="img">
																</a>
																<div>
																	<h6 class="mb-1">Logo-Img.zip</h6>
																	<span>6.2 MB</span>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
																<a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="fw-medium mb-0">15 May 2024, 6:53 PM</p>
															<span class="avatar avatar-sm avatar-rounded"><img src="assets/img/users/user-20.jpg" alt="Img"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 d-flex">
										<div class="accordion-item flex-fill">
											<div class="accordion-header" id="headingFive">
												<div class="accordion-button">
													<div class="d-flex align-items-center flex-fill">
														<h5>Notes</h5>
														<div class=" ms-auto d-flex align-items-center">
															<a href="#" class="btn btn-primary btn-xs d-inline-flex align-items-center me-3"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New</a>
															<a href="#" class="d-flex align-items-center collapsed collapse-arrow"  data-bs-toggle="collapse" data-bs-target="#primaryBorderFive" aria-expanded="false" aria-controls="primaryBorderFive">
																<i class="ti ti-chevron-down fs-18"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="primaryBorderFive" class="accordion-collapse collapse show border-top" aria-labelledby="headingFive">
												<div class="accordion-body">
													<div class="card">
														<div class="card-body">
															<div class="d-flex align-items-center justify-content-between mb-2">
																<h6 class="text-gray-5 fw-medium">15 May 2025</h6>
																<div class="dropdown">
																	<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="ti ti-dots-vertical"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end p-3">
																		<li>
																			<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-trash me-1"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
															<h6 class="d-flex align-items-center mb-2"><i class="ti ti-point-filled text-primary me-1"></i>Changes &amp; design</h6>
															<p class="text-truncate line-clamb-3">An office management app project streamlines administrative tasks by integrating 
																tools for scheduling, communication, and 
																task management, enhancing overall productivity and efficiency.
															</p>
														</div>
													</div>
													<div class="card mb-0">
														<div class="card-body">
															<div class="d-flex align-items-center justify-content-between mb-2">
																<h6 class="text-gray-5 fw-medium">15 May 2025</h6>
																<div class="dropdown">
																	<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="ti ti-dots-vertical"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end p-3">
																		<li>
																			<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-trash me-1"></i>Delete</a>
																		</li>
																	</ul>
																</div>
															</div>
															<h6 class="d-flex align-items-center mb-2"><i class="ti ti-point-filled text-primary me-1"></i>Changes &amp; design</h6>
															<p class="text-truncate line-clamb-3">An office management app project streamlines administrative tasks by integrating 
																tools for scheduling, communication, and 
																task management, enhancing overall productivity and efficiency.
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 d-flex">
										<div class="accordion-item flex-fill">
											<div class="accordion-header" id="headingSix">
												<div class="accordion-button">
													<div class="d-flex align-items-center flex-fill">
														<h5>Activity</h5>
														<div class=" ms-auto d-flex align-items-center">
															<a href="#" class="btn btn-primary btn-xs d-inline-flex align-items-center me-3"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New</a>
															<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderSix" aria-expanded="false" aria-controls="primaryBorderSix">
																<i class="ti ti-chevron-down fs-18"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="primaryBorderSix" class="accordion-collapse collapse show border-top" aria-labelledby="headingSix">
												<div class="accordion-body">
													<div class="notice-widget">
														<div class="d-flex align-items-center justify-content-between mb-4">
															<div class="d-flex overflow-hidden">
																<span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
																	<i class="ti ti-checkup-list fs-16"></i>
																</span>
																<div class="overflow-hidden">
																	<p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Andrew  </span>added a New Task</p>
																	<p class="mb-1">15 May 2024, 6:53 PM</p>
																</div>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<div class="d-flex overflow-hidden me-2">
																<span class="bg-warning avatar avatar-md me-3 rounded-circle flex-shrink-0">
																	<i class="ti ti-circle-dot fs-16"></i>
																</span>
																<div class="overflow-hidden">
																	<p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai </span>Moved task <span class="text-gray-9 fw-medium"> “Private chat module”</span></p>
																	<p class="mb-1">15 May 2024, 6:53 PM</p>
																	<div class="d-flex align-items-center">
																		<span class="badge badge-success me-2"><i class="ti ti-point-filled me-1"></i>Completed</span>
																		<span><i class="ti ti-arrows-left-right me-2"></i></span>
																		<span class="badge badge-purple"><i class="ti ti-point-filled me-1"></i>Inprogress</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<div class="d-flex overflow-hidden me-2">
																<span class="bg-purple avatar avatar-md me-3 rounded-circle flex-shrink-0">
																	<i class="ti ti-checkup-list fs-16"></i>
																</span>
																<div class="overflow-hidden">
																	<p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai </span>Created task <span class="text-gray-9 fw-medium"> “Private chat module”</span></p>
																	<p class="mb-1">15 May 2024, 6:53 PM</p>
																</div>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex overflow-hidden">
																<span class="bg-secondary avatar avatar-md me-3 rounded-circle flex-shrink-0">
																	<i class="ti ti-photo fs-16"></i>
																</span>
																<div class="overflow-hidden">
																	<p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Hendry  </span> Updated Image <span class="text-gray-9 fw-medium"> “logo.jpg” </span></p>
																	<p class="mb-1">15 May 2024, 6:53 PM</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="headingSeven">
										<div class="accordion-button">
											<h5>Invoices</h5>
											<div class=" ms-auto d-flex align-items-center">
												<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderSeven" aria-expanded="false" aria-controls="primaryBorderSeven">
													<i class="ti ti-chevron-down fs-18"></i>
												</a>
											</div>
										</div>
									</div>
									<div id="primaryBorderSeven" class="accordion-collapse collapse show border-top" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="list-group list-group-flush">
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center g-3">
														<div class="col-sm-6">
															<div class="d-flex align-items-center">
																<span class="avatar avatar-lg bg-light flex-shrink-0 me-2"><i class="ti ti-file-invoice text-dark fs-24"></i></span>
																<div>
																	<h6 class="fw-medium mb-1">Phase 2  Completion</h6>
																	<p><a href="#" class="text-info">#INV-123 </a> 11 Sep 2025, 05:35 pm</p>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div>
																<span>Amount</span>
																<p class="text-dark">$6,598</p>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="d-flex align-items-center justify-content-sm-end">
																<span class="badge badge-soft-success d-inline-flex  align-items-center me-4"><i class="ti ti-point-filled me-1"></i>Paid</span>
																<a href="#" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
																<a href="#" class="btn btn-icon btn-sm "><i class="ti ti-trash"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center g-3">
														<div class="col-sm-6">
															<div class="d-flex align-items-center">
																<span class="avatar avatar-lg bg-light flex-shrink-0 me-2"><i class="ti ti-file-invoice text-dark fs-24"></i></span>
																<div>
																	<h6 class="fw-medium mb-1">Advance for Project</h6>
																	<p><a href="#" class="text-info">#INV-124 </a> 14 Sep 2025, 05:35 pm</p>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div>
																<span>Amount</span>
																<p class="text-dark">$3312</p>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="d-flex align-items-center justify-content-sm-end">
																<span class="badge badge-soft-success d-inline-flex  align-items-center me-4"><i class="ti ti-point-filled me-1"></i>Hold</span>
																<a href="#" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
																<a href="#" class="btn btn-icon btn-sm "><i class="ti ti-trash"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center g-3">
														<div class="col-sm-6">
															<div class="d-flex align-items-center">
																<span class="avatar avatar-lg bg-light flex-shrink-0 me-2"><i class="ti ti-file-invoice text-dark fs-24"></i></span>
																<div>
																	<h6 class="fw-medium mb-1">Changes & design Alignments</h6>
																	<p><a href="#" class="text-info">#INV-125 </a> 15 Sep 2025, 05:35 pm</p>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div>
																<span>Amount</span>
																<p class="text-dark">$4154</p>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="d-flex align-items-center justify-content-sm-end">
																<span class="badge badge-soft-success d-inline-flex  align-items-center me-4"><i class="ti ti-point-filled me-1"></i>Paid</span>
																<a href="#" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
																<a href="#" class="btn btn-icon btn-sm "><i class="ti ti-trash"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded mb-2 p-2">
													<div class="row align-items-center g-3">
														<div class="col-sm-6">
															<div class="d-flex align-items-center">
																<span class="avatar avatar-lg bg-light flex-shrink-0 me-2"><i class="ti ti-file-invoice text-dark fs-24"></i></span>
																<div>
																	<h6 class="fw-medium mb-1">Added New Functionality</h6>
																	<p><a href="#" class="text-info">#INV-126 </a> 16 Sep 2025, 05:35 pm</p>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div>
																<span>Amount</span>
																<p class="text-dark">$658</p>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="d-flex align-items-center justify-content-sm-end">
																<span class="badge badge-soft-success d-inline-flex  align-items-center me-4"><i class="ti ti-point-filled me-1"></i>Paid</span>
																<a href="#" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
																<a href="#" class="btn btn-icon btn-sm "><i class="ti ti-trash"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="list-group-item border rounded p-2">
													<div class="row align-items-center g-3">
														<div class="col-sm-6">
															<div class="d-flex align-items-center">
																<span class="avatar avatar-lg bg-light flex-shrink-0 me-2"><i class="ti ti-file-invoice text-dark fs-24"></i></span>
																<div>
																	<h6 class="fw-medium mb-1">Phase 1  Completion</h6>
																	<p><a href="#" class="text-info">#INV-127 </a> 17 Sep 2025, 05:35 pm</p>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
															<div>
																<span>Amount</span>
																<p class="text-dark">$1259</p>
															</div>
														</div>
														<div class="col-sm-3">
															<div class="d-flex align-items-center justify-content-sm-end">
																<span class="badge badge-soft-danger d-inline-flex  align-items-center me-4"><i class="ti ti-point-filled me-1"></i>unpaid</span>
																<a href="#" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
																<a href="#" class="btn btn-icon btn-sm "><i class="ti ti-trash"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="text-end mb-4">
								<div class="dropdown">
									<a href="javascript:void(0);" class="d-inline-flex align-items-center avatar avatar-lg avatar-rounded bg-primary" data-bs-toggle="dropdown">
										<i class="ti ti-plus fs-24 text-white"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-end bg-gray-900 dropdown-menu-md dropdown-menu-dark p-3">
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
												<span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i class="ti ti-basket-code"></i></span>
												<div>
													<h6 class="fw-medium text-white mb-1">Add a Task</h6>
													<p class="text-white">Create a new Priority tasks </p>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
												<span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i class="ti ti-file-invoice"></i></span>
												<div>
													<h6 class="fw-medium text-white mb-1">Add Invoice</h6>
													<p class="text-white">Create a new Billing</p>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
												<span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i class="ti ti-file-description"></i></span>
												<div>
													<h6 class="fw-medium text-white mb-1">Notes</h6>
													<p class="text-white">Create new note for you & team</p>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
												<span class="avatar avatar-md bg-gray-800 flex-shrink-0 me-2"><i class="ti ti-folder-open"></i></span>
												<div>
													<h6 class="fw-medium text-white mb-1">Add Files</h6>
													<p class="text-white">Upload New files for this Client</p>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
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
					<form action="project-details.php">
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
											<option>High</option>
											<option selected>Medium</option>
											<option>Low</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-3">
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
				<div class="modal-content">
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
										<span class="badge badge-soft-success d-inline-flex align-items-center">
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
					<form action="project-details.php">
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
									<div class="mb-3">
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
							<a href="project-details.php" class="btn btn-danger">Yes, Delete</a>
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
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Fancybox JS -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>	
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/js/file-manager.js"></script>
<script src="assets/js/todo.js"></script>
<script src="assets/js/projects.js"></script>

</body>
</html>