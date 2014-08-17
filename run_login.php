<?php

include 'db_config.php';


/// CHECK USERNAME AND PASSWORD ///

$username = trim($_POST['uname_input']);    // username input by user
$password = trim($_POST['pass_input']);     // password input by user

// check for the user in the database
$user_check = mysqli_query($con, "SELECT userid FROM users WHERE username = '" . $username . "'");
$user_check = mysqli_fetch_array($user_check);

// get the password from the database
$pass_check = mysqli_query($con, "SELECT password FROM users WHERE userid = '" . $user_check['userid'] . "'");
$pass_check = mysqli_fetch_array($pass_check);
var_dump($user_check);
var_dump($pass_check);

// login and redirect to comments.php if the username and password match

if ( $user_check ) {
  if ( $password == $pass_check['password'] ) {
      session_start();
      $_SESSION['user'] = $username;
      header('location: comments.php');
  }
    
  // redirect to login if user or password don't match and display message
    
  else {
      header('location: login.php?alert=pass_fail');
  }
}
else {
    header('location: login.php?alert=user_fail');
}


?>