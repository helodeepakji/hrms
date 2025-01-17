<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Player CSS -->
 <link rel="stylesheet" href="assets/css/plyr.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
<!-- Jsvector Maps -->
<link rel="stylesheet" href="assets/plugins/jsvectormap/css/jsvectormap.min.css">

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

				<!-- Start::row-1 -->
				<div class="row">
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Basic Vector Map</div>
							</div>
							<div class="card-body">
								<div id="vector-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Map With Markers</div>
							</div>
							<div class="card-body">
								<div id="marker-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Map With Image Markers</div>
							</div>
							<div class="card-body">
								<div id="marker-image-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Map With Lines</div>
							</div>
							<div class="card-body">
								<div id="lines-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">US Vector Map</div>
							</div>
							<div class="card-body">
								<div id="us-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Russia Vector Map</div>
							</div>
							<div class="card-body">
								<div id="russia-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Spain Vector Map</div>
							</div>
							<div class="card-body">
								<div id="spain-map"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card custom-card">
							<div class="card-header">
								<div class="card-title">Canada Vector Map</div>
							</div>
							<div class="card-body">
								<div id="canada-map"></div>
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
<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/plugins/jsvectormap/js/jsvectormap.min.js"></script>
<!-- JSVector Maps MapsJS -->
<script src="assets/plugins/jsvectormap/maps/world-merc.js"></script>
<script src="assets/js/us-merc-en.js"></script>
<script src="assets/js/russia.js"></script>
<script src="assets/js/spain.js"></script>
<script src="assets/js/canada.js"></script>
<script src="assets/js/jsvectormap.js"></script>
<script src="assets/plugins/@simonwep/pickr/pickr.min.js"></script>

</body>
</html>