<?php include 'layouts/session.php';



$sql = $conn->prepare("SELECT `users`.*, `role`.`name` AS `role` FROM `users` JOIN `role` ON `role`.`id` = `users`.`role_id` WHERE `is_terminated` = 0 ORDER BY `users`.`name` ASC");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);


$role = $conn->prepare("SELECT * FROM `role`");
$role->execute();
$role = $role->fetchAll(PDO::FETCH_ASSOC);

$page_name = 'all-notification';

if ($roleId != 1 && !in_array($page_name, $pageAccessList)) {
    
    // Fetch notifications of type 'all'
    $stmt1 = $conn->prepare("
        SELECT n.*, u.name, u.profile 
        FROM notification n
        JOIN users u ON u.id = n.user_id
        WHERE n.type = 'all'
        ORDER BY n.created_at DESC
    ");
    $stmt1->execute();
    $notifications1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

    // Fetch notifications for specific role
    $stmt2 = $conn->prepare("
        SELECT n.*, u.name, u.profile 
        FROM notification n
        JOIN users u ON u.id = n.user_id
        WHERE n.type = 'role' AND n.type_id = ?
        ORDER BY n.created_at DESC
    ");
    $stmt2->execute([$roleId]);
    $notifications2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    // Fetch notifications for specific user
    $stmt3 = $conn->prepare("
        SELECT n.*, u.name, u.profile 
        FROM notification n
        JOIN users u ON u.id = n.user_id
        WHERE n.type = 'user' AND n.type_id = ?
        ORDER BY n.created_at DESC
    ");
    $stmt3->execute([$userId]);
    $notifications3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

    // Merge all notifications
    $notifications = array_merge($notifications1, $notifications2, $notifications3);

} else {
    // Fetch all notifications for admin
    $stmt = $conn->prepare("
        SELECT n.*, u.name, u.profile 
        FROM notification n
        JOIN users u ON u.id = n.user_id
        ORDER BY n.created_at DESC
    ");
    $stmt->execute();
    $notifications = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Smarthr Admin Template</title>
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Notification</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									CRM
								</li>
								<li class="breadcrumb-item active" aria-current="page">Notification List</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_activity" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Notification</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Leads List -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Notification List</h5>
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
										<th>Notofication</th>
										<th>Notofication Type</th>
										<th>Reciver</th>
										<th>Sender</th>
										<th>Date</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($notifications as $value) {

										if ($value['type'] == 'role') {
											$rol = $conn->prepare("SELECT `name` FROM `role` WHERE id = ?");
											$rol->execute([$value['type_id']]);
											$rol = $rol->fetch(PDO::FETCH_ASSOC);
											$name = $rol['name'];
										}else if ($value['type'] == 'user') {
											$rol = $conn->prepare("SELECT `name` FROM `users` WHERE id = ?");
											$rol->execute([$value['type_id']]);
											$rol = $rol->fetch(PDO::FETCH_ASSOC);
											$name = $rol['name'];
										}
									?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td>
												<p class="fs-14 text-dark fw-medium"><?php echo $value['notification'] ?></p>
											<td>
												<span class=" badge badge-pink-transparent"><i class="ti ti-device-computer-camera me-1"></i><?php echo ucfirst($value['type']) ?></span>
											</td>
											<td><?php echo $name ?></td>
											<td>
												<div class="d-flex align-items-center">
													<a class="avatar avatar-md"><img
															src="<?php echo $value['profile'] == '' ? 'assets/img/users/user-32.jpg' : $value['profile'] ?>"
															class="img-fluid rounded-circle" alt="img"></a>
													<div class="ms-2">
														<p class="text-dark mb-0"><?php echo $value['name'] ?>
														</p>
													</div>
											</td>
											<td><?php echo date('d M, Y', strtotime($value['created_at'])) ?></td>
											<td>
												<div class="action-icon d-inline-flex">
													<a href="javascript:void(0);" onclick="deleteNotification(<?php $value['id'] ?>)"><i class="ti ti-trash"></i></a>
												</div>
											</td>
										</tr>
									<?php
									} ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Leads List -->

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Activiy -->
		<div class="modal fade" id="add_activity">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Notification</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="addNotification">
						<input type="hidden" name="type" value="addNotification">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Message <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="message" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Type <span class="text-danger"> *</span></label>
										<select class="select" name="notificationType" id="type" required>
											<option>Select</option>
											<option value="all">All</option>
											<option value="role">Role</option>
											<option value="user">User</option>
										</select>
									</div>
								</div>
								<div class="col-md-6" id="role_field" style="display:none">
									<div class="mb-3">
										<label class="form-label">Role <span class="text-danger"> *</span></label>
										<select class="form-control select2" name="role_id[]" multiple>
											<option>Select</option>
											<?php foreach ($role as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
								<div class="col-md-6" id="emp_field" style="display:none">
									<div class="mb-3">
										<label class="form-label">Employee <span class="text-danger"> *</span></label>
										<select class="form-control select2" name="user_id[]" multiple>
											<option>Select</option>
											<?php foreach ($users as $value) {
												echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
											} ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Notification</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Activity -->


		<!-- Add Pipeline -->
		<div class="modal fade" id="add_pipeline">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Pipeline</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="pipeline.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-block mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="form-label">Pipeline Stages <span class="text-danger"> *</span></label>
											<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
										</div>
										<div class="p-3 border border-gray br-5 mb-2">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Inpipline</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><span><i class="ti ti-trash"></i></span></a>
												</div>
											</div>
										</div>
										<div class="p-3 border border-gray br-5 mb-2">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Follow Up</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><span><i class="ti ti-trash"></i></span></a>
												</div>
											</div>
										</div>
										<div class="p-3 border border-gray br-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Schedule Service</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default" data-bs-toggle="modal" data-bs-target="#edit_stage"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default"><span><i class="ti ti-trash" data-bs-toggle="modal" data-bs-target="#delete_modal"></i></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Access</label>
										<div class="d-flex  access-item nav">
											<div class="d-flex align-items-center">
												<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#all">
													<input type="radio" class="status-radio me-2" id="all" name="status" checked>
													<label for="all">All</label>
												</div>
												<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#select-person">
													<input type="radio" class="status-radio me-2" id="select" name="status">
													<label for="select">Select Person</label>
												</div>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade" id="select-person">
												<div class="access-wrapper">
													<div class="p-3 border border-gray br-5 mb-2">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center file-name-icon">
																<a href="#" class="avatar avatar-md border avatar-rounded">
																	<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
																</a>
																<div class="ms-2">
																	<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="text-danger">Remove</a>
															</div>
														</div>
													</div>
													<div class="p-3 border border-gray br-5 mb-2">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center file-name-icon">
																<a href="#" class="avatar avatar-md border avatar-rounded">
																	<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
																</a>
																<div class="ms-2">
																	<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="text-danger">Remove</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="Submit" class="btn btn-primary">Add Pipeline</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Pipeline -->

		<!-- Edit Pipeline -->
		<div class="modal fade" id="edit_pipeline">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Pipeline</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="pipeline.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="Marketing">
									</div>
								</div>
								<div class="col-md-12">
									<div class="input-block mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="form-label">Pipeline Stages <span class="text-danger"> *</span></label>
											<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
										</div>
										<div class="p-3 border border-gray br-5 mb-2">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Inpipline</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default"><span><i class="ti ti-trash"></i></span></a>
												</div>
											</div>
										</div>
										<div class="p-3 border border-gray br-5 mb-2">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Follow Up</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default"><span><i class="ti ti-trash"></i></span></a>
												</div>
											</div>
										</div>
										<div class="p-3 border border-gray br-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
													<h6 class="fs-14 fw-normal">Schedule Service</h6>
												</div>
												<div class="d-flex align-items-center">
													<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
													<a href="#" class="text-default"><span><i class="ti ti-trash"></i></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Access</label>
										<div class="d-flex  access-item nav">
											<div class="d-flex align-items-center">
												<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#all2">
													<input type="radio" class="status-radio me-2" id="all2" name="status" checked>
													<label for="all2">All</label>
												</div>
												<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#select-person2">
													<input type="radio" class="status-radio me-2" id="select2" name="status">
													<label for="select2">Select Person</label>
												</div>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade" id="select-person2">
												<div class="access-wrapper">
													<div class="p-3 border border-gray br-5 mb-2">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center file-name-icon">
																<a href="#" class="avatar avatar-md border avatar-rounded">
																	<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
																</a>
																<div class="ms-2">
																	<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="text-danger">Remove</a>
															</div>
														</div>
													</div>
													<div class="p-3 border border-gray br-5 mb-2">
														<div class="d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center file-name-icon">
																<a href="#" class="avatar avatar-md border avatar-rounded">
																	<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
																</a>
																<div class="ms-2">
																	<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
																</div>
															</div>
															<div class="d-flex align-items-center">
																<a href="#" class="text-danger">Remove</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Pipeline</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Pipeline -->



	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<script>
		$('#type').change(() => {
			var type = $('#type').val();
			if (type == 'role') {
				$('#emp_field').css('display', 'none');
				$('#role_field').css('display', 'block');
			} else if (type == 'user') {
				$('#emp_field').css('display', 'block');
				$('#role_field').css('display', 'none');
			} else {
				$('#emp_field').css('display', 'none');
				$('#role_field').css('display', 'none');
			}
		});

		$('#addNotification').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/notificationApi.php',
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

		function deleteNotification(id){
			$.ajax({
				url: 'settings/api/notificationApi.php',
				type: 'POST',
				data: {
					type : 'deleteNotification',
					id : id
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