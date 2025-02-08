<?php include 'layouts/session.php';

$page_name = 'holidays';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$tempFile = $_FILES["csvFile"]["tmp_name"];
	$targetFile = "assets/upload/holiday/" . basename($_FILES["csvFile"]["name"]);
	if (move_uploaded_file($tempFile, $targetFile)) {
		$csvFile = fopen($targetFile, "r");
		if (!$csvFile) {
			echo "unable to read the file";
		}

		$sl = 1;
		while ($data = fgetcsv($csvFile)) {

			if ($sl != 1) {
				$rawDate = $data[0];
				$date = date("Y-m-d", strtotime($rawDate));

				$holiday_name = $data[1];
				$sql = $conn->prepare("INSERT INTO `holiday`(`date`, `holiday`) VALUES (? , ?)");
				$result = $sql->execute([$date, $holiday_name]);

			}
			$sl++;

			if ($sl >= 200) {
				break;
			}
		}


	} else {
		echo "failed";
	}
}


$sql = $conn->prepare("SELECT * FROM `holiday` WHERE YEAR(`date`) = YEAR(CURDATE()) ORDER BY `date` DESC");
$sql->execute();
$holidays = $sql->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
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
						<h2 class="mb-1">Holidays</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Holidays</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2" style="margin-right:5px">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_holiday"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Add Holiday</a>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#upload_holiday"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Upload Excel</a>
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


				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Holidays List</h5>
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
										<th>Sno</th>
										<th>Title</th>
										<th>Date</th>
										<th>Image</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($holidays as $holiday) { ?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td><?php echo ++$i ?></td>
											<td>
												<h6 class="fw-medium"><a href="#"><?php echo $holiday['holiday'] ?></a></h6>
											</td>
											<td><?php echo date('M j, D', strtotime($holiday['date'])) ?></td>
											<td><a class="avatar avatar-md"><img
														src="<?php echo 'assets/images/holiday/' . $holiday['image'] ?>"
														class="img-fluid rounded-circle" alt="img"></a></td>
											<td>
												<div class="action-icon d-inline-flex">
													<a href="#" class="me-2" data-bs-toggle="modal"
														data-bs-target="#edit_holiday"
														onclick="getHoilday(<?php echo $holiday['id'] ?>)"><i
															class="ti ti-edit"></i></a>
													<a href="javascript:void(0);" data-bs-toggle="modal"
														data-bs-target="#delete_modal"
														onclick="getHoilday(<?php echo $holiday['id'] ?>)"><i
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
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Plan -->
		<div class="modal fade" id="add_holiday">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Holiday</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="addHoliday">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Title</label>
										<input type="text" class="form-control" name="name" required>
										<input type="hidden" name="type" value="addHoliday">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" name="date" class="form-control datetimepicker"
												placeholder="dd/mm/yyyy" required>
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Image</label>
										<input type="file" accept="image/*" class="form-control" name="image" required>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Holiday</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Plan -->
		 
		<!-- Add Plan -->
		<div class="modal fade" id="upload_holiday">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Holiday</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form method="post" enctype="multipart/form-data">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">EXcel</label>
										<input type="file" class="form-control" name="csvFile" required>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Upload Holiday</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Plan -->

		<!-- Edit Plan -->
		<div class="modal fade" id="edit_holiday">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Holiday</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="updateHoliday">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Title</label>
										<input type="text" class="form-control" name="name" id="summary" required>
										<input type="hidden" name="type" value="updateHoliday">
										<input type="hidden" name="holiday_id" id="holiday_id" value="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" name="date" id="date_holiday"
												class="form-control datetimepicker" placeholder="dd/mm/yyyy" required>
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Image</label>
										<input type="file" accept="image/*" class="form-control" name="image">
										<img src="" id="holiday_image" width="100%" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Update Holiday</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Plan -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
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
							<a href="holidays.php" class="btn btn-danger" id="deleteValue"
								onclick="deleteHoilday()">Yes, Delete</a>
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
		function getHoilday(id) {
			$.ajax({
				url: "settings/api/holidayApi.php?type=getHoliday",
				data: {
					id: id
				},
				dataType: "json",
				success: function (response) {
					$('#date_holiday').val(response.date);
					$("#holiday_id").val(response.id);
					$("#summary").val(response.holiday);
					$('#deleteValue').data('delete-item', response.id);
					$("#holiday_image").attr("src", "assets/images/holiday/" + response.image);
				}
			});
		}

		function deleteHoilday() {
			var id = $('#deleteValue').data('delete-item');
			$.ajax({
				type: "POST",
				url: "settings/api/holidayApi.php?type=deleteHoliday",
				data: {
					id: id
				},
				dataType: "json",
				success: function (response) {
					if (response.success) {
						notyf.success(response.message);
						$('#row_' + id).remove();
					} else {
						notyf.success("Failed to delete holiday.");
					}
				},
				error: function () {
					alert("An error occurred while processing the request.");
				}
			});
		}

		$('#updateHoliday').submit(function () {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/holidayApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function (response) {
					location.reload();
				},
				error: function (xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});


		$('#addHoliday').submit(function () {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/holidayApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function (response) {
					location.reload();
				},
				error: function (xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});
	</script>
</body>

</html>