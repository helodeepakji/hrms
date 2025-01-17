<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Form Mask - HRMS admin template</title>
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
						<h2 class="mb-1">Call History</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Application
								</li>
								<li class="breadcrumb-item active" aria-current="page">Call History</li>
							</ol>
						</nav>
					</div>
					<div class="head-icons">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Call History List</h5>
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
									Call Type
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Incoming</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Outgoing</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Missed Call</a>
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
										<th>Name</th>
										<th>Phone</th>
										<th>Call Type</th>
										<th>Duration</th>
										<th>Date & Time</th>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
													<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"  data-bs-target="#view_details">Anthony Lewis</a></p>
													<span class="fs-12">anthony@example.com</span>
												</div>
											</div>
										</td>
                                        <td>(123) 4567 890</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-incoming text-success me-2"></i>Incoming
											</div>
										</td>
                                        <td>00.25</td>
                                        <td>14 Jan 2024, 04:27 AM </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img  src="assets/img/users/user-09.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
													<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Brian Villalobos</a></p>
													<span class="fs-12">brian@example.com</span>
                                            	</div>
											</div>
										</td>
                                        <td>(179) 7382 829</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-outgoing text-success me-2"></i>Outgoing
											</div>
										</td>
                                        <td>00.10</td>
                                        <td>21 Jan 2024, 03:19 AM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-01.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Harvey Smith</a></p>
                                                	<span class="fs-12">harvey@example.com</span>
												</div>
                                            </div>
										</td>                             
                                        <td>(184) 2719 738</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-video text-success me-2"></i>Incoming
											</div>
										</td>
                                        <td>00.40</td>
                                        <td>20 Feb 2024, 12:15 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal"  data-bs-target="#view_details">
													<img src="assets/img/users/user-33.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                               		<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">peral@example.com</a></p>
                                                	<span class="fs-12">peral@example.com</span>
												</div>
                                            </div>
										</td>
                                        <td>(193) 7839 748</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-x text-danger me-2"></i>Missed Call
											</div>
										</td>
                                        <td>00.00</td>
                                        <td>15 Mar 2024, 12:11 AM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                                    src="assets/img/users/user-33.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Doglas Martini</a></p>
                                                	<span class="fs-12">martniwr@example.com</span>
												</div>
                                            </div>
										</td>
                                        <td>(183) 9302 890</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-video text-success me-2"></i>Outgoing
											</div>
										</td>
                                        <td>00.35</td>
                                        <td>12 Apr 2024, 05:48 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-02.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Linda Ray</a></p>
                                               		<span class="fs-12">ray456@example.com</span>
												</div>
                                            </div>
										</td>
                                        <td>(120) 3728 039</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-incoming text-success me-2"></i>Incomiing
											</div>
										</td>
                                        <td>01.40</td>
                                        <td>20 Apr 2024, 06:11 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-35.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Elliot Murray</a></p>
                                                	<span class="fs-12">murray@example.com</span>
												</div>
                                            </div>
										</td>
                                        <td>(102) 8480 832</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-video text-danger me-2"></i>Missed call
											</div>
										</td>
                                        <td>00.00</td>
                                        <td>06 Jul 2024, 07:15 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-36.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Rebecca Smtih</a></p>
                                                	<span class="fs-12">smtih@example.com</span>
												</div>
											</div>
										</td>
                                        <td>(162) 8920 713</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-outgoing text-success me-2"></i>Outgoing
											</div>
										</td>
                                        <td>00.45</td>
                                        <td>02 Sep 2024, 09:21 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                                    src="assets/img/users/user-37.jpg" class="img-fluid rounded-circle" alt="img"></a>
                                                <div class="ms-2">
                                                	<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Connie Waters</a></p>
                                                	<span class="fs-12">connie@example.com</span>
												</div>
											</div>
										</td>
                                        <td>(189) 0920 723</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-incoming text-success me-2"></i>Incoming
											</div>
										</td>
                                        <td>00.50</td>
                                        <td>15 Nov 2024, 12:44 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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
											<div class="d-flex align-items-center">
                                                <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details">
													<img src="assets/img/users/user-38.jpg" class="img-fluid rounded-circle" alt="img">
												</a>
                                                <div class="ms-2">
                                               		<p class="text-dark fw-medium mb-0"><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Lori Broaddus</a></p>
                                               		<span class="fs-12">broaddus@example.com</span>
												</div>
											</div>
										</td>
                                        <td>(168) 8392 823</td>
                                        <td>
											<div class="d-inline-flex align-items-center">
												<i class="ti ti-phone-x text-danger me-2"></i>Missed call
											</div>
										</td>
                                        <td>00.00</td>
                                        <td>10 Dec 2024, 11:23 PM</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#call_history"><i class="ti ti-eye"></i></a>
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

		<!-- Edit Employee -->
		<div class="modal fade" id="call_history">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title">Caller Details</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="call-history.php">
						<div class="modal-body">
							<div class="card bg-light-500">
								<div class="card-body">
									<div class="text-center">
										<div class="avatar avatar-xxxl mb-3">
											<img src="assets/img/users/user-32.jpg" alt="img" class="rounded-circle">
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-center">
										<a href="video-call.php" class="btn btn-gray call-item p-0 d-flex align-items-center justify-content-center me-3"><i class="ti ti-video fs-20"></i></a>
										<a href="chat.php" class="btn btn-gray call-item p-0 d-flex align-items-center justify-content-center me-3"><i class="ti ti-message fs-20"></i></a>
										<a href="voice-call.php" class="btn btn-gray call-item p-0 d-flex align-items-center justify-content-center"><i class="ti ti-phone fs-20"></i></a>
									</div>
								</div>
							</div>
							<div class="row g-4">
								<div class="col-md-6">
									<div>
										<p class="mb-1">Name</p>
										<h6 class="fw-medium">Anthony Lewis</h6>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<p class="mb-1">Total Calls</p>
										<h6 class="fw-medium">20</h6>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<p class="mb-1">Phone</p>
										<h6 class="fw-medium">(123) 4567 890</h6>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<p class="mb-1">Average Call Timing</p>
										<h6 class="fw-medium">00:30</h6>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<p class="mb-1">Email</p>
										<h6 class="fw-medium">anthony@example.com</h6>
									</div>
								</div>
								<div class="col-md-6">
									<div>
										<p class="mb-1">Average Waiting Time</p>
										<h6 class="fw-medium">00:05</h6>
									</div>
								</div>
							</div>	
						</div>	
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Employee -->

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
							<a href="call-history.php" class="btn btn-danger">Yes, Delete</a>
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