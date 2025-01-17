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
							<h5>Breadcrumbs</h5>
						</div>	
					</div>	
                    <!-- /Page Header -->
					<div class="row">
						<!-- Breadcrumbs -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Default Breadcrumb</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Arrow Style</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-arrow">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-arrow">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-arrow mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Pipe Style</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-pipe">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-pipe">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-pipe mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Line Style</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-line">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-line">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-line mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Dot Style</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-dot">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-dot">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-dot mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Dividers</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-divide">
											<li class="breadcrumb-item active" aria-current="page">Home</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-divide">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-divide mb-0">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Breadcrumb with Icon</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i></li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Without Separator</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-separatorless">
											<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i></li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-separatorless">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item active" aria-current="page">Library</li>
										</ol>
									</nav>

									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-separatorless mb-0">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card colored-breadcrumb">
								<div class="card-header">
									<h5 class="card-title">Colored Breadcrumb</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-primary">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-secondary">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-success">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-info">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-warning">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-danger">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-dark mb-0">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Light Colored Breadcrumb</h5>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-primary">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-secondary">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-success">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-info">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-warning">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-danger">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb breadcrumb-colored bg-soft-dark mb-0">
											<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active" aria-current="page">Data</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<!-- /Breadcrumbs -->
					</div>					
					
									
				</div>			
			</div>
			<!-- /Page Wrapper -->	

</div>
<!-- end main Wrapper-->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>




</body>

</html>