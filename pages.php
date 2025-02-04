<?php include 'layouts/session.php';


$page_name = 'pages';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

$pages = $conn->prepare("SELECT * FROM `page`");
$pages->execute();
$pages = $pages->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT * FROM `role`");
$sql->execute();
$role = $sql->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['role_id']) && $_GET['role_id'] != ''){
	$role_id = $_GET['role_id'];
}else{
	$role_id = $role['0']['id'];
}

$access = $conn->prepare("SELECT * FROM `access` WHERE `role_id` = ?");
$access->execute([$role_id]);
$access = $access->fetch(PDO::FETCH_ASSOC);
$pageAccessList = json_decode($access['access_page']) ?? [];


?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Smarthr Admin Template</title>
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-toggle.min.css">

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
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<select id="role_id" class="form-select">
									<?php
									foreach ($role as $value) {
										echo '  <option value=' . $value['id'] . '>' . ucfirst(str_replace('_', ' ', $value['name'])) . '</option>';
									}
									?>

								</select>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table">
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
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pages  as $value) {

										if (in_array($value['slug'], $pageAccessList)) {
											$check = 'checked';
										} else {
											$check = '';
										}

										echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <h6 class="fw-medium"><a href="#">' . $value['name'] . '</a></h6>
                                        </td>
                                        <td>' . $value['slug'] . '</td>
                                        <td><input data-id="' . $value['slug'] . '" class="toggle_btn_page" ' . $check . ' type="checkbox" data-on="Allow" data-off="Not Allow" data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>							
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

	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script src="assets/js/bootstrap-toggle.min.js"></script>
	<script>
		$('#role_id').change(() => {
			var role_id = $('#role_id').val();
			window.location.href = '?role_id='+role_id;
		});

		$('.toggle_btn_page').on('change', function() {
			var role_id = $('#role_id').val();
			var dataId = $(this).data('id');
			if ($(this).prop('checked')) {
				$.ajax({
					url: 'settings/api/pageAccessApi.php',
					type: 'POST',
					data: {
						role_id: role_id,
						slug: dataId,
						type: 'AccessPage'
					},
					dataType: 'json',
					success: function(response) {
						$('#toggle-trigger').prop('checked', false).change()
						notyf.success(response.message);
					},
					error: function(xhr, status, error) {
						var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
						notyf.error(errorMessage);
					}
				});
			} else {
				$.ajax({
					url: 'settings/api/pageAccessApi.php',
					type: 'POST',
					data: {
						role_id: role_id,
						slug: dataId,
						type: 'RemoveAccessPage'
					},
					dataType: 'json',
					success: function(response) {
						$('#toggle-trigger').prop('checked', true).change()
						notyf.success(response.message);
					},
					error: function(xhr, status, error) {
						var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
						notyf.error(errorMessage);
					}
				});
			}
		});

		$('#role_id').val(<?php echo $role_id ?>);
	</script>
</body>

</html>