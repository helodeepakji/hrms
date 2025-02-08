<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>UniqueMaps Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Dragula CSS -->
 <link rel="stylesheet" href="assets/plugins/dragula/css/dragula.min.css">
 <link rel="stylesheet" href="assets/plugins/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="assets/plugins/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/plugins/pickr/pickr-themes.css" />
</head>
<body>
<div id="global-loader">
		<div class="page-loader"></div>
	</div>
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>
    <div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Sortable JS</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

              <div class="row">
                <!-- Flat Picker -->
                <div class="col-12 mb-6">
                  <div class="card">
                    <h5 class="card-header">Flatpickr</h5>
                    <div class="card-body">
                      <div class="row">
                        <!-- Date Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-date" class="form-label">Date Picker</label>
                          <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
                        </div>
                        <!-- /Date Picker -->

                        <!-- Time Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-time" class="form-label">Time Picker</label>
                          <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
                        </div>
                        <!-- /Time Picker -->

                        <!-- Datetime Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-datetime" class="form-label">Datetime Picker</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="YYYY-MM-DD HH:MM"
                            id="flatpickr-datetime" />
                        </div>
                        <!-- /Datetime Picker-->

                        <!-- Multiple Dates Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-multi" class="form-label">Multiple Dates Picker</label>
                          <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-multi" />
                        </div>
                        <!-- /Multiple Dates Picker-->

                        <!-- Range Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-range" class="form-label">Range Picker</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="YYYY-MM-DD to YYYY-MM-DD"
                            id="flatpickr-range" />
                        </div>
                        <!-- /Range Picker-->

                        <!-- Human Friendly Date Picker-->
                        <div class="col-md-6 col-12 mb-6">
                          <label for="flatpickr-human-friendly" class="form-label">Human Friendly Date Picker</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Month DD, YYYY"
                            id="flatpickr-human-friendly" />
                        </div>
                        <!-- /Human Friendly Date Picker-->

                        <!-- Disabled Range-->
                        <div class="col-md-6 col-12 mb-md-0 mb-6">
                          <label for="flatpickr-disabled-range" class="form-label">Disabled Range</label>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="YYYY-MM-DD"
                            id="flatpickr-disabled-range" />
                        </div>
                        <!-- /Disabled Range-->

                        <!-- Inline Picker-->
                        <div class="col-md-6 col-12">
                          <label for="flatpickr-inline" class="form-label">Inline Picker</label>
                          <input type="text" class="form-control mb-1" placeholder="YYYY-MM-DD" id="flatpickr-inline" />
                        </div>
                        <!-- /Inline Picker-->
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Flatpickr -->

                <!-- Bootstrap Datepicker -->
                <div class="col-12 mb-6">
                  <div class="card">
                    <h5 class="card-header">Bootstrap Datepicker</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-datepicker-basic" class="form-label">Basic</label>
                          <input type="text" id="bs-datepicker-basic" placeholder="MM/DD/YYYY" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-datepicker-format" class="form-label">Format</label>
                          <input type="text" id="bs-datepicker-format" placeholder="DD/MM/YYYY" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="dateRangePicker" class="form-label">Date Range</label>
                          <div class="input-group input-daterange" id="bs-datepicker-daterange">
                            <input type="text" id="dateRangePicker" placeholder="MM/DD/YYYY" class="form-control" />
                            <span class="input-group-text">to</span>
                            <input type="text" placeholder="MM/DD/YYYY" class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-datepicker-disabled-days" class="form-label">Disabled Days</label>
                          <input
                            type="text"
                            id="bs-datepicker-disabled-days"
                            placeholder="MM/DD/YYYY"
                            class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-datepicker-multidate" class="form-label">Multidate</label>
                          <input
                            type="text"
                            id="bs-datepicker-multidate"
                            placeholder="MM/DD/YYYY, MM/DD/YYYY"
                            class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-datepicker-options" class="form-label">Options</label>
                          <input type="text" id="bs-datepicker-options" placeholder="MM/DD/YYYY" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-6">
                          <label for="bs-datepicker-autoclose" class="form-label">Auto Close</label>
                          <input
                            type="text"
                            id="bs-datepicker-autoclose"
                            placeholder="MM/DD/YYYY"
                            class="form-control" />
                        </div>
                        <div class="col-md-6 col-12">
                          <label class="form-label">Inline</label>
                          <div id="bs-datepicker-inline"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Bootstrap Datepicker -->

                <!-- Bootstrap Daterangepicker -->
                <div class="col-12 mb-6">
                  <div class="card">
                    <h5 class="card-header">Bootstrap Daterange Picker</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-rangepicker-basic" class="form-label">Basic</label>
                          <input type="text" id="bs-rangepicker-basic" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-rangepicker-single" class="form-label">Single Picker</label>
                          <input type="text" id="bs-rangepicker-single" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-rangepicker-time" class="form-label">With Time Picker</label>
                          <input type="text" id="bs-rangepicker-time" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="bs-rangepicker-range" class="form-label">Ranges</label>
                          <input type="text" id="bs-rangepicker-range" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-6">
                          <label for="bs-rangepicker-week-num" class="form-label">Week Numbers</label>
                          <input type="text" id="bs-rangepicker-week-num" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12">
                          <label for="bs-rangepicker-dropdown" class="form-label">Month & Year Dropdown</label>
                          <input type="text" id="bs-rangepicker-dropdown" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Bootstrap Daterangepicker -->

                <!-- jQuery Timepicker -->
                <div class="col-12 mb-6">
                  <div class="card">
                    <h5 class="card-header">jQuery Timepicker</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-12 mb-6">
                          <label for="timepicker-basic" class="form-label">Basic</label>
                          <input type="text" id="timepicker-basic" placeholder="HH:MMam" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="timepicker-min-max" class="form-label">Min-Max</label>
                          <input type="text" id="timepicker-min-max" placeholder="HH:MMam" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="timepicker-disabled-times" class="form-label">Disabled Times</label>
                          <input
                            type="text"
                            id="timepicker-disabled-times"
                            placeholder="HH:MMam"
                            class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-6">
                          <label for="timepicker-format" class="form-label">Format</label>
                          <input type="text" id="timepicker-format" placeholder="HH:MM:SS" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12 mb-md-0 mb-6">
                          <label for="timepicker-step" class="form-label">Step</label>
                          <input type="text" id="timepicker-step" placeholder="HH:MMam" class="form-control" />
                        </div>
                        <div class="col-md-6 col-12">
                          <label for="timepicker-24hours" class="form-label">24 Hours Format</label>
                          <input type="text" id="timepicker-24hours" placeholder="20:00:00" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /jQuery Timepicker -->

                <!-- Color Picker -->
                <div class="col-12">
                  <div class="card">
                    <h5 class="card-header">Color Picker</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="classic col col-sm-3 col-lg-2">
                          <p>Classic</p>
                          <div id="color-picker-classic"></div>
                        </div>
                        <div class="monolith col col-sm-3 col-lg-2">
                          <p>Monolith</p>
                          <div id="color-picker-monolith"></div>
                        </div>
                        <div class="nano col col-sm-3 col-lg-2">
                          <p>Nano</p>
                          <div id="color-picker-nano"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Color Picker-->
              </div>

			</div>
		</div>

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/plugins/flatpickr/flatpickr.js"></script>
<script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jquery-timepicker/jquery-timepicker.js"></script>
<script src="assets/plugins/pickr/pickr.js"></script>
<script src="assets/plugins/@simonwep/pickr/pickr.min.js"></script>
<!-- Page JS -->
<script src="assets/js/forms-pickers.js"></script>
	
</body>
</html>