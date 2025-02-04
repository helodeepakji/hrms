<?php include 'layouts/session.php';

$page_name = 'leave-bonus';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

$leaves = $conn->prepare("SELECT * FROM `leave_bonus` WHERE `aprrove` = 0 AND `reject` = 0");
$leaves->execute();
$leaves = $leaves->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Smarthr Admin Template</title>
    <?php include 'layouts/title-meta.php'; ?>
    <?php include 'layouts/head-css.php'; ?>
    <!-- Bootstrap Tagsinput CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
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
                        <h2 class="mb-1">Leaves Bonus</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Employee
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Leaves Bonus</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="me-2 mb-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-file-export me-1"></i>Export
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
						</div> -->
                        <div class="head-icons ms-2">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <!-- Leaves list -->
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h5>Leave List</h5>
                        <!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="me-3">
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" name="date" id="dateRange">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="me-3">
                                <select id="leaveType" name="leaveType" class="form-select btn-sm btn-white">
                                    <option value="" selected>Select Leave Type</option>
                                    <?php
                                    foreach ($leave_type as $value) {
                                        echo '<option value="' . $value['id'] . '">' . $value['leave_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="me-3">
                                <select id="selectedRole" class="form-select">
                                    <option value="">Select Role</option>
                                    <?php
                                    foreach ($role as $value) {
                                        echo '  <option value=' . $value['id'] . '>' . ucfirst(str_replace('_', ' ', $value['name'])) . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="me-3">
                                <select id="selectedStatus" class="form-select">
                                    <option value="">Select Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="approve">Approve</option>
                                    <option value="cancel">Cancel</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-body p-0">
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox" id="select-all">
                                            </div>
                                        </th>
                                        <th>Employee</th>
                                        <th>Approve By</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($leaves as $leave) {

                                        $user = $conn->prepare("SELECT `name` FROM `users` WHERE `id` = ?");
                                        $user->execute([$leave['user_id']]);
                                        $user = $user->fetch(PDO::FETCH_ASSOC);

                                        $auser = $conn->prepare("SELECT `name` FROM `users` WHERE `id` = ?");
                                        $auser->execute([$leave['approve_by']]);
                                        $auser = $auser->fetch(PDO::FETCH_ASSOC);

                                        echo '<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="' . ($user['profile'] ?? 'assets/img/users/user-32.jpg') . '" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">' . $user['user_name'] . '</a></h6>
													<span class="fs-12 fw-normal ">' . ucfirst($user['role_name']) . '</span>
												</div>
											</div>
										</td>
                                        <td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="' . ($auser['profile'] ?? 'assets/img/users/user-32.jpg') . '" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">' . $auser['user_name'] . '</a></h6>
													<span class="fs-12 fw-normal ">' . ucfirst($auser['role_name']) . '</span>
												</div>
											</div>
										</td>
										<td>
											'.date('d M, Y', strtotime($leave['created_at'])).'
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#approve_modal"  onclick="rejectLeaveBonus(' . $value['id'] . ')"><i class="fe fe-check-circle"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="rejectLeaveBonus(' . $value['id'] . ')"><i class="ti ti-arrows-cross"></i></a>
											</div>
										</td>
									</tr>';
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Leaves list -->

            </div>
            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
                <p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <!-- Add Leaves -->
        <div class="modal fade" id="add_leaves">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Leave</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form id="applyLeaves">
                        <input type="hidden" value="applyLeaves" name="type">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Leave Type</label>
                                        <select class="select" name="leave_type">
                                            <option value="">Select</option>
                                            <?php foreach ($leave_type as $value) {
                                                echo '<option value="' . $value['id'] . '">' . $value['leave_name'] . '</option>';
                                            } ?>
                                            <option value="unpaid">Unpaid Leave</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Leave Option</label>
                                        <select class="select" id="leave_option" name="leave_option">
                                            <option>Select</option>
                                            <option value="full_day">Full Day</option>
                                            <option value="first_half">First Half</option>
                                            <option value="second_half">Second Half</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="full_day" class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">From </label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="start_date">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">To </label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="end_date">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="half_day" class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Half Day </label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" name="date">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Reason</label>
                                        <textarea class="form-control" rows="3" name="reason"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Leave</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Leaves -->


        <!-- Delete Modal -->
        <div class="modal fade" id="approve_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-danger text-success mb-3">
                            <i class="ti ti-check fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Approve</h4>
                        <p class="mb-3">You want to approve leave application, this cant be undone once you approve.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a class="btn btn-success" onclick="approveLeaveBonus()">Yes, Approve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Modal -->


        <!-- Delete Modal -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                            <i class="ti ti-trash-x fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Reject</h4>
                        <p class="mb-3">You want to reject leave application, this cant be undone once you reject.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a id="delete-btn" class="btn btn-danger">Yes, Cancel</a>
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
    <!-- Bootstrap Tagsinput JS -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script>

        function rejectLeaveBonus(id) {
            $('#delete-btn').data('delete', id);
        }

        $('#delete-btn').on('click', function() {
            var id = $('#delete-btn').data('delete');
            $.ajax({
                url: 'settings/api/leaveApi.php',
                method: 'POST',
                data: {
                    leave_id: id,
                    type: 'rejectLeaveBonus',
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Leave not found.";
                    notyf.error(errorMessage);
                }
            });
        });


        function approveLeaveBonus() {
            var id = $('#delete-btn').data('delete');
            $.ajax({
                url: 'settings/api/leaveApi.php',
                method: 'POST',
                data: {
                    leave_id: id,
                    type: 'approveLeaveBonus',
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Leave not found.";
                    notyf.error(errorMessage);
                }
            });
        }

        $(document).ready(function() {
            // Handle date range input change
            $('#dateRange').on('change', function() {
                fetchFilteredData();
            });

            // Handle status filter click
            $('#leaveType').on('click', function() {
                fetchFilteredData();
            });

            $('#selectedRole').on('click', function() {
                fetchFilteredData();
            });

            $('#selectedStatus').on('click', function() {
                fetchFilteredData();
            });

            // Fetch data based on filters
            function fetchFilteredData() {
                const dateRange = $('#dateRange').val();
                const leaveType = $('#leaveType').val();
                const role = $('#selectedRole').val();
                const status = $('#selectedStatus').val();

                $.ajax({
                    url: 'settings/api/leaveApi.php',
                    method: 'POST',
                    data: {
                        dateRange: dateRange,
                        leave_type: leaveType,
                        role: role,
                        status: status,
                        type: 'filterLeave',
                    },
                    success: function(response) {
                        $('.datatable').DataTable().destroy();
                        $('tbody').html(response);
                        $('.datatable').DataTable();
                    },
                    error: function() {
                        alert('Error fetching data.');
                    },
                });
            }
        });
    </script>
</body>

</html>