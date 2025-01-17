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
							<h5>Notification</h5>
						</div>	
					</div>
					<!-- /Page Header -->					
					
					<div class="row">
					
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Confirm</div>
								</div>
								<div class="card-body">
									  <a href="javascript: void(0);"  id="alert-confirm" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Prompt</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-prompt" class="btn btn-primary waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Success Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-success" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Error Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-error" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
						<!-- Alert -->
						<div class="col-md-4">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Warnng Alert</div>
								</div>
								<div class="card-body">
									 <a href="javascript: void(0);"  id="alert-warning" class="btn btn-primary btn-sm waves-effect waves-light">Click me</a>
								</div>
							</div>
						</div>
						<!-- /Alert -->
						
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
        </div>
        <!-- /Main Wrapper -->
     <?php include 'layouts/vendor-scripts.php'; ?>
    </body>
</html>