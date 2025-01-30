<?php
include 'layouts/session.php';

$assignPro = $conn->prepare("SELECT DISTINCT(project_id) FROM `assign` WHERE `user_id` = ?");
$assignPro->execute([$userId]);
$assignPro = $assignPro->fetchAll(PDO::FETCH_ASSOC);

$project = [];
foreach ($assignPro as $value) {
    $proj = $conn->prepare("SELECT * FROM `projects` WHERE `id` = ? ");
    $proj->execute([$value['project_id']]);
    $project[] = $proj->fetch(PDO::FETCH_ASSOC);
}


$tasks = $conn->prepare("SELECT `assign`.* , `users`.`name` , `tasks`.`status` , `tasks`.`task_id`, `tasks`.`estimated_hour` , `tasks`.`area_sqkm` ,`projects`.`area` , `projects`.`project_name`  FROM `assign` JOIN `tasks` ON `tasks`.`id` = `assign`.`task_id` JOIN `projects` ON `tasks`.`project_id` = `projects`.`id` JOIN `users` ON `users`.`id` = `assign`.`user_id` WHERE `assign`.`status` != 'complete' AND `assign`.`user_id` = ? AND `tasks`.`status` = ? AND `assign`.`project_id` = ?");
$tasks->execute([$userId, 'assign_pro', $project[0]['id']]);
$tasks = $tasks->fetchAll(PDO::FETCH_ASSOC);

//counting

$total_runing = $conn->prepare("SELECT COUNT(`id`) as `total_runing` FROM `assign` WHERE `status` = 'working' AND `user_id` = ?");
$total_runing->execute([$userId]);
$total_runing = $total_runing->fetch(PDO::FETCH_ASSOC);

$total_pro = $conn->prepare("SELECT COUNT(`id`) as `total_runing` FROM `assign` WHERE `status` = 'pending' AND `user_id` = ? AND `role` = 'pro'");
$total_pro->execute([$userId]);
$total_pro = $total_pro->fetch(PDO::FETCH_ASSOC);

$total_qc = $conn->prepare("SELECT COUNT(`id`) as `total_runing` FROM `assign` WHERE `status` = 'pending' AND `user_id` = ? AND `role` = 'qc'");
$total_qc->execute([$userId]);
$total_qc = $total_qc->fetch(PDO::FETCH_ASSOC);

$total_qa = $conn->prepare("SELECT COUNT(`id`) as `total_runing` FROM `assign` WHERE `status` = 'pending' AND `user_id` = ? AND `role` = 'qa'");
$total_qa->execute([$userId]);
$total_qa = $total_qa->fetch(PDO::FETCH_ASSOC);


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
                        <h2 class="mb-1">Assign Tasks</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Employee
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">My Tasks</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-2 ms-2">
                            <a href="#" class="btn btn-primary d-flex align-items-center" onclick="startTask()"><i class="ti ti-circle-plus me-2"></i>Start</a>
                        </div>
                        <div class="mb-2 ms-2">
                            <a href="#" class="btn btn-success d-flex align-items-center" onclick="completeTask()"><i class="ti ti-circle-plus me-2"></i>Complete</a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <div class="row">

                    <!-- Total Plans -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div>
                                        <span class="avatar avatar-lg bg-dark rounded-circle"><i
                                                class="ti ti-users"></i></span>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Total Runing Task</p>
                                        <h4><?php echo $total_runing['total_runing'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Plans -->

                    <!-- Total Plans -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div>
                                        <span class="avatar avatar-lg bg-success rounded-circle"><i
                                                class="ti ti-user-share"></i></span>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Assign Pro Task</p>
                                        <h4><?php echo $total_pro['total_runing'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Total Plans -->

                    <!-- Inactive Plans -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div>
                                        <span class="avatar avatar-lg bg-danger rounded-circle"><i
                                                class="ti ti-user-pause"></i></span>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Assign Qc Task</p>
                                        <h4><?php echo $total_qc['total_runing'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Inactive Companies -->

                    <!-- No of Plans  -->
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center overflow-hidden">
                                    <div>
                                        <span class="avatar avatar-lg bg-info rounded-circle"><i
                                                class="ti ti-user-plus"></i></span>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <p class="fs-12 fw-medium mb-1 text-truncate">Assign Qa Task</p>
                                        <h4><?php echo $total_qa['total_runing'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /No of Plans -->

                </div>

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
                                    <option value="assign_pro">Assign Pro</option>
                                    <option value="pro_in_progress">Pro In Progress</option>
                                    <option value="assign_qc">Assign QC</option>
                                    <option value="qc_in_progress">QC In Progress</option>
                                    <option value="assign_qa">Assign QA</option>
                                    <option value="qa_in_progress">QA In Progress</option>
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
                                        <th>Assign Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    foreach ($tasks  as $value) {

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
											<h6 class="fw-medium"><a href="task-details.php?id=' . $value['id'] . '">' . $value['task_id'] . '</a></h6>
										</td>
                                        <td>
											<h6 class="fw-medium"><a href="task-details.php?id=' . $value['id'] . '">' . $value['project_name'] . '</a></h6>
										</td>
										<td>
											' . $value['area_sqkm'] . '' . strtoupper($value['area']) . '.
										</td>
										<td>
                                        ' . $value['estimated_hour'] . 'Hr.
										</td>
										<td>
											<b>' . ucfirst(str_replace('_', ' ', $value['status'])) . '</b>
                                            <br> ' . $value['name'] . '
										</td>
										<td>
											<div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> ' . ucfirst($value['complexity'] ?? 'Lower') . '
												</a>
											</div>
										</td>
										 <td>
											' . date('d M, Y', strtotime($value['created_at'])) . '
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" ><i class="ti ti-home"></i></a>
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
                    url: 'settings/api/assignTaskApi.php',
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

        function selectedTask() {
            let array = [];
            $('.task-checkbox:checked').each(function() {
                array.push($(this).val());
            });
            return array;
        }

        function startTask() {
            $.ajax({
                url: 'settings/api/workLogApi.php',
                type: 'POST',
                data: {
                    type: 'startTask',
                    tasks: selectedTask()
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

        function completeTask() {
            $.ajax({
                url: 'settings/api/workLogApi.php',
                type: 'POST',
                data: {
                    type: 'completeTask',
                    tasks: selectedTask()
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
    </script>
    <script>
        const storedBreakTime = new Date(localStorage.getItem('breakTime'));
        const storedBreakDuration = parseInt(localStorage.getItem('breakDuration'));
        const currentTime = new Date();

        const differenceInMilliseconds = storedBreakTime.getTime() + storedBreakDuration * 60000 - currentTime.getTime();
        const durationInMinutes = Math.floor(differenceInMilliseconds / (1000 * 60));
        console.log(differenceInMilliseconds);

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