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
						<h2 class="mb-1">Budget Expenses</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Budget Expenses</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_new_expense" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Expense</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Budgets list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Budget Expenses List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            
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
										<th>Expense Name</th>
										<th>Category Name</th>
										<th>Sub Category Name</th>
										<th>Amount</th>
										<th>Expense Date</th>
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
											<h6 class="fw-medium"><a href="javascript:void(0);">Servers</a></h6>
										</td>
										<td>
											Technology
                                        </td>
										<td>
											Hardware Cost
										</td>
										<td>
											20000
										</td>
										<td>
											14 Jan 2024
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
										<td>
											<h6 class="fw-medium"><a href="javascript:void(0);">Payroll Tax</a></h6>
										</td>
										<td>
											Taxes
                                        </td>
										<td>
											Payroll Taxes
										</td>
										<td>
											40000
										</td>
										<td>
											21 Jan 2024
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
										<td>
											<h6 class="fw-medium"><a href="javascript:void(0);">Job Fair 2024</a></h6>
										</td>
										<td>
											Recruitment
                                        </td>
										<td>
											Advertisement
										</td>
										<td>
											10000
										</td>
										<td>
											10 Feb 2024
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
										<td>
											<h6 class="fw-medium"><a href="javascript:void(0);">Annual Meet</a></h6>
										</td>
										<td>
											Corporate Events
                                        </td>
										<td>
											Decorations
										</td>
										<td>
											20000
										</td>
										<td>
											18 Feb 2024
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Budgets list -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Expense -->
		<div class="modal fade" id="add_new_expense">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Budget Expense</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="budget-expenses.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Expense Name</label>
										<input type="text" class="form-control">
									</div>	
								</div>   
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Sub Category Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Amount</label>
										<input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expense Date </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
								<div class="col-md-12">
									<div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-center border border-dashed rounded p-3 flex-column">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent mb-2"><i class="ti ti-folder-open fs-24"></i></span>
                                            <p class="fs-14 text-center mb-2">Drag and drop your files</p>
                                            <div class="file-upload position-relative btn btn-sm btn-primary px-3 mb-2">
                                                <i class="ti ti-upload me-1"></i>Upload
                                                <input type="file" accept="video/image">
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Budget Expense</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add New Expense -->

		<!-- Edit New Expense -->
		<div class="modal fade" id="edit_new_expense">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Budget Expense</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="budget-expenses.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Expense Name</label>
										<input type="text" class="form-control" value="Servers">
									</div>	
								</div>   
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category Name</label>
										<input type="text" class="form-control" value="Technology">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Sub Category Name</label>
										<input type="text" class="form-control" value="Hardware Cost">
									</div>
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Amount</label>
										<input type="text" class="form-control" value="20000">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expense Date </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="14 Jan 2024">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
								<div class="col-md-12">
									<div class="mb-3">
                                        <div class="d-flex align-items-center justify-content-center border border-dashed rounded p-3 flex-column">
                                            <span class="avatar avatar-lg avatar-rounded bg-primary-transparent mb-2"><i class="ti ti-folder-open fs-24"></i></span>
                                            <p class="fs-14 text-center mb-2">Drag and drop your files</p>
                                            <div class="file-upload position-relative btn btn-sm btn-primary px-3 mb-2">
                                                <i class="ti ti-upload me-1"></i>Upload
                                                <input type="file" accept="video/image">
                                            </div>
                                        </div>
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
		<!-- /Edit New Expense -->

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
							<a href="budget-expenses.php" class="btn btn-danger">Yes, Delete</a>
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