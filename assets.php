<?php
include 'layouts/session.php';
$sql = $conn->prepare("SELECT * FROM `assets` WHERE `status` = 1");
$sql->execute();
$assets = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT * FROM `users` WHERE  `is_terminated` = 0 ORDER BY `name` ASC");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);


$sql = $conn->prepare("SELECT asset_assign.* , users.name as user_name , users.profile , assets.name as asset_name FROM `asset_assign` JOIN users ON users.id = asset_assign.user_id JOIN assets ON assets.id = asset_assign.asset_id");
$sql->execute();
$assetlists = $sql->fetchAll(PDO::FETCH_ASSOC);
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
						<h2 class="mb-1">Assets</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Assets</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_assets" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Asset</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Assets Lists -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Assets List</h5>
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
									Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
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
										<th>Asset Name</th>
										<th>Asset User</th>
										<th>Assign Date </th>
										<th>Assign Time</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($assetlists as $value) {
										echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<h6 class="fs-14 fw-medium">'.$value['asset_name'].'</h6>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md border avatar-rounded">
													<img src="'.($value['profile'] == '' ? 'assets/img/users/user-32.jpg' : $value['profile']).'" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">'.$value['user_name'].'</a></h6>
												</div>
											</div>
										</td>
										<td>' . date('d M, Y', strtotime($value['created_at'])) . '</td>
										<td>' . date('h:i A', strtotime($value['created_at'])) . '</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_assets" onclick="getAssignAsset('.$value['id'].')"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="getAssignAsset('.$value['id'].')"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
										';
									} ?>
									
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

		<!-- Add Assets -->
		<div class="modal fade" id="add_assets">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Asset</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="assignAssets">
						<input type="hidden" name="type" value="assignAssets">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">User</label>
										<select class="select" name="user_id" required>
											<option>Select</option>
											<?php foreach ($users as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">Asset</label>
										<select class="select" name="asset_id" required>
											<option>Select</option>
											<?php foreach ($assets as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Asset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Assets -->

		<!-- Edit Assets -->
		<div class="modal fade" id="edit_assets">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Asset</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="editAssignAssets">
						<input type="hidden" name="type" value="editAssignAssets">
						<input type="hidden" name="id" value="" id="assign_id">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">User</label>
										<select class="form-control" name="user_id" id="user_id" required>
											<option>Select</option>
											<?php foreach ($users as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3 ">
										<label class="form-label">Asset</label>
										<select class="form-control" name="asset_id" id="asset_id" required>
											<option>Select</option>
											<?php foreach ($assets as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Asset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Assets -->

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
							<a onclick="getDelete()" class="btn btn-danger">Yes, Delete</a>
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

         function getDelete(){
			var id = $('#assign_id').val();
			$.ajax({
				url: 'settings/api/assetsApi.php',
				type: 'POST',
				data: {
					type : 'getDelete',
					id : id
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

		 }

		$('#assignAssets').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/assetsApi.php',
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
		
		
		$('#editAssignAssets').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/assetsApi.php',
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

		function getAssignAsset(id){
			$.ajax({
				url: 'settings/api/assetsApi.php',
				type: 'GET',
				data: {
					id : id,
					type : 'getAssignAsset'
				},
				dataType: 'json',
				success: function(response) {
					$('#assign_id').val(response.id);
					$('#user_id').val(response.user_id);
					$('#asset_id').val(response.asset_id);
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