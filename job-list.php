<?php include 'layouts/session.php';

$role = $conn->prepare("SELECT * FROM `role`");
$role->execute();
$role = $role->fetchAll(PDO::FETCH_ASSOC);

$job = $conn->prepare("SELECT `job`.* , `role`.`name` as `role` FROM `job` JOIN `role` ON `job`.`role_id` = `role`.`id`");
$job->execute();
$job = $job->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>UniqueMaps Admin Template</title>
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
						<h2 class="mb-1">Jobs</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Jobs</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<?php if ($roleId == 1 || (in_array('post-job', $pageAccessList))) {?>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_post" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Post job</a>
						</div>
						<?php } ?>
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
						<h5>Job List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
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
										<th>Job ID</th>
										<th>Job Title</th>
										<th>Job Role</th>
										<th>Min Salary</th>
										<th>Status</th>
										<th>Date</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($job as $value) {
										echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>Job-' . $value['id'] . '</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md bg-light rounded">
													<img src="assets/img/job-search.png" class="img-fluid rounded-circle" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">' . $value['job-title'] . '</a></h6>
													<span class="d-block mt-1">' . $value['vacancies'] . ' Vacancies</span>
												</div>
											</div>
										</td>
										<td>' . $value['role'] . '</td>
										<td>' . $value['min_salary'] . '/month</td>
										<td>' . ($value['status'] == 1 ? 'Active' : 'Inactive') . '</td>
										<td>' . date('d M, Y', strtotime($value['min_salary'])) . '</td>

										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_post" onclick="getJob(' . $value['id'] . ')"><i class="ti ti-edit"></i></a>
												<a href="#" onclick="getChange(' . $value['id'] .',' .$value['status'].')"><i class="fe fe-image"></i></a>
											</div>
										</td>
									</tr>';
									} ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Post -->
		<div class="modal fade" id="add_post">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Post Job</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body pb-0">
						<div class="row">
							<div class="contact-grids-tab pt-0">
								<ul class="nav nav-underline" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
									</li>
								</ul>
							</div>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
									<form id="addJob">
										<input type="hidden" name="type" value="addJob">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Job Title <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" name="job_title" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Job Description <span class="text-danger"> *</span></label>
													<textarea rows="3" class="form-control" name="desc" required></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Job Role <span class="text-danger"> *</span></label>
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
													<label class="form-label">Minimum Salary <span class="text-danger"> *</span></label>
													<input type="number" class="form-control" name="min_salary" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Vacancies <span class="text-danger"> *</span></label>
													<input type="number" class="form-control" name="vacancies" required>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-primary">Save & Next</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Post Job -->

		<!-- Edit Post -->
		<div class="modal fade" id="edit_post">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Job</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body pb-0">
						<form id="updateJob">
							<input type="hidden" name="type" value="updateJob">
							<input type="hidden" name="id" id="job-id">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Job Title <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="job_title" id="job_title" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Job Description <span class="text-danger"> *</span></label>
										<textarea rows="3" class="form-control" name="desc" id="desc" required></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Job Role <span class="text-danger"> *</span></label>
										<select class="select" name="role_id" id="role_id" required>
											<option>Select</option>
											<?php foreach ($role as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Job Status <span class="text-danger"> *</span></label>
										<select class="form-control" name="status" id="status" required>
											<option>Select</option>
											<option value="1">Active</option>
											<option value="0">InActive</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Minimum Salary <span class="text-danger"> *</span></label>
										<input type="number" class="form-control" name="min_salary" id="min_salary" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Vacancies <span class="text-danger"> *</span></label>
										<input type="number" class="form-control" name="vacancies" id="vacancies" required>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Update & Next</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Post Job -->


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script>
		$('#addJob').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/jobApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
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

		function getJob(id) {
			$.ajax({
				url: 'settings/api/jobApi.php',
				type: 'GET',
				data: {
					type: 'getJob',
					id: id
				},
				dataType: 'json',
				success: function(response) {
					let job = response;
					$("#job-id").val(job.id);
					$("#job_title").val(job['job-title']);
					$("#desc").val(job.desc);
					$("#role_id").val(job.role_id);
					$("#min_salary").val(job.min_salary);
					$("#vacancies").val(job.vacancies);
					$("#status").val(job.status);
				},
				error: function(xhr) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}


		function getChange(id,status) {
			var type = (status == 1 ? 'deactivateJob' : 'activateJob');
			$.ajax({
				url: 'settings/api/jobApi.php',
				type: 'POST',
				data: {
					type: type,
					id: id
				},
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);
				},
				error: function(xhr) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}


		$('#updateJob').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/jobApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
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
	</script>
</body>

</html>