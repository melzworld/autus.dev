<?php
$link = mysqli_connect('localhost', 'rautus', 'h0lycrapKill_Me', 'autusdb');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// Escape user inputs for security
$createDate = mysqli_real_escape_string($link, $_REQUEST['currentDate']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);

// Attempt insert query execution
$sql = "INSERT INTO news (title, content, blog_date) VALUES ('$title', '$message', '$createDate')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
    header("Location: /news.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>