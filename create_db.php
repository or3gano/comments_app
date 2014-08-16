<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="container">
    <div class="box-lg" style="margin:100px 0;">
        <h1>The database isn't installed yet</h1>
        <h2>Sit tight while I install it for you ...</h2>
        <button class="button button-blue"><img src="images/refresh.png" class="refresh-animate"/> Installing...</button>
    </div>
</div>
</body>    
</html>

<?php
session_start();



/// CREATE DATABASE ///

$con = mysqli_connect($_SESSION['hostname'], $_SESSION['db_user'], $_SESSION['db_pass']);   // Connect to MySQL

// Create query array for the MySQL statements
$queries = array(
"CREATE DATABASE comments_app",
"USE comments_app",
"CREATE TABLE users(userid int NOT NULL AUTO_INCREMENT, username varchar(255), password varchar(255), PRIMARY KEY (userid));",
"CREATE TABLE comments(commentid int NOT NULL AUTO_INCREMENT, userid int, comment TEXT, PRIMARY KEY (commentid))"
);

foreach( $queries as $stmt ) {
mysqli_query($con, $stmt);
}

header( "refresh:2;url=login.php" );

?>