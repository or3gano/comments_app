<?php

include 'db_config.php';

if(!isset($_SESSION['user'])) {
  header('location: login.php?alert=login');
}

session_start();

?>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js.js"></script>
</head>
<body>
<div id="user_dropdown">
<ul>
    <li class="menu">
        <?php echo 'Logged in as: ' . $_SESSION['user'] ?>
        <ul>
            <li id="menu_logout" class="menu"><a href="logout.php">Logout</a></li>
        </ul>
    </li>
</ul>
</div>
<div class="container">
    <div class="box_md">
        <div class="box_hd">
            <h1>Recent Comments</h1>
        </div>
        <div class="container_body">
            <button id="add_comment_btn" class="button button_lg button_blue">Add Comment</button>
            <?php

            // display comment success message
            if( isset($_GET[alert]) AND $_GET[alert] == 'success') { ?>
                <div id="comment_success" class="success">
                    <h2>I added that comment for you. Feel free to add another!</h2>
                </div>
            <?php }            
            
    
              ///   CREATE COMMENTS SECTION     ///
              $get_comments = mysqli_query($con, "SELECT * FROM comments ORDER BY commentid DESC LIMIT 5");
              while($comments = mysqli_fetch_array($get_comments)) {
                  $user_id = $comments['userid'];
                  $comment_user = mysqli_fetch_array(mysqli_query($con,"SELECT username FROM users WHERE userid=" . $user_id));
                  $comment_user = $comment_user['username'];
                  $comment_content = $comments['comment'];
                  ?>
                  <div class="comment">
                      <div class="comment_hd">Comment by: <strong><?php echo $comment_user ?></strong></div>
                      <div class="comment_box"><?php echo $comment_content ?></div>
                  </div>
            
              <?php } ?>
        </div>
    </div>
</div>
    
<div id="add_comment" class="hidden">
    <div class="container" style="width: 800px;">
        <div class="box_md" style="margin-top:100px;">
            <div class="box_hd">
                <h1>Add Comment</h1>
            </div>
            <div class="container_body">
                <form class="form" action="add_comment.php" method="post">
                    <div class="form_line">
                        <label for="comment_input" class="form_label">Comment</label>
                        <input class="form_input" id="pass_input" name="comment_input" placeholder="Insert comment ...">
                    </div>
                        <button type="submit" class="button button_lg button_green" style="float:right;width: 150px;">Submit</button>
                        <div id="cancel" class="button button_lg" style="color:red;display: inline-block;position: relative;left: 500px;top: 5px;">Cancel</div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>