<?php
error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

require_once('dbconfig.php');

try {
  $conn = new PDO("$driver:host=$servername;dbname=" . $dbname, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);

} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die("connection failed");
}

if (substr($_SERVER['SERVER_NAME'], 0, 4) === 'www.') {
  header('Location: http://' . substr($_SERVER['SERVER_NAME'], 4));
  exit();
}

session_start();
$userId = $_SESSION['userId'];
$roleId = $_SESSION['roleId'];
$role = $conn->prepare("SELECT `access_page` FROM `access` WHERE role_id = ?");
$role->execute([$roleId]);
$role = $role->fetch(PDO::FETCH_ASSOC);
$pageAccessList = json_decode($role['access_page'],true);
if (!is_array($pageAccessList)) {
    $pageAccessList = [];
}

?>