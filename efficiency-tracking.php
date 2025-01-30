<?php
include 'layouts/session.php';


$page_name = 'efficiency-tracking';
if ($roleId != 1 && !(in_array($page_name, $pageAccessList))) {
	echo '<script>window.location.href = "index.php"</script>';
}

$efficincy = $conn->prepare("SELECT `efficiency`.* , `projects`.`project_name` , `tasks`.`task_id` , `users`.`name` as `user_name` , `users`.`profile` as `user_profile` , `role`.`name` as `role_name` FROM `efficiency` JOIN `users` ON `users`.`id` = `efficiency`.`user_id` JOIN `role` ON `role`.`id` = `users`.`role_id` JOIN `tasks` ON `tasks`.`id` = `efficiency`.`task_id` JOIN `projects` ON `projects`.`id` = `efficiency`.`project_id` WHERE  `efficiency`.`created_at` >= DATE_SUB(NOW(), INTERVAL 7 DAY)  ORDER BY `efficiency`.`id` DESC");
$efficincy->execute();
$efficincy = $efficincy->fetchAll(PDO::FETCH_ASSOC);


$users = $conn->prepare("SELECT * FROM `users` ORDER BY `users`.`name` ASC");
$users->execute();
$users = $users->fetchAll(PDO::FETCH_ASSOC);


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
                        <h2 class="mb-1">Efficiency Tracking</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Performance
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Efficiency Tracking</li>
                            </ol>
                        </nav>
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

                <!-- Performance Indicator list -->
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h5>Efficiency Tracking List</h5>
                        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="me-3">
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" name="date" id="dateRange">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="me-3">
                                <select id="user_id" name="user_id" class="form-select btn-sm btn-white">
                                    <option value="" selected>Select User</option>
                                    <?php
                                    foreach ($users as $value) {
                                        echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
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
                                        <th>Name</th>
                                        <th>Task ID</th>
                                        <th>Project</th>
                                        <th>Role</th>
                                        <th>Taken Time</th>
                                        <th>Total Time</th>
                                        <th>Efficiency</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($efficincy as $value) {
                                        echo '<tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="' . ($value['user_profile'] == '' ? 'assets/img/users/user-32.jpg' : $value['user_profile']) . '" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">' . $value['user_name'] . '</a></h6>
													<span class="fs-12 fw-normal ">' . ucfirst($value['role_name']) . '</span>
												</div>
											</div>
                                        </td>
                                        <td>' . $value['task_id'] . '</td>
                                        <td>
                                            ' . $value['project_name'] . '
                                        </td>
                                        <td>
                                            ' . strtoupper($value['profile']) . '
                                        </td>
                                        <td>
                                            ' . $value['taken_time'] . 'min
                                        </td>
                                        <td>
                                            ' . $value['total_time'] . 'min
                                        </td>
                                        <td>
                                            <span class="fs-12 mb-1">Completed ' . round($value['efficiency'], 2) . '%</span>
                                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 87px;height: 5px;">
                                                <div class="progress-bar bg-primary" style="width: ' . round($value['efficiency'], 2) . '%"></div>
                                            </div>
                                        </td>
                                         <td>
                                            ' . date('d M, Y h:i A', strtotime($value['created_at'])) . '
                                        </td>
                                        <td>
                                            ' . date('d M, Y  h:i A', strtotime($value['updated_at'])) . '
                                        </td>
                                    </tr>';
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Performance Indicator list -->

            </div>

            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
                <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>

        </div>
        <!-- /Page Wrapper -->

        <!-- Delete Modal -->
        <div class="modal fade" id="delete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                            <i class="ti ti-trash-x fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Delete</h4>
                        <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a href="goal-tracking.php" class="btn btn-danger">Yes, Delete</a>
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
        $(document).ready(function() {
            // Handle date range input change
            $('#dateRange').on('change', function() {
                fetchFilteredData();
            });
            
            $('#user_id').on('change', function() {
                fetchFilteredData();
            });

            function fetchFilteredData() {
                const dateRange = $('#dateRange').val();
                const user_id = $('#user_id').val();

                $.ajax({
                    url: 'settings/api/efficiencyApi.php',
                    method: 'POST',
                    data: {
                        dateRange: dateRange,
                        user_id : user_id,
                        type: 'filterEfficiency',
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