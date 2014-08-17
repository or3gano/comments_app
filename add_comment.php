<?php

include 'db_config.php';
session_start();

// Get user and comment data
$user = "'" . trim($_SESSION['user']) . "'";
$userid = mysqli_fetch_array(mysqli_query($con,"SELECT userid FROM users WHERE username=" . $user));
$comment = "'" . trim($_POST['comment_input']) . "'";

//  Insert new comment and refresh comments.php
mysqli_query($con,"INSERT INTO comments (userid, comment) VALUES (" . $userid['userid'] . "," . $comment . ")");
header('location: comments.php?alert=success');

?>