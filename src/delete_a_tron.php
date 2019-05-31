<?php
require_once('../includes/autus.dev.loginfo.php');
require_once('admin.php');

$connect = dbConnect($loginfo);

// Escape user inputs for security
$id = mysqli_real_escape_string($connect, $_REQUEST['newsID']);
$delete = deleteBlog($connect, $id);
?>