<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>SmartHR - HRMS admin template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

  <body>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <?php include 'layouts/menu.php'; ?>
          	<!-- Page Wrapper -->
              <div class="page-wrapper">
                <div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Text Editor</h5>
						</div>	
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					
						<!-- Editor -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Editor</h5>
								</div>
								<div class="card-body">
									<div id="summernote"></div>
								</div>
							</div>
						</div>
						<!-- /Editor -->
							
					</div>				
				</div>			
			</div>
			<!-- /Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
        <?php include 'layouts/vendor-scripts.php'; ?>

    </body>

</html>