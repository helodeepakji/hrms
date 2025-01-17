<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Leaflet Maps CSS -->
 <link rel="stylesheet" href="assets/plugins/leaflet/leaflet.css">
<!-- Dragula CSS -->
<link rel="stylesheet" href="assets/plugins/dragula/css/dragula.min.css">

</head>
<body>
<div id="global-loader" style="display: none;">
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
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Leaflet Map</div>
                            </div>
                            <div class="card-body">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Markers,circles and Polygons</div>
                            </div>
                            <div class="card-body">
                                <div id="map1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Popup</div>
                            </div>
                            <div class="card-body">
                                <div id="map-popup"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Custom Icon</div>
                            </div>
                            <div class="card-body">
                                <div id="map-custom-icon"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Interactive Choropleth Map</div>
                            </div>
                            <div class="card-body">
                                <div id="interactive-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
			</div>
		</div>
    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Leaflet Maps JS -->
<script src="assets/plugins/leaflet/leaflet.js"></script>
<script src="assets/js/leaflet.js"></script>
<script src="assets/js/plyr-js.js"></script>
</body>
</html>