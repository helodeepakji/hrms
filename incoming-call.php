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
			<div class="content pb-4">
				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Incoming Call</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Application
								</li>
								<li class="breadcrumb-item active" aria-current="page">Incoming Call</li>
							</ol>
						</nav>
					</div>
					<div class="ms-2 head-icons">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div>

				<div class="row">

					<!-- Call -->
					<div class="col-xxl-12">
						<div class="card incoming-call mb-0">
							<div class="card-body text-center d-flex flex-column justify-content-center">
								<div class="voice-call-img mb-3">
									<img src="assets/img/users/user-32.jpg" class="img-fluid rounded-circle" alt="img">
								</div>
								<h4 class="display-4">Anthony Lewis</h4>
								<p>Calling...</p>
								<div class="d-flex align-items-center justify-content-center">
									<a href="#" class="btn btn-success call-item p-0 d-flex align-items-center justify-content-center me-3"><i class="ti ti-phone fs-20"></i></a>
									<a href="#" class="btn btn-danger call-item p-0 d-flex align-items-center justify-content-center"><i class="ti ti-phone-off fs-20"></i></a>
								</div>
							</div>	
						</div>		
					</div>
					<!-- /Call -->

				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Event -->
		<div class="modal fade" id="add_event">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Event</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="calendar.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Type</label>
										<select class="select">
											<option>Select</option>
											<option>pending</option>
											<option>Onhold</option>
											<option>Inprogress</option>
											<option>Done</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Event Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Event Date</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control datetimepicker">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Start Time</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control timepicker">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">End Time</label>
										<div class="input-icon-end position-relative">
											<input type="text" class="form-control timepicker">
											<span class="input-icon-addon">
												<i class="ti ti-calendar text-gray-7"></i>
											</span>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Event Location</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-0">
										<label class="form-label">Descriptions</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Event</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add New Event -->

		<!-- Event -->
		<div class="modal fade" id="event_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header bg-dark modal-bg">
						<h4 class="modal-title text-white"><span id="eventTitle"></span></h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<p class="d-flex align-items-center fw-medium text-black mb-3"><i class="ti ti-calendar-check text-default me-2"></i>26 July,2024 to 31 July,2024</p>
						<p class="d-flex align-items-center fw-medium text-black mb-3"><i class="ti ti-calendar-check text-default me-2"></i>11:00 AM to 12:15 PM</p>
						<p class="d-flex align-items-center fw-medium text-black mb-3"><i class="ti ti-map-pin-bolt text-default me-2"></i>Las Vegas, US</p>
						<p class="d-flex align-items-center fw-medium text-black mb-0"><i class="ti ti-calendar-check text-default me-2"></i>A recurring or repeating event is simply any event that you will occur more than once on your calendar.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Event -->
						
    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Fullcalendar JS -->
<script src="assets/plugins/fullcalendar/index.global.min.js"></script>
<script src="assets/plugins/fullcalendar/calendar-data.js"></script>

</body>
</html>