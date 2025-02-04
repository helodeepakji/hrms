<?php include 'layouts/session.php';

$page_name = 'asset-categories';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

$sql = $conn->prepare("SELECT * FROM `assets`");
$sql->execute();
$assets = $sql->fetchAll(PDO::FETCH_ASSOC);
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
						<h2 class="mb-1">Asset Category</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Asset Category</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_assets" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Category</a>
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
						<h5>Asset Category List</h5>
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
										<th>Category Name</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($assets as $value) {
										echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><h6 class="fs-14 fw-medium">' . $value['name'] . '</h6></td>
										<td>
											<span class="badge badge-' . ($value['status'] == 1 ? 'success' : 'danger') . ' d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>' . ($value['status'] == 1 ? 'Active' : 'Inactive') . '
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_assets" onclick="getAssets('.$value['id'].')"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" onclick="deleteAssets('.$value['id'].')"><i class="ti ti-trash"></i></a>
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

		<!-- Add Assets -->
		<div class="modal fade" id="add_assets">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="addAssets">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Category Name</label>
										<input type="text" class="form-control" name="name" required>
										<input type="hidden" name="type" value="addAssets">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="select" name="status" required>
											<option>Select</option>
											<option value="1">Active</option>
											<option value="0">Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Category</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Assets -->

		<!-- Edit Assets -->
		<div class="modal fade" id="edit_assets">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="editAssets">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Category Name</label>
										<input type="text" class="form-control" id="asset_name" name="name" value="">
										<input type="hidden" name="type" value="editAssets">
										<input type="hidden" name="id" value="" id="asset_id">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="form-control" id="status" name="status">
											<option>Select</option>
											<option value="1">Active</option>
											<option value="0">Inactive</option>
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
		<!-- /Edit Assets -->


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script>
		$('#addAssets').submit(function(event) {
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
		
		$('#editAssets').submit(function(event) {
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

		function getAssets(id){
			$.ajax({
				url: 'settings/api/assetsApi.php',
				type: 'GET',
				data: {
					id : id,
					type : 'getAssets'
				},
				dataType: 'json',
				success: function(response) {
					$('#asset_id').val(response.id);
					$('#status').val(response.status);
					$('#asset_name').val(response.name);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function deleteAssets(id){
			$.ajax({
				url: 'settings/api/assetsApi.php',
				type: 'GET',
				data: {
					id : id,
					type : 'deleteAssets'
				},
				dataType: 'json',
				success: function(response) {
					location.reload();
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