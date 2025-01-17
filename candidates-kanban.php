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
						<h2 class="mb-1">Candidates</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Candidates Kanban</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="candidates-kanban.php" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-layout-kanban"></i></a>
								<a href="candidates.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
								<a href="candidates-grid.php" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
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
						<div class="head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-body p-3">
						<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
							<h5>Candidates Kanban</h5>
							<div class="d-flex align-items-center flex-wrap row-gap-3">
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
										Role
									</a>
									<ul class="dropdown-menu  dropdown-menu-end p-3">
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Accountant</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">App Developer</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Technician</a>
										</li>
									</ul>
								</div>
								<div class="dropdown me-3">
									<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
										Select Status
									</a>
									<ul class="dropdown-menu  dropdown-menu-end p-3">
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Select Status</a>
										</li>
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
					</div>
				</div>

				<!-- Candidates Kanban -->
				<div class="row">
                    <div class="d-flex align-items-start overflow-auto project-status pb-4">
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-purple rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">New</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-001</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-39.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Harold Gaynor</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">harold@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Accountant</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-002</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-40.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Sandra Ornellas</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">sandra@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Accountant</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-pink rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">Scheduled</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-003</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-41.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">John Harris</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">john@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Technician</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-004</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-42.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Carole Langan</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">carole@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Web Developer</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-005</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-44.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Charles Marks</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">charles@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">SEO</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-006</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-43.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Kerry Drake</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">kerry@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Designer</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-info p-1 d-flex rounded-circle me-2"><span class="bg-info rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">Interviewed</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-007</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-46.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">David Carmona</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">david@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Manager</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-008</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-45.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Margaret Soto</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">margaret@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">SEO Analyst</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-009</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-48.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Jeffrey Thaler</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">jeffrey@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Admin</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-warning p-1 d-flex rounded-circle me-2"><span class="bg-warning rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">Offered</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-010</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-47.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Joyce Golston</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">joyce@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Business</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-011</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-49.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Cedric Rosalez</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">cedric@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Financial</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">Hired</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-012</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-50.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Lillie Diaz</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">lillie@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Receptionist</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-013</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-51.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Thomas Bordelon</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">thomas@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Director</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                        <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                            <div class="bg-white p-2 rounded mb-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="bg-soft-danger p-1 d-flex rounded-circle me-2"><span class="bg-danger rounded-circle d-block p-1"></span></span>
                                        <h5 class="me-2">Rejected</h5>
                                        <span class="badge bg-light rounded-pill">30</span>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-drag-wrap">
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-014</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-53.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Bruce Wright</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">bruce@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">CEO</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="card kanban-card mb-2">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                                <div class="d-flex align-items-center flex-shrink-0">
                                                    <span class="badge bg-primary-transparent">Cand-013</span>
                                                </div> 
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                                <a href="javascript:void(0);" class="avatar avatar-lg avatar rounded-circle me-2" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">
                                                    <img src="assets/img/users/user-54.jpg" class="img-fluid h-auto w-auto" alt="img">
                                                </a>
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex flex-wrap">
                                                        <h6 class="text-dark fs-16 fw-semibold"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#candidate_details">Angela Thomas</a></h6>                                        
                                                    </div>                                        
                                                    <p class="text-gray fs-13 fw-normal">angela@example.com</p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Role</h6>
                                                    <span class="text-dark fs-14 fw-medium">Consultant</span>
                                                </div>
                                                <span class="border-start text-gray fs-14 fw-normal"></span>
                                                <div>
                                                    <h6 class="text-gray fs-14 fw-normal mb-2">Applied Date</h6>
                                                    <span class="text-dark fs-14 fw-medium">12 Sep 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center">
                                    <i class="ti ti-plus me-2"></i>
                                    New Project
                                </a>
                            </div>
                        </div>
                    </div>
				</div>
				<!-- /Candidates Kanban -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Candidate Details -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="candidate_details">
			<div class="offcanvas-header border-bottom">
				<h4 class="d-flex align-items-center">Candidate Details 
					<span class="badge bg-primary-transparent fw-medium ms-2">Cand-001</span>
				</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center flex-wrap flex-md-nowrap row-gap-3">
							<span class="avatar avatar-xxxl candidate-img flex-shrink-0 me-3">
								<img src="assets/img/users/user-03.jpg" alt="Img">
							</span>
							<div class="flex-fill border rounded p-3 pb-0">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Candiate Name</p>
											<h6 class="fw-normal">Harold Gaynor</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Applied Role</p>
											<h6 class="fw-normal">Accountant</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Applied  Date</p>
											<h6 class="fw-normal">12 Sep 2024</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Email</p>
											<h6 class="fw-normal">harold@example.com</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<h6 class="fw-normal d-flex align-items-center">
												<span class="avatar avatar-xs avatar-rounded me-1">
													<img src="assets/img/users/user-01.jpg" alt="Img">
												</span>
												Anthony Lewis
											</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<span class="badge badge-purple d-inline-flex align-items-center"><i class="ti ti-point-filled me-1"></i>New</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-grids-tab p-0 mb-3">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
						  <button class="nav-link active pt-0" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Profile</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Hiring Pipeline</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Notes</button>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
						<div class="card">
							<div class="card-header">
								<h5>Personal Information</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Candiate Name</p>
											<h6 class="fw-normal">Harold Gaynor</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Phone</p>
											<h6 class="fw-normal">(146) 8964 278</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Gender</p>
											<h6 class="fw-normal">Male</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Date of Birth</p>
											<h6 class="fw-normal">23 Oct 2000</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Email</p>
											<h6 class="fw-normal">harold@example.com</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Nationality</p>
											<h6 class="fw-normal">Indian</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Religion</p>
											<h6 class="fw-normal">Christianity</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Marital status</p>
											<h6 class="fw-normal">No</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Address Information</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Address</p>
											<h6 class="fw-normal">1861 Bayonne Ave</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">City</p>
											<h6 class="fw-normal">New York</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">State</p>
											<h6 class="fw-normal">New York</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Country</p>
											<h6 class="fw-normal">United States Of America</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Resume</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-6">
										<div class="d-flex align-items-center mb-3">
											<span class="avatar avatar-lg bg-light-500 border text-dark me-2"><i class="ti ti-file-description fs-24"></i></span>
											<div>
												<h6 class="fw-medium">Resume.doc</h6>
												<span>120 KB</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 text-md-end">
											<a href="#" class="btn btn-dark d-inline-flex align-items-center"><i class="ti ti-download me-1"></i>Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
						<div class="card">
							<div class="card-body">
								<h5 class="fw-medium mb-2">Candidate Pipeline Stage</h5>
								<div class="pipeline-list candidates border-0 mb-0">
									<ul class="mb-0">
										<li><a href="javascript:void(0);" class="bg-purple">New</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Scheduled</a></li>
										<li><a href="javascript:void(0);" class="bg-grat-100">Interviewed</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Offered</a></li>
										<li><a href="javascript:void(0);" class="bg-gray-100">Hired / Rejected</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Details</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Current Status</p>
											<span class="badge badge-soft-purple d-inline-flex align-items-center"><i class="ti ti-point-filled me-1"></i>New</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Applied Role</p>
											<h6 class="fw-normal">Accountant</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Applied Date</p>
											<h6 class="fw-normal">12 Sep 2024</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Recruiter</p>
											<div class="d-flex align-items-center">
												<a href="#" class="avatar avatar-sm avatar-rounded me-2">
													<img src="assets/img/users/user-01.jpg" alt="Img">
												</a>
												<h6><a href="#">Anthony Lewis</a></h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="d-flex align-items-center justify-content-end">
									<a href="#" class="btn btn-dark me-3">Reject</a>
									<a href="#" class="btn btn-primary">Move to Next Stage</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
						<div class="card">
							<div class="card-header">
								<h5>Notes</h5>
							</div>
							<div class="card-body">
								<p>Harold Gaynor is a detail-oriented and highly motivated accountant with 4  years of experience in financial reporting, auditing, and tax preparation.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Candidate Details -->

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
							<a href="candidates-kanban.php" class="btn btn-danger">Yes, Delete</a>
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
 <!-- Drag Card -->
 <script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/kanban.js"></script>

</body>
</html>