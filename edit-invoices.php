<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Player CSS -->
 <link rel="stylesheet" href="assets/css/plyr.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

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
				<div class="row align-items-center">
					<div class="col-md-10 mx-auto">
						<div class="card">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between mb-4">
									<a href="invoices.php" class="back-icon align-items-center fs-14 d-inline-flex fw-medium">
										<span class=" d-flex justify-content-center align-items-center rounded-circle me-2">
											<i class="ti ti-arrow-left fs-12"></i>
										</span>
										Back to List
									</a>
									<a href="#" class="text-primary text-decoration-underline" data-bs-toggle="modal" data-bs-target="#invoice_preview">
										Preview 
									</a>
								</div>

								<!-- My details -->
								<div class="bg-light p-3 rounded mb-3">
									<div class="d-flex justify-content-between align-items-center mb-3">
										<h5>From</h5>
										<a href="#" class="text-dark fw-medium"><span class="text-gray me-2"><i class="ti ti-edit"></i></span>Edit Details</a>
									</div>
									<div>
										<h4 class="mb-1">Thomas Lawler</h4>
										<p class="mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
										<p class="mb-1">Email : <span class="text-dark">Tarala2445@example.com</span></p>
										<p>Phone : <span class="text-dark">+1 987 654 3210</span></p>
									</div>
								</div>
								<!-- /My details -->

								<!-- Invoice Details-->
								<div class="border-bottom mb-3">
									<h4 class="mb-2">Invoice Details</h4>
									<div class="mb-2">
										<label class="form-label">Invoice Title</label>
										<input type="text" class="form-control" value="Design & development of Website">
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Invoice No</label>
												<input type="text" class="form-control" value="INV-1454">
											</div>
										</div>
										<div class="col-md-4 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Invoice Date</label>
												<div class="input-icon position-relative w-100 me-2">
													<span class="input-icon-addon">
														<i class="ti ti-calendar"></i>
													</span>
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Due Date</label>
												<div class="input-icon position-relative w-100 me-2">
													<span class="input-icon-addon">
														<i class="ti ti-calendar"></i>
													</span>
													<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Invoice Details-->

								<!-- Payment Details-->
								<div class="border-bottom mb-3">
									<h4 class="mb-2">Payment Details</h4>
									
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="mb-3">
												<div class="d-flex justify-content-between align-items-center">
													<label class="form-label">Customer</label>
													<a href="#" class="text-primary fw-medium d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_customer">
														<i class="ti ti-plus me-2"></i>Add New
													</a>
												</div>
												<input type="text" class="form-control" value="Anthony Lewis">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Reference Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Select Payment Type</label>
												<select class="select">
													<option>Select</option>
													<option selected>Credit</option>
													<option>Debit</option>
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="mb-3">
												<label class="form-label">Bank Details</label>
												<select class="select">
													<option>Select</option>
													<option selected>Bank of America</option>
													<option>U.S. Bank</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<!-- /Payment Details-->

								<!-- Add Items-->
								<div class="border-bottom mb-3">
									<h4 class="mb-2">Add Items</h4>
									<div class="border rounded p-3 mb-3">
										<div class="add-description-info">									
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<label class="form-label">Description</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="row">
														<div class="col-md-4">
															<div class="mb-3">
																<label class="form-label">Qty</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="mb-3">
																<label class="form-label">Discount</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="col-md-4">
															<div class="mb-3">
																<label class="form-label">Rate</label>
																<input type="text" class="form-control">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<a href="javascript:void(0);" class="text-primary add-more-description fw-medium d-flex align-items-center"><i class="ti ti-plus me-2"></i>Add New</a>
									</div>
								</div>
								<!-- /Add Items-->

								<!-- Additional Details-->
								<div>
									<h4 class="mb-2">Additional Details</h4>
									<div class="mb-3">
										<label class="form-label"> Description</label>
										<textarea class="form-control" rows="3" ></textarea>
									</div>
									<div class="mb-3">
										<label class="form-label">Notes</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
								<!-- Additional Details-->

								<div class="d-flex justify-content-end align-items-center flex-wrap row-gap-3">
									<a href="#" class="btn btn-dark d-flex justify-content-center align-items-center"><i class="ti ti-printer me-2"></i>Save as Draft</a>
									<a href="#" class="btn btn-primary d-flex justify-content-center align-items-center  ms-2"><i class="ti ti-copy me-2"></i>Save & Send</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<div class="footer d-sm-flex align-items-center justify-content-between bg-white border-top p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed & Developed By <a href="#" class="text-primary">Dreams</a></p>
			</div>
			<!-- /Footer -->
        </div>
		<!-- /Page Wrapper -->

		<!-- Invoice Preview -->
		<div class="modal fade" id="invoice_preview">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-body p-4">
						<div class="invoice-content">		
							<!-- Invoices -->
							<div class="d-flex justify-content-center align-items-center">
								<div class="flex-fill">
									<div class="row justify-content-between align-items-center border-bottom mb-3">
										<div class="col-md-6">
											<div class="mb-2">
												<img src="assets/img/logo.svg" class="img-fluid" alt="logo">
											</div>
											<p>3099 Kennedy Court Framingham, MA 01702</p>
										</div>
										<div class="col-md-6">
											<div class=" text-end mb-3">
												<h5 class="text-gray mb-1">Invoice No <span class="text-primary">#INV0001</span></h5>
												<p class="mb-1">Created Date : <span class="text-dark">Sep 24, 2023</span> </p>
												<p>Due Date : <span class="text-dark">Sep 30, 2023</span> </p>
											</div>
										</div>
									</div>
									<div class="row border-bottom row-gap-3 mb-3">
										<div class="col-md-6">
											<p class="text-dark mb-2 fw-medium">From</p>
											<div>
												<h6 class="mb-1">Thomas Lawler</h6>
												<p class="mb-1">2077 Chicago Avenue Orosi, CA 93647</p>
												<p class="mb-1">Email : <span class="text-dark">Tarala2445@example.com</span></p>
												<p>Phone : <span class="text-dark">+1 987 654 3210</span></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<p class="text-dark mb-2 fw-medium">To</p>
												<div>
													<h6 class="mb-1">Sara Inc,.</h6>
													<p class="mb-1">3103 Trainer Avenue Peoria, IL 61602</p>
													<p class="mb-1">Email : <span class="text-dark">Sara_inc34@example.com</span></p>
													<p>Phone : <span class="text-dark">+1 987 471 6589</span></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="border-bottom mb-3">
											<p class="mb-3">Invoice For : <span class="text-dark fw-medium">Design & development of Website</span></p>
										</div>
										<div class="table-responsive mb-3">
											<table class="table">
												<thead>
													<tr>
														<th>Job Description</th>
														<th class="text-end">Qty</th>
														<th class="text-end">Cost</th>
														<th class="text-end">Discount</th>
														<th class="text-end">Total</th>
													</tr>													
												</thead>
												<tbody>
													<tr>
														<td>UX Strategy</td>
														<td class="text-end">1</td>
														<td class="text-end">$500</td>
														<td class="text-end">$100</td>
														<td class="text-end">$500</td>
													</tr>
													<tr>
														<td>Design System</td>
														<td class="text-end">1</td>
														<td class="text-end">$5000</td>
														<td class="text-end">$100</td>
														<td class="text-end">$5000</td>
													</tr>
													<tr>
														<td>Brand Guidellines</td>
														<td class="text-end">1</td>
														<td class="text-end">$5000</td>
														<td class="text-end">$100</td>
														<td class="text-end">$5000</td>
													</tr>
													<tr>
														<td>Social Media Template</td>
														<td class="text-end">1</td>
														<td class="text-end">$5000</td>
														<td class="text-end">$100</td>
														<td class="text-end">$5000</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row border-bottom mb-3">
										<div class="col-md-12">
											<div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
												<p class="mb-0">Sub Total</p>
												<p class="text-dark fw-medium mb-2">$5500</p>
											</div>
											<div class="d-flex justify-content-between align-items-center border-bottom mb-2 pe-3">
												<p class="mb-0">Discount(0%)</p>
												<p class="text-dark fw-medium mb-2">$400</p>
											</div>
											<div class="d-flex justify-content-between align-items-center mb-3 pe-3">
												<p class="mb-0">VAT(5%)</p>
												<p class="text-dark fw-medium mb-2">$54</p>
											</div>
											<div class="d-flex justify-content-between align-items-center mb-3 pe-3">
												<h5>Total Amount</h5>
												<h5>$5775</h5>
											</div>
											<p class="fs-12 mb-3">
												Amount in Words : Dollar Five thousand Seven Seventy Five
											</p>
										</div>
									</div>
									<div class="row justify-content-end align-items-end text-end">
										<div class="col-md-3">
											<div class="text-end">
												<img src="assets/img/sign.svg" class="img-fluid" alt="sign">
											</div>
											<div class="text-end">
												<h6 class="fs-14 fw-medium mb-1">Ted M. Davis</h6>
												<p>Assistant Manager</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Invoices -->
						</div>
					</div>
						
				</div>
			</div>
		</div>
		<!-- /Invoice Preview -->

		<!-- Add Customer -->
		<div class="modal fade" id="add_customer">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Customer</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="add-invoices.php">
						<div class="modal-body">
							<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
								<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
									<i class="ti ti-photo-plus fs-16"></i>
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
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Last Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">User Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger"> *</span></label>
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
										<label class="form-label">Company <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-0">
										<label class="form-label">Address <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end m-0">
								<button class="btn btn-outline border me-2" type="button" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Customer -->

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Owl Carousel -->
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/invoice.js"></script>
</body>
</html>