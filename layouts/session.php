<?php
// Initialize the session
session_start();
include(__DIR__ . '/../settings/database/conn.php');

// // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: auth-signin-basic.php");
//     exit;
// }
?>