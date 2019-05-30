<?php

require_once('/loginfo.php');

function dbConnect(){
    $link = mysqli_connect('localhost', 'rautus', 'h0lycrapKill_Me', 'autusdb');

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
}
function postBlog($currentdate, $message, $title){
    // Escape user inputs for security
    $createDate = mysqli_real_escape_string($link, $_REQUEST['currentDate']);
    $message = mysqli_real_escape_string($link, $_REQUEST['message']);
    $title = mysqli_real_escape_string($link, $_REQUEST['title']);

    // Attempt insert query execution
    $sql = "INSERT INTO news (title, content, blog_date) VALUES ('$title', '$message', '$createDate')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
        header("Location: /blog_admin.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
};

function deleteBlog($newsID){
    // Escape user inputs for security
    $id = mysqli_real_escape_string($link, $_REQUEST['newsID']);

    // Attempt delete query execution
    $sql = "DELETE FROM news where id = '$id'";
    if(mysqli_query($link, $sql)){
        echo "Record deleted successfully.";
        header("Location: /blog_admin.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
};

function updateBlog(currentDate, message, title, newsID){
    // Escape user inputs for security
    $createDate = mysqli_real_escape_string($link, $_REQUEST['currentDate']);
    $message = mysqli_real_escape_string($link, htmlspecialchars_decode($_REQUEST['message']));
    $title = mysqli_real_escape_string($link, $_REQUEST['title']);
    $id = mysqli_real_escape_string($link, $_REQUEST['newsID']);

    // Attempt update query execution
    // $sql = "INSERT INTO news (title, content, blog_date) VALUES ('$title', '$message', '$createDate')";
    $sql = "UPDATE news 
            SET title = '$title',
            content = '$message',
            blog_date = '$createDate'
            WHERE id = '$id'";

    if(mysqli_query($link, $sql)){
        echo "Record updated successfully.";
        header("Location: /blog_admin.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
};
?>