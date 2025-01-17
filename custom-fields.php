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
						<h2 class="mb-1">Settings</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</nav>
					</div>
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
					<li class="nav-item">
						<a class="nav-link" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="email-settings.php"><i class="ti ti-server-cog me-2"></i>System Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="payment-gateways.php"><i class="ti ti-settings-dollar me-2"></i>Financial Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="custom-css.php"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column list-group settings-list">
									<a href="salary-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Salary Settings</a>
									<a href="approval-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Approval Settings</a>
									<a href="invoice-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Invoice Settings</a>
									<a href="leave-type.php" class="d-inline-flex align-items-center rounded py-2 px-3">Leave Type</a>
									<a href="custom-fields.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Custom Fields</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Custom Fields</h4>
                                    <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#new-field"><i class="ti ti-circle-plus me-2"></i>Add Fields</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="no-sort">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox" id="select-all">
                                                    </div>
                                                </th>
                                                <th class="fw-semibold">Module</th>
                                                <th class="fw-semibold">Label</th>
                                                <th class="fw-semibold">Type</th>
                                                <th class="fw-semibold">Default Value</th>
                                                <th class="fw-semibold">Required/Disable</th>
                                                <th class="fw-semibold">Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="no-sort">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </th>
                                                <th>Employee</th>
                                                <th class="text-gray fw-normal">Preferred Language</th>
                                                <th class="text-gray fw-normal">Select</th>
                                                <th class="text-gray fw-normal">English</th>
                                                <th class="text-gray fw-normal">
                                                    Required
                                                </th>
                                                <th class="d-flex">
                                                    <span class="badge badge-success badge-sm d-flex align-items-center"><i class="ti ti-point-filled"></i>Active</span>
                                                </th>
                                                <th>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="text-gray" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-field"><i class="ti ti-edit me-2"></i>Edit</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
											<tr>
                                                <th class="no-sort">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </th>
                                                <th>Projects</th>
                                                <th class="text-gray fw-normal">Project Type</th>
                                                <th class="text-gray fw-normal">Select</th>
                                                <th class="text-gray fw-normal">Internal</th>
                                                <th class="text-gray fw-normal">
                                                    Required
                                                </th>
                                                <th class="d-flex">
                                                    <span class="badge badge-success badge-sm d-flex align-items-center"><i class="ti ti-point-filled"></i>Active</span>
                                                </th>
                                                <th>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="text-gray" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-field"><i class="ti ti-edit me-2"></i>Edit</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
											<tr>
                                                <th class="no-sort">
                                                    <div class="form-check form-check-md">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </th>
                                                <th>Tasks</th>
                                                <th class="text-gray fw-normal">Task Type</th>
                                                <th class="text-gray fw-normal">Select</th>
                                                <th class="text-gray fw-normal">Design</th>
                                                <th class="text-gray fw-normal">
                                                    Required
                                                </th>
                                                <th class="d-flex">
                                                    <span class="badge badge-success badge-sm d-flex align-items-center"><i class="ti ti-point-filled"></i>Active</span>
                                                </th>
                                                <th>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" class="text-gray" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-field"><i class="ti ti-edit me-2"></i>Edit</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
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

        <!-- Add New Fields -->
        <div class="modal fade" id="new-field">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add Custom Field
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="custom-fields.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Module</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Label</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Default Value</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Input Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Text</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <label class="form-label me-3">Required</label>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="required" id="required1" checked>
                                            <label class="form-check-label" for="required1">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="required" type="radio" id="required2">
                                            <label class="form-check-label" for="required2">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <Select class="select">
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Add New Fields -->

        <!-- Edit New Fields -->
        <div class="modal fade" id="edit-field">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Edit Custom Field
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="custom-fields.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Module</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Label</label>
                                        <input class="form-control" type="text" value="Middle Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Default Value</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Input Type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Text</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex mb-3">
                                        <label class="form-label me-3">Required</label>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="required" id="required3" checked>
                                            <label class="form-check-label" for="required3">Yes</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="required" type="radio" id="required4">
                                            <label class="form-check-label" for="required4">No</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <Select class="select">
                                            <option selected>Active</option>
                                            <option>Inactive</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">       
                                <div class="col-6">                  
                                    <a href="#" class="btn btn-outline-primary w-100" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                                </div>     
                                <div class="col-6">      
                                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                                </div> 
                            </div>
                        </form>
                    </div>       
                </div>
            </div>
        </div>
        <!-- /Edit New Fields -->

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>