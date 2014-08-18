<?php
session_start();

/// DATABASE INFORMATION ///
$hostname = 'localhost';
$db_user = 'yourmysqlusername';
$db_pass = 'yourmysqlpassword';

// You don't need to change the db_name if you run create_db.php
$db_name = 'comments_app';


/// CONNECT TO MYSQL ///
$con = mysqli_connect($hostname, $db_user, $db_pass);
if (!$con) {
  header('location: db_instruct.php');
}



/// CHECK TO SEE IF DATABASE EXISTS ///
$db_exists = mysqli_select_db($con,$db_name);

// Redirect to create_db.php if it doesn't exist
if (!$db_exists && $con) {
  $_SESSION['hostname']=$hostname;
  $_SESSION['db_user']=$db_user;
  $_SESSION['db_pass']=$db_pass;
  header('location: create_db.php');
}

// Connect to database if it exists
else {
mysqli_select_db($con,$db_name);
}

?>