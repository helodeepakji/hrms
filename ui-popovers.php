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
							<h5>Popover</h5>
						</div>	
					</div>
					<!-- /Page Header -->	
					
					<div class="row">
					
						<!-- Popover -->
						<div class="col-xl-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Popover</h5>
								</div>
								<div class="card-body card-buttons">
									<div class="popover-list">
										<button class="btn btn-primary" type="button" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
										
										<a class="example-popover btn btn-primary" tabindex="0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
										
										<button class="example-popover btn btn-primary" type="button" data-bs-trigger="hover" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" title="Popover title" data-offset="-20px -20px" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On Hover Tooltip</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Popover -->
						
						<!-- Popover -->
						<div class="col-xl-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Direction Popover</h5>
								</div>
								<div class="card-body card-buttons">
									<div class="popover-list">
										<button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="top" title="Popover title" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on top</button>
										<button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on right</button>
										<button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on bottom</button>
										<button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Popover on left</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Popover -->		

						<!-- Colored Headers -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Colored Headers</h5>
								</div>
								<div class="card-body">
									<div class="btn-list popover-list">
										<button type="button" class="btn btn-outline-primary btn-wave" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-custom-class="header-primary"
											title="Color Header" data-bs-content="Popover with primary header.">
											Header Primary
										</button>
										<button type="button" class="btn btn-outline-secondary btn-wave"
											data-bs-toggle="popover" data-bs-placement="right"
											data-bs-custom-class="header-secondary" title="Color Header"
											data-bs-content="Popover with secondary header.">
											Header Secondary
										</button>
										<button type="button" class="btn btn-outline-info btn-wave" data-bs-toggle="popover"
											data-bs-placement="bottom" data-bs-custom-class="header-info"
											title="Color Header" data-bs-content="Popover with info header.">
											Header Info
										</button>
										<button type="button" class="btn btn-outline-warning btn-wave" data-bs-toggle="popover"
											data-bs-placement="left" data-bs-custom-class="header-warning"
											title="Color Header" data-bs-content="Popover with warning header.">
											Header Warning
										</button>
										<button type="button" class="btn btn-outline-success btn-wave" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-custom-class="header-success"
											title="Color Header" data-bs-content="Popover with success header.">
											Header Success
										</button>
										<button type="button" class="btn btn-outline-danger btn-wave" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-custom-class="header-danger"
											title="Color Header" data-bs-content="Popover with danger header.">
											Header Danger
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Colored Headers -->
						
						<!-- Colored Popovers -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Colored Popovers</h5>
								</div>
								<div class="card-body">
									<div class="btn-list popover-list">
										<button type="button" class="btn btn-primary btn-wave" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-custom-class="popover-primary"
											title="Color Background" data-bs-content="Popover with primary background.">
											Primary
										</button>
										<button type="button" class="btn btn-secondary btn-wave"
											data-bs-toggle="popover" data-bs-placement="right"
											data-bs-custom-class="popover-secondary" title="Color Background"
											data-bs-content="Popover with secondary background.">
											Secondary
										</button>
										<button type="button" class="btn btn-info btn-wave" data-bs-toggle="popover"
											data-bs-placement="bottom" data-bs-custom-class="popover-info"
											title="Color Background" data-bs-content="Popover with info background.">
											Info
										</button>
										<button type="button" class="btn btn-warning btn-wave" data-bs-toggle="popover"
											data-bs-placement="left" data-bs-custom-class="popover-warning"
											title="Color Background" data-bs-content="Popover with warning background.">
											Warning
										</button>
										<button type="button" class="btn btn-success btn-wave" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-custom-class="popover-success"
											title="Color Background" data-bs-content="Popover with success background.">
											Success
										</button>
										<button type="button" class="btn btn-danger btn-wave" data-bs-toggle="popover"
											data-bs-placement="right" data-bs-custom-class="popover-danger"
											title="Color Background" data-bs-content="Popover with danger background.">
											Danger
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Colored Popovers -->
						
						<!-- Dismissible Popovers -->
						<div class="col-xl-6">
							<div class="card custom-card">
								<div class="card-header justify-content-between">
									<h5 class="card-title">
										Dismissible Popovers
									</h5>
								</div>
								<div class="card-body d-flex flex-wrap">
									<a tabindex="0" class="btn btn-primary m-1" role="button"
											data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" title="Dismissible popover"
											data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
									</a>
									<a tabindex="0" class="btn btn-secondary m-1" role="button"
										data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" title="Dismissible popover"
										data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
									</a>
									<a tabindex="0" class="btn btn-info m-1" role="button" data-bs-toggle="popover"
										data-bs-trigger="focus" data-bs-placement="bottom" title="Dismissible popover"
										data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
									</a>
									<a tabindex="0" class="btn btn-warning m-1" role="button" data-bs-toggle="popover"
										data-bs-trigger="focus" data-bs-placement="left" title="Dismissible popover"
										data-bs-content="And here's some amazing content. It's very engaging. Right?">Popover Dismiss
									</a>
								</div>
							</div>
						</div>
						<!-- /Dismissible Popovers -->
						
						<!-- Disabled Popovers -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<h5 class="card-title">
										Disabled Popover
									</h5>
								</div>
								<div class="card-body">
									<span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
									data-bs-trigger="hover focus" data-bs-content="Disabled popover">
									<button class="btn btn-primary" type="button" disabled>Disabled
										button</button>
									</span>
								</div>
							</div>
						</div>
						<!-- /Disabled Popovers -->
						
						<!-- Icon Popovers -->
						<div class="col-xl-6">
							<div class="card">
								<div class="card-header justify-content-between">
									<h5 class="card-title">
										Icon Popovers
									</h5>
								</div>
								<div class="card-body">
									<a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
									data-bs-placement="top" data-bs-custom-class="popover-primary only-body" data-bs-content="This popover is used to provide details about this icon.">
										<i class="fa-solid fa-circle-exclamation text-primary"></i>
									</a>
									<a class="me-4" href="javascript:void(0)" data-bs-toggle="popover"
									data-bs-placement="left" data-bs-custom-class="popover-secondary only-body" data-bs-content="This popover is used to provide information about this icon.">
										<i class="fa-solid fa-question text-secondary"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- /Icon Popovers -->


					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->     
</div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>

</html>