<?php
include 'layouts/session.php';

$project = $conn->prepare("SELECT * FROM `projects` WHERE `is_complete` = 0 ORDER BY `id` DESC");
$project->execute();
$project = $project->fetchAll(PDO::FETCH_ASSOC);

$tasks = $conn->prepare("SELECT `tasks`.* , `projects`.`area` , `projects`.`project_name`  FROM `tasks` JOIN `projects` ON `projects`.`id` = `tasks`.`project_id` WHERE `tasks`.`status` = 'pending' AND `projects`.`id` = ? ORDER BY `id` DESC");
$tasks->execute([$project[0]['id']]);
$tasks = $tasks->fetchAll(PDO::FETCH_ASSOC);

?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>UniqueMaps Admin Template</title>
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
                        <h2 class="mb-1">Tasks</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Employee
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tasks</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <!-- <div class="mb-2 ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#assign_task" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Assign Tasks</a>
                        </div> -->
                        <div class="mb-2 ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_task" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Tasks</a>
                        </div>
                        <div class="mb-2 ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#upload_task" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Upload Tasks</a>
                        </div>
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
                        <h5>Task List</h5>
                        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                            <div class="dropdown me-3">
                                <select id="selectedProject" class="form-select">
                                    <?php foreach ($project as $value) {
                                        echo '<option value="' . $value['id'] . '">' . $value['project_name'] . '</option>';
                                    } ?>
                                </select>
                            </div>
                            <div class="dropdown me-3">
                                <select id="selectedStatus" class="form-select">
                                    <option value="pending">Pending</option>
                                    <option value="assign_pro">Assign Pro</option>
                                    <option value="pro_in_progress">Pro In Progress</option>
                                    <option value="ready_for_qc">Ready For QC</option>
                                    <option value="assign_qc">Assign QC</option>
                                    <option value="qc_in_progress">QC In Progress</option>
                                    <option value="ready_for_qa">Ready For QA</option>
                                    <option value="assign_qa">Assign QA</option>
                                    <option value="qa_in_progress">QA In Progress</option>
                                    <option value="complete">Complete</option>
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
                                        <th>Sno</th>
                                        <th>Task ID</th>
                                        <th>Project Name</th>
                                        <th>Area</th>
                                        <th>Estimated Hour</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    foreach ($tasks  as $value) {
                                        switch ($value['status']) {
                                            case 'assign_pro':
                                                $role = 'pro';
                                                break;
                                            case 'pro_in_progress':
                                                $role = 'pro';
                                                break;
                                            case 'assign_qc':
                                                $role = 'qc';
                                                break;
                                            case 'qc_in_progress':
                                                $role = 'qc';
                                                break;
                                            case 'assign_qa':
                                                $role = 'qa';
                                                break;
                                            case 'qa_in_progress':
                                                $role = 'qa';
                                                break;
                                        }

                                        $assign = $conn->prepare("SELECT `users`.`name` , `assign`.`user_id` FROM `assign` JOIN `users` ON `users`.`id` = `assign`.`user_id` WHERE `assign`.`task_id` = ? AND `assign`.`role` = ?");
                                        $assign->execute([$value['id'] , $role]);
                                        $assign = $assign->fetch(PDO::FETCH_ASSOC);

                                        echo '
										<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input task-checkbox" type="checkbox" value="' . $value['id'] . '">
											</div>
										</td>
										<td>
											' . ++$i . '
										</td>
										<td>
											<h6 class="fw-medium"><a href="project-details.php?id=' . $value['id'] . '">' . $value['task_id'] . '</a></h6>
										</td>
                                        <td>
											<h6 class="fw-medium"><a href="project-details.php?id=' . $value['id'] . '">' . $value['project_name'] . '</a></h6>
										</td>
										<td>
											' . $value['area_sqkm'] . '' . strtoupper($value['area']) . '.
										</td>
										<td>
                                        ' . $value['estimated_hour'] . 'Hr.
										</td>
										<td>
											' . ucfirst(str_replace('_', ' ', $value['status'])) . '
                                            <br> '.$assign['name'].'
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> ' . ucfirst($value['complexity'] ?? 'Lower') . '
												</a>
											</div>
										</td>
										 <td>
											<span class="badge badge-' . ($value['status'] == 'complete' ? 'success' : 'danger') . ' d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>' . ($value['status'] == 'complete' ? 'Complete' : 'Active') . '
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_task" onclick="getTask(' . $value['id'] . ')"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="deleteTask(' . $value['id'] . ')"><i class="ti ti-trash"></i></a>
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
                <p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div> -->
        </div>
        <!-- /Page Wrapper -->

        <!-- Add Project -->
        <div class="modal fade" id="add_task" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Add Task </h5>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="contact-grids-tab p-3 pb-0">
                            <ul class="nav nav-underline" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
                                <form id="taskSubmit">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Project Name</label>
                                                    <select name="project_id" class="select" required>
                                                        <option value="">Select Project</option>
                                                        <?php foreach ($project as $value) {
                                                            echo '<option value="' . $value['id'] . '">' . $value['project_name'] . '</option>';
                                                        } ?>
                                                    </select>
                                                    <input type="hidden" value="addTask" name="type">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Task ID</label>
                                                    <input type="text" class="form-control" name="task_id">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Date</label>
                                                            <div class="input-icon-end position-relative">
                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="" name="start_date" id="start_date">
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
                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="" name="end_date" id="end_date">
                                                                <span class="input-icon-addon">
                                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Priority</label>
                                                            <select class="select" name="complexity" required>
                                                                <option>Select</option>
                                                                <option value="higher">High</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="lower">Low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Area</label>
                                                            <input type="number" name="area" step="0.01" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Estimated Hour</label>
                                                            <input type="number" name="estimated_hour" class="form-control" step="0.01" required>
                                                        </div>
                                                    </div>
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
        <!-- /Add Project -->

        <!-- Add Project -->
        <div class="modal fade" id="upload_task" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Upload Task </h5>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="contact-grids-tab p-3 pb-0">
                            <ul class="nav nav-underline" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
                                <form id="uploadCsv">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Project</label>
                                                    <select class="select" name="project_id" required>
                                                        <option>Select</option>
                                                        <?php foreach ($project as $value) {
                                                            echo '<option value="' . $value['id'] . '">' . $value['project_name'] . '</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Upload CSV.</label>
                                                    <input type="file" name="csvFile" class="form-control" required>
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
        <!-- /Add Project -->

        <!-- Add Project -->
        <div class="modal fade" id="edit_task" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Edit Task </h5>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="contact-grids-tab p-3 pb-0">
                            <ul class="nav nav-underline" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
                                <form id="editTask">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Project Name</label>
                                                    <select name="project_id" id="project_id" class="form-control" required>
                                                        <option value="">Select Project</option>
                                                        <?php foreach ($project as $value) {
                                                            echo '<option value="' . $value['id'] . '">' . $value['project_name'] . '</option>';
                                                        } ?>
                                                    </select>
                                                    <input type="hidden" value="" id="task_id" name="id">
                                                    <input type="hidden" value="editTask" name="type">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Task ID</label>
                                                    <input type="text" class="form-control" name="task_id" id="task_name">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Date</label>
                                                            <div class="input-icon-end position-relative">
                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="" name="start_date" id="edit_start_date">
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
                                                                <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="" name="end_date" id="edit_end_date">
                                                                <span class="input-icon-addon">
                                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Priority</label>
                                                            <select class="select" name="complexity" id="complexity" required>
                                                                <option>Select</option>
                                                                <option value="higher">High</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="lower">Low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Area</label>
                                                            <input type="number" name="area" step="0.01" class="form-control" id="area" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Estimated Hour</label>
                                                            <input type="number" name="estimated_hour" class="form-control" step="0.01" id="edit_estimated_hour" required>
                                                        </div>
                                                    </div>
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
        <!-- /Add Project -->

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
            $('#selectedStatus').on('change', function() {
                fetchFilteredData();
            });


            $('#selectedProject').on('click', function() {
                fetchFilteredData();
            });

            // Fetch data based on filters
            function fetchFilteredData() {
                const status = $('#selectedStatus').val();
                const project = $('#selectedProject').val();

                $.ajax({
                    url: 'settings/api/taskApi.php',
                    method: 'POST',
                    data: {
                        status: status,
                        project_id: project,
                        type: 'FilterTask',
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

        function deleteTask(id) {
            $('#btn-delete').data('id', id);
        }

        $('#btn-delete').click(() => {
            var id = $('#btn-delete').data('id');
            $.ajax({
                url: 'settings/api/taskApi.php',
                type: 'POST',
                data: {
                    type: 'deleteTask',
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

        function getTask(id) {
            $.ajax({
                url: 'settings/api/taskApi.php',
                type: 'GET',
                data: {
                    type: 'getTask',
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $('#task_id').val(response.id);
                    $('#project_id').val(response.project_id);
                    $('#task_name').val(response.task_id);
                    $('#area').val(response.area_sqkm);
                    $('#complexity').val(response.complexity);
                    $('#edit_estimated_hour').val(response.estimated_hour);
                    $('#client_id').val(response.client_id);
                    $('#edit_start_date').val(formatDate(response.start_date));
                    $('#edit_end_date').val(formatDate(response.end_date));
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                    notyf.error(errorMessage);
                }
            });
        }

        $('#taskSubmit').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/taskApi.php',
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

        $('#editTask').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/taskApi.php',
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
    <script>
        $('#uploadCsv').submit(function(event) {
            event.preventDefault();
            // Notiflix.Loading.standard();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/csvTaskApi.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    setTimeout(() => {
                        location.reload();
                    }, 500);
                },
                error: function(xhr, status, error) {
                    if (xhr.status === 500) {
                        const errorResponse = JSON.parse(xhr.responseText);
                        notyf.error(errorResponse.message);
                    } else {
                        var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                        notyf.error(errorMessage);
                    }
                    // Notiflix.Loading.remove();
                }
            });
        });
    </script>
</body>

</html>