<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>UniqueMaps - HRMS admin template</title>

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
							<h5>Tooltip</h5>
						</div>	
					</div>
					<!-- /Page Header -->	
					
					<div class="row">

						<!-- Colored Tooltips -->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Colored Tooltips
                                    </div>                                    
                                </div>
                                <div class="card-body">
                                    <div class="btn-list">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-original-title="Primary Tooltip">
                                            Primary Tooltip
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-secondary" data-bs-placement="top" data-bs-original-title="Secondary Tooltip">
                                            Secondary Tooltip
                                        </button>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-warning" data-bs-placement="top" data-bs-original-title="Warning Tooltip">
                                            Warning Tooltip
                                        </button>
                                        <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-info" data-bs-placement="top" data-bs-original-title="Info Tooltip">
                                            Info Tooltip
                                        </button>
                                        <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-success" data-bs-placement="top" data-bs-original-title="Success Tooltip">
                                            Success Tooltip
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-danger" data-bs-placement="top" data-bs-original-title="Danger Tooltip">
                                            Danger Tooltip
                                        </button>
                                        <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-light" data-bs-placement="top" data-bs-original-title="Light Tooltip">
                                            Light Tooltip
                                        </button>
                                        <button type="button" class="btn btn-dark text-white" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-original-title="Dark Tooltip">
                                            Dark Tooltip
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
						<!-- /Colored Tooltips -->

						<!-- Html Element -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Html Element</h5>
								</div>
								<div class="card-body">
									<div class="popover-list">
										<button class="example-popover btn btn-primary" type="button" data-container="body" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Popover title">Hover Me</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Html Element -->
					
						<!-- Direction Tooltip -->
						<div class="col-md-12">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Direction Tooltip</h5>
								</div>
								<div class="card-body">
									<div class="tooltip-list">
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Tooltip on top">
										  Tooltip on top
										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Tooltip on right">
										  Tooltip on right
										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Tooltip on bottom">
										  Tooltip on bottom
										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Tooltip on left">
										  Tooltip on left
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Direction Tooltip -->
						
						<!-- Html Element -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Html Element</h5>
								</div>
								<div class="card-body">
									<div class="popover-list">
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-html="true" title="" data-bs-original-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
										  Tooltip with HTML
										</button>
										<button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-html="true" data-bs-placement="bottom" title="" data-bs-original-title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
										  Click Me
										</button>
									</div>
								</div>
							</div>
						</div>
						<!-- /Html Element -->

						<!-- Tooltip -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Disabled Elements</h5>
								</div>
								<div class="card-body">
									<span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip"
                                        title="Disabled tooltip">
                                        <button class="btn btn-primary" type="button" disabled="">Disabled
                                            button
                                        </button>
                                    </span>
                                </div>
							</div>
						</div>
						<!-- /Tooltip -->

						<!-- Tooltip Links -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Tooltips on Links</h5>
								</div>
								<div class="card-body">
									<p class="text-muted mb-0">
                                        Hover on the link to view the 
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" title="Link Tooltip" class="text-primary">
                                        	Tooltip
                                        </a>
                                    </p>
                                </div>
							</div>
						</div>
						<!-- /Tooltip Links -->

						<!-- Tooltip Images -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Tooltip For Images</h5>
								</div>
								<div class="card-body">
									<a href="javascript:void(0);" data-bs-toggle="tooltip" title="Marina Kai" data-bs-custom-class="tooltip-primary" class="avatar avatar-md me-2 online avatar-rounded">
                                        <img src="assets/img/profiles/avatar-06.jpg" alt="img">
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Alex Carey" data-bs-custom-class="tooltip-primary" class="avatar avatar-lg me-2 online avatar-rounded">
                                        <img src="assets/img/profiles/avatar-05.jpg" alt="img">
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="tooltip" title="Maria John" data-bs-custom-class="tooltip-primary" class="avatar avatar-xl me-2 offline avatar-rounded">
                                        <img src="assets/img/profiles/avatar-04.jpg" alt="img">
                                    </a>
                                </div>
							</div>
						</div>
						<!-- /Tooltip Images -->
							
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