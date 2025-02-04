<?php
include 'layouts/session.php';

$page_name = 'employee-details';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

if (isset($_GET['id']) && $_GET['id'] != '') {
	$id = base64_decode($_GET['id']);
} else {
	$id = $_SESSION['userId'];
}

$sql = $conn->prepare("SELECT `users`.*, `role`.`name` AS `role` FROM `users` JOIN `role` ON `role`.`id` = `users`.`role_id` WHERE `users`.`id` = ?");
$sql->execute([$id]);
$user = $sql->fetch(PDO::FETCH_ASSOC);

$experience = $conn->prepare("SELECT * FROM `experience` WHERE `user_id` = ?");
$experience->execute([$id]);
$experience = $experience->fetchAll(PDO::FETCH_ASSOC);

$education = $conn->prepare("SELECT * FROM `education` WHERE `user_id` = ?");
$education->execute([$id]);
$education = $education->fetchAll(PDO::FETCH_ASSOC);

$family = $conn->prepare("SELECT * FROM `family` WHERE `user_id` = ?");
$family->execute([$id]);
$family = $family->fetchAll(PDO::FETCH_ASSOC);


$role = $conn->prepare("SELECT * FROM `role`");
$role->execute();
$role = $role->fetchAll(PDO::FETCH_ASSOC);

$user_details = $conn->prepare("SELECT * FROM `user_details`  WHERE `user_id` = ?");
$user_details->execute([$id]);
$user_details = $user_details->fetch(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Smarthr Admin Template</title>
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>
</head>

<body>
	<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

	<div class="main-wrapper">
		<?php include 'layouts/menu.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="employees.php">
								<i class="ti ti-arrow-left me-2"></i>Employee Details</a>
						</h6>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="row">
					<div class="col-xl-4 theiaStickySidebar">
						<div class="card card-bg-1">
							<div class="card-body p-0">
								<span class="avatar avatar-xl avatar-rounded border border-2 border-white m-auto d-flex mb-2">
									<img src="<?php echo $user['profile'] == '' ? 'assets/img/users/user-13.jpg' : $user['profile'] ?>" class="w-auto h-auto" alt="Img">
								</span>
								<div class="text-center px-3 pb-3 border-bottom">
									<div class="mb-3">
										<h5 class="d-flex align-items-center justify-content-center mb-1"><?php echo $user['name'] ?><i class="ti ti-discount-check-filled text-success ms-1"></i></h5>
										<span class="badge badge-soft-dark fw-medium me-2">
											<i class="ti ti-point-filled me-1"></i><?php echo ucfirst(str_replace('_', ' ', $user['role'])) ?>
										</span>
										<span class="badge badge-soft-secondary fw-medium"><?php echo $user['employee_id'] ?></span>
									</div>
									<div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span class="d-inline-flex align-items-center">
												<i class="ti ti-id me-2"></i>
												Employee ID
											</span>
											<p class="text-dark"><?php echo $user['employee_id'] ?></p>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span class="d-inline-flex align-items-center">
												<i class="ti ti-star me-2"></i>
												Role
											</span>
											<p class="text-dark"><?php echo ucfirst(str_replace('_', ' ', $user['role'])) ?></p>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span class="d-inline-flex align-items-center">
												<i class="ti ti-calendar-check me-2"></i>
												Date Of Join
											</span>
											<p class="text-dark"><?php echo date('d M, Y', strtotime($user['joining_date']))  ?></p>
										</div>
										<div class="row gx-2 mt-3">
											<div class="col-4">
												<div>
													<a href="#" class="btn btn-dark w-100" data-bs-toggle="modal" data-bs-target="#edit_employee" onclick="getEmployee(<?php echo $user['id'] ?>)"><i class="ti ti-edit me-1"></i>Edit Info</a>
												</div>
											</div>
											<div class="col-4">
												<div>
													<a onclick="empTerminate(<?php echo $user['id'] ?>)" class="btn btn-<?php echo $user['is_terminated'] == 0 ? 'danger' : 'success' ?> w-100"><i class="ti ti-message-heart me-1"></i><?php echo $user['is_terminated'] == 0 ? 'Terminate' : 'Active' ?></a>
												</div>
											</div>
											<div class="col-4">
												<div>
													<a onclick="passwordReset(<?php echo $user['id'] ?>)" class="btn btn-danger w-100"></i>Password</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="p-3 border-bottom">
									<div class="d-flex align-items-center justify-content-between mb-2">
										<h6>Basic information</h6>
										<a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_employee" onclick="getEmployee(<?php echo $user['id'] ?>)"><i class="ti ti-edit"></i></a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-phone me-2"></i>
											Phone
										</span>
										<p class="text-dark"><?php echo $user['mobile'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-mail-check me-2"></i>
											Email
										</span>
										<a href="javascript:void(0);" class="text-info d-inline-flex align-items-center"><?php echo $user['email'] ?><i class="ti ti-copy text-dark ms-2"></i></a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-gender-male me-2"></i>
											Gender
										</span>
										<p class="text-dark text-end"><?php echo $user['gender'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-cake me-2"></i>
											Birdthday
										</span>
										<p class="text-dark text-end"><?php echo date('d M, Y', strtotime($user['dob'])) ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-map-pin-check me-2"></i>
											Address
										</span>
										<p class="text-dark text-end"><?php echo $user['correspondence_address'] ?></p>
									</div>
								</div>
								<div class="p-3 border-bottom">
									<div class="d-flex align-items-center justify-content-between mb-2">
										<h6>Personal Information</h6>
										<a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_personal"><i class="ti ti-edit"></i></a>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-e-passport me-2"></i>
											Pancard No
										</span>
										<p class="text-dark"><?php echo $user_details['pancard'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-calendar-x me-2"></i>
											Aadhar Card
										</span>
										<p class="text-dark text-end"><?php echo $user_details['aadhar'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-calendar-x me-2"></i>
											Emergency Contact
										</span>
										<p class="text-dark text-end"><?php echo $user['emergency_contact'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between mb-2">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-hotel-service me-2"></i>
											Marital status
										</span>
										<p class="text-dark text-end"><?php echo $user['marital_status'] ?></p>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<span class="d-inline-flex align-items-center">
											<i class="ti ti-map-pin-check me-2"></i>
											Permanent Address
										</span>
										<p class="text-dark text-end"><?php echo $user['permanent_address'] ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div>
							<div class="tab-content custom-accordion-items">
								<div class="tab-pane active show" id="bottom-justified-tab1" role="tabpanel">
									<div class="accordion accordions-items-seperate" id="accordionExample">
										<div class="accordion-item">
											<div class="accordion-header" id="headingTwo">
												<div class="accordion-button">
													<div class="d-flex align-items-center flex-fill">
														<h5>Bank Information</h5>
														<a href="#" class="btn btn-sm btn-icon ms-auto" data-bs-toggle="modal" data-bs-target="#edit_personal"><i class="ti ti-edit"></i></a>
														<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderTwo" aria-expanded="false" aria-controls="primaryBorderTwo">
															<i class="ti ti-chevron-down fs-18"></i>
														</a>
													</div>
												</div>
											</div>
											<div id="primaryBorderTwo" class="accordion-collapse collapse border-top" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<div class="row">
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Bank Name
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1"><?php echo $user_details['bank_name'] ?></h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Bank account no
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1"><?php echo $user_details['account'] ?></h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																IFSC Code
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1"><?php echo $user_details['ifsc_code'] ?></h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Account Holder
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1"><?php echo $user_details['bank_holder'] ?></h6>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header" id="headingThree">
												<div class="accordion-button">
													<div class="d-flex align-items-center justify-content-between flex-fill">
														<h5>Family Information</h5>
														<div class="d-flex">
															<a href="#" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_familyinformation" onclick="getFamily(<?php echo $user['id'] ?>)"><i class="ti ti-edit"></i></a>
															<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderThree" aria-expanded="false" aria-controls="primaryBorderThree">
																<i class="ti ti-chevron-down fs-18"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="primaryBorderThree" class="accordion-collapse collapse border-top" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
												<div class="accordion-body">
													<?php foreach ($family as $value) {
														echo '
														<div class="row mb-3">
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Name
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1">' . $value['name'] . '</h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Relationship
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1">' . ucfirst($value['relation']) . '</h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Date of birth
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1">' . date('d M, Y', strtotime($value['dob'])) . '</h6>
														</div>
														<div class="col-md-3">
															<span class="d-inline-flex align-items-center">
																Phone
															</span>
															<h6 class="d-flex align-items-center fw-medium mt-1">' . $value['phone'] . '</h6>
														</div>
													</div>
														';
													} ?>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="accordion-item">
													<div class="row">
														<div class="accordion-header" id="headingFour">
															<div class="accordion-button">
																<div class="d-flex align-items-center justify-content-between flex-fill">
																	<h5>Education Details</h5>
																	<div class="d-flex">
																		<a href="#" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_employee" onclick="getEmployee(<?php echo $user['id'] ?>)"><i class="ti ti-edit"></i></a>
																		<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderFour" aria-expanded="false" aria-controls="primaryBorderFour">
																			<i class="ti ti-chevron-down fs-18"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<div id="primaryBorderFour" class="accordion-collapse collapse border-top" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
															<div class="accordion-body">
																<div>
																	<?php foreach ($education as $value) {
																		echo '<div class="mb-3">
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<span class="d-inline-flex align-items-center fw-normal">
																					' . $value['university'] . '
																				</span>
																				<h6 class="d-flex align-items-center mt-1">' . $value['degree'] . '</h6>
																			</div>
																			<p class="text-dark">(' . $value['mark'] . '%) ' . $value['year'] . '</p>
																		</div>
																	</div>';
																	} ?>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="accordion-item">
													<div class="row">
														<div class="accordion-header" id="headingFive">
															<div class="accordion-button collapsed">
																<div class="d-flex align-items-center justify-content-between flex-fill">
																	<h5>Experience</h5>
																	<div class="d-flex">
																		<a href="#" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_employee" onclick="getEmployee(<?php echo $user['id'] ?>)"><i class="ti ti-edit"></i></a>
																		<a href="#" class="d-flex align-items-center collapsed collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderFive" aria-expanded="false" aria-controls="primaryBorderFive">
																			<i class="ti ti-chevron-down fs-18"></i>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<div id="primaryBorderFive" class="accordion-collapse collapse border-top" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
															<div class="accordion-body">
																<div>
																	<?php foreach ($experience as $value) {
																		echo '
																		<div class="mb-3">
																		<div class="d-flex align-items-center justify-content-between">
																			<div>
																				<h6 class="d-inline-flex align-items-center fw-medium">
																					' . $value['oraganization'] . '
																				</h6>
																				<span class="d-flex align-items-center badge bg-secondary-transparent mt-1"><i class="ti ti-point-filled me-1"></i>' . $value['salary'] . '</span>
																			</div>
																			<p class="text-dark">' . date('d M, Y', strtotime($value['start_date'])) . ' - ' . date('d M, Y', strtotime($value['end_date'])) . '</p>
																		</div>
																	</div>
																		';
																	} ?>

																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="contact-grids-tab p-0 mb-3">
													<ul class="nav nav-underline" id="myTab" role="tablist">
														<li class="nav-item" role="presentation">
															<button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Projects</button>
														</li>
														<li class="nav-item" role="presentation">
															<button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Assets</button>
														</li>
													</ul>
												</div>
												<div class="tab-content" id="myTabContent3">
													<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
														<div class="row">
															<div class="col-md-6 d-flex">
																<div class="card flex-fill mb-4 mb-md-0">
																	<div class="card-body">
																		<div class="d-flex align-items-center pb-3 mb-3 border-bottom">
																			<a href="project-details.php" class="flex-shrink-0 me-2">
																				<img src="assets/img/social/project-03.svg" alt="Img">
																			</a>
																			<div>
																				<h6 class="mb-1"><a href="project-details.php">World Health</a></h6>
																				<div class="d-flex align-items-center">
																					<p class="mb-0 fs-13">8 tasks</p>
																					<p class="fs-13"><span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>15 Completed</p>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div>
																					<span class="mb-1 d-block">Deadline</span>
																					<p class="text-dark">31 July 2025</p>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div>
																					<span class="mb-1 d-block">Project Lead</span>
																					<a href="#" class="fw-normal d-flex align-items-center">
																						<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																						Leona
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6 d-flex">
																<div class="card flex-fill mb-0">
																	<div class="card-body">
																		<div class="d-flex align-items-center pb-3 mb-3 border-bottom">
																			<a href="project-details.php" class="flex-shrink-0 me-2">
																				<img src="assets/img/social/project-01.svg" alt="Img">
																			</a>
																			<div>
																				<h6 class="mb-1 text-truncate"><a href="project-details.php">Hospital Administration</a></h6>
																				<div class="d-flex align-items-center">
																					<p class="mb-0 fs-13">8 tasks</p>
																					<p class="fs-13"><span class="mx-1"><i class="ti ti-point-filled text-primary"></i></span>15 Completed</p>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-6">
																				<div>
																					<span class="mb-1 d-block">Deadline</span>
																					<p class="text-dark">31 July 2025</p>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div>
																					<span class="mb-1 d-block">Project Lead</span>
																					<a href="#" class="fw-normal d-flex align-items-center">
																						<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																						Leona
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="card flex-fill">
																	<div class="card-body">
																		<div class="row align-items-center">
																			<div class="col-md-8">
																				<div class="d-flex align-items-center">
																					<a href="project-details.php" class="flex-shrink-0 me-2">
																						<img src="assets/img/products/product-05.jpg" class="img-fluid rounded-circle" alt="img">
																					</a>
																					<div>
																						<h6 class="mb-1"><a href="project-details.php">Dell Laptop - #343556656</a></h6>
																						<div class="d-flex align-items-center">
																							<p><span class="text-primary">AST - 001<i class="ti ti-point-filled text-primary mx-1"></i></span>Assigned on 22 Nov, 2022 10:32AM </p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div>
																					<span class="mb-1 d-block">Assigned by</span>
																					<a href="#" class="fw-normal d-flex align-items-center">
																						<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																						Andrew Symon
																					</a>
																				</div>
																			</div>
																			<div class="col-md-1">
																				<div class="dropdown ms-2">
																					<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																						<i class="ti ti-dots-vertical"></i>
																					</a>
																					<ul class="dropdown-menu dropdown-menu-end p-3">
																						<li>
																							<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#asset_info">View Info</a>
																						</li>
																						<li>
																							<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#refuse_msg">Raise Issue </a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-12 d-flex">
																<div class="card flex-fill mb-0">
																	<div class="card-body">
																		<div class="row align-items-center">
																			<div class="col-md-8">
																				<div class="d-flex align-items-center">
																					<a href="project-details.php" class="flex-shrink-0 me-2">
																						<img src="assets/img/products/product-06.jpg" class="img-fluid rounded-circle" alt="img">
																					</a>
																					<div>
																						<h6 class="mb-1"><a href="project-details.php">Bluetooth Mouse - #478878</a></h6>
																						<div class="d-flex align-items-center">
																							<p><span class="text-primary">AST - 001<i class="ti ti-point-filled text-primary mx-1"></i></span>Assigned on 22 Nov, 2022 10:32AM </p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div>
																					<span class="mb-1 d-block">Assigned by</span>
																					<a href="#" class="fw-normal d-flex align-items-center">
																						<img class="avatar avatar-sm rounded-circle me-2" src="assets/img/profiles/avatar-01.jpg" alt="Img">
																						Andrew Symon
																					</a>
																				</div>
																			</div>
																			<div class="col-md-1">
																				<div class="dropdown ms-2">
																					<a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
																						<i class="ti ti-dots-vertical"></i>
																					</a>
																					<ul class="dropdown-menu dropdown-menu-end p-3">
																						<li>
																							<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#asset_info">View Info</a>
																						</li>
																						<li>
																							<a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#refuse_msg">Raise Issue </a>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
				<p>Designed &amp; Developed By <a href="#" class="text-primary">Dreams</a></p>
			</div> -->
		</div>
		<!-- /Page Wrapper -->

		<!-- Edit Employee -->
		<div class="modal fade" id="edit_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Edit Employee</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="contact-grids-tab">
						<ul class="nav nav-underline" id="myTab2" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
									data-bs-target="#basic-info20" type="button" role="tab" aria-selected="true">Basic
									Information</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="address-tab2" data-bs-toggle="tab"
									data-bs-target="#education" type="button" role="tab"
									aria-selected="false">Education</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="address-tab2" data-bs-toggle="tab"
									data-bs-target="#experience" type="button" role="tab"
									aria-selected="false">Experience</button>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="myTabContent2">
						<div class="tab-pane fade show active" id="basic-info20" role="tabpanel"
							aria-labelledby="info-tab2" tabindex="0">
							<form id="editEmployee">
								<div class="modal-body pb-0 ">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Name <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="name" id="name" required>
												<input type="hidden" name="type" value="editEmployee">
												<input type="hidden" name="id" value="" id="id">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Employee ID <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="employee_id"
													id="employee_id" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Email <span class="text-danger">
														*</span></label>
												<input type="email" class="form-control" name="email" id="email"
													required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Phone <span class="text-danger">
														*</span></label>
												<input type="number" class="form-control" name="phone" id="phone"
													required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Emergency Contact <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" name="emergency_contact"
													id="emergency_contact" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Joining Date <span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="joining_date" id="joining_date"
														required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Date of Birth<span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" name="dob" id="dob" required>
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Role <span class="text-danger">
														*</span></label>
												<select class="form-control" name="role_id" id="role_id" required>
													<option>Select</option>
													<?php foreach ($role as $value) {
														echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
													} ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Correspondence Address <span
														class="text-danger"> *</span></label>
												<textarea class="form-control" name="correspondence_address"
													id="correspondence_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Permanent Address <span class="text-danger">
														*</span></label>
												<textarea class="form-control" name="permanent_address"
													id="permanent_address"></textarea>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Marital Status</label>
												<select class="form-control" name="marital_status" id="marital_status"
													required>
													<option>Select</option>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Gender</label>
												<select class="form-control" name="gender" id="gender" required>
													<option>Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Save </button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="address-tab2"
							tabindex="0">
							<form id="educationForm">
								<input type="hidden" name="type" value="addEducation">
								<input type="hidden" name="id" id="education_user_id">
								<div class="modal-body">
									<div id="educationContainer">
										<div class="education-item row border rounded p-3 mb-3">
											<div class="col-md-3 mb-3">
												<label class="form-label">Degree <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="degree[]" required>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-label">University <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="university[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Year of Passing <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="yop[]" min="1900"
													max="2100" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Marks (%) <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="marks[]" min="0"
													max="100" step="0.01" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Attachment</label>
												<input type="file" class="form-control" name="attachment[]">
											</div>
											<div class="col-md-1 d-flex align-items-center">
												<button type="button"
													class="btn btn-danger btn-sm remove-education">Remove</button>
											</div>
										</div>
									</div>
									<button type="button" id="addEducation" class="btn btn-success btn-sm mb-3">Add
										More</button>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="saveEducation">Save</button>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="address-tab2"
							tabindex="0">
							<form id="addExperience">
								<input type="hidden" name="type" value="addExperience">
								<input type="hidden" name="id" id="experience_user_id">
								<div class="modal-body">
									<div id="experienceContainer">
										<div class="experience-item row border rounded p-3 mb-3">
											<div class="col-md-3 mb-3">
												<label class="form-label">Organization <span
														class="text-danger">*</span></label>
												<input type="text" class="form-control" name="organization[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Start Date <span
														class="text-danger">*</span></label>
												<input type="date" class="form-control" name="start_date[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">End Date <span
														class="text-danger">*</span></label>
												<input type="date" class="form-control" name="end_date[]" required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Salary (in INR) <span
														class="text-danger">*</span></label>
												<input type="number" class="form-control" name="salary[]" min="0"
													required>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-label">Attachment</label>
												<input type="file" class="form-control" name="attachment[]">
											</div>
											<div class="col-md-1 d-flex align-items-center">
												<button type="button"
													class="btn btn-danger btn-sm remove-experience">Remove</button>
											</div>
										</div>
									</div>
									<button type="button" id="addExperienceButton"
										class="btn btn-success btn-sm mb-3">Add More</button>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="saveExperience">Save</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Employee -->

		<!-- Edit Personal -->
		<div class="modal fade" id="edit_personal">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Personal Info</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="updateUserDetails">
						<input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
						<input type="hidden" name="type" value="addUserDetails">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Pancard No <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="pancard" id="pancard" value="<?php echo $user_details['pancard'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Aadhar Card <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="aadhar" id="aadhar" value="<?php echo $user_details['aadhar'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Bank Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="bank_name" id="bank_name" value="<?php echo $user_details['bank_name'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Account Number <span class="text-danger"> *</span></label>
										<input type="number" class="form-control" name="account" id="account" value="<?php echo $user_details['account'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">IFSC Code <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="ifsc_code" id="ifsc_code" value="<?php echo $user_details['ifsc_code'] ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Holder Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control" name="bank_holder" id="bank_holder" value="<?php echo $user_details['bank_holder'] ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Personal -->

		<!-- Edit Emergency Contact -->
		<div class="modal fade" id="edit_emergency">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Emergency Contact Details</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employee-details.php">
						<div class="modal-body pb-0">
							<div class="border-bottom mb-3 ">
								<div class="row">
									<h5 class="mb-3">Secondary Contact Details</h5>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Name <span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Relationship </label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Phone No 2 </label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<h5 class="mb-3">Secondary Contact Details</h5>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Relationship </label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone No 2 </label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Emergency Contact -->

		<!-- Add Family -->
		<div class="modal fade" id="edit_familyinformation">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Family Information</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form id="familyForm">
						<input type="hidden" name="type" value="addFamily">
						<input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
						<div class="modal-body pb-0">
							<div id="familyContainer">
								<div class="family-item border rounded p-3 mb-3">
									<div class="row">
										<div class="col-md-3 mb-3">
											<label class="form-label">Name <span class="text-danger"> *</span></label>
											<input type="text" class="form-control" name="name[]" required>
										</div>
										<div class="col-md-3 mb-3">
											<label class="form-label">Relationship</label>
											<input type="text" class="form-control" name="relationship[]">
										</div>
										<div class="col-md-3 mb-3">
											<label class="form-label">Phone</label>
											<input type="text" class="form-control" name="phone[]">
										</div>
										<div class="col-md-3 mb-3">
											<label class="form-label">Date of Birth <span class="text-danger"> *</span></label>
											<div class="input-icon-end position-relative">
												<input type="text" class="form-control" name="dob[]" placeholder="dd/mm/yyyy" required>
												<span class="input-icon-addon">
													<i class="ti ti-calendar text-gray-7"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 text-end">
											<button type="button" class="btn btn-danger btn-sm remove-family">Remove</button>
										</div>
									</div>
								</div>
							</div>
							<button type="button" id="addFamilyButton" class="btn btn-success btn-sm mb-3">Add More</button>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Family -->

		<!-- Add Employee Success -->
		<div class="modal fade" id="success_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center p-3">
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Employee Added Successfully</h5>
							<p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#EMP - 0001</span>
							</p>
							<div>
								<div class="row g-2">
									<div class="col-6">
										<a href="employees.php" class="btn btn-dark w-100">Back to List</a>
									</div>
									<div class="col-6">
										<a href="employee-details.php" class="btn btn-primary w-100">Detail Page</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Client Success -->

		<!-- Add Statuorty -->
		<div class="modal fade" id="add_bank_satutory">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Bank & Statutory</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employee-details.php">
						<div class="modal-body pb-0">
							<div class="border-bottom mb-4">
								<h5 class="mb-3">Basic Salary Information</h5>
								<div class="row mb-2">
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Salary basis <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>Weekly</option>
												<option>Monthly</option>
												<option>Annualy</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Salary basis</label>
											<input type="text" class="form-control" value="$">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Payment type</label>
											<select class="select">
												<option>Select</option>
												<option>Cash</option>
												<option>Debit Card</option>
												<option>Mobile Payment</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="border-bottom mb-4">
								<h5 class="mb-3">PF Information</h5>
								<div class="row mb-2">
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">PF contribution <span class="text-danger"> *</span></label>
											<select class="select">
												<option>Select</option>
												<option>Employee Contribution</option>
												<option>Employer Contribution</option>
												<option>Provident Fund Interest</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">PF No</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Employee PF rate</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Additional rate</label>
											<select class="select">
												<option>Select</option>
												<option>ESI</option>
												<option>EPS</option>
												<option>EPF</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Total rate</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
							<h5 class="mb-3">ESI Information</h5>
							<div class="row">
								<div class="col-md-4">
									<div class="mb-3">
										<label class="form-label">ESI contribution<span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Employee Contribution</option>
											<option>Employer Contribution</option>
											<option>Maternity Benefit </option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<label class="form-label">ESI Number</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<label class="form-label">Employee ESI rate<span class="text-danger"> *</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Additional rate</label>
										<select class="select">
											<option>Select</option>
											<option>ESI</option>
											<option>EPS</option>
											<option>EPF</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Total rate</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Statuorty -->

		<!-- Asset Information -->
		<div class="modal fade" id="asset_info">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Asset Information</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="bg-light p-3 rounded d-flex align-items-center mb-3">
							<span class="avatar avatar-lg flex-shrink-0 me-2">
								<img src="assets/img/laptop.jpg" alt="img" class="ig-fluid rounded-circle">
							</span>
							<div>
								<h6>Dell Laptop - #343556656</h6>
								<p class="fs-13"><span class="text-primary">AST - 001 </span><i class="ti ti-point-filled text-primary"></i> Assigned on 22 Nov, 2022 10:32AM</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Type</p>
									<p class="text-gray-9">Laptop</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Brand</p>
									<p class="text-gray-9">Dell</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Category</p>
									<p class="text-gray-9">Computer</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Serial No</p>
									<p class="text-gray-9">3647952145678</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Cost</p>
									<p class="text-gray-9">$800</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Vendor</p>
									<p class="text-gray-9">Compusoft Systems Ltd.,</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Warranty</p>
									<p class="text-gray-9">12 Jan 2022 - 12 Jan 2026</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<p class="fs-13 mb-0">Location</p>
									<p class="text-gray-9">46 Laurel Lane, TX 79701</p>
								</div>
							</div>
						</div>
						<div>
							<p class="fs-13 mb-2">Asset Images</p>
							<div class="d-flex align-items-center">
								<img src="assets/img/laptop-01.jpg" alt="img" class="img-fluid rounded me-2">
								<img src="assets/img/laptop-2.jpg" alt="img" class="img-fluid rounded me-2">
								<img src="assets/img/laptop-3.jpg" alt="img" class="img-fluid rounded">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Asset Information -->

		<!-- Refuse -->
		<div class="modal fade" id="refuse_msg">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Raise Issue</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employee-details.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Description<span class="text-danger"> *</span></label>
										<textarea class="form-control" rows="4"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Refuse -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Delete</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="employee-details.php" class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->


	</div>
	<!-- end main wrapper-->
	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<script>
		function formatDate(dateString) {
			if (!dateString) return '';
			const date = new Date(dateString);
			const day = String(date.getDate()).padStart(2, '0');
			const month = String(date.getMonth() + 1).padStart(2, '0');
			const year = date.getFullYear();
			return `${day}/${month}/${year}`;
		}

		$('#updateUserDetails').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#addExperience').submit(function(event) {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#editEmployee').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$('#educationForm').submit(function() {
			event.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					location.reload();
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		});

		$(document).ready(function() {
			// Add family member
			$('#addFamilyButton').click(function() {
				const newFamilyItem = $('.family-item:first').clone();
				newFamilyItem.find('input').val(''); // Clear input values
				$('#familyContainer').append(newFamilyItem);
			});

			// Remove family member
			$(document).on('click', '.remove-family', function() {
				if ($('.family-item').length > 1) {
					$(this).closest('.family-item').remove();
				} else {
					alert("You must have at least one family member.");
				}
			});


			$('#familyForm').submit(function(event) {
				event.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					url: 'settings/api/familyApi.php',
					type: 'POST',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					dataType: 'json',
					success: function(response) {
						location.reload();
					},
					error: function(xhr, status, error) {
						var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
						notyf.error(errorMessage);
					}
				});
			});
		});

		function getFamily(id) {
			$.ajax({
				url: 'settings/api/familyApi.php',
				type: 'GET',
				data: {
					type: 'getFamily',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					if (response && response.length > 0) {

						// Iterate through each family entry and populate the form
						response.forEach(function(family, index) {
							// If it's the first entry, we fill the initial form fields
							if (index === 0) {
								document.querySelector('[name="name[]"]').value = family.name;
								document.querySelector('[name="relationship[]"]').value = family.relation;
								document.querySelector('[name="phone[]"]').value = family.phone;
								document.querySelector('[name="dob[]"]').value = family.dob;
							} else {
								// For subsequent entries, clone the first family item and populate it
								const familyContainer = document.getElementById('familyContainer');
								const newFamilyItem = document.querySelector('.family-item').cloneNode(true);
								newFamilyItem.querySelector('[name="name[]"]').value = family.name;
								newFamilyItem.querySelector('[name="relationship[]"]').value = family.relation;
								newFamilyItem.querySelector('[name="phone[]"]').value = family.phone;
								newFamilyItem.querySelector('[name="dob[]"]').value = family.dob;
								familyContainer.appendChild(newFamilyItem);
							}
						});
					} else {
						console.log("No family data available.");
					}
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function getExperience(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getExperience',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					const experienceContainer = document.getElementById('experienceContainer');
					experienceContainer.innerHTML = ''; // Clear previous entries

					if (response && response.length > 0) {
						response.forEach(function(experience, index) {
							// Create a new experience item
							const newExperienceItem = document.createElement('div');
							newExperienceItem.className = 'experience-item row border rounded p-3 mb-3';

							newExperienceItem.innerHTML = `
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Organization</label>
                            <input type="text" class="form-control" name="organization[]" value="${experience.oraganization}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="start_date[]" value="${experience.start_date}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" name="end_date[]" value="${experience.end_date}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Salary</label>
                            <input type="text" class="form-control" name="salary[]" value="${experience.salary}">
                        </div>
                    `;

							experienceContainer.appendChild(newExperienceItem);
						});
					} else {
						console.log("No experience data available.");
					}
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function getEducation(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getEducation',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					const educationContainer = document.getElementById('educationContainer');
					educationContainer.innerHTML = ''; // Clear previous entries

					if (response && response.length > 0) {
						response.forEach(function(education, index) {
							// Create a new education item
							const newEducationItem = document.createElement('div');
							newEducationItem.className = 'education-item row border rounded p-3 mb-3';

							newEducationItem.innerHTML = `
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Degree</label>
                            <input type="text" class="form-control" name="degree[]" value="${education.degree}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">University</label>
                            <input type="text" class="form-control" name="university[]" value="${education.university}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Year of Passing</label>
                            <input type="text" class="form-control" name="yop[]" value="${education.year}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Marks</label>
                            <input type="text" class="form-control" name="marks[]" value="${education.mark}">
                        </div>
                    `;

							educationContainer.appendChild(newEducationItem);
						});
					} else {
						console.log("No education data available.");
					}
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function getEmployee(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'getEmployee',
					id: id
				},
				dataType: 'json',
				success: function(response) {
					$('#id').val(response.id);
					$('#education_user_id').val(response.id);
					$('#experience_user_id').val(response.id);
					$('#name').val(response.name);
					$('#employee_id').val(response.employee_id);
					$('#email').val(response.email);
					$('#phone').val(response.mobile);
					$('#emergency_contact').val(response.emergency_contact || '');
					$('#joining_date').val(formatDate(response.joining_date));
					$('#dob').val(formatDate(response.dob));
					$('#correspondence_address').val(response.correspondence_address || '');
					$('#permanent_address').val(response.permanent_address || '');
					$('#role_id').val(response.role_id).trigger('change');
					$('#marital_status').val(response.marital_status || 'Select').trigger('change');
					$('#gender').val(response.gender || 'Select').trigger('change');

					// Clear and reload education and experience
					getEducation(id);
					getExperience(id);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}


		function passwordReset(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'passwordReset',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}

		function empTerminate(id) {
			$.ajax({
				url: 'settings/api/userApi.php',
				type: 'GET',
				data: {
					type: 'changeStatus',
					user_id: id
				},
				dataType: 'json',
				success: function(response) {
					notyf.success(response.message);
					setTimeout(() => {
						location.reload();
					}, 1000);
				},
				error: function(xhr, status, error) {
					var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
					notyf.error(errorMessage);
				}
			});
		}
	</script>
</body>

</html>