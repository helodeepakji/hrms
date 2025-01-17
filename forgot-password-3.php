<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body class="bg-linear-gradiant">
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
   
    <div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-md-4 mx-auto vh-100">
						<form action="email-verification-3.php" class="vh-100">
							<div class="vh-100 d-flex flex-column justify-content-between p-4 pb-0">
								<div class=" mx-auto mb-5 text-center">
									<img src="assets/img/logo.svg"
										class="img-fluid" alt="Logo">
								</div>
								<div class="">
									<div class="text-center mb-3">
										<h2 class="mb-2">Forgot Password?</h2>
										<p class="mb-0">If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
									</div>
									<div class="mb-3">
										<label class="form-label">Email Address</label>
										<div class="input-group">
											<input type="text" value="" class="form-control border-end-0">
											<span class="input-group-text border-start-0">
												<i class="ti ti-mail"></i>
											</span>
										</div>
									</div>
									<div class="mb-3">
										<button type="submit" class="btn btn-primary w-100">Submit</button>
									</div>
									<div class="text-center">
										<h6 class="fw-normal text-dark mb-0">Return to
											<a href="login-3.php" class="hover-a">  Sign In </a>
										</h6>
									</div>
								</div>
								<div class="mt-5 pb-4 text-center">
									<p class="mb-0 text-gray-9">Copyright &copy; 2024 - Smarthr</p>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>