<?php
// Initialize the session
session_start();
include(__DIR__ . '/../settings/database/conn.php');
// // Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$userId = $_SESSION['userId'];
$roleId = $_SESSION['roleId'];

$role = $conn->prepare("SELECT `access_page` FROM `access` WHERE role_id = ?");
$role->execute([$roleId]);
$role = $role->fetch(PDO::FETCH_ASSOC);
$pageAccessList = json_decode($role['access_page'],true);
if (!is_array($pageAccessList)) {
    $pageAccessList = [];
}

function calculateLeaveDays( $formDate, $endDate , $conn) {
    $holidaysQuery = $conn->prepare("SELECT `date` FROM `holiday`");
    $holidaysQuery->execute();
    $holidays = $holidaysQuery->fetchAll(PDO::FETCH_COLUMN);

    $start = new DateTime($formDate);
    $end = new DateTime($endDate);
    $end->modify('+1 day'); 
    $validDays = 0;
    for ($date = $start; $date < $end; $date->modify('+1 day')) {
        if ($date->format('N') == 7 || in_array($date->format('Y-m-d'), $holidays)) {
            continue;
        }
        $validDays++;
    }

    return $validDays;
}

?>