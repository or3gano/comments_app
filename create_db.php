<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js.js"></script>
</head>
<body>
<div class="container">
    <div class="box_lg" style="margin:100px 0;">
        <h1>The database isn't installed yet</h1>
        <h2>Sit tight while I install it for you ...</h2>
        <button id="installing" class="button button_blue"><img src="images/refresh.png" class="refresh_animate"/> Installing...</button>
        <div id="db_created" class="success hidden">
            <h2>Database was successfully created!</h2>
        </div>
    </div>
</div>

<?php
session_start();



/// CREATE DATABASE ///

$con = mysqli_connect($_SESSION['hostname'], $_SESSION['db_user'], $_SESSION['db_pass']);   // Connect to MySQL

// Create query array for the MySQL statements
$queries = array(
    "CREATE DATABASE comments_app",
    "USE comments_app",
    "CREATE TABLE users(userid int NOT NULL AUTO_INCREMENT, username varchar(255), password varchar(255), PRIMARY KEY (userid));",
    "CREATE TABLE comments(commentid int NOT NULL AUTO_INCREMENT, userid int, comment TEXT, PRIMARY KEY (commentid))",
    "INSERT INTO users (username, password) VALUES ('sallen', 'SammyS0sa'), ('rbouche', '\$uperMan'), ('jsmith', 'someGuy')",
    "INSERT INTO comments (userid, comment) 
        VALUES 
        (1, 'Praesent et purus eleifend, vulputate quam non, sodales quam. Aenean.'),
        (2, 'Suspendisse elementum mauris sed mauris iaculis, sit amet sodales ante pharetra. Duis ornare congue nulla.'),
        (3, 'Suspendisse dapibus tristique pretium. Nullam.'),
        (1, 'Aenean porta quis ante in auctor. Quisque molestie ligula ante, bibendum adipiscing mi vulputate in. Aenean et imperdiet eros. In eu imperdiet ante. In nec.'),
        (2, 'Quisque venenatis risus eros, vitae condimentum arcu malesuada ut. Proin.'),
        (1, 'Aenean porta quis ante in auctor. Quisque molestie ligula ante, bibendum adipiscing mi vulputate in. Aenean et imperdiet eros. In eu imperdiet ante. In nec.'),
        (2, 'Quisque venenatis risus eros, vitae condimentum arcu malesuada ut. Proin.'),
        (1, 'Praesent et purus eleifend, vulputate quam non, sodales quam. Aenean.'),
        (2, 'Suspendisse elementum mauris sed mauris iaculis, sit amet sodales ante pharetra. Duis ornare congue nulla.'),
        (3, 'Suspendisse dapibus tristique pretium. Nullam.')"
);

// Execute each MySQL statement to create the database and add information
foreach( $queries as $stmt ) {
mysqli_query($con, $stmt);
}

// Redirect to login.php if database was created
$db_exists = mysqli_select_db($con, 'comments_app');
if( $db_exists ) {
header( 'refresh:3;url=login.php' );
}


?>
</body>    
</html>