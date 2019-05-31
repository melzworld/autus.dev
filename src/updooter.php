<?php
require_once('../includes/autus.dev.loginfo.php');
require_once('admin.php');
$connect = dbConnect($loginfo);

// Escape user inputs for security
$createDate = mysqli_real_escape_string($connect, $_REQUEST['currentDate']);
$message = mysqli_real_escape_string($connect, htmlspecialchars_decode($_REQUEST['message']));
$title = mysqli_real_escape_string($connect, $_REQUEST['title']);
$id = mysqli_real_escape_string($connect, $_REQUEST['newsID']);

$update = updateBlog($connect, $createDate, $message, $title, $id);
?>