<?php

include __DIR__ . '/../database/conn.php';
header("Access-Control-Allow-Origin: *");
session_start();
$user_id = $_SESSION['userId'];

if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['type'] == 'assignTask')) {
    if ($_POST['project_id'] != '' && $_POST['user_id'] != '') {
        print_r($_POST);
        exit;
    } else {
        http_response_code(500);
        echo json_encode(array("message" => 'Fill All Required Fields', "status" => 500));
    }
}
