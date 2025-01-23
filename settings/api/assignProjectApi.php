<?php

include __DIR__ . '/../database/conn.php';
header("Access-Control-Allow-Origin: *");
session_start();
$user_id = $_SESSION['userId'];



if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'assignProjectManager')) {
    if ($_POST['project_manager'] != '') {
        $sql = $conn->prepare('SELECT * FROM `project_assign` WHERE `project_id` = ?');
        $sql->execute([$_POST['project_id']]);
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            $sql = $conn->prepare('INSERT INTO `project_assign`(`project_id`, `user_id`, `assign_by`) VALUES ( ? , ? , ? )');
            $result = $sql->execute([$_POST['project_id'], $_POST['project_manager'], $user_id]);
            if ($result) {
                http_response_code(200);
                echo json_encode(array("message" => 'Successful Manager Assigned', "status" => 200));
            } else {
                http_response_code(500);
                echo json_encode(array("message" => 'Something went wrong', "status" => 500));
            }
        } else {
            $sql = $conn->prepare('UPDATE `project_assign` SET `user_id` = ? WHERE `project_id` = ?');
            $result = $sql->execute([$_POST['project_manager'], $_POST['project_id']]);
            if ($result) {
                http_response_code(200);
                echo json_encode(array("message" => 'Project Manager Assigned', "status" => 200));
            } else {
                http_response_code(500);
                echo json_encode(array("message" => 'Something went wrong', "status" => 500));
            }
        }
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Fill All Required Fields', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'assignTeamLeader')) {
    if ($_POST['team_leader'] != '' && $_POST['project_id'] != '') {

        $team_leader = $_POST['team_leader'];
        foreach ($team_leader as $value) {
            $employee = $conn->prepare("SELECT `users`.`name` FROM `team_leader_assign` JOIN `users` ON `team_leader_assign`.`user_id` = `users`.`id` WHERE `team_leader_assign`.`user_id` = ? AND `team_leader_assign`.`project_id` != ?");
            $employee->execute([$value,$_POST['project_id']]);
            $employee = $employee->fetch(PDO::FETCH_ASSOC);
            if($employee){
                http_response_code(400);
                echo json_encode(array("message" => $employee['name'].' already assign another project', "status" => 200));
                exit;
            }
        }
        $delete = $conn->prepare('DELETE FROM `team_leader_assign` WHERE `project_id` = ?');
        $delete->execute([$_POST['project_id']]);

        foreach ($team_leader as $value) {
            $sql = $conn->prepare('INSERT INTO `team_leader_assign`(`project_id`, `user_id`, `assign_by`) VALUES ( ? , ? , ? )');
            $result = $sql->execute([$_POST['project_id'], $value, $user_id]);
        }
        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'Successful Team Leader Assigned', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Fill All Required Fields', "status" => 500));
    }
}

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'assignEmployee')) {
    if ($_POST['employee'] != '' && $_POST['project_id'] != '') {

        $employees = $_POST['employee'];

        foreach ($employees as $value) {
            $employee = $conn->prepare("SELECT `users`.`name` FROM `employee_assign` JOIN `users` ON `employee_assign`.`user_id` = `users`.`id` WHERE `employee_assign`.`user_id` = ? AND `employee_assign`.`project_id` != ?");
            $employee->execute([$value,$_POST['project_id']]);
            $employee = $employee->fetch(PDO::FETCH_ASSOC);
            if($employee){
                http_response_code(400);
                echo json_encode(array("message" => $employee['name'].' already assign another project', "status" => 200));
                exit;
            }
        }

        $delete = $conn->prepare('DELETE FROM `employee_assign` WHERE `project_id` = ?');
        $delete->execute([$_POST['project_id']]);

        foreach ($employees as $value) {
            $sql = $conn->prepare('INSERT INTO `employee_assign`(`project_id`, `user_id`, `assign_by`) VALUES ( ? , ? , ? )');
            $result = $sql->execute([$_POST['project_id'], $value, $user_id]);
        }

        if ($result) {
            http_response_code(200);
            echo json_encode(array("message" => 'Successful Employee Assigned', "status" => 200));
        } else {
            http_response_code(500);
            echo json_encode(array("message" => 'Something went wrong', "status" => 500));
        }

    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Fill All Required Fields', "status" => 500));
    }
}
