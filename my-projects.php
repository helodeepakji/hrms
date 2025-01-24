<?php
include 'layouts/session.php';

$project = $conn->prepare("SELECT `projects`.*, `users`.`name` , `users`.`profile` FROM `projects` JOIN `project_assign` ON `project_assign`.`project_id` = `projects`.`id` JOIN `users` ON `users`.`id` = `project_assign`.`user_id` WHERE `projects`.`is_complete` = 0 AND `project_assign`.`user_id` = ? ORDER BY `projects`.`id` DESC");
$project->execute([$userId]);
$project = $project->fetchAll(PDO::FETCH_ASSOC);

$project_manager = $conn->prepare("SELECT * FROM `users` WHERE `role_id` = 2 AND `is_terminated` = 0");
$project_manager->execute();
$project_manager = $project_manager->fetchAll(PDO::FETCH_ASSOC);

$team_leader = $conn->prepare("SELECT * FROM `users` WHERE `role_id` = 3 AND `is_terminated` = 0");
$team_leader->execute();
$team_leader = $team_leader->fetchAll(PDO::FETCH_ASSOC);

$employee = $conn->prepare("SELECT * FROM `users` WHERE `role_id` = 4 AND `is_terminated` = 0");
$employee->execute();
$employee = $employee->fetchAll(PDO::FETCH_ASSOC);

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
                        <h2 class="mb-1">Projects</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Employee
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Projects</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="ms-2 head-icons">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <!-- Project list -->
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h5>Project List</h5>
                        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="dropdown me-3">
                                <select id="selectedStatus" class="form-select">
                                    <option value="">Select Status</option>
                                    <option value="0">Active</option>
                                    <option value="1">Completed</option>
                                </select>
                            </div>
                            <div class="me-3">
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy" name="date" id="dateRange">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-chevron-down"></i>
                                    </span>
                                </div>
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
                                        <th>Project ID</th>
                                        <th>Client Code</th>
                                        <th>Project Name</th>
                                        <th>Project Manager</th>
                                        <th>Estimated Hour</th>
                                        <th>Start Date</th>
                                        <th>Deadline</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($project  as $value) {


                                        if ($value['name'] != '') {
                                            $data = '<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
													<img src="' . ($value['profile'] != '' ? $value['profile'] : 'assets/img/users/user-39.jpg') . '" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-normal"><a href="javascript:void(0);">' . $value['name'] . '</a></h6>
												</div>
											</div>';
                                        } else {
                                            $data = '<span class="badge badge-success d-inline-flex align-items-center badge-xs" data-bs-toggle="modal" data-bs-target="#edit_project" onclick="getProject(' . $value['id'] . ')">
												<i class="ti ti-point-filled me-1"></i>Assign Project
											</span>';
                                        }

                                        echo '
										<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td><a href="project-details.php?id=' . $value['id'] . '">PRO-' . $value['id'] . '</a></td>
										<td><a href="project-details.php?id=' . $value['id'] . '">' . $value['client_id'] . '</a></td>
										<td>
											<h6 class="fw-medium"><a href="project-details.php?id=' . $value['id'] . '">' . $value['project_name'] . '</a></h6>
										</td>
										<td>
											' . $data . '
										</td>
										<td>
											' . $value['estimated_hour'] . 'Hr.
										</td>
										<td>
											' . date('d M, Y', strtotime($value['start_date'])) . '
										</td>
										<td>
											' . date('d M, Y', strtotime($value['end_date'])) . '
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> ' . ucfirst($value['complexity']) . '
												</a>
											</div>
										</td>
										 <td>
											<span class="badge badge-' . ($value['is_complete'] == 0 ? 'success' : 'danger') . ' d-inline-flex align-items-center badge-xs" onclick="switchProject(' . $value['id'] . ',' . $value['is_complete'] . ')">
												<i class="ti ti-point-filled me-1"></i>' . ($value['is_complete'] == 0 ? 'Active' : 'Completed') . '
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_project" onclick="getProject(' . $value['id'] . ')"><i class="ti ti-edit"></i></a>
											</div>
										</td>
									</tr>
										';
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- / Project list  -->

            </div>
            <!-- <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div> -->
        </div>
        <!-- /Page Wrapper -->


        <!-- Edit Project -->
        <div class="modal fade" id="edit_project" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Edit Project </h5>
                            <p class="text-dark">Project ID : PRO-<spna id="project_id"></spna>
                            </p>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="contact-grids-tab p-3 pb-0">
                            <ul class="nav nav-underline" id="myTab1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab1" data-bs-toggle="tab" data-bs-target="#basic-info1" type="button" role="tab" aria-selected="true">Basic Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="member-tab1" data-bs-toggle="tab" data-bs-target="#member1" type="button" role="tab" aria-selected="false">Project Manager</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="member-tab1" data-bs-toggle="tab" data-bs-target="#TeamLeader" type="button" role="tab" aria-selected="false">Team Leader</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="member-tab1" data-bs-toggle="tab" data-bs-target="#Employee" type="button" role="tab" aria-selected="false">Employee</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="basic-info1" role="tabpanel" aria-labelledby="basic-tab1" tabindex="0">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Project Name</label>
                                                <input type="text" class="form-control" value="" id="edit_project_name" name="project_name">
                                                <input type="hidden" name="project_id" value="" id="edit_project_id">
                                                <input type="hidden" name="type" value="updateProject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Client</label>
                                                <input type="text" class="form-control" name="client_id" id="client_id">
                                                <!-- <select class="select" id="client_id" name="client_id">
														<option>Select</option>
														<option selected>Anthony Lewis</option>
														<option>Brian Villalobos</option>
													</select> -->
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Start Date</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024" id="edit_start_date" name="start_date">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">End Date</label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="02-05-2024" id="edit_end_date" name="end_date">
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar text-gray-7"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Priority</label>
                                                        <select class="form-control" name="complexity" id="complexity" required>
                                                            <option>Select</option>
                                                            <option value="high">High</option>
                                                            <option value="medium">Medium</option>
                                                            <option value="low">Low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Area</label>
                                                        <select class="form-control" name="area" id="area" required>
                                                            <option>Select</option>
                                                            <option value="lm">Linear Mile</option>
                                                            <option value="lkm">Linear Kilometer</option>
                                                            <option value="si">Square Inch</option>
                                                            <option value="h">Hectare</option>
                                                            <option value="sf">Square Feet</option>
                                                            <option value="sqm">Squre Mile</option>
                                                            <option value="sm">Squre Meter</option>
                                                            <option value="sqkm">Squre Kilometer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Estimated Hour</label>
                                                        <input type="number" name="estimated_hour" id="edit_estimated_hour" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="summernote" id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="member1" role="tabpanel" aria-labelledby="member-tab1" tabindex="0">
                                <div class="modal-body">
                                    <input type="hidden" value="assignProjectManager" name="type">
                                    <input type="hidden" value="" name="project_id" id="assign_project_id">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label me-2">Project Manager</label>
                                                <select class="form-control" name="project_manager" id="project_manager" required>
                                                    <option value="">Select</option>
                                                    <?php
                                                    foreach ($project_manager as $value) {
                                                        echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="TeamLeader" role="tabpanel" aria-labelledby="member-tab1" tabindex="0">
                                <form id="assignTeamLeader">
                                    <div class="modal-body">
                                        <input type="hidden" value="assignTeamLeader" name="type">
                                        <input type="hidden" value="" name="project_id" id="assign_teamlear_project_id">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label me-2">Team Leader</label>
                                                    <select class="form-control select2" name="team_leader[]" id="team_leader" required multiple>
                                                        <option value="">Select</option>
                                                        <?php
                                                        foreach ($team_leader as $value) {
                                                            echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="Employee" role="tabpanel" aria-labelledby="member-tab1" tabindex="0">
                                <form id="assignEmployee">
                                    <div class="modal-body">
                                        <input type="hidden" value="assignEmployee" name="type">
                                        <input type="hidden" value="" name="project_id" id="assign_user_project_id">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label me-2">Employee</label>
                                                    <select class="form-control select2" name="employee[]" id="employee" required multiple>
                                                        <option value="">Select</option>
                                                        <?php
                                                        foreach ($employee as $value) {
                                                            echo '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Project -->

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
                            <a id="btn-delete" class="btn btn-danger">Yes, Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Modal -->

        <!-- Delete Modal -->
        <div class="modal fade" id="complete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-success text-danger mb-3">
                            <i class="ti ti-check fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm Complete</h4>
                        <p class="mb-3">You want to Complete this project.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a id="btn-complete" class="btn btn-success">Yes, Complete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Modal -->

        <!-- Delete Modal -->
        <div class="modal fade" id="incomplete_modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <span class="avatar avatar-xl bg-transparent-success text-danger mb-3">
                            <i class="ti ti-check fs-36"></i>
                        </span>
                        <h4 class="mb-1">Confirm inComplete</h4>
                        <p class="mb-3">You want to inComplete this project.</p>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                            <a id="btn-incomplete" class="btn btn-success">Yes, Complete</a>
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


            $('#selectedStatus').on('click', function() {
                fetchFilteredData();
            });

            // Fetch data based on filters
            function fetchFilteredData() {
                const dateRange = $('#dateRange').val();
                const status = $('#selectedStatus').val();

                $.ajax({
                    url: 'settings/api/projectApi.php',
                    method: 'POST',
                    data: {
                        dateRange: dateRange,
                        status: status,
                        type: 'MyFilterProduct',
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

        $(document).ready(function() {
            function diffDate(start_date, end_date) {
                const date1 = new Date(start_date);
                const date2 = new Date(end_date);
                const differenceInMilliseconds = date2 - date1;
                const day = Math.floor(differenceInMilliseconds / (1000 * 60 * 60 * 24));
                return day;
            }

            $('#start_date, #end_date').on('change', function() {
                var startDate = new Date($('#start_date').val());
                var endDate = new Date($('#end_date').val());

                if (startDate && endDate) {
                    if (startDate > endDate) {
                        notyf.error('Start date cannot be greater than End date.');
                        $('#end_date').val('');
                    } else {
                        const startDateStr = $('#start_date').val();
                        const endDateStr = $('#end_date').val();
                        $('#estimated_hour').val(diffDate(startDateStr, endDateStr) * 8);
                    }
                }
            });
        });

        function formatDate(date) {
            var dateParts = date.split('-');
            return dateParts[2] + '-' + dateParts[1] + '-' + dateParts[0];
        }

        function deleteProject(id) {
            $('#btn-delete').data('id', id);
        }

        $('#btn-delete').click(() => {
            var id = $('#btn-delete').data('id');
            $.ajax({
                url: 'settings/api/projectApi.php',
                type: 'POST',
                data: {
                    type: 'deleteProject',
                    project_id: id
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
        });

        function getProject(id) {
            $.ajax({
                url: 'settings/api/projectApi.php',
                type: 'GET',
                data: {
                    type: 'getProduct',
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $('#project_id').text(response.id);
                    $('#edit_project_id').val(response.id);
                    $('#assign_teamlear_project_id').val(response.id);
                    $('#assign_user_project_id').val(response.id);
                    $('#assign_project_id').val(response.id);
                    $('#edit_project_name').val(response.project_name);
                    $('#area').val(response.area);
                    $('#description').summernote('code', response.description);
                    $('#edit_start_date').val(formatDate(response.start_date));
                    $('#edit_end_date').val(formatDate(response.end_date));
                    $('#complexity').val(response.complexity);
                    $('#edit_estimated_hour').val(response.estimated_hour);
                    $('#client_id').val(response.client_id);

                    // project manager
                    $('#project_manager').val(response.project_manger);

                    //team leader
                    let teamLeaderIds = response.team_leader.map(leader => leader.user_id);
                    $('#team_leader option').each(function() {
                        if (teamLeaderIds.includes(parseInt($(this).val()))) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });

                    // Preselect Employees
                    let employeeIds = response.employee.map(emp => emp.user_id);
                    $('#employee option').each(function() {
                        if (employeeIds.includes(parseInt($(this).val()))) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });

                    // Refresh select2 for both dropdowns if used
                    if ($.fn.select2) {
                        $('#team_leader').trigger('change.select2');
                        $('#employee').trigger('change.select2');
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                    notyf.error(errorMessage);
                }
            });
        }

        function switchProject(id, status) {
            var comp = status == 0 ? 'complete_modal' : 'incomplete_modal';
            $('#' + comp).modal('show');
            $('#btn-complete').data('id', id);
            $('#btn-complete').data('status', status);
        }

        $('#btn-complete').click(() => {
            var id = $('#btn-complete').data('id');
            var status = $('#btn-complete').data('status');
            var type = status == 0 ? 'completeProject' : 'inCompleteProject';
            $.ajax({
                url: 'settings/api/projectApi.php',
                type: 'POST',
                data: {
                    type: type,
                    id: id
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
        });

        $('#btn-incomplete').click(() => {
            var id = $('#btn-complete').data('id');
            var status = $('#btn-complete').data('status');
            var type = status == 0 ? 'completeProject' : 'inCompleteProject';
            $.ajax({
                url: 'settings/api/projectApi.php',
                type: 'POST',
                data: {
                    type: type,
                    id: id
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
        });

        $('#assignTeamLeader').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/assignProjectApi.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
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
        });

        $('#assignEmployee').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/assignProjectApi.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
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
        });
    </script>
</body>

</html>