<?php
include 'layouts/session.php';
$terminated = $conn->prepare("SELECT `users`.* FROM `users` WHERE `is_terminated` = 1 ORDER BY `users`.`name` ASC");
$terminated->execute();
$terminated = $terminated->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT `users`.*, `role`.`name` AS `role` FROM `users` JOIN `role` ON `role`.`id` = `users`.`role_id` WHERE `is_terminated` = 0 ORDER BY `users`.`name` ASC");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);


$role = $conn->prepare("SELECT * FROM `role`");
$role->execute();
$role = $role->fetchAll(PDO::FETCH_ASSOC);

?>
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
						<h2 class="mb-1">Employee</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Employee List</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="employees.php" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i
										class="ti ti-list-tree"></i></a>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_employee"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Add Employee</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="row">

					<!-- Total Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-dark rounded-circle"><i
												class="ti ti-users"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Employee</p>
										<h4><?php echo count($terminated) + count($users) ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Total Plans -->

					<!-- Total Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-success rounded-circle"><i
												class="ti ti-user-share"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Active</p>
										<h4><?php echo count($users) ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Total Plans -->

					<!-- Inactive Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-danger rounded-circle"><i
												class="ti ti-user-pause"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Terminated</p>
										<h4><?php echo count($terminated) ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Inactive Companies -->

					<!-- No of Plans  -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-info rounded-circle"><i
												class="ti ti-user-plus"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Roles</p>
										<h4><?php echo count($role) ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /No of Plans -->

				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Employee List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<select id="selectedRole" class="form-select">
									<option value="">Select Role</option>
									<?php
									foreach ($role as $value) {
										echo '  <option value=' . $value['id'] . '>' . ucfirst(str_replace('_', ' ', $value['name'])) . '</option>';
									}
									?>

								</select>
							</div>
							<div class="me-3">
								<select id="selectedStatus" class="form-select">
									<option value="">Select Status</option>
									<option value="0">Active</option>
									<option value="1">Terminated</option>
								</select>
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
										<th>Emp ID</th>
										<th>Name</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Date Of Birth</th>
										<th>Joining Date</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($users as $user) { ?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td><a
													href="employee-details.php?id=<?php echo base64_encode($user['id']) ?>"><?php echo $user['employee_id'] ?></a>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<a href="employee-details.php?id=<?php echo base64_encode($user['id']) ?>"
														class="avatar avatar-md" data-bs-toggle="modal"
														data-bs-target="#view_details"><img
															src="assets/img/users/user-32.jpg"
															class="img-fluid rounded-circle" alt="img"></a>
													<div class="ms-2">
														<p class="text-dark mb-0"><a
																href="employee-details.php?id=<?php echo base64_encode($user['id']) ?>"
																data-bs-toggle="modal"
																data-bs-target="#view_details"><?php echo $user['name'] ?></a>
														</p>
														<span class="fs-12"><?php echo ucfirst($user['role']) ?></span>
													</div>
												</div>
											</td>
											<td><?php echo ucfirst($user['gender']) ?></td>
											<td><?php echo $user['email'] ?></td>
											<td><?php echo $user['mobile'] ?></td>
											<td>
												<?php echo date('d M, Y', strtotime($user['dob'])) ?>
											</td>
											<td><?php echo date('d M, Y', strtotime($user['joining_date'])) ?></td>
											<td>
												<span
													class="badge badge-<?php echo $user['is_terminated'] == 1 ? 'danger' : 'success' ?> d-inline-flex align-items-center badge-xs">
													<i
														class="ti ti-point-filled me-1"></i><?php echo $user['is_terminated'] == 1 ? 'Terminated' : 'Active' ?>
												</span>
											</td>
											<td>
												<div class="action-icon d-inline-flex">
													<a href="#" class="me-2" data-bs-toggle="modal"
														data-bs-target="#edit_employee"
														onclick="getEmployee(<?php echo $user['id'] ?>)"><i
															class="ti ti-edit"></i></a>
													<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"
														onclick="deleteEmployee(<?php echo $user['id'] ?>)"><i
															class="ti ti-trash"></i></a>
												</div>
											</td>
										</tr>
									<?php } ?>
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

		<!-- Add Employee -->
		<div class="modal fade" id="add_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Add New Employee</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="addEmployee">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="info-tab" data-bs-toggle="tab"
										data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic
										Information</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="basic-info" role="tabpanel"
								aria-labelledby="info-tab" tabindex="0">
								<div class="modal-body pb-0 ">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Name <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="name" required>
												<input type="hidden" name="type" value="addEmployee">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Employee ID <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="employee_id" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Email <span class="text-danger">
														*</span></label>
												<input type="email" class="form-control" name="email" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Phone <span class="text-danger">
														*</span></label>
												<input type="number" class="form-control" name="phone" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Emergency Contact <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="emergency_contact"
													required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Joining Date <span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="joining_date" required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Date of Birth<span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="dob" required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Role <span class="text-danger">
														*</span></label>
												<select class="select" name="role_id" required>
													<option>Select</option>
													<?php foreach ($role as $value) {
														echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
													} ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Correspondence Address <span
														class="text-danger"> *</span></label>
												<textarea class="form-control" name="correspondence_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Permanent Address <span class="text-danger">
														*</span></label>
												<textarea class="form-control" name="permanent_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Marital Status</label>
												<select class="select" name="marital_status" required>
													<option>Select</option>
													<option value="Single">Single</option>
													<option value="Married">Marriaged</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Gender</label>
												<select class="select" name="gender" required>
													<option>Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Save </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Employee -->

		<!-- Edit Employee -->
		<div class="modal fade" id="edit_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Edit Employee</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="contact-grids-tab">
						<ul class="nav nav-underline" id="myTab2" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
									data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Basic
									Information</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="address-tab2" data-bs-toggle="tab"
									data-bs-target="#address2" type="button" role="tab"
									aria-selected="false">Education</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="address-tab2" data-bs-toggle="tab"
									data-bs-target="#experience" type="button" role="tab"
									aria-selected="false">Experience</button>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="myTabContent2">
						<div class="tab-pane fade show active" id="basic-info2" role="tabpanel"
							aria-labelledby="info-tab2" tabindex="0">
							<form id="editEmployee">
								<div class="modal-body pb-0 ">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Name <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="name" id="name" required>
												<input type="hidden" name="type" value="editEmployee">
												<input type="hidden" name="id" value="" id="id">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Employee ID <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="employee_id"
													id="employee_id" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Email <span class="text-danger">
														*</span></label>
												<input type="email" class="form-control" name="email" id="email"
													required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Phone <span class="text-danger">
														*</span></label>
												<input type="number" class="form-control" name="phone" id="phone"
													required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Emergency Contact <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="emergency_contact"
													id="emergency_contact" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Joining Date <span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="joining_date" id="joining_date"
														required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Date of Birth<span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="dob" id="dob" required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Role <span class="text-danger">
														*</span></label>
												<select class="form-control" name="role_id" id="role_id" required>
													<option>Select</option>
													<?php foreach ($role as $value) {
														echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
													} ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Correspondence Address <span
														class="text-danger"> *</span></label>
												<textarea class="form-control" name="correspondence_address"
													id="correspondence_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Permanent Address <span class="text-danger">
														*</span></label>
												<textarea class="form-control" name="permanent_address"
													id="permanent_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Marital Status</label>
												<select class="form-control" name="marital_status" id="marital_status"
													required>
													<option>Select</option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Gender</label>
												<select class="form-control" name="gender" id="gender" required>
													<option>Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Save </button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2"
							tabindex="0">
							<form id="educationForm">
								<input type="hidden" name="type" value="addEducation">
								<input type="hidden" name="id" id="education_user_id">
								<div class="modal-body">
									<div id="educationContainer">
										<div class="education-item row border rounded p-3 mb-3">
											<div class="col-md-3 mb-3">
												<label class="form-label">Degree <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="degree[]" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-label">University <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="university[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Year of Passing <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="yop[]" min="1900"
													max="2100" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Marks (%) <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="marks[]" min="0"
													max="100" step="0.01" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Attachment</label>
												<input type="file" class="form-control" name="attachment[]">
											</div>
											<div class="col-md-1 d-flex align-items-center">
												<button type="button"
													class="btn btn-danger btn-sm remove-education">Remove</button>
											</div>
										</div>
									</div>
									<button type="button" id="addEducation" class="btn btn-success btn-sm mb-3">Add
										More</button>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="saveEducation">Save</button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="address-tab2"
							tabindex="0">
							<form id="addExperience">
								<input type="hidden" name="type" value="addExperience">
								<input type="hidden" name="id" id="experience_user_id">
								<div class="modal-body">
									<div id="experienceContainer">
										<div class="experience-item row border rounded p-3 mb-3">
											<div class="col-md-3 mb-3">
												<label class="form-label">Organization <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="organization[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Start Date <span
														class="text-danger">*</span></label>
												<input type="date" class="form-control" name="start_date[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">End Date <span
														class="text-danger">*</span></label>
												<input type="date" class="form-control" name="end_date[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Salary (in INR) <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="salary[]" min="0"
													required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Attachment</label>
												<input type="file" class="form-control" name="attachment[]">
											</div>
											<div class="col-md-1 d-flex align-items-center">
												<button type="button"
													class="btn btn-danger btn-sm remove-experience">Remove</button>
											</div>
										</div>
									</div>
									<button type="button" id="addExperienceButton"
										class="btn btn-success btn-sm mb-3">Add More</button>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="saveExperience">Save</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Employee -->


		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Delete</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.
						</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a id="employeeDelete" class="btn btn-danger">Yes, Delete</a>
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
	<script>
		function deleteEmployee(id) {
			$('#employeeDelete').data('id', id);
		}

		$('#employeeDelete').click(() => {
			var id = $('#employeeDelete').data('id');
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'deleteEmployee',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);

				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#selectedRole').on('click', function() {
			fetchFilteredData();
		});

		$('#selectedStatus').on('click', function() {
			fetchFilteredData();
		});

		function fetchFilteredData() {
			const role = $('#selectedRole').val();
			const status = $('#selectedStatus').val();

			$.ajax({
				url: 'settings/api/userApi.php',
				method: 'POST',
				data: {
					role: role,
					status: status,
					type: 'FilterEmployee',
				},
				success: function(response) {
					$('.datatable').DataTable().destroy();
					$('tbody').html(response);
					$('.datatable').DataTable();
				},
				error: function() {
					alert('Error fetching data.');
				},
			});
		}
	</script>
	<script>
		// Function to add new experience fields when the "Add More" button is clicked
		document.getElementById('addExperienceButton').addEventListener('click', function() {
			const experienceContainer = document.getElementById('experienceContainer');
			const newExperienceItem = document.querySelector('.experience-item').cloneNode(true);

			// Clear input values in the newly added fields
			newExperienceItem.querySelectorAll('input').forEach(input => input.value = '');

			// Append the new experience item to the container
			experienceContainer.appendChild(newExperienceItem);
		});
		// Function to remove an experience entry when the "Remove" button is clicked
		document.getElementById('experienceContainer').addEventListener('click', function(e) {
			if (e.target.classList.contains('remove-experience')) {
				const experienceItems = document.querySelectorAll('.experience-item');

				// Ensure that at least one experience item remains
				if (experienceItems.length > 1) {
					e.target.closest('.experience-item').remove();
				} else {
					alert('At least one experience entry is required.');
				}
			}
		});

		document.getElementById('addEducation').addEventListener('click', function() {
			const educationContainer = document.getElementById('educationContainer');
			const newEducationItem = document.querySelector('.education-item').cloneNode(true);
			newEducationItem.querySelectorAll('input').forEach(input => input.value = ''); // Clear input values
			educationContainer.appendChild(newEducationItem);
		});

		document.getElementById('educationContainer').addEventListener('click', function(e) {
			if (e.target.classList.contains('remove-education')) {
				const educationItems = document.querySelectorAll('.education-item');
				if (educationItems.length > 1) {
					e.target.closest('.education-item').remove();
				} else {
					alert('At least one education entry is required.');
				}
			}
		});

		$('#addEmployee').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#editEmployee').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#educationForm').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		// Submit the form with experience data
		$('#addExperience').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		function formatDate(dateString) {
			if (!dateString) return '';
			const date = new Date(dateString);
			const day = String(date.getDate()).padStart(2, '0');
			const month = String(date.getMonth() + 1).padStart(2, '0');
			const year = date.getFullYear();
			return `${day}/${month}/${year}`;
		}

		// function getExperience(id) {
		// 	$.ajax({
		// 		url: 'settings/api/userApi.php',
		// 		type: 'GET',
		// 		data: {
		// 			type: 'getExperience',
		// 			user_id: id
		// 		},
		// 		dataType: 'json',
		// 		success: function(response) {
		// 			if (response && response.length > 0) {
		// 				// Set user ID
		// 				document.getElementById('experience_user_id').value = id;

		// 				// Iterate through each experience entry and populate the form
		// 				response.forEach(function(experience, index) {
		// 					// If it's the first entry, we fill the initial form fields
		// 					if (index === 0) {
		// 						document.querySelector('[name="organization[]"]').value = experience.oraganization;
		// 						document.querySelector('[name="start_date[]"]').value = experience.start_date;
		// 						document.querySelector('[name="end_date[]"]').value = experience.end_date;
		// 						document.querySelector('[name="salary[]"]').value = experience.salary;
		// 						// Handle file if exists (optional, you can modify to show the filename or preview)
		// 						if (experience.file) {
		// 							console.log('File:', experience.file);
		// 						}
		// 					} else {
		// 						// For subsequent entries, clone the first experience item and populate it
		// 						const experienceContainer = document.getElementById('experienceContainer');
		// 						const newExperienceItem = document.querySelector('.experience-item').cloneNode(true);
		// 						newExperienceItem.querySelector('[name="organization[]"]').value = experience.oraganization;
		// 						newExperienceItem.querySelector('[name="start_date[]"]').value = experience.start_date;
		// 						newExperienceItem.querySelector('[name="end_date[]"]').value = experience.end_date;
		// 						newExperienceItem.querySelector('[name="salary[]"]').value = experience.salary;
		// 						experienceContainer.appendChild(newExperienceItem);
		// 					}
		// 				});
		// 			} else {
		// 				console.log("No experience data available.");
		// 			}
		// 		},
		// 		error: function(xhr, status, error) {
		// 			var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
		// 			notyf.error(errorMessage);
		// 		}
		// 	});
		// }

		// function getEducation(id) {
		// 	$.ajax({
		// 		url: 'settings/api/userApi.php',
		// 		type: 'GET',
		// 		data: {
		// 			type: 'getEducation',
		// 			user_id: id
		// 		},
		// 		dataType: 'json',
		// 		success: function(response) {
		// 			if (response && response.length > 0) {
		// 				// Set user ID
		// 				document.getElementById('education_user_id').value = id;

		// 				// Iterate through each education entry and populate the form
		// 				response.forEach(function(education, index) {
		// 					// If it's the first entry, we fill the initial form fields
		// 					if (index === 0) {
		// 						document.querySelector('[name="degree[]"]').value = education.degree;
		// 						document.querySelector('[name="university[]"]').value = education.university;
		// 						document.querySelector('[name="yop[]"]').value = education.year;
		// 						document.querySelector('[name="marks[]"]').value = education.mark;
		// 						// Handle file if exists (optional, you can modify to show the filename or preview)
		// 						if (education.file) {
		// 							// You could display the file name or preview it, if necessary
		// 							console.log('File:', education.file);
		// 						}
		// 					} else {
		// 						// For subsequent entries, clone the first education item and populate it
		// 						const educationContainer = document.getElementById('educationContainer');
		// 						const newEducationItem = document.querySelector('.education-item').cloneNode(true);
		// 						newEducationItem.querySelector('[name="degree[]"]').value = education.degree;
		// 						newEducationItem.querySelector('[name="university[]"]').value = education.university;
		// 						newEducationItem.querySelector('[name="yop[]"]').value = education.year;
		// 						newEducationItem.querySelector('[name="marks[]"]').value = education.mark;
		// 						educationContainer.appendChild(newEducationItem);
		// 					}
		// 				});
		// 			} else {
		// 				console.log("No education data available.");
		// 			}
		// 		},
		// 		error: function(xhr, status, error) {
		// 			var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
		// 			notyf.error(errorMessage);
		// 		}
		// 	});
		// }

		// function getEmployee(id) {
		// 	$.ajax({
		// 		url: 'settings/api/userApi.php',
		// 		type: 'GET',
		// 		data: {
		// 			type: 'getEmployee',
		// 			id: id
		// 		},
		// 		dataType: 'json',
		// 		success: function(response) {
		// 			$('#id').val(response.id);
		// 			$('#education_user_id').val(response.id);
		// 			$('#experience_user_id').val(response.id);
		// 			$('#name').val(response.name);
		// 			$('#employee_id').val(response.employee_id);
		// 			$('#email').val(response.email);
		// 			$('#phone').val(response.mobile);
		// 			$('#emergency_contact').val(response.emergency_contact || '');
		// 			$('#joining_date').val(formatDate(response.joining_date));
		// 			$('#dob').val(formatDate(response.dob));
		// 			$('#correspondence_address').val(response.correspondence_address || '');
		// 			$('#permanent_address').val(response.permanent_address || '');
		// 			$('#role_id').val(response.role_id).trigger('change'); // Update dropdown
		// 			$('#marital_status').val(response.marital_status || 'Select').trigger('change');
		// 			$('#gender').val(response.gender || 'Select').trigger('change');
		// 			getEducation(id);
		// 			getExperience(id);
		// 		},
		// 		error: function(xhr, status, error) {
		// 			var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
		// 			notyf.error(errorMessage);
		// 		}
		// 	});
		// }
	
		function getExperience(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getExperience',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					const experienceContainer = document.getElementById('experienceContainer');
					experienceContainer.innerHTML = ''; // Clear previous entries

					if (response && response.length > 0) {
						response.forEach(function(experience, index) {
							// Create a new experience item
							const newExperienceItem = document.createElement('div');
							newExperienceItem.className = 'experience-item row border rounded p-3 mb-3';

							newExperienceItem.innerHTML = `
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Organization</label>
                            <input type="text" class="form-control" name="organization[]" value="${experience.oraganization}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date[]" value="${experience.start_date}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date[]" value="${experience.end_date}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Salary</label>
                            <input type="text" class="form-control" name="salary[]" value="${experience.salary}">
                        </div>
                    `;

							experienceContainer.appendChild(newExperienceItem);
						});
					} else {
						console.log("No experience data available.");
					}
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function getEducation(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getEducation',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					const educationContainer = document.getElementById('educationContainer');
					educationContainer.innerHTML = ''; // Clear previous entries

					if (response && response.length > 0) {
						response.forEach(function(education, index) {
							// Create a new education item
							const newEducationItem = document.createElement('div');
							newEducationItem.className = 'education-item row border rounded p-3 mb-3';

							newEducationItem.innerHTML = `
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Degree</label>
                            <input type="text" class="form-control" name="degree[]" value="${education.degree}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">University</label>
                            <input type="text" class="form-control" name="university[]" value="${education.university}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Year of Passing</label>
                            <input type="text" class="form-control" name="yop[]" value="${education.year}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Marks</label>
                            <input type="text" class="form-control" name="marks[]" value="${education.mark}">
                        </div>
                    `;

							educationContainer.appendChild(newEducationItem);
						});
					} else {
						console.log("No education data available.");
					}
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function getEmployee(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getEmployee',
					id: id
				},
				dataType: 'json',
				success: function(response) {
					$('#id').val(response.id);
					$('#education_user_id').val(response.id);
					$('#experience_user_id').val(response.id);
					$('#name').val(response.name);
					$('#employee_id').val(response.employee_id);
					$('#email').val(response.email);
					$('#phone').val(response.mobile);
					$('#emergency_contact').val(response.emergency_contact || '');
					$('#joining_date').val(formatDate(response.joining_date));
					$('#dob').val(formatDate(response.dob));
					$('#correspondence_address').val(response.correspondence_address || '');
					$('#permanent_address').val(response.permanent_address || '');
					$('#role_id').val(response.role_id).trigger('change');
					$('#marital_status').val(response.marital_status || 'Select').trigger('change');
					$('#gender').val(response.gender || 'Select').trigger('change');

					// Clear and reload education and experience
					getEducation(id);
					getExperience(id);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

	</script>
</body>

</html>