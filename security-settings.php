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
						<a class="nav-link active" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column list-group settings-list">
									<a href="profile-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Profile Settings</a>
									<a href="security-settings.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Security Settings</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="border-bottom mb-3 pb-3">
									<h4>Security Settings</h4>
								</div>
								<form action="profile-settings.php">
									<div class="border-bottom mb-3">
										<div class="row">
											<div class="col-md-12">
												<div>
													<h6 class="mb-3">Password Information</h6>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Current Password</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">New Password</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Confirm Password</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-end">
											<button type="button" class="btn btn-outline-light border me-3">Cancel</button>
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</div>
								</form>
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

		<!-- Change Password -->
		<div class="modal fade custom-modal" id="change-password">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content doctor-profile">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Change Password</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<div class="modal-body p-4">
						<form action="success.php">
							<div class="mb-3">
								<label class="form-label">Current Password <span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="pass-input form-control">
									<span class="ti toggle-password ti-eye-off"></span>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Current Password<span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="pass-inputs form-control">
									<span class="ti toggle-passwords ti-eye-off"></span>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="form-control pass-inputa">
									<span class="ti toggle-passworda ti-eye-off"></span>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer border-top">
						<div class="acc-submit">
							<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button class="btn btn-primary" type="submit">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Change Password -->

		<!-- Change Email -->
		<div class="modal fade custom-modal" id="change-email">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content doctor-profile">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Change Email</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<div class="modal-body p-4">
						<form action="provider-security-settings.php">
							<div class="wallet-add">
								<div class="mb-3">
									<label class="form-label">Current Email Address</label>
									<input type="email" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">New Email Address <span class="text-danger">*</span></label>
									<input type="email" class="form-control">
								</div>
								<div class="mb-3">
									<label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-inputa">
										<span class="ti toggle-passworda ti-eye-off"></span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer border-top">
						<div class="acc-submit">
							<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button class="btn btn-primary" type="submit">Save Change</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Change Email -->

		<!-- Change Phone -->
		<div class="modal fade custom-modal" id="change-phone">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content doctor-profile">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Change Phone Number</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<div class="modal-body p-4">
						<form action="provider-security-settings.php">
							<div class="wallet-add">
								<div class="mb-3">
									<label class="form-label">Current Phone Number</label>
									<input class="form-control form-control-lg group_formcontrol" id="phone" name="phone" type="text" placeholder="Enter Phone Number">
								</div>
								<div class="mb-3">
									<label class="form-label">New Phone Number <span class="text-danger">*</span></label>
									<input class="form-control form-control-lg group_formcontrol" id="phone1" name="phone" type="text" placeholder="Enter Phone Number">
								</div>
								<div class="mb-3">
									<label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-inputa">
										<span class="ti toggle-passworda ti-eye-off"></span>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer border-top">
						<div class="acc-submit">
							<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button class="btn btn-dark" type="submit">Change Number</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Change Phone -->

		<!-- Device Management -->
		<div class="modal fade custom-modal" id="device_management">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Device Management</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<div class="modal-body">
						<div class="table">
							<table class="table">
								<thead class="thead-light">
									<tr>
										<th>Device</th>
										<th>Date</th>
										<th>Location</th>
										<th>IP Address</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Chrome - Windows</td>
										<td>15 May 2025, 10:30 AM</td>
										<td>New York / USA</td>
										<td>232.222.12.72</td>
										<td>
											<span><i class="ti ti-trash text-gray-6"></i></span>
										</td>
									</tr>
									<tr>
										<td>Safari Macos</td>
										<td>10 Apr 2025, 05:15 PM</td>
										<td>New York / USA</td>
										<td>224.111.12.75</td>
										<td>
											<span><i class="ti ti-trash text-gray-6"></i></span>
										</td>
									</tr>
									<tr>
										<td>Firefox Windows</td>
										<td>15 Mar 2025, 02:40 PM</td>
										<td>New York / USA</td>
										<td>111.222.13.28</td>
										<td>
											<span><i class="ti ti-trash text-gray-6"></i></span>
										</td>
									</tr>
									<tr>
										<td>Safari Macos</td>
										<td>15 May 2025, 10:30 AM</td>
										<td>New York / USA</td>
										<td>333.555.10.54</td>
										<td>
											<span><i class="ti ti-trash text-gray-6"></i></span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Device Management -->

		<!-- Activity Management -->
		<div class="modal fade custom-modal" id="account_activity">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Account Activity</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<div class="modal-body">
						<div class="table">
							<table class="table">
								<thead class="thead-light">
									<tr>
										<th>Device</th>
										<th>Date</th>
										<th>Location</th>
										<th>IP Address</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Chrome - Windows</td>
										<td>15 May 2025, 10:30 AM</td>
										<td>New York / USA</td>
										<td>232.222.12.72</td>
										<td>
											<span class="badge badge-sm badge-success"><i class="ti ti-point-filled me-1"></i>connect</span>
										</td>
									</tr>
									<tr>
										<td>Safari Macos</td>
										<td>10 Apr 2025, 05:15 PM</td>
										<td>New York / USA</td>
										<td>224.111.12.75</td>
										<td>
											<span class="badge badge-sm badge-success"><i class="ti ti-point-filled me-1"></i>connect</span>
										</td>
									</tr>
									<tr>
										<td>Firefox Windows</td>
										<td>15 Mar 2025, 02:40 PM</td>
										<td>New York / USA</td>
										<td>111.222.13.28</td>
										<td>
											<span class="badge badge-sm badge-success"><i class="ti ti-point-filled me-1"></i>connect</span>
										</td>
									</tr>
									<tr>
										<td>Safari Macos</td>
										<td>15 May 2025, 10:30 AM</td>
										<td>New York / USA</td>
										<td>333.555.10.54</td>
										<td>
											<span class="badge badge-sm badge-success"><i class="ti ti-point-filled me-1"></i>connect</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Activity Management -->

		<!-- Delete Account -->
		<div class="modal fade custom-modal" id="del-account">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header d-flex align-items-center justify-content-between border-bottom">
						<h5 class="modal-title">Delete Account</h5>
						<a href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-circle-x-filled fs-20"></i></a>
					</div>
					<form action="security-settings.php">
						<div class="modal-body">
							<p class="mb-3">Are you sure you want to delete This Account? To delete your account, Type your password.</p>
							<div class="mb-3">
								<label class="form-label">Confirm New Password<span class="text-danger">*</span></label>
								<div class="pass-group">
									<input type="password" class="form-control pass-inputa">
									<span class="ti toggle-passworda ti-eye-off"></span>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="javascript:void(0);" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Delete Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>

</html>