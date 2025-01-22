<?php
include __DIR__ . '/../database/conn.php';
session_start();
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'FilterProduct') {
    // Get filter values from POST request
    $dateRange = $_POST['dateRange'] ?? '';
    $status = $_POST['status'] ?? '';

    // Start building the SQL query
    $sql = "SELECT * FROM `projects` WHERE 1 = 1";
    $params = [];

    // Filter by date range if provided
    if (!empty($dateRange)) {
        // Split date range into start and end date
        [$startDate, $endDate] = explode(' - ', $dateRange);
        $sql .= ' AND `projects`.`end_date` BETWEEN ? AND ?';
        // Format dates to 'Y-m-d' format
        $params[] = date('Y-m-d', strtotime($startDate));
        $params[] = date('Y-m-d', strtotime($endDate));
    }

    // Filter by status if provided
    if (!empty($status)) {
        $sql .= ' AND `projects`.`is_complete` = ?';
        $params[] = $status; // Assuming 0 for Active and 1 for Completed
    }

    // Add ordering by project ID
    $sql .= ' ORDER BY `projects`.`id` DESC';

    // Prepare and execute the SQL query
    try {
        $query = $conn->prepare($sql);
        $query->execute($params);

        // Fetch all the results
        $product = $query->fetchAll(PDO::FETCH_ASSOC);

        // Loop through the results and display the project details
        http_response_code(200);
        foreach ($product as $value) {
            echo '
            <tr>
                <td>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox">
                    </div>
                </td>
                <td><a href="project-details.php">PRO-' . $value['id'] . '</a></td>
                <td><a href="project-details.php?id=' . $value['id'] . '">' . $value['client_id'] . '</a></td>
                <td>
                    <h6 class="fw-medium"><a href="project-details.php?id=' . $value['id'] . '">' . $value['project_name'] . '</a></h6>
                </td>
                <td>' . strtoupper($value['area']) . '.</td>
                <td>
                    <div class="d-flex align-items-center file-name-icon">
                        <a href="javascript:void(0);" class="avatar avatar-sm border avatar-rounded">
                            <img src="assets/img/users/user-39.jpg" class="img-fluid" alt="img">
                        </a>
                        <div class="ms-2">
                            <h6 class="fw-normal"><a href="javascript:void(0);">Michael Walker</a></h6>
                        </div>
                    </div>
                </td>
                <td>
                    ' . $value['estimated_hour'] . 'Hr.
                </td>
                <td>' . date('d M, Y', strtotime($value['start_date'])) . '</td>
                <td>' . date('d M, Y', strtotime($value['end_date'])) . '</td>
                <td>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            <span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2">
                                <i class="ti ti-point-filled text-danger"></i>
                            </span> ' . ucfirst($value['complexity']) . '
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" onclick="deleteProject(' . $value['id'] . ')"><i class="ti ti-trash"></i></a>
                    </div>
                </td>
            </tr>';
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'addProject')) {

    if (($_POST['project_name'] != '') && ($_POST['client_id'] != '') && ($_POST['description'] != '') && ($_POST['complexity'] != '')  && ($_POST['area'] != '')  &&  ($_POST['start_date'] != '') && ($_POST['end_date'] != '')) {

        $startDate = $_POST['start_date'];
        $endDate = $_POST['end_date'];
        $startDate = date('Y-m-d', strtotime($startDate));
        $endDate = date('Y-m-d', strtotime($endDate));

        if ($_POST['estimated_hour']) {
            $estimated_hour = $_POST['estimated_hour'];
        } else {
            $date1 = new DateTime($startDate);
            $date2 = new DateTime($endDate);
            $interval = $date1->diff($date2);
            $daysDifference = $interval->days;
            $estimated_hour = $daysDifference * 8;
        }

        $project = array($_POST['project_name'], $_POST['client_id'], $_POST['description'], $_POST['area'], $_POST['complexity'], $startDate, $endDate, $estimated_hour);

        $check = $conn->prepare('INSERT INTO `projects`(`project_name`, `client_id`, `description`,`area` , `complexity`, `start_date`, `end_date` , `estimated_hour` ) VALUES (? , ? , ? , ? , ? , ? , ?,? )');
        $result = $check->execute($project);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Project Added.', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Fill all required fields", "status" => 400));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['type'] == 'getAllProduct')) {
    $sql = $conn->prepare('SELECT * FROM `projects`');
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
        http_response_code(200);
        echo json_encode($result);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => 'No project found', "status" => 404));
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['type'] === 'getProduct') {
    $sql = $conn->prepare("SELECT * FROM `projects` WHERE `id` = ?");
    $sql->execute([$_GET['id']]);
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        http_response_code(200);
        echo json_encode($result);
    } else {
        http_response_code(404);
        echo json_encode(array("message" => 'No project found', "status" => 404));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'deleteProject')) {

    if ($_POST['project_id'] != '') {


        // $deleteTask = $conn->prepare("DELETE FROM `tasks` WHERE `project_id` = ?");
        // $result = $deleteTask->execute([$_POST['project_id']]);

        $deletePro = $conn->prepare("DELETE FROM `projects` WHERE `id` = ?");
        $result = $deletePro->execute([$_POST['project_id']]);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Project Delete.', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Fill all required fields", "status" => 400));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'updateProject')) {

    if (($_POST['project_name'] != '') && ($_POST['client_id'] != '') && ($_POST['description'] != '')  && ($_POST['area'] != '') && ($_POST['complexity'] != '') && ($_POST['start_date'] != '') && ($_POST['end_date'] != '') && ($_POST['project_id'] != '')) {

        $startDate = $_POST['start_date'];
        $endDate = $_POST['end_date'];
        $startDate = date('Y-m-d', strtotime($startDate));
        $endDate = date('Y-m-d', strtotime($endDate));

        if ($_POST['estimated_hour']) {
            $estimated_hour = $_POST['estimated_hour'];
        } else {
            $date1 = new DateTime($startDate);
            $date2 = new DateTime($endDate);
            $interval = $date1->diff($date2);
            $daysDifference = $interval->days;
            $estimated_hour = $daysDifference * 8;
        }

        $project = array($_POST['project_name'], $_POST['client_id'], $_POST['description'], $_POST['area'], $_POST['complexity'],  $startDate, $endDate, $estimated_hour, $_POST['project_id']);

        $sql = $conn->prepare("UPDATE `projects` SET `project_name` = ?, `client_id` = ?, `description`= ?, `area` = ? , `complexity`= ?, `start_date`= ?, `end_date` = ? , `estimated_hour` = ? WHERE `id` = ?");
        $result = $sql->execute($project);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Project Update.', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Fill all required fields", "status" => 400));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'completeProject')) {

    if ($_POST['id'] != '') {

        $deletePro = $conn->prepare("UPDATE `projects` SET `is_complete` = 1 WHERE `id` = ?");
        $result = $deletePro->execute([$_POST['id']]);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Project Complete.', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Fill all required fields", "status" => 400));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'inCompleteProject')) {

    if ($_POST['id'] != '') {

        $deletePro = $conn->prepare("UPDATE `projects` SET `is_complete` = 0 WHERE `id` = ?");
        $result = $deletePro->execute([$_POST['id']]);
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'successfull Project inComplete.', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Fill all required fields", "status" => 400));
    }
}
