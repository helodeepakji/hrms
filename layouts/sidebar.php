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
			<img src="assets/img/logo.svg" alt="Logo">
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
			<div class="me-3">
				<a href="chat.php" class="btn btn-menubar position-relative">
					<i class="ti ti-brand-hipchat"></i>
					<span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
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
								<li><a href="index.php" class="<?php echo ($page == 'index.php') ? 'active' : ''; ?>">Admin Dashboard</a></li>
								<li><a href="employee-dashboard.php" class="<?php echo ($page == 'employee-dashboard.php') ? 'active' : ''; ?>">Employee Dashboard</a></li>
								<li><a href="deals-dashboard.php" class="<?php echo ($page == 'deals-dashboard.php') ? 'active' : ''; ?>">Deals Dashboard</a></li>
								<li><a href="leads-dashboard.php" class="<?php echo ($page == 'leads-dashboard.php') ? 'active' : ''; ?>">Leads Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'chat.php' || $page == 'call.php' || $page == 'voice-call.php' || $page == 'video-call.php' || $page == 'outgoing-call.php' || $page == 'incoming-call.php' || $page == 'call-history.php' || $page == 'calendar.php'
																		|| $page == 'email.php' || $page == 'todo.php' || $page == 'notes.php' || $page == 'social-feed.php' || $page == 'file-manager.php' || $page == 'kanban-view.php' || $page == 'invoices.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-layout-grid-add"></i><span>Applications</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="chat.php" class="<?php echo ($page == 'chat.php') ? 'active' : ''; ?>">Chat</a></li>
								<li class="submenu submenu-two">
									<a href="call.php" class="<?php echo ($page == 'call.php' || $page == 'voice-call.php' || $page == 'video-call.php' || $page == 'outgoing-call.php' || $page == 'incoming-call.php' || $page == 'call-history.php') ? 'active subdrop' : ''; ?>">Calls<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="voice-call.php" class="<?php echo ($page == 'voice-call.php') ? 'active' : ''; ?>">Voice Call</a></li>
										<li><a href="video-call.php" class="<?php echo ($page == 'video-call.php') ? 'active' : ''; ?>">Video Call</a></li>
										<li><a href="outgoing-call.php" class="<?php echo ($page == 'outgoing-call.php') ? 'active' : ''; ?>">Outgoing Call</a></li>
										<li><a href="incoming-call.php" class="<?php echo ($page == 'incoming-call.php') ? 'active' : ''; ?>">Incoming Call</a></li>
										<li><a href="call-history.php" class="<?php echo ($page == 'call-history.php') ? 'active' : ''; ?>">Call History</a></li>
									</ul>
								</li>
								<li><a href="calendar.php" class="<?php echo ($page == 'calendar.php') ? 'active' : ''; ?>">Calendar</a></li>
								<li><a href="email.php" class="<?php echo ($page == 'email.php') ? 'active' : ''; ?>">Email</a></li>
								<li><a href="todo.php" class="<?php echo ($page == 'todo.php') ? 'active' : ''; ?>">To Do</a></li>
								<li><a href="notes.php" class="<?php echo ($page == 'notes.php') ? 'active' : ''; ?>">Notes</a></li>
								<li><a href="social-feed.php" class="<?php echo ($page == 'social-feed.php') ? 'active' : ''; ?>">Social Feed</a></li>
								<li><a href="file-manager.php" class="<?php echo ($page == 'file-manager.php') ? 'active' : ''; ?>">File Manager</a></li>
								<li><a href="kanban-view.php" class="<?php echo ($page == 'kanban-view.php') ? 'active' : ''; ?>">Kanban</a></li>
								<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#" class=" <?php echo ($page == 'dashboard.php' || $page == 'companies.php' || $page == 'subscription.php' || $page == 'packages.php' || $page == 'domain.php' || $page == 'purchase-transaction.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-user-star"></i><span>Super Admin</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="dashboard.php" class="<?php echo ($page == 'dashboard.php') ? 'active' : ''; ?>">Dashboard</a></li>
								<li><a href="companies.php" class="<?php echo ($page == 'companies.php') ? 'active' : ''; ?>">Companies</a></li>
								<li><a href="subscription.php" class="<?php echo ($page == 'subscription.php') ? 'active' : ''; ?>">Subscriptions</a></li>
								<li><a href="packages.php" class="<?php echo ($page == 'packages.php') ? 'active' : ''; ?>">Packages</a></li>
								<li><a href="domain.php" class="<?php echo ($page == 'domain.php') ? 'active' : ''; ?>">Domain</a></li>
								<li><a href="purchase-transaction.php" class="<?php echo ($page == 'purchase-transaction.php') ? 'active' : ''; ?>">Purchase Transaction</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>PROJECTS</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'clients-grid.php') ? 'active' : ''; ?>">
							<a href="clients-grid.php">
								<i class="ti ti-users-group"></i><span>Clients</span>
							</a>
						</li class="<?php echo ($page == 'projects.php') ? 'active' : ''; ?>">
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'projects.php' || $page == 'tasks.php' || $page == 'task-board.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-box"></i><span>Projects</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="projects.php" class="<?php echo ($page == 'projects.php') ? 'active' : ''; ?>">Projects</a></li>
								<li><a href="tasks.php" class="<?php echo ($page == 'tasks.php') ? 'active' : ''; ?>">Tasks</a></li>
								<li><a href="task-board.php" class="<?php echo ($page == 'task-board.php') ? 'active' : ''; ?>">Task Board</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>HRM</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'employees.php' || $page == 'termination.php' || $page == 'employee-details.php' || $page == 'departments.php' || $page == 'designations.php' || $page == 'policy.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-users"></i><span>Employees</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="employees.php" class="<?php echo ($page == 'employees.php') ? 'active' : ''; ?>">Employee Lists</a></li>
								<li><a href="termination.php" class="<?php echo ($page == 'termination.php') ? 'active' : ''; ?>">Terminated Employee</a></li>
								<li><a href="employee-details.php" class="<?php echo ($page == 'employee-details.php') ? 'active' : ''; ?>">Employee Details</a></li>
								<li><a href="departments.php" class="<?php echo ($page == 'departments.php') ? 'active' : ''; ?>">Departments</a></li>
								<li><a href="designations.php" class="<?php echo ($page == 'designations.php') ? 'active' : ''; ?>">Designations</a></li>
								<li><a href="policy.php" class="<?php echo ($page == 'policy.php') ? 'active' : ''; ?>">Policies</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'tickets.php' || $page == 'ticket-details.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-ticket"></i><span>Tickets</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="tickets.php" class="<?php echo ($page == 'tickets.php') ? 'active' : ''; ?>">Tickets</a></li>
								<li><a href="ticket-details.php" class="<?php echo ($page == 'ticket-details.php') ? 'active' : ''; ?>">Ticket Details</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page == 'holidays.php') ? 'active' : ''; ?>">
							<a href="holidays.php">
								<i class="ti ti-calendar-event"></i><span>Holidays</span>
							</a>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'leaves.php' || $page == 'my-leaves.php' || $page == 'leave-bonus.php' || $page == 'attendance.php' || $page == 'my-attendance.php' || $page == 'timesheets.php' || $page == 'schedule-timing.php' || $page == 'overtime.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-file-time"></i><span>Attendance</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class=" <?php echo ($page == 'leaves.php' || $page == 'my-leaves.php' || $page == 'leave-bonus.php') ? 'active subdrop' : ''; ?>">Leaves<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="leaves.php" class="<?php echo ($page == 'leaves.php') ? 'active' : ''; ?>">Leaves</a></li>
										<li><a href="my-leaves.php" class="<?php echo ($page == 'my-leaves.php') ? 'active' : ''; ?>">My Leave</a></li>
										<li><a href="leave-bonus.php" class="<?php echo ($page == 'leave-bonus.php') ? 'active' : ''; ?>">Leave Bonus</a></li>
									</ul>
								</li>
								<li><a href="attendance.php" class="<?php echo ($page == 'attendance.php') ? 'active' : ''; ?>">Attendance</a></li>
								<li><a href="my-attendance.php" class="<?php echo ($page == 'my-attendance.php') ? 'active' : ''; ?>">My Attendance</a></li>
								<li><a href="timesheets.php" class="<?php echo ($page == 'timesheets.php') ? 'active' : ''; ?>">Timesheets</a></li>
								<li><a href="schedule-timing.php" class="<?php echo ($page == 'schedule-timing.php') ? 'active' : ''; ?>">Shift & Schedule</a></li>
								<li><a href="overtime.php" class="<?php echo ($page == 'overtime.php') ? 'active' : ''; ?>">Overtime</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'performance-indicator.php' || $page == 'performance-review.php' || $page == 'performance-appraisal.php' || $page == 'goal-tracking.php' || $page == 'goal-type.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-school"></i><span>Performance</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="performance-indicator.php" class="<?php echo ($page == 'performance-indicator.php') ? 'active' : ''; ?>">Performance Indicator</a></li>
								<li><a href="performance-review.php" class="<?php echo ($page == 'performance-review.php') ? 'active' : ''; ?>">Performance Review</a></li>
								<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Performance Appraisal</a></li>
								<li><a href="goal-tracking.php" class="<?php echo ($page == 'goal-tracking.php') ? 'active' : ''; ?>">Goal List</a></li>
								<li><a href="goal-type.php" class="<?php echo ($page == 'goal-type.php') ? 'active' : ''; ?>">Goal Type</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'training.php' || $page == 'trainers.php' || $page == 'training-type.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-edit"></i><span>Training</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="training.php" class="<?php echo ($page == 'training.php') ? 'active' : ''; ?>">Training List</a></li>
								<li><a href="trainers.php" class="<?php echo ($page == 'trainers.php') ? 'active' : ''; ?>">Trainers</a></li>
								<li><a href="training-type.php" class="<?php echo ($page == 'training-type.php') ? 'active' : ''; ?>">Training Type</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page == 'promotion.php') ? 'active' : ''; ?>">
							<a href="promotion.php">
								<i class="ti ti-speakerphone"></i><span>Promotion</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'resignation.php') ? 'active' : ''; ?>">
							<a href="resignation.php">
								<i class="ti ti-external-link"></i><span>Resignation</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>CRM</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'contacts-grid.php' || $page == 'contacts.php' || $page == 'contact-details.php') ? 'active' : ''; ?>">
							<a href="contacts-grid.php">
								<i class="ti ti-user-shield"></i><span>Contacts</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'companies-grid.php' || $page == 'companies-crm.php' || $page == 'company-details.php') ? 'active' : ''; ?>">
							<a href="companies-grid.php">
								<i class="ti ti-building"></i><span>Companies</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'deals-grid.php' || $page == 'deals-details.php' || $page == 'deals.php') ? 'active' : ''; ?>">
							<a href="deals-grid.php">
								<i class="ti ti-heart-handshake"></i><span>Deals</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'leads-grid.php' || $page == 'leads-details.php' || $page == 'leads.php') ? 'active' : ''; ?>">
							<a href="leads-grid.php">
								<i class="ti ti-user-check"></i><span>Leads</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'pipeline.php') ? 'active' : ''; ?>">
							<a href="pipeline.php">
								<i class="ti ti-timeline-event-text"></i><span>Pipeline</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'analytics.php') ? 'active' : ''; ?>">
							<a href="analytics.php">
								<i class="ti ti-graph"></i><span>Analytics</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">
							<a href="activity.php">
								<i class="ti ti-activity"></i><span>Activities</span>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-title"><span>RECRUITMENT</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'job-grid.php') ? 'active' : ''; ?>">
							<a href="job-grid.php">
								<i class="ti ti-timeline"></i><span>Jobs</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'candidates-grid.php') ? 'active' : ''; ?>">
							<a href="candidates-grid.php">
								<i class="ti ti-user-shield"></i><span>Candidates</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'refferals.php') ? 'active' : ''; ?>">
							<a href="refferals.php">
								<i class="ti ti-ux-circle"></i><span>Referrals</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class=" <?php echo ($page == 'estimates.php' || $page == 'invoices.php' || $page == 'payments.php' || $page == 'expenses.php' || $page == 'provident-fund.php' || $page == 'taxes.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="estimates.php" class="<?php echo ($page == 'estimates.php') ? 'active' : ''; ?>">Estimates</a></li>
								<li><a href="invoices.php" class="<?php echo ($page == 'invoices.php') ? 'active' : ''; ?>">Invoices</a></li>
								<li><a href="payments.php" class="<?php echo ($page == 'payments.php') ? 'active' : ''; ?>">Payments</a></li>
								<li><a href="expenses.php" class="<?php echo ($page == 'expenses.php') ? 'active' : ''; ?>">Expenses</a></li>
								<li><a href="provident-fund.php" class="<?php echo ($page == 'provident-fund.php') ? 'active' : ''; ?>">Provident Fund</a></li>
								<li><a href="taxes.php" class="<?php echo ($page == 'taxes.php') ? 'active' : ''; ?>">Taxes</a></li>
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
				</li>
				<li class="menu-title"><span>ADMINISTRATION</span></li>
				<li>
					<ul>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'assets.php' || $page == 'asset-categories.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-cash"></i><span>Assets</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="assets.php" class="<?php echo ($page == 'assets.php') ? 'active' : ''; ?>">Assets</a></li>
								<li><a href="asset-categories.php" class="<?php echo ($page == 'asset-categories.php') ? 'active' : ''; ?>">Asset Categories</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'knowledgebase.php' || $page == 'activity.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-headset"></i><span>Help & Supports</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="knowledgebase.php" class="<?php echo ($page == 'knowledgebase.php') ? 'active' : ''; ?>">Knowledge Base</a></li>
								<li><a href="activity.php" class="<?php echo ($page == 'activity.php') ? 'active' : ''; ?>">Activities</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'users.php' || $page == 'roles-permissions.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-user-star"></i><span>User Management</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="users.php">Users</a></li>
								<li><a href="roles-permissions.php" class="<?php echo ($page == 'roles-permissions.php') ? 'active' : ''; ?>">Roles & Permissions</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'expenses-report.php' || $page == 'invoice-report.php' || $page == 'payment-report.php' || $page == 'project-report.php' || $page == 'task-report.php' || $page == 'user-report.php' || $page == 'employee-report.php' || $page == 'payslip-report.php' || $page == 'attendance-report.php' || $page == 'leave-report.php' || $page == 'daily-report.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-user-star"></i><span>Reports</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="expenses-report.php" class="<?php echo ($page == 'expenses-report.php') ? 'active' : ''; ?>">Expense Report</a></li>
								<li><a href="invoice-report.php" class="<?php echo ($page == 'invoice-report.php') ? 'active' : ''; ?>">Invoice Report</a></li>
								<li><a href="payment-report.php" class="<?php echo ($page == 'payment-report.php') ? 'active' : ''; ?>">Payment Report</a></li>
								<li><a href="project-report.php" class="<?php echo ($page == 'project-report.php') ? 'active' : ''; ?>">Project Report</a></li>
								<li><a href="task-report.php" class="<?php echo ($page == 'task-report.php') ? 'active' : ''; ?>">Task Report</a></li>
								<li><a href="user-report.php" class="<?php echo ($page == 'user-report.php') ? 'active' : ''; ?>">User Report</a></li>
								<li><a href="employee-report.php" class="<?php echo ($page == 'employee-report.php') ? 'active' : ''; ?>">Employee Report</a></li>
								<li><a href="payslip-report.php" class="<?php echo ($page == 'payslip-report.php') ? 'active' : ''; ?>">Payslip Report</a></li>
								<li><a href="attendance-report.php" class="<?php echo ($page == 'attendance-report.php') ? 'active' : ''; ?>">Attendance Report</a></li>
								<li><a href="leave-report.php" class="<?php echo ($page == 'leave-report.php') ? 'active' : ''; ?>">Leave Report</a></li>
								<li><a href="daily-report.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Daily Report</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'profile-settings.php' ||
																		$page == 'security-settings.php' ||
																		$page == 'notification-settings.php' ||
																		$page == 'project-report.php' ||
																		$page == 'connected-apps.php' ||
																		$page == 'bussiness-settings.php' ||
																		$page == 'seo-settings.php' ||
																		$page == 'localization-settings.php' ||
																		$page == 'prefixes.php' ||
																		$page == 'preferences.php' ||
																		$page == 'performance-appraisal.php' ||
																		$page == 'language.php' ||
																		$page == 'authentication-settings.php' ||
																		$page == 'ai-settings.php' ||
																		$page == 'salary-settings.php' ||
																		$page == 'approval-settings.php' ||
																		$page == 'invoice-settings.php' ||
																		$page == 'leave-type.php' ||
																		$page == 'custom-fields.php' ||
																		$page == 'email-settings.php' ||
																		$page == 'email-template.php' ||
																		$page == 'sms-settings.php' ||
																		$page == 'sms-template.php' ||
																		$page == 'otp-settings.php' ||
																		$page == 'gdpr.php' ||
																		$page == 'maintenance-mode.php' ||
																		$page == 'payment-gateways.php' ||
																		$page == 'tax-rates.php' ||
																		$page == 'currencies.php' ||
																		$page == 'custom-css.php' ||
																		$page == 'custom-js.php' ||
																		$page == 'cronjob.php' ||
																		$page == 'storage-settings.php' ||
																		$page == 'ban-ip-address.php' ||
																		$page == 'backup.php' ||
																		$page == 'clear-cache.php'
																	) ? 'active subdrop' : ''; ?>">
								<i class="ti ti-settings"></i><span>Settings</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'profile-settings.php' || $page == 'security-settings.php' || $page == 'notification-settings.php' || $page == 'connected-apps.php') ? 'active subdrop' : ''; ?>">General Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="profile-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Profile</a></li>
										<li><a href="security-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Security</a></li>
										<li><a href="notification-settings.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Notifications</a></li>
										<li><a href="connected-apps.php" class="<?php echo ($page == 'daily-report.php') ? 'active' : ''; ?>">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'bussiness-settings.php' || $page == 'seo-settings.php' || $page == 'localization-settings.php' || $page == 'prefixes.php' || $page == 'preferences.php' || $page == 'performance-appraisal.php' || $page == 'language.php' || $page == 'authentication-settings.php' || $page == 'ai-settings.php') ? 'active subdrop' : ''; ?>">Website Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="bussiness-settings.php" class="<?php echo ($page == 'bussiness-settings.php') ? 'active' : ''; ?>">Business Settings</a></li>
										<li><a href="seo-settings.php" class="<?php echo ($page == 'seo-settings.php') ? 'active' : ''; ?>">SEO Settings</a></li>
										<li><a href="localization-settings.php" class="<?php echo ($page == 'localization-settings.php') ? 'active' : ''; ?>">Localization</a></li>
										<li><a href="prefixes.php" class="<?php echo ($page == 'prefixes.php') ? 'active' : ''; ?>">Prefixes</a></li>
										<li><a href="preferences.php" class="<?php echo ($page == 'preferences.php') ? 'active' : ''; ?>">Preferences</a></li>
										<li><a href="performance-appraisal.php" class="<?php echo ($page == 'performance-appraisal.php') ? 'active' : ''; ?>">Appearance</a></li>
										<li><a href="language.php" class="<?php echo ($page == 'language.php') ? 'active' : ''; ?>">Language</a></li>
										<li><a href="authentication-settings.php" class="<?php echo ($page == 'authentication-settings.php') ? 'active' : ''; ?>">Authentication</a></li>
										<li><a href="ai-settings.php" class="<?php echo ($page == 'ai-settings.php') ? 'active' : ''; ?>">AI Settings</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'salary-settings.php' || $page == 'approval-settings.php' || $page == 'invoice-settings.php' || $page == 'leave-type.php' || $page == 'custom-fields.php') ? 'active subdrop' : ''; ?>">App Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="salary-settings.php" class="<?php echo ($page == 'salary-settings.php') ? 'active' : ''; ?>">Salary Settings</a></li>
										<li><a href="approval-settings.php" class="<?php echo ($page == 'approval-settings.php') ? 'active' : ''; ?>">Approval Settings</a></li>
										<li><a href="invoice-settings.php" class="<?php echo ($page == 'invoice-settings.php') ? 'active' : ''; ?>">Invoice Settings</a></li>
										<li><a href="leave-type.php" class="<?php echo ($page == 'leave-type.php') ? 'active' : ''; ?>">Leave Type</a></li>
										<li><a href="custom-fields.php" class="<?php echo ($page == 'custom-fields.php') ? 'active' : ''; ?>">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'email-settings.php' || $page == 'email-template.php' || $page == 'sms-settings.php' || $page == 'sms-template.php' || $page == 'otp-settings.php' || $page == 'gdpr.php' || $page == 'maintenance-mode.php') ? 'active subdrop' : ''; ?>">System Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="email-settings.php" class="<?php echo ($page == 'email-settings.php') ? 'active' : ''; ?>">Email Settings</a></li>
										<li><a href="email-template.php" class="<?php echo ($page == 'email-template.php') ? 'active' : ''; ?>">Email Templates</a></li>
										<li><a href="sms-settings.php" class="<?php echo ($page == 'sms-settings.php') ? 'active' : ''; ?>">SMS Settings</a></li>
										<li><a href="sms-template.php" class="<?php echo ($page == 'sms-template.php') ? 'active' : ''; ?>">SMS Templates</a></li>
										<li><a href="otp-settings.php" class="<?php echo ($page == 'otp-settings.php') ? 'active' : ''; ?>">OTP</a></li>
										<li><a href="gdpr.php" class="<?php echo ($page == 'gdpr.php') ? 'active' : ''; ?>">GDPR Cookies</a></li>
										<li><a href="maintenance-mode.php" class="<?php echo ($page == 'maintenance-mode.php') ? 'active' : ''; ?>">Maintenance Mode</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'payment-gateways.php' || $page == 'tax-rates.php' || $page == 'currencies.php') ? 'active subdrop' : ''; ?>">Financial Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="payment-gateways.php" class="<?php echo ($page == 'payment-gateways.php') ? 'active' : ''; ?>">Payment Gateways</a></li>
										<li><a href="tax-rates.php" class="<?php echo ($page == 'tax-rates.php') ? 'active' : ''; ?>">Tax Rate</a></li>
										<li><a href="currencies.php" class="<?php echo ($page == 'currencies.php') ? 'active' : ''; ?>">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu submenu-two">
									<a href="javascript:void(0);" class="<?php echo ($page == 'custom-css.php' || $page == 'custom-js.php' || $page == 'cronjob.php' || $page == 'storage-settings.php' || $page == 'ban-ip-address.php' || $page == 'backup.php' || $page == 'clear-cache.php') ? 'active subdrop' : ''; ?>">Other Settings<span class="menu-arrow inside-submenu"></span></a>
									<ul>
										<li><a href="custom-css.php" class="<?php echo ($page == 'custom-css.php') ? 'active' : ''; ?>">Custom CSS</a></li>
										<li><a href="custom-js.php" class="<?php echo ($page == 'custom-js.php') ? 'active' : ''; ?>">Custom JS</a></li>
										<li><a href="cronjob.php" class="<?php echo ($page == 'cronjob.php') ? 'active' : ''; ?>">Cronjob</a></li>
										<li><a href="storage-settings.php" class="<?php echo ($page == 'storage-settings.php') ? 'active' : ''; ?>">Storage</a></li>
										<li><a href="ban-ip-address.php" class="<?php echo ($page == 'ban-ip-address.php') ? 'active' : ''; ?>">Ban IP Address</a></li>
										<li><a href="backup.php" class="<?php echo ($page == 'backup.php') ? 'active' : ''; ?>">Backup</a></li>
										<li><a href="clear-cache.php" class="<?php echo ($page == 'clear-cache.php') ? 'active' : ''; ?>">Clear Cache</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>CONTENT</span></li>
				<li>
					<ul>
						<li>
							<a href="pages.php">
								<i class="ti ti-box-multiple"></i><span>Pages</span>
							</a>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'blogs.php' || $page == 'blog-categories.php' || $page == 'blog-comments.php' || $page == 'blog-tags.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-brand-blogger"></i><span>Blogs</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="blogs.php" class="<?php echo ($page == 'blogs.php') ? 'active' : ''; ?>">All Blogs</a></li>
								<li><a href="blog-categories.php" class="<?php echo ($page == 'blog-categories.php') ? 'active' : ''; ?>">Categories</a></li>
								<li><a href="blog-comments.php" class="<?php echo ($page == 'blog-comments.php') ? 'active' : ''; ?>">Comments</a></li>
								<li><a href="blog-tags.php" class="<?php echo ($page == 'blog-tags.php') ? 'active' : ''; ?>">Blog Tags</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);" class="<?php echo ($page == 'countries.php' || $page == 'states.php' || $page == 'cities.php') ? 'active subdrop' : ''; ?>">
								<i class="ti ti-map-pin-check"></i><span>Locations</span>
								<span class="menu-arrow"></span>
							</a>
							<ul>
								<li><a href="countries.php" class="<?php echo ($page == 'countries.php') ? 'active' : ''; ?>">Countries</a></li>
								<li><a href="states.php" class="<?php echo ($page == 'states.php') ? 'active' : ''; ?>">States</a></li>
								<li><a href="cities.php" class="<?php echo ($page == 'cities.php') ? 'active' : ''; ?>">Cities</a></li>
							</ul>
						</li>
						<li class="<?php echo ($page == 'testimonials.php') ? 'active' : ''; ?>">
							<a href="testimonials.php">
								<i class="ti ti-message-2"></i><span>Testimonials</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'faq.php') ? 'active' : ''; ?>">
							<a href="faq.php">
								<i class="ti ti-question-mark"></i><span>FAQ’S</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="menu-title"><span>PAGES</span></li>
				<li>
					<ul>
						<li class="<?php echo ($page == 'starter.php') ? 'active' : ''; ?>">
							<a href="starter.php">
								<i class="ti ti-layout-sidebar"></i><span>Starter</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'profile.php') ? 'active' : ''; ?>">
							<a href="profile.php">
								<i class="ti ti-user-circle"></i><span>Profile</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'gallery.php') ? 'active' : ''; ?>">
							<a href="gallery.php">
								<i class="ti ti-photo"></i><span>Gallery</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'search-result.php') ? 'active' : ''; ?>">
							<a href="search-result.php">
								<i class="ti ti-list-search"></i><span>Search Results</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'timeline.php') ? 'active' : ''; ?>">
							<a href="timeline.php">
								<i class="ti ti-timeline"></i><span>Timeline</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'pricing.php') ? 'active' : ''; ?>">
							<a href="pricing.php">
								<i class="ti ti-file-dollar"></i><span>Pricing</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'coming-soon.php') ? 'active' : ''; ?>">
							<a href="coming-soon.php">
								<i class="ti ti-progress-bolt"></i><span>Coming Soon</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'under-maintenance.php') ? 'active' : ''; ?>">
							<a href="under-maintenance.php">
								<i class="ti ti-alert-octagon"></i><span>Under Maintenance</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'under-construction.php') ? 'active' : ''; ?>">
							<a href="under-construction.php">
								<i class="ti ti-barrier-block"></i><span>Under Construction</span>
							</a>
						</li>
						<li class="<?php echo ($page == 'api-keys.php') ? 'active' : ''; ?>">
							<a href="api-keys.php">
								<i class="ti ti-api"></i><span>API Keys</span>
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