<?php include 'layouts/session.php';
$assign_id = $_GET['id'];

$assign = $conn->prepare("SELECT `assign`.* , `users`.`name` , `users`.`profile` FROM `assign` JOIN `users` ON `assign`.`assigned_by` = `users`.`id` WHERE `assign`.`id` = ?");
$assign->execute(params: [$assign_id]);
$assign = $assign->fetch(PDO::FETCH_ASSOC);
if (!$assign) {
    http_response_code(500);
    echo json_encode(array("message" => 'Project Time is not uploaded.', "status" => 500));
    exit;
}

if ($assign['status'] == 'complete') {
    header('location : task-board.php');
}

$project = $conn->prepare("SELECT * FROM `projects` WHERE `id` = ?");
$project->execute(params: [$assign['project_id']]);
$project = $project->fetch(PDO::FETCH_ASSOC);

$task = $conn->prepare("SELECT * FROM `tasks` WHERE `id` = ? AND project_id = ?");
$task->execute(params: [$assign['task_id'], $assign['project_id']]);
$task = $task->fetch(PDO::FETCH_ASSOC);

$check = $conn->prepare("SELECT * FROM `project_time` WHERE `project_id` = ?");
$check->execute(params: [$assign['project_id']]);
$check = $check->fetch(PDO::FETCH_ASSOC);

$totalPercentage = $conn->prepare("SELECT SUM(`remarks`) as `percentage` FROM `efficiency` WHERE `task_id` = ? AND `user_id` = ? AND `project_id` = ? AND `profile` = ? ORDER BY `id` DESC");
$totalPercentage->execute(params: [$assign['task_id'], $userId, $assign['project_id'], $assign['role']]);
$totalPercentage = $totalPercentage->fetch(PDO::FETCH_ASSOC);
$totalPercentage = $totalPercentage['percentage'] ?? 0;

?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Smarthr Admin Template</title>
    <?php include 'layouts/title-meta.php'; ?>
    <?php include 'layouts/head-css.php'; ?>
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
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
                <div class="row align-items-center mb-4">
                    <div class="d-md-flex d-sm-block justify-content-between align-items-center flex-wrap">
                        <h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="tasks.php">
                                <i class="ti ti-arrow-left me-2"></i>Back to List</a>
                        </h6>
                        <div class="d-flex">
                            <?php if ($assign['status'] == 'pending') { ?>
                                <div class="text-end ms-2">
                                    <a href="#" class="btn btn-warning" onclick="startTask()"><i class="ti ti-clock me-1"></i>Start Task</a>
                                </div>
                            <?php } else  if ($assign['status'] == 'pause') {
                            ?>
                                <div class="text-end ms-2">
                                    <a href="#" class="btn btn-success" onclick="continueTask()"><i class="ti ti-check me-1"></i>Continue Task</a>
                                </div>
                            <?php
                            } else { ?>
                                <div class="text-end ms-2">
                                    <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#complete_task"><i class="ti ti-check me-1"></i>Complete Task</a>
                                </div>
                                <div class="text-end ms-2">
                                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#break_task"><i class="ti ti-right me-1"></i>Break</a>
                                </div>
                            <?php } ?>
                            <div class="head-icons ms-2 text-end">
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                    <i class="ti ti-chevrons-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1"><?php echo $task['task_id'] ?> ( <?php echo ucfirst(str_replace('_', ' ', $task['status'])) ?>)</h4>
                                        <p>Priority : <span class="badge badge-danger"><i class="ti ti-point-filled me-1"></i><?php echo $task['complexity'] ?></span></p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                            <i class="ti ti-file-export me-1"></i> Mark All as Completed
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">All Tags</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Internal</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Meetings</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Reminder</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Research</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <h6 class="mb-1">Description</h6>
                                            <p><?php echo $project['description'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i class="ti ti-users-group me-2"></i>Task Time</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#" class="badge task-tag bg-pink rounded-pill me-2"><?php echo round(($task['estimated_hour'] * 60) * ($check[$assign['role']] / 100), 2) ?>min.</a>
                                            <a href="#" class="badge task-tag badge-info rounded-pill"><?php echo ucfirst($assign['role']) ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i class="ti ti-user-shield me-2"></i>Assignee</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <a href="#" class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
                                                    <img src=" <?php echo $assign['profile'] == '' ? 'assets/img/users/user-42.jpg' :  $assign['profile'] ?> " alt="Img">
                                                </a>
                                                <h6 class="fs-12"><a href="#"><?php echo $assign['name'] ?></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i class="ti ti-bookmark me-2"></i>Tags</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#" class="badge task-tag bg-pink rounded-pill me-2">Assign us</a>
                                            <a href="#" class="badge task-tag badge-info rounded-pill"><?php echo ucfirst($assign['role']) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-accordion-items">
                            <div class="accordion accordions-items-seperate">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingFour">
                                        <div class="accordion-button">
                                            <div class="d-flex align-items-center flex-fill">
                                                <h5>Files</h5>
                                                <div class=" ms-auto d-flex align-items-center">
                                                    <a href="#" class="btn btn-primary btn-xs d-inline-flex align-items-center me-3"><i class="ti ti-square-rounded-plus-filled me-1"></i>Add New</a>
                                                    <a href="#" class="d-flex align-items-center collapse-arrow" data-bs-toggle="collapse" data-bs-target="#primaryBorderFour" aria-expanded="true" aria-controls="primaryBorderFour">
                                                        <i class="ti ti-chevron-down fs-18"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="primaryBorderFour" class="accordion-collapse collapse show border-top" aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            <div class="files-carousel owl-carousel">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                                                            <div class="d-flex align-items-center overflow-hidden">
                                                                <a href="#" class="avatar avatar-md bg-light me-2">
                                                                    <img src="assets/img/icons/file-02.svg" class="w-auto h-auto" alt="img">
                                                                </a>
                                                                <div class="overflow-hidden">
                                                                    <h6 class="mb-1 text-truncate">Project_1.docx</h6>
                                                                    <span>7.6 MB</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="fw-medium mb-0">15 May 2024, 6:53 PM</p>
                                                            <span class="avatar avatar-sm avatar-rounded"><img src="assets/img/profiles/avatar-02.jpg" alt="Img"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                                                            <div class="d-flex align-items-center overflow-hidden">
                                                                <a href="#" class="avatar avatar-md bg-light me-2">
                                                                    <img src="assets/img/icons/file-01.svg" class="w-auto h-auto" alt="img">
                                                                </a>
                                                                <div class="overflow-hidden">
                                                                    <h6 class="mb-1 text-truncate">Proposal.pdf</h6>
                                                                    <span>12.6 MB</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="fw-medium mb-0">16 Jan 2025, 7:25 PM</p>
                                                            <span class="avatar avatar-sm avatar-rounded"><img src="assets/img/users/user-19.jpg" alt="Img"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                                                            <div class="d-flex align-items-center overflow-hidden">
                                                                <a href="#" class="avatar avatar-md bg-light me-2">
                                                                    <img src="assets/img/icons/file-04.svg" class="w-auto h-auto" alt="img">
                                                                </a>
                                                                <div class="overflow-hidden">
                                                                    <h6 class="mb-1 text-truncate">Logo-Img.zip</h6>
                                                                    <span>6.2 MB</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-download"></i></a>
                                                                <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <p class="fw-medium mb-0">31 July 2025, 8:40 AM</p>
                                                            <span class="avatar avatar-sm avatar-rounded"><img src="assets/img/users/user-20.jpg" alt="Img"></span>
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
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between border-bottom p-3">
                                        <p class="mb-0">Project</p>
                                        <h6 class="fw-normal"><?php echo $project['project_name'] ?></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom p-3">
                                        <p class="mb-0">Created on</p>
                                        <h6 class="fw-normal"><?php echo date('d M, Y', strtotime($project['created_at'])) ?></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom p-3">
                                        <p class="mb-0">Assigned on</p>
                                        <h6 class="fw-normal"><?php echo date('d M, Y', strtotime($assign['created_at'])) ?></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between p-3">
                                        <p class="mb-0">Due Date</p>
                                        <h6 class="fw-normal"><?php echo date('d M, Y', strtotime($project['end_date'])) ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-accordion-items">
                            <div class="accordion accordions-items-seperate">
                                <div class="accordion-item flex-fill">
                                    <div class="accordion-header" id="headingSix">
                                        <div class="accordion-button">
                                            <div class="d-flex align-items-center flex-fill">
                                                <h5>Activity</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $worklog = $conn->prepare('SELECT `work_log`.* , `users`.`name` as `user_name`  FROM `work_log` JOIN `users` ON `users`.`id` = `work_log`.`user_id` WHERE `work_log`.`task_id` = ? AND `work_log`.`project_id` = ? ORDER BY `work_log`.`id` DESC');
                                        $worklog->execute([$assign['task_id'] , $assign['project_id']]);
                                        $worklog = $worklog->fetchAll(PDO::FETCH_ASSOC);
                                    ?>
                                    <div id="primaryBorderSix" class="accordion-collapse collapse show border-top" aria-labelledby="headingSix">
                                        <div class="accordion-body">
                                            <div class="notice-widget">
                                                <?php foreach ($worklog as $value) {
                                                    echo ' <div class="d-flex align-items-center justify-content-between mb-4">
                                                    <div class="d-flex overflow-hidden">
                                                        <span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
                                                            <i class="ti ti-checkup-list fs-16"></i>
                                                        </span>
                                                        <div class="overflow-hidden">
                                                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">'.$value['user_name'].' </span>added a New Task</p>
                                                            <p class="mb-1">'.date('d M, Y',strtotime($value['date'])).' '.date('h:i A',strtotime($value['time'])).'</p>
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge badge-success me-2"><i class="ti ti-point-filled me-1"></i>'.strtoupper($value['prev_status']).'</span>
                                                                <span><i class="ti ti-arrows-left-right me-2"></i></span>
                                                                <span class="badge badge-purple"><i class="ti ti-point-filled me-1"></i>'.strtoupper($value['next_status']).'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                } ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
                <p class="mb-0">2014 - 2025 &copy; UniqueMaps</p>
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <div class="modal fade" id="break_task" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Add Break </h5>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
                                <form id="breakForm">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Break</label>
                                                    <input type="number" class="form-control" name="time" value="addBreak" required>
                                                    <input type="hidden" value="addBreak" name="type">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Remarks</label>
                                                    <input type="text" class="form-control" name="remarks" value="">
                                                    <input type="hidden" value="<?php echo $project['id'] ?>" name="project_id">
                                                    <input type="hidden" value="lunch" name="break_type">
                                                    <input type="hidden" value="<?php echo $task['id'] ?>" name="task_id">
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


        <div class="modal fade" id="complete_task" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header header-border align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="modal-title me-2">Complete Task </h5>
                        </div>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <div class="add-info-fieldset ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="basic-tab" tabindex="0">
                                <form id="completeForm">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Work Percentage ( <span id="per_val" style="color:green">
                                                            <?php echo $totalPercentage; ?>%
                                                        </span> )</label>
                                                    <input type="range" id="work_percentage"
                                                        min="<?php echo $totalPercentage; ?>" max="100" step="10"
                                                        class="form-range" name="work_percentage" value="0" style="height: 40px;" required>
                                                    <input type="hidden" value="completeTask" name="type">
                                                    <input type="hidden" value="<?php echo $assign_id ?>" name="assign_id">
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

    </div>
    <!-- end main wrapper-->
    <!-- JAVASCRIPT -->
    <?php include 'layouts/vendor-scripts.php'; ?>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Bootstrap Tagsinput JS -->
    <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="assets/js/file-manager.js"></script>
    <script src="assets/js/todo.js"></script>
    <script>
        function startTask() {
            $.ajax({
                url: 'settings/api/workingApi.php',
                type: 'POST',
                data: {
                    type: 'startTask',
                    assign_id: <?php echo $assign_id ?>
                },
                dataType: 'json',
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                    notyf.error(errorMessage);
                }
            });
        }
        
        function continueTask(){
            $.ajax({
                url: 'settings/api/workingApi.php',
                type: 'POST',
                data: {
                    type: 'continueTask',
                    assign_id: <?php echo $assign_id ?>
                },
                dataType: 'json',
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                    notyf.error(errorMessage);
                }
            });
        }

        $('#completeForm').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/workingApi.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    var percentage = $('#work_percentage').val();
                    if (percentage == 100) {
                        window.location.href = 'task-board.php';
                    }
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : "Something went wrong.";
                    notyf.error(errorMessage);
                }
            });
        });

        $('#breakForm').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'settings/api/breakApi.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    notyf.success(response.message);
                    const currentTime = new Date();
                    const currentTimeString = currentTime.toISOString();
                    localStorage.setItem('breakTime', currentTimeString);
                    localStorage.setItem('breakDuration', response.time);
                    $('#addBreak').modal('hide');
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


        $('#work_percentage').on('input', function() {
            var percentage = $(this).val();
            $("#per_val").text(percentage + '%');
        });
    </script>



    <script>
        const storedBreakTime = new Date(localStorage.getItem('breakTime'));
        const storedBreakDuration = parseInt(localStorage.getItem('breakDuration'));
        const currentTime = new Date();

        const differenceInMilliseconds = storedBreakTime.getTime() + storedBreakDuration * 60000 - currentTime.getTime();
        const durationInMinutes = Math.floor(differenceInMilliseconds / (1000 * 60));

        function setTimeAndRemoveLoader() {
            Notiflix.Loading.remove();
        }

        var countDownDate = storedBreakTime.setMinutes(storedBreakTime.getMinutes() + storedBreakDuration);

        if (durationInMinutes > 0) {
            setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                const minutes = Math.floor(distance / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("timebreaktext").innerHTML = minutes + " min " + seconds + " sec";
            }, 1000);
        }


        Notiflix.Loading.custom({
            customSvgCode: `<svg xmlns="http://www.w3.org/2000/svg" id="NXLoadingHourglass" fill="#32c682" width="500px" height="500px" viewBox="0 0 200 200"><style>@-webkit-keyframes NXhourglass5-animation{0%{-webkit-transform:scale(1,1);transform:scale(1,1)}16.67%{-webkit-transform:scale(1,.8);transform:scale(1,.8)}33.33%{-webkit-transform:scale(.88,.6);transform:scale(.88,.6)}37.5%{-webkit-transform:scale(.85,.55);transform:scale(.85,.55)}41.67%{-webkit-transform:scale(.8,.5);transform:scale(.8,.5)}45.83%{-webkit-transform:scale(.75,.45);transform:scale(.75,.45)}50%{-webkit-transform:scale(.7,.4);transform:scale(.7,.4)}54.17%{-webkit-transform:scale(.6,.35);transform:scale(.6,.35)}58.33%{-webkit-transform:scale(.5,.3);transform:scale(.5,.3)}83.33%,to{-webkit-transform:scale(.2,0);transform:scale(.2,0)}}@keyframes NXhourglass5-animation{0%{-webkit-transform:scale(1,1);transform:scale(1,1)}16.67%{-webkit-transform:scale(1,.8);transform:scale(1,.8)}33.33%{-webkit-transform:scale(.88,.6);transform:scale(.88,.6)}37.5%{-webkit-transform:scale(.85,.55);transform:scale(.85,.55)}41.67%{-webkit-transform:scale(.8,.5);transform:scale(.8,.5)}45.83%{-webkit-transform:scale(.75,.45);transform:scale(.75,.45)}50%{-webkit-transform:scale(.7,.4);transform:scale(.7,.4)}54.17%{-webkit-transform:scale(.6,.35);transform:scale(.6,.35)}58.33%{-webkit-transform:scale(.5,.3);transform:scale(.5,.3)}83.33%,to{-webkit-transform:scale(.2,0);transform:scale(.2,0)}}@-webkit-keyframes NXhourglass3-animation{0%{-webkit-transform:scale(1,.02);transform:scale(1,.02)}79.17%,to{-webkit-transform:scale(1,1);transform:scale(1,1)}}@keyframes NXhourglass3-animation{0%{-webkit-transform:scale(1,.02);transform:scale(1,.02)}79.17%,to{-webkit-transform:scale(1,1);transform:scale(1,1)}}@-webkit-keyframes NXhourglass1-animation{0%,83.33%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(180deg);transform:rotate(180deg)}}@keyframes NXhourglass1-animation{0%,83.33%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(180deg);transform:rotate(180deg)}}#NXLoadingHourglass *{-webkit-animation-duration:1.2s;animation-duration:1.2s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:cubic-bezier(0,0,1,1);animation-timing-function:cubic-bezier(0,0,1,1)}</style><g data-animator-group="true" data-animator-type="1" style="-webkit-animation-name:NXhourglass1-animation;animation-name:NXhourglass1-animation;-webkit-transform-origin:50% 50%;transform-origin:50% 50%; scale: 0.5;transform-box:fill-box"><g id="NXhourglass2" fill="inherit"><g data-animator-group="true" data-animator-type="2" style="-webkit-animation-name:NXhourglass3-animation;animation-name:NXhourglass3-animation;-webkit-animation-timing-function:cubic-bezier(.42,0,.58,1);animation-timing-function:cubic-bezier(.42,0,.58,1);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;transform-box:fill-box" opacity=".4"><path id="NXhourglass4" d="M100 100l-34.38 32.08v31.14h68.76v-31.14z"></path></g><g data-animator-group="true" data-animator-type="2" style="-webkit-animation-name:NXhourglass5-animation;animation-name:NXhourglass5-animation;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;transform-box:fill-box" opacity=".4"><path id="NXhourglass6" d="M100 100L65.62 67.92V36.78h68.76v31.14z"></path></g><path d="M51.14 38.89h8.33v14.93c0 15.1 8.29 28.99 23.34 39.1 1.88 1.25 3.04 3.97 3.04 7.08s-1.16 5.83-3.04 7.09c-15.05 10.1-23.34 23.99-23.34 39.09v14.93h-8.33a4.859 4.859 0 1 0 0 9.72h97.72a4.859 4.859 0 1 0 0-9.72h-8.33v-14.93c0-15.1-8.29-28.99-23.34-39.09-1.88-1.26-3.04-3.98-3.04-7.09s1.16-5.83 3.04-7.08c15.05-10.11 23.34-24 23.34-39.1V38.89h8.33a4.859 4.859 0 1 0 0-9.72H51.14a4.859 4.859 0 1 0 0 9.72zm79.67 14.93c0 15.87-11.93 26.25-19.04 31.03-4.6 3.08-7.34 8.75-7.34 15.15 0 6.41 2.74 12.07 7.34 15.15 7.11 4.78 19.04 15.16 19.04 31.03v14.93H69.19v-14.93c0-15.87 11.93-26.25 19.04-31.02 4.6-3.09 7.34-8.75 7.34-15.16 0-6.4-2.74-12.07-7.34-15.15-7.11-4.78-19.04-15.16-19.04-31.03V38.89h61.62v14.93z"></path></g></g><text id="timebreaktext" transform="matrix(1 0 0 1 20 200)" fill="#49BA81" font-family="'MyriadPro-Regular'" font-size="30px"></text></svg>`,
        });

        setTimeout(setTimeAndRemoveLoader, differenceInMilliseconds);
    </script>
</body>

</html>