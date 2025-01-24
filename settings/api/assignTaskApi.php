<?php

include __DIR__ . '/../database/conn.php';
header("Access-Control-Allow-Origin: *");
session_start();
$user_id = $_SESSION['userId'];

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'assignTask')) {
    if (!empty($_POST['project_id']) && !empty($_POST['user_id']) && !empty($_POST['tasks'])) {
        try {
            
            $conn->beginTransaction();

            $tasks = $_POST['tasks'];
            foreach ($tasks as $task) {
                $sql = $conn->prepare("SELECT `status` FROM tasks WHERE `id` = ? AND (`status` = 'pending' OR `status` = 'ready_for_qc' OR `status` = 'ready_for_qa')");
                $sql->execute([$task]);
                $sql = $sql->fetch(PDO::FETCH_ASSOC);

                if (!$sql) {
                    $conn->rollBack();
                    http_response_code(500);
                    echo json_encode(array("message" => 'Some tasks are already assigned, please check.', "status" => 500));
                    exit;
                }

                switch ($sql['status']) {
                    case 'pending':
                        $role = 'pro';
                        $next_status = 'assign_pro';
                        break;
                    case 'ready_for_qc':
                        $role = 'qc';
                        $next_status = 'assign_qc';
                        break;
                    case 'ready_for_qa':
                        $role = 'qa';
                        $next_status = 'assign_qa';
                        break;
                }

                $assign = $conn->prepare("INSERT INTO `assign`(`user_id`, `project_id`, `task_id`, `role`, `assigned_by`) VALUES (?, ?, ?, ?, ?)");
                $assign->execute([$_POST['user_id'], $_POST['project_id'], $task, $role, $user_id]);

                $update = $conn->prepare("UPDATE `tasks` SET `status` = ? WHERE `id` = ?");
                $update->execute([$next_status, $task]);
            }

            $conn->commit();

            http_response_code(200);
            echo json_encode(array("message" => 'Tasks assigned successfully.', "status" => 200));
        } catch (Exception $e) {

            $conn->rollBack();
            http_response_code(500);
            echo json_encode(array("message" => 'An error occurred: ' . $e->getMessage(), "status" => 500));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => 'Fill All Required Fields', "status" => 400));
    }
}