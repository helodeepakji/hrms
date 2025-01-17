<?php include 'layouts/session.php'; ?>
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
						<h2 class="mb-1">Provident Fund</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Provident Fund</li>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_provident-fund" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New Provident Fund</a>
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
						<h5>Expenses List</h5>
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
									Select status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Approved</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
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
										<th>Employee Name</th>
										<th>Provident Fund Type</th>
										<th>Employee Share</th>
										<th>Organization Share</th>
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
                                                    <span class="d-block mt-1">Finance</span>
												</div>
											</div>
										</td>
										<td>Employee Provident Fund</td>
										<td>2%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
                                                    <span class="d-block mt-1">Developer</span>
												</div>
											</div>
										</td>
										<td>Employee Provident Fund</td>
										<td>2%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Pending
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
                                                    <span class="d-block mt-1">Developer</span>
												</div>
											</div>
										</td>
										<td>Voluntary Provident Fund</td>
										<td>5%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
                                                    <span class="d-block mt-1">Executive Officer</span>
												</div>
											</div>
										</td>
										<td>Voluntary Provident Fund</td>
										<td>3%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Pending
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
                                                    <span class="d-block mt-1">Manager</span>
												</div>
											</div>
										</td>
										<td>Employee Provident Fund</td>
										<td>2%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
													<img src="assets/img/users/user-02.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Linda Ray</a></h6>
                                                    <span class="d-block mt-1">Finance</span>
												</div>
											</div>
										</td>
										<td>Employee Provident Fund</td>
										<td>2%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Pending
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
													<img src="assets/img/users/user-35.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Elliot Murray</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
												</div>
											</div>
										</td>
										<td>Voluntary Provident Fund</td>
										<td>6%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
													<img src="assets/img/users/user-36.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Rebecca Smtih</a></h6>
                                                    <span class="d-block mt-1">Executive</span>
												</div>
											</div>
										</td>
										<td>Voluntary Provident Fund</td>
										<td>4%</td>
										<td>2%</td>
                                        <td>
											<div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Pending
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
													<img src="assets/img/users/user-37.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Connie Waters</a></h6>
                                                    <span class="d-block mt-1">Developer</span>
												</div>
											</div>
										</td>
										<td>Employee Provident Fund</td>
										<td>2%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
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
													<img src="assets/img/users/user-38.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Lori Broaddus</a></h6>
                                                    <span class="d-block mt-1">Finance</span>
												</div>
											</div>
										</td>
										<td>Voluntary Provident Fund</td>
										<td>7%</td>
										<td>2%</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                    <span class="rounded-circle bg-transparent-info d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Pending
                                                </a>
                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-skyblue d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-skyblue"></i></span>Pending </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_provident-fund"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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

          <!-- Add Promotion -->
          <div class="modal fade" id="add_provident-fund">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Provident Fund</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="provident-fund.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Name</label>
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
                                        <label class="form-label">Provident Fund Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Employee Provident Fund</option>
                                            <option>Voluntary Provident Fund</option>
                                            <option>Employee Provident Fund</option>
                                        </select>
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Share(%)</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Organization Share(%)</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Employee Share(Amount)</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Organization Share(Amount)</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                               
                               
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Provident Fund</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- /Add Promotion -->

	  <!-- Edit Promotion -->
	  <div class="modal fade" id="edit_provident-fund">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Provident Fund</h4>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<form action="provident-fund.php">
					<div class="modal-body pb-0">
						<div class="row">
						   
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Employee Name</label>
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
									<label class="form-label">Provident Fund Type</label>
									<select class="select">
										<option>Select</option>
										<option selected>Employee Provident Fund</option>
										<option>Voluntary Provident Fund</option>
										<option>Employee Provident Fund</option>
									</select>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Employee Share(%)</label>
									<input type="text" class="form-control" value="2%">
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Organization Share(%)</label>
									<input type="text" class="form-control" value="2%">
								</div>									
							</div>
						   
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Employee Share(Amount)</label>
									<input type="text" class="form-control" value="2000">
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Organization Share(Amount)</label>
									<input type="text" class="form-control" value="2000">
								</div>									
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Description</label>
									<input type="text" class="form-control">
								</div>									
							</div>
						   
						   
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- /Edit Promotion -->

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
						<a href="provident-fund.php" class="btn btn-danger">Yes, Delete</a>
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
</body>
</html>