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
<div id="global-loader">
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
						<h2 class="mb-1">Leads</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									CRM
								</li>
								<li class="breadcrumb-item active" aria-current="page">Leads Grid</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="leads.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
								<a href="leads-grid.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_leads" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Lead</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Leads Grid -->
				<div class="card">
					<div class="card-body p-3">
						<div class="d-flex align-items-center justify-content-between">
							<h5>Leads Grid</h5>
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
				</div>

	
				<!-- Leads Kanban -->
				<div class="d-flex overflow-x-auto align-items-start mb-4">
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-semibold d-flex align-items-center mb-1"><i
												class="ti ti-circle-filled fs-8 text-warning me-2"></i>Contacted
										</h4>
										<span class="fw-medium text-default">02 Leads - $7,50,000</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="ti ti-edit"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-warning border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">SM</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Linda White</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$03,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												linda@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(193) 7839 748
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Austin, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-04.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-warning border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">CJ</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Chris Johnson</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$3,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												chris@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(162) 8920 713
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Atlanta, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-07.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-semibold d-flex align-items-center mb-1"><i
												class="ti ti-circle-filled fs-8 text-purple me-2"></i>Not
											Contacted</h4>
										<span class="fw-medium text-default">02 Leads - $7,60,000</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="ti ti-edit"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-purple border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">EJ</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Emily Johnson</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$3,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												emily@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(179) 7382 829
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Newyork, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-06.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-purple border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">MG</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Maria Garcia</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$4,10,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												maria@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(120) 3728 039
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Denver, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-05.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-semibold d-flex align-items-center mb-1"><i
												class="ti ti-circle-filled fs-8 text-success me-2"></i>Closed
										</h4>
										<span class="fw-medium text-default">45 Leads - $15,44,540</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="ti ti-edit"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-success border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">JS</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">John Smith</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$3,20,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												john@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(123) 4567 890
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Chester, United Kingdom
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-01.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-success border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">DL</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">David Lee</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$3,10,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												david@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(183) 9302 890
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Charlotte, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-08.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card mb-0">
									<div class="card-body">
										<div class="d-block">
											<div class="border-success border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">RM</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Robert Martinez</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$4,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												robert@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(163) 2459 315
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Bristol, United Kingdom
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-09.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white me-0">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-semibold d-flex align-items-center mb-1"><i
												class="ti ti-circle-filled fs-8 text-danger me-2"></i>Lost</h4>
										<span class="fw-medium text-default">15 Leads - $14,89,543</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="ti ti-edit"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-danger border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">MB</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Michael Brown</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$4,10,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												micael@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(184) 2719 738
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												London, United Kingdom
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-03.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-danger border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">KD</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">Karen Davis</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$4,00,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												darleeo@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(163) 2459 315
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Detroit, United States
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-02.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card mb-0">
									<div class="card-body">
										<div class="d-block">
											<div class="border-danger border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="leads-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">JA</span></a>
												<h6 class="fw-medium"><a href="leads-details.php">James Anderson</a>
												</h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-report-money text-dark me-1"></i>
												$3,40,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-1"></i>
												james@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-1"></i>
												(168) 8392 823
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-pin text-dark me-1"></i>
												Manchester, United Kingdom
											</p>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<a href="javascript:void(0);" class="avatar avatar-sm  avatar-rounded flex-shrink-0 me-2"><img src="assets/img/company/company-03.svg" alt="image"></a>
											<div class="icons-social d-flex align-items-center">
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-phone-call"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center me-2"><i
														class="ti ti-brand-hipchat"></i></a>
												<a href="#"
													class="d-flex align-items-center justify-content-center"><i
														class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Leads Kanban -->

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

<!-- Add Leads -->
<div class="modal fade" id="add_leads">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Lead</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="leads-grid.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Lead Name  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="d-flex align-items-center ">
									<div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<label class="form-check-label" for="flexRadioDefault1">
											Person
										</label>
									</div>
									 <div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
										<label class="form-check-label" for="flexRadioDefault2">
											Organization	
										</label>
									</div>
								</div>
							</div>		
						</div>
						<div class="col-md-12">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="col-form-label">Company  <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_company"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<select class="select">
									<option>Select</option>
									<option>BrightWave Innovations</option>
									<option>Stellar Dynamics</option>
									<option>Quantum Nexus</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Value <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Currency<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>USD</option>
									<option>Euro</option>
								</select>
							</div>									
						</div>
						<div class="col-md-12 ">
							<div class="lead-phno-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block w-100 mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row text-primary add-lead-phno ms-2"><i class="ti ti-circle-plus"></i></a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="lead-email-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="form-label">Email  <span class="text-danger"> *</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block w-100 mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-email-row text-primary add-lead-phno ms-2"><i class="ti ti-circle-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Source  <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Phone Calls</option>
									<option>Social Media</option>
									<option>Referral Sites</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Industry <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Rentail Industry</option>
									<option>Banking</option>
									<option>Hotels</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Owner <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Darlee Robertson</option>
									<option>Sharon Roy</option>
									<option>Vaughan Lewis</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Tags  <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Description  <span class="text-danger"> *</span></label>
								<div class="summernote"></div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<div class="mb-3">
								<label class="form-label">Visibility</label>
								<div class="d-flex align-items-center">
									<div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="public-id">
										<label class="form-check-label" for="public-id">
											Public
										</label>
									</div>
									 <div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="private-id" checked>
										<label class="form-check-label" for="private-id">
											Private	
										</label>
									</div>
									 <div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="people-id" checked>
										<label class="form-check-label" for="people-id">
											Select People	
										</label>
									</div>
								</div>
								
							</div>		
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
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
					<button type="submit" class="btn btn-primary">Add Lead</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Leads -->

<!-- Edit Leads -->
<div class="modal fade" id="edit_leads">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Lead</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="leads-grid.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Lead Name  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" value="">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="d-flex align-items-center ">
									<div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
										<label class="form-check-label" for="flexRadioDefault4">
											Person
										</label>
									</div>
									 <div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault30" checked>
										<label class="form-check-label" for="flexRadioDefault30">
											Organization	
										</label>
									</div>
								</div>
								
							</div>		
						</div>
						<div class="col-md-12">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="col-form-label">Company  <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_company"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<select class="select">
									<option>Select</option>
									<option selected>BrightWave Innovations</option>
									<option>Stellar Dynamics</option>
									<option>Quantum Nexus</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Value <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Currency<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>USD</option>
									<option selected>Euro</option>
								</select>
							</div>									
						</div>
						<div class="col-md-12 ">
							<div class="lead-phno-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block w-100 mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row text-primary add-lead-phno ms-2"><i class="ti ti-circle-plus"></i></a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="lead-email-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="form-label">Email  <span class="text-danger"> *</span></label>
											<input class="form-control" type="text">
										</div>
									</div>	
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block w-100 mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-email-row text-primary add-lead-phno ms-2"><i class="ti ti-circle-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Source  <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Phone Calls</option>
									<option selected>Social Media</option>
									<option>Referral Sites</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Industry <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Rentail Industry</option>
									<option selected>Banking</option>
									<option>Hotels</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Owner <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Darlee Robertson</option>
									<option selected>Sharon Roy</option>
									<option>Vaughan Lewis</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Tags  <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Description  <span class="text-danger"> *</span></label>
								<div class="summernote"></div>
							</div>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<div class="mb-3">
								<label class="form-label">Visibility</label>
								<div class="d-flex align-items-center">
									<div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="public-id2">
										<label class="form-check-label" for="public-id2">
											Public
										</label>
									</div>
									 <div class="form-check me-3">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="private-id2" checked>
										<label class="form-check-label" for="private-id2">
											Private	
										</label>
									</div>
									 <div class="form-check">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="people-id2" checked>
										<label class="form-check-label" for="people-id2">
											Select People	
										</label>
									</div>
								</div>
								
							</div>		
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
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
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Leads -->

<!-- Add Company -->
<div class="modal fade" id="add_company">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Company</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="companies-crm.php">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
						<button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
						</li>
						<li class="nav-item" role="presentation">
						<button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Address</button>
						</li>
						<li class="nav-item" role="presentation">
						<button class="nav-link" id="social-profile-tab" data-bs-toggle="tab" data-bs-target="#social-profile" type="button" role="tab" aria-selected="false">Social Profiles</button>
						</li>
						<li class="nav-item" role="presentation">
						<button class="nav-link" id="access-tab" data-bs-toggle="tab" data-bs-target="#access" type="button" role="tab" aria-selected="false">Access</button>
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
												<i class="ti ti-photo text-gray-2 fs-16"></i>
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
											<label class="form-label">Company Name <span class="text-danger">*</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<div class="d-flex align-items-center justify-content-between">
												<label class="form-label">Email</label>
												<div class="d-flex align-items-center">
													<span class="me-1">Option</span>
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" role="switch">
													</div>
												</div>
											</div>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Phone Number <span class="text-danger">*</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Phone Number 2</label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Fax</label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Website</label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Ratings <span class="text-danger"> *</span></label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control">
												<span class="input-icon-addon">
													<i class="ti ti-star text-gray-6"></i>
												</span>
											</div>
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Owner <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option >Hendry Milner</option>
												<option>Guilory Berggren</option>
												<option>Jami Carlile</option>
											</select>
										</div>									
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Tags <span class="text-danger">*</span> </label>
											<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<div class="d-flex justify-content-between align-items-center mb-2">
												<label class="col-form-label p-0">Deals <span class="text-danger">*</span></label>
												<a href="#" class="add-new text-primary" data-bs-target="#add_deals" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
											</div>
											<select class="select">
												<option>Select</option>
												<option>Collins</option>
												<option>Konopelski</option>
												<option>Adams</option>
											</select>
										</div>		
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Industry <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>Retail Industry</option>
												<option>Banking</option>
												<option>Hotels</option>
												<option>Financial Services</option>
												<option>Insurance</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Source <span class="text-danger">*</span> </label>
											<select class="select">
												<option>Select</option>
												<option>Phone Calls</option>
												<option>Social Media</option>
												<option>Refferal Sites</option>
												<option>Web Analytics</option>
												<option>Previous Purchase</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Currency <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>USD</option>
												<option>Euro</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Language <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select</option>
												<option>English</option>
												<option>Chinese</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3 ">
											<label class="form-label">About <span class="text-danger">*</span></label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<div class="d-flex justify-content-between align-items-center mb-2">
												<label class="col-form-label p-0">Contact <span class="text-danger">*</span></label>
												<a href="#" class="add-new text-primary" data-bs-target="#add_contact" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
											</div>
											<select class="select2" multiple="multiple">
												<option>Darlee Robertson</option>
												<option selected>Sharon Roy</option>
												<option>Vaughan</option>
												<option>Jessica</option>
												<option>Carol Thomas</option>
											</select>
										</div>		
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Save </button>
							</div>
					</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Address <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Country <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>USA</option>
											<option>Canada</option>
											<option>Germany</option>
											<option>France</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">State <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>California</option>
											<option>New York</option>
											<option>Texas</option>
											<option>Florida</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">City <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Los Angeles</option>
											<option>San Diego</option>
											<option>Fresno</option>
											<option>San Francisco</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Zipcode  <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>									
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="social-profile" role="tabpanel" aria-labelledby="social-profile-tab" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Facebook</label>
										<input type="text" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Twitter</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">LinkedIn</label>
										<input type="email" class="form-control">
									</div>										
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Skype</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Whatsapp</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Instagram</label>
										<input type="email" class="form-control">
									</div>									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="access" role="tabpanel" aria-labelledby="access-tab" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="mb-4">
								<h6 class="fs-14 fw-medium mb-1">Visibility</h6>
								<div class="d-flex align-items-center">
								<div class="form-check me-3">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault01">
									<label class="form-check-label text-dark" for="flexRadioDefault01">
										Public
									</label>
								</div>
								<div class="form-check me-3">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault02" checked>
									<label class="form-check-label text-dark" for="flexRadioDefault02">
										Private
									</label>
								</div>
								<div class="form-check ">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault03" checked>
									<label class="form-check-label text-dark" for="flexRadioDefault03">
										Select People
									</label>
								</div>
								</div>
							</div>
							<div class="p-3 bg-gray br-5 mb-4">
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-06">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-01.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Michael Walker</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-07">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-02.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Sophie Headrick</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-08">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-03.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Cameron Drake</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-09">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-04.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Doris Crowley</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-11">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/profiles/avatar-12.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Thomas Bordelon</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-primary">Confirm</a>
								</div>
							</div>
							<div class="mb-3 ">
								<label class="form-label">Status</label>
								<select class="select">
									<option>Select</option>
									<option>Active</option>
									<option>Inactive</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_compay">Save </button>
						</div>
					</div>
						
				</div>
				
				
			</form>
		</div>
	</div>
</div>
<!-- /Add Company -->

<!-- Add Deals -->
<div class="modal fade" id="add_deals">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Deals</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="deals.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Deal Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-target="#add_pipeline" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<select class="select">
									<option>Select</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Open</option>
									<option>Won</option>
									<option>Lost</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Deal Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Currency<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>USD</option>
									<option>Euro</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Period <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Period Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Contact <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Project <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Office Management App</option>
									<option>Clinic Management </option>
									<option>Educational Platform</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Due Date <span class="text-danger"> *</span> </label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Expected Closing  Date <span class="text-danger"> *</span> </label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>	
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Assignee <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Tags  <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Followup Date   <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Source  <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Phone Calls</option>
									<option>Social Media</option>
									<option>Refferal Sites</option>
									<option>Web Analytics</option>
									<option>Previous Purchase</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Priority   <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>High</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Description    <span class="text-danger"> *</span></label>
								<textarea class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Add Deal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Deals -->

<!-- Add Pipeline -->
<div class="modal fade" id="add_pipeline">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Pipeline</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline Stages   <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Inpipline</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Follow Up</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Schedule Service</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash" data-bs-toggle="modal" data-bs-target="#delete_modal"></i></span></a>
										</div>
									</div>
								</div>
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Access</label>
								<div class="d-flex  access-item nav">
									<div class="d-flex align-items-center">
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#all">
											<input type="radio" class="status-radio me-2" id="all" name="status" checked >
											<label for="all">All</label>
										</div>
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#select-person">
											<input type="radio" class="status-radio me-2" id="select" name="status">
											<label for="select">Select Person</label>
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="select-person">
										<div class="access-wrapper">	
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
													</div>
												</div>
											</div>
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pipeline-access">Add Pipeline</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Pipeline -->

<!-- Edit Pipeline -->
<div class="modal fade" id="edit_pipeline">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Pipeline</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" value="Marketing">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline Stages   <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Inpipline</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Follow Up</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Schedule Service</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Access</label>
								<div class="d-flex  access-item nav">
									<div class="d-flex align-items-center">
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#all2">
											<input type="radio" class="status-radio me-2" id="all2" name="status" checked >
											<label for="all2">All</label>
										</div>
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#select-person2">
											<input type="radio" class="status-radio me-2" id="select2" name="status">
											<label for="select2">Select Person</label>
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="select-person2">
										<div class="access-wrapper">	
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
													</div>
												</div>
											</div>
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pipeline-access">Add Pipeline</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Pipeline -->

<!-- Pipeline Access -->
<div class="modal fade" id="pipeline-access">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Pipeline Access</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-icon-addon">
										<i class="ti ti-search text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<div class="p-2 border br-5">
									<div class="pipeline-access-items">
										<div class="d-flex  align-items-center p-2">
											<div class="form-check  form-check-md me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/profiles/avatar-19.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium fs-12"><a href="#">Darlee Robertson</a></h6>
													<span class="fs-10 fw-normal">Darlee Robertson</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center p-2">
											<div class="form-check form-check-md me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium fs-12"><a href="#">Sharon Roy</a></h6>
													<span class="fs-10 fw-normal">Installer</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center p-2">
											<div class="form-check form-check-md me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium fs-12"><a href="#">Vaughan Lewis</a></h6>
													<span class="fs-10 fw-normal">Senior  Manager</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center p-2">
											<div class="form-check form-check-md me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium fs-12"><a href="#">Jessica Louise</a></h6>
													<span class="fs-10 fw-normal">Test Engineer</span>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center p-2">
											<div class="form-check form-check-md me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium fs-12"><a href="#">Test Engineer</a></h6>
													<span class="fs-10 fw-normal">UI /UX Designer</span>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Pipeline Access -->

<!-- Add New Stage -->
<div class="modal fade" id="add_stage">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Stage</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Stage Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Add Stage</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add New Stage -->

<!-- Edit Stage -->
<div class="modal fade" id="edit_stage">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Stage</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Edit Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control" value="Inpipeline">
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save Changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit Stage -->

<!-- Add Contact -->
<div class="modal fade" id="add_contact">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Contact</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="contacts-crm.php">
				<div class="contact-grids-tab">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
						  <button class="nav-link active" id="info-tab1" data-bs-toggle="tab" data-bs-target="#basic-info1" type="button" role="tab" aria-selected="true">Basic Information</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link" id="address-tab1" data-bs-toggle="tab" data-bs-target="#address1" type="button" role="tab" aria-selected="false">Address</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link" id="social-profile-tab1" data-bs-toggle="tab" data-bs-target="#social-profile1" type="button" role="tab" aria-selected="false">Social Profiles</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link" id="access-tab1" data-bs-toggle="tab" data-bs-target="#access1" type="button" role="tab" aria-selected="false">Access</button>
						</li>
						
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info1" role="tabpanel" aria-labelledby="info-tab1" tabindex="0">
							<div class="modal-body pb-0 ">	
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
											<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
												<i class="ti ti-photo text-gray-2 fs-16"></i>
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
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">First Name <span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input type="email" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Job Title <span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Company Name <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>BrightWave Innovations</option>
												<option>Stellar Dynamics</option>
												<option>Quantum Nexus</option>
											</select>
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<div class="d-flex align-items-center justify-content-between">
												<label class="form-label">Email</label>
												<div class="d-flex align-items-center">
													<span class="me-1">Option</span>
													<div class="form-check form-switch">
														<input class="form-check-input" type="checkbox" role="switch">
													</div>
												</div>
											</div>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Phone Number 2<span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Fax</label>
											<input type="text" class="form-control">
										</div>									
									</div>
									<div class="col-md-4">
										<div class="input-block mb-3">
											<div class="d-flex justify-content-between align-items-center mb-2">
												<label class="col-form-label p-0">Deals <span class="text-danger"> *</span></label>
												<a href="#" class="add-new text-primary" data-bs-target="#add_deals" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
											</div>
											<select class="select">
												<option>Select</option>
												<option>Collins</option>
												<option>Konopelski</option>
												<option>Adams</option>
											</select>
										</div>		
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Date of Birth <span class="text-danger"> *</span> </label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
												<span class="input-icon-addon">
													<i class="ti ti-calendar text-gray-7"></i>
												</span>
											</div>
										</div>									
									</div>
									<div class="col-md-4">
										<div class="mb-3 ">
											<label class="form-label">Ratings <span class="text-danger"> *</span></label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control">
												<span class="input-icon-addon">
													<i class="ti ti-star text-gray-6"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3 ">
											<label class="form-label">Owner  <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>Hendry Milner</option>
												<option>Guilory Berggren</option>
												<option>Jami Carlile</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3 ">
											<label class="form-label">Industry <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>Retail Industry</option>
												<option>Banking</option>
												<option>Hotels</option>
												<option>Financial Services</option>
												<option>Insurance</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3 ">
											<label class="form-label">Currency <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>USD</option>
												<option>Euro</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3 ">
											<label class="form-label">Language <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>English</option>
												<option>Chinese</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Tags <span class="text-danger"> *</span> </label>
											<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 ">
											<label class="form-label">Source <span class="text-danger"> *</span> </label>
											<select class="select">
												<option>Select</option>
												<option>Phone Calls</option>
												<option>Social Media</option>
												<option>Refferal Sites</option>
												<option>Web Analytics</option>
												<option>Previous Purchase</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Save </button>
							</div>
					</div>
					<div class="tab-pane fade" id="address1" role="tabpanel" aria-labelledby="address-tab1" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Address <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Country <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>USA</option>
											<option>Canada</option>
											<option>Germany</option>
											<option>France</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">State <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>California</option>
											<option>New York</option>
											<option>Texas</option>
											<option>Florida</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">City <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Los Angeles</option>
											<option>San Diego</option>
											<option>Fresno</option>
											<option>San Francisco</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Zipcode  <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>									
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="social-profile1" role="tabpanel" aria-labelledby="social-profile-tab1" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Facebook</label>
										<input type="text" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Twitter</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">LinkedIn</label>
										<input type="email" class="form-control">
									</div>										
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Skype</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Whatsapp</label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Instagram</label>
										<input type="email" class="form-control">
									</div>									
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save </button>
						</div>
					</div>
					<div class="tab-pane fade" id="access1" role="tabpanel" aria-labelledby="access-tab1" tabindex="0">
						<div class="modal-body pb-0 ">	
							<div class="mb-4">
								<h6 class="fs-14 fw-medium mb-1">Visibility</h6>
								<div class="d-flex align-items-center">
								<div class="form-check me-3">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
									<label class="form-check-label text-dark" for="flexRadioDefault1">
										Public
									</label>
								</div>
								<div class="form-check me-3">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
									<label class="form-check-label text-dark" for="flexRadioDefault2">
										Private
									</label>
								</div>
								<div class="form-check ">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
									<label class="form-check-label text-dark" for="flexRadioDefault3">
										Select People
									</label>
								</div>
								</div>
							</div>
							<div class="p-3 bg-gray br-5 mb-4">
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-6">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-01.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Michael Walker</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-7">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-02.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Sophie Headrick</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-8">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-03.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Cameron Drake</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-9">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/reports/user-04.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Doris Crowley</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center mb-3">
									<input class="form-check-input me-1" type="checkbox" value="" id="user-10">
									<div class="d-flex align-items-center file-name-icon">
										<a href="#" class="avatar avatar-md border avatar-rounded">
											<img src="assets/img/profiles/avatar-12.jpg" class="img-fluid" alt="img">
										</a>
										<div class="ms-2">
											<h6 class="fw-normal"><a href="#">Thomas Bordelon</a></h6>
										</div>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-primary">Confirm</a>
								</div>
							</div>
							<div class="mb-3 ">
								<label class="form-label">Status</label>
								<select class="select">
									<option>Select</option>
									<option>Active</option>
									<option>Inactive</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_compay">Save </button>
						</div>
					</div>
						
				</div>
				
				
			</form>
		</div>
	</div>
</div>
<!-- /Add Contact -->

<!-- Success Contact -->
<div class="modal fade" id="success_compay">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-body pb-0">
				<div class="p-4">
					<div class="row">
						<div class="col-md-12">
							<div class="d-flex flex-column align-items-center justify-content-center mb-3">
								<img src="assets/img/reports-img/check-icon.svg" alt="icon" class="mb-3">
								<h5>Company Added Successfully</h5>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<a href="companies-crm.php" class="btn btn-dark d-flex justify-content-center ">Back to List</a>
							</div>								
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<a href="company-details.php" class="btn btn-primary bg-primary-gradient d-flex justify-content-center ">Detail Page</a>		
							</div>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Success Contact -->


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
					<a href="leads.php" class="btn btn-danger">Yes, Delete</a>
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
	<!-- Drag Card -->
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/kanban.js"></script>
	<script src="assets/js/leads.js"></script>

</body>
</html>