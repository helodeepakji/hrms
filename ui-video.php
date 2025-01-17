<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>SmartHR - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>
 <!-- Page Wrapper -->
 <div class="page-wrapper">
                <div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Video</h5>
						</div>	
					</div>
					<!-- /Page Header -->	
											
					<div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body card-buttons">
                                    <h4 class="header-title">Responsive embed video 21:9</h4>
                                    <p class="sub-header">Use class <code>.ratio-21x9</code></p>
                                    <!-- 21:9 aspect ratio -->
                                    <div class="ratio ratio-21x9">
                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?autohide=0&showinfo=0&controls=0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body card-buttons">
                                    <h4 class="header-title">Responsive embed video 16:9</h4>
                                    <p class="sub-header">Use class <code>.ratio-16x9</code></p>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body card-buttons">
                                    <h4 class="header-title">Responsive embed video 4:3</h4>
                                    <p class="sub-header">Use class <code>.ratio-4x3</code></p>
                                    <!-- 4:3 aspect ratio -->
                                    <div class="ratio ratio-4x3">
                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body card-buttons">
                                    <h4 class="header-title">Responsive embed video 1:1</h4>
                                    <p class="sub-header">Use class <code>.ratio-1x1</code></p>
                                    <!-- 1:1 aspect ratio -->
                                    <div class="ratio ratio-1x1">
                                        <iframe src="https://www.youtube.com/embed/6bzTrChjEdc?ecver=1"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->	
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
			
</div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>