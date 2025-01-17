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
						<h2 class="mb-1">Pages</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Content
								</li>
								<li class="breadcrumb-item active" aria-current="page">Pages</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_page" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Page</a>
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
						<h5>Pages List</h5>
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
										<th>Page</th>
										<th>Page Slug</th>
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
                                            <h6 class="fw-medium"><a href="#">Employee</a></h6>
                                        </td>
                                        <td>employee</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Clients</a></h6>
                                        </td>
                                        <td>clients</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Projects</a></h6>
                                        </td>
                                        <td>projects</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Tickets</a></h6>
                                        </td>
                                        <td>tickets</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Contacts</a></h6>
                                        </td>
                                        <td>contacts</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Companies</a></h6>
                                        </td>
                                        <td>companies</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Deals</a></h6>
                                        </td>
                                        <td>deals</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Leads</a></h6>
                                        </td>
                                        <td>leads</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Pipeline</a></h6>
                                        </td>
                                        <td>pipeline</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Activities</a></h6>
                                        </td>
                                        <td>activities</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_page" class="me-2"><i class="ti ti-edit"></i></a>
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

        <!-- Add Pages -->
        <div class="modal fade" id="add_page">
            <div class="modal-dialog modal-dialog-centered modal-mg w-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Pages</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="pages.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Title</label>
										<input type="text" class="form-control">
									</div>									
								</div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Keywords</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea rows="3" class="form-control"></textarea>
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
                            <button type="submit" class="btn btn-primary">Add Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Pages -->

        <!-- Edit Pages -->
        <div class="modal fade" id="edit_page">
            <div class="modal-dialog modal-dialog-centered modal-mg w-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Pages</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="pages.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Title</label>
										<input type="text" class="form-control" value="Employee">
									</div>									
								</div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input type="text" class="form-control" value="employee">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Keywords</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea rows="3" class="form-control"></textarea>
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
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Pages -->

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
							<a href="pages.php" class="btn btn-danger">Yes, Delete</a>
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