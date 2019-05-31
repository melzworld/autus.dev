<?php
require('../includes/autus.dev.loginfo.php');

function dbConnect($loginfo){
    $link = mysqli_connect($loginfo['dbhost'], $loginfo['username'], $loginfo['password'], $loginfo['dbname']);

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    return $link;
}

function viewBlog($link){
    $sql = "SELECT blog_date, title, content, id FROM news ORDER BY create_date DESC ";
    $result = $link->query($sql);
    return $result;
}

function viewPost($link, $id){
    $sql = "SELECT blog_date, title, content, id FROM news where id='$id'";
    $result = $link->query($sql);
    return $result;
}

function postBlog($link, $createDate, $message, $title){
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

function deleteBlog($link, $newsID){
    // Attempt delete query execution
    $sql = "DELETE FROM news where id = '$newsID'";
    if(mysqli_query($link, $sql)){
        echo "Record deleted successfully.";
        header("Location: /blog_admin.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
};

function updateBlog($link, $currentDate, $message, $title, $newsID){
    // Attempt update query execution
    $sql = "UPDATE news 
            SET title = '$title',
            content = '$message',
            blog_date = '$currentDate'
            WHERE id = '$newsID'";

    if(mysqli_query($link, $sql)){
        echo "Record updated successfully.";
        header("Location: /blog_admin.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
};
?>