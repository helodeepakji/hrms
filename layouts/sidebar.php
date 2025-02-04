<?php
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);
?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<!-- Logo -->
	<div class="sidebar-logo">
		<a href="index.php" class="logo logo-normal">
			<img src="assets/img/LOGO.png" width="150px" alt="Logo">
		</a>
		<a href="index.php" class="logo-small">
			<img src="assets/img/logo-small.svg" alt="Logo">
		</a>
		<a href="index.php" class="dark-logo">
			<img src="assets/img/logo-white.svg" alt="Logo">
		</a>
	</div>
	<!-- /Logo -->
	<div class="modern-profile p-3 pb-0">
		<div class="text-center rounded bg-light p-3 mb-4 user-profile">
			<div class="avatar avatar-lg online mb-3">
				<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
			</div>
			<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
			<p class="fs-10">System Admin</p>
		</div>
		<div class="sidebar-nav mb-3">
			<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
				<li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
				<li class="nav-item"><a class="nav-link border-0" href="chat.php">Chats</a></li>
				<li class="nav-item"><a class="nav-link border-0" href="email.php">Inbox</a></li>
			</ul>
		</div>
	</div>
	<div class="sidebar-header p-3 pb-0 pt-2">
		<div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
			<div class="avatar avatar-md onlin">
				<img src="assets/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
			</div>
			<div class="text-start sidebar-profile-info ms-2">
				<h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
				<p class="fs-10">System Admin</p>
			</div>
		</div>
		<div class="input-group input-group-flat d-inline-flex mb-4">
			<span class="input-icon-addon">
				<i class="ti ti-search"></i>
			</span>
			<input type="text" class="form-control" placeholder="Search in HRMS">
			<span class="input-group-text">
				<kbd>CTRL + / </kbd>
			</span>
		</div>
		<div class="d-flex align-items-center justify-content-between menu-item mb-3">
			<div class="me-3">
				<a href="calendar.php" class="btn btn-menubar">
					<i class="ti ti-layout-grid-remove"></i>
				</a>
			</div>
			<div class="me-3 notification-item">
				<a href="activity.php" class="btn btn-menubar position-relative me-1">
					<i class="ti ti-bell"></i>
					<span class="notification-status-dot"></span>
				</a>
			</div>
			<div class="me-0">
				<a href="email.php" class="btn btn-menubar">
					<i class="ti ti-message"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>MAIN MENU</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'index.php' || $page == 'employee-dashboard.php' || $page == 'deals-dashboard.php' || $page == 'leads-dashboard.php') ? 'active subdrop' : ''; ?>">

								<i class="ti ti-smart-home"></i>
								<span>Dashboard</span>
								<span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="index.php" class="<?php echo ($page == 'index.php') ? 'active' : ''; ?>">Dashboard</a></li>
								<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
								<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
								<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>PROJECTS</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'projects.php' || $page == 'tasks.php' || $page == 'my-tasks.php' || $page == 'task-board.php' || $page == 'my-projects.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-box"></i><span>Projects</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<?php if ($roleId == 1 || in_array('projects', $pageAccessList)) { ?>
									<li><a href="projects.php" class="<?php echo ($page == 'projects.php') ? 'active' : ''; ?>">Projects</a></li>
								<?php } ?>
								<?php if (in_array('my-projects', $pageAccessList)) { ?>
									<li><a href="my-projects.php" class="<?php echo ($page == 'my-projects.php') ? 'active' : ''; ?>">My Projects</a></li>
								<?php } ?>
								<?php if ($roleId == 1 || in_array('tasks', $pageAccessList)) { ?>
									<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
								<?php } ?>
								<?php if (in_array('my-tasks', $pageAccessList)) { ?>
									<li><a href="my-tasks.php" class="<?php echo ($page == 'my-tasks.php') ? 'active' : ''; ?>">My Tasks</a></li>
								<?php } ?>
								<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>HRM</span></li>
				<li>
					<ul>
						<?php if ($roleId == 1 || in_array('employees', $pageAccessList) || in_array('termination', $pageAccessList) || in_array('employee-details', $pageAccessList) || in_array('role', $pageAccessList)) { ?>
							<li class="submenu">
								<a href="javascript:void(0);" class=" <?php echo ($page == 'employees.php' || $page == 'termination.php' || $page == 'employee-details.php' || $page == 'departments.php' || $page == 'role.php') ? 'active subdrop' : ''; ?>">
									<i class="ti ti-users"></i><span>Employees</span>
									<span class="menu-arrow"></span>
								</a>
								<ul>
									<?php if ($roleId == 1 || in_array('employees', $pageAccessList)) { ?>
										<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
									<?php } ?>
									<?php if ($roleId == 1 || in_array('termination', $pageAccessList)) { ?>
										<li><a href="termination.php" class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>">Terminated Employee</a></li>
									<?php } ?>
									<?php if ($roleId == 1 || in_array('employee-details', $pageAccessList)) { ?>
										<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
									<?php } ?>
									<?php if ($roleId == 1 || in_array('role', $pageAccessList)) { ?>
										<li><a href="role.php" class="<?php echo ($page == 'role.php') ? 'active' : ''; ?>">Role</a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>

						<?php if ($roleId == 1 || in_array('holidays', $pageAccessList)) { ?>
							<li class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>">
								<a href="holidays.php">
									<i class="ti ti-calendar-event"></i><span>Holidays</span>
								</a>
							</li>
						<?php } ?>


						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'leaves.php' || $page == 'my-leaves.php' || $page == 'leave-bonus.php' || $page == 'attendance.php' || $page == 'my-attendance.php' || $page == 'shift.php' || $page == 'schedule-timing.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-file-time"></i><span>Attendance</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'leaves.php' || $page == 'my-leaves.php' || $page == 'leave-bonus.php') ? 'active subdrop' : ''; ?>">Leaves<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<?php if ($roleId == 1 || in_array('leaves', $pageAccessList)) { ?>
											<li><a href="leaves.php" class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves</a></li>
										<?php } ?>
										<li><a href="my-leaves.php" class="<?php echo ($page == 'my-leaves.php') ? 'active' : ''; ?>">My Leave</a></li>
										<?php if ($roleId == 1 || in_array('leave-bonus', $pageAccessList)) { ?>
											<li><a href="leave-bonus.php" class="<?php echo ($page == 'leave-bonus.php') ? 'active' : ''; ?>">Leave Bonus</a></li>
										<?php } ?>
									</ul>
								</li>
								<?php if ($roleId == 1 || in_array('attendance', $pageAccessList)) { ?>
									<li><a href="attendance.php" class="<?php echo ($page == 'attendance.php') ? 'active' : ''; ?>">Attendance</a></li>
								<?php } ?>
								<li><a href="my-attendance.php" class="<?php echo ($page == 'my-attendance.php') ? 'active' : ''; ?>">My Attendance</a></li>
								<li><a href="shift.php" class="<?php echo ($page == 'shift.php') ? 'active' : ''; ?>">Shift Timing</a></li>
								<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'performance-indicator.php' || $page == 'performance-review.php' || $page == 'total-efficiency.php' || $page == 'efficiency-tracking.php' || $page == 'my-efficiency.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-school"></i><span>Performance</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<!-- <li><a href="performance-indicator.php" class="<?php // echo ($page == 'performance-indicator.php') ? 'active' : ''; 
																					?>">Performance Indicator</a></li>
								<li><a href="performance-review.php" class="<?php // echo ($page == 'performance-review.php') ? 'active' : ''; 
																			?>">Review</a></li> -->
								<?php if ($roleId == 1 || in_array('total-efficiency', $pageAccessList)) { ?>
									<li><a href="total-efficiency.php" class="<?php echo ($page == 'total-efficiency.php') ? 'active' : ''; ?>">Total Efficiency</a></li>
								<?php } ?>
								<?php if ($roleId == 1 || in_array('efficiency-tracking', $pageAccessList)) { ?>
									<li><a href="efficiency-tracking.php" class="<?php echo ($page == 'efficiency-tracking.php') ? 'active' : ''; ?>">Efficiency Track</a></li>
								<?php } ?>
								<li><a href="my-efficiency.php" class="<?php echo ($page == 'my-efficiency.php') ? 'active' : ''; ?>">My Efficiency</a></li>
							</ul>
						</li>
						<!-- <li class="submenu">
							<a href="javascript:void(0);" class=" <?php // echo ($page == 'training.php' || $page == 'trainers.php' || $page == 'training-type.php') ? 'active subdrop' : ''; 
																	?>">
								<i class="ti ti-edit"></i><span>Training</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="training.php" class="<?php // echo ($page == 'training.php') ? 'active' : ''; 
																	?>">Training List</a></li>
								<li><a href="trainers.php" class="<?php // echo ($page == 'trainers.php') ? 'active' : ''; 
																	?>">Trainers</a></li>
								<li><a href="training-type.php" class="<?php // echo ($page == 'training-type.php') ? 'active' : ''; 
																		?>">Training Type</a></li>
							</ul>
						</li> -->
						<?php if ($roleId == 1 || in_array('assets', $pageAccessList) || in_array('asset-categories', $pageAccessList)) { ?>
							<li class="submenu">
								<a href="javascript:void(0);" class="<?php echo ($page == 'assets.php' || $page == 'asset-categories.php') ? 'active subdrop' : ''; ?>">
									<i class="ti ti-cash"></i><span>Assets</span>
									<span class="menu-arrow"></span>
								</a>
								<ul>
									<?php if ($roleId == 1 || in_array('assets', $pageAccessList)) { ?>
										<li><a href="assets.php" class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
									<?php } ?>
									<?php if ($roleId == 1 || in_array('asset-categories', $pageAccessList)) { ?>
										<li><a href="asset-categories.php" class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</li>
				<li class="menu-title"><span>RECRUITMENT</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'job-list.php') ? 'active' : ''; ?>">
							<a href="job-list.php">
								<i class="ti ti-timeline"></i><span>Jobs</span>
							</a>
						</li>
						<?php if ($roleId == 1 || in_array('candidates', $pageAccessList)) { ?>
						<li class="<?php echo ($page == 'candidates.php') ? 'active' : ''; ?>">
							<a href="candidates.php">
								<i class="ti ti-user-shield"></i><span>Candidates</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</li>
				<!-- <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php // echo ($page == 'estimates.php' || $page == 'invoices.php' || $page == 'payments.php' || $page == 'expenses.php' || $page == 'provident-fund.php' || $page == 'taxes.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="estimates.php" class="<?php // echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
								<li><a href="invoices.php" class="<?php // echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
								<li><a href="payments.php" class="<?php // echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
								<li><a href="expenses.php" class="<?php // echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
								<li><a href="provident-fund.php" class="<?php // echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
								<li><a href="taxes.php" class="<?php // echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'categories.php' || $page == 'budgets.php' || $page == 'budget-expenses.php' || $page == 'budget-revenues.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-file-dollar"></i><span>Accounting</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="categories.php" class="<?php echo ($page == 'categories.php') ? 'active' : ''; ?>">Categories</a></li>
								<li><a href="budgets.php" class="<?php echo ($page == 'budgets.php') ? 'active' : ''; ?>">Budgets</a></li>
								<li><a href="budget-expenses.php" class="<?php echo ($page == 'budget-expenses.php') ? 'active' : ''; ?>">Budget Expenses</a></li>
								<li><a href="budget-revenues.php" class="<?php echo ($page == 'budget-revenues.php') ? 'active' : ''; ?>">Budget Revenues</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'employee-salary.php' || $page == 'payslip.php' || $page == 'payroll.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-cash"></i><span>Payroll</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="employee-salary.php" class="<?php echo ($page == 'employee-salary.php') ? 'active' : ''; ?>">Employee Salary</a></li>
								<li><a href="payslip.php" class="<?php echo ($page == 'payslip.php') ? 'active' : ''; ?>">Payslip</a></li>
								<li><a href="payroll.php" class="<?php echo ($page == 'payroll.php') ? 'active' : ''; ?>">Payroll Items</a></li>
							</ul>
						</li>
					</ul>
				</li> -->
				<li class="menu-title"><span>Other</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">
							<a href="faq.php">
								<i class="ti ti-question-mark"></i><span>FAQ’S</span>
							</a>
						</li>
						<?php if ($roleId == 1 || in_array('pages', $pageAccessList)) { ?>
							<li>
								<a href="pages.php">
									<i class="ti ti-lock"></i><span>Authication</span>
								</a>
							</li>
						<?php } ?>
						<li class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>">
							<a href="gallery.php">
								<i class="ti ti-photo"></i><span>Gallery</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'privacy-policy.php') ? 'active' : ''; ?>">
							<a href="privacy-policy.php">
								<i class="ti ti-file-description"></i><span>Privacy Policy</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'terms-condition.php') ? 'active' : ''; ?>">
							<a href="terms-condition.php">
								<i class="ti ti-file-check"></i><span>Terms & Conditions</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->