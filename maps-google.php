<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
  <!-- Dragula CSS -->
  <link rel="stylesheet" href="assets/plugins/dragula/css/dragula.min.css">
  <link rel="stylesheet" href="assets/plugins/swiper/swiper-bundle.min.css">

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
                                <div class="card-title">Basic Map</div>
                            </div>
                            <div class="card-body">
                                <div id="google-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Overlay Map</div>
                            </div>
                            <div class="card-body">
                                <div id="google-map-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Layers Map</div>
                            </div>
                            <div class="card-body">
                                <div id="map-layers"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Markers</div>
                            </div>
                            <div class="card-body">
                                <div id="map-markers"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Streetview Panaroma</div>
                            </div>
                            <div class="card-body">
                                <div id="streetview-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Map With Geo Fencing</div>
                            </div>
                            <div class="card-body">
                                <div id="map-geofencing"></div>
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
</body>
</html>