<?php

/// DATABASE INFORMATION ///
$hostname = 'localhost';
$db_name = 'comments_app';
$db_user = 'root';
$db_pass = 'root';



/// CONNECT TO MYSQL ///
$con = mysqli_connect($hostname, $db_user, $db_pass);
if (mysqli_connect_errno()) {
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  header('location: db_instruct.php');
}



/// CHECK TO SEE IF DATABASE EXISTS ///
$db_exists = mysqli_select_db($con,$db_name);

// Redirect to create_db.php if it doesn't exist
if (!$db_exists) {
  header('location: create_db.php');
}

// Connect to database if it exists
else {
mysqli_select_db($con,$db_name);
}

?>
