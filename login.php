<?php include 'db_config.php' ?>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js.js"></script>
</head>
<body>
<div class="container">
    <div class="box_md" style="margin-top:100px;">
        <div class="box_hd">
            <h1>Please Log In</h1>
        </div>
        <div class="container_body">
            <form class="form" action="run_login.php" method="post">
                <div class="form_line">
                    <label for="uname_input" class="form_label">Username</label>
                    <input type="username" class="form_input" id="uname_input" name="uname_input" placeholder="Username">
                </div>
                <div class="form_line">
                    <label for="pass_input" class="form_label">Password</label>
                    <input type="password" class="form_input" id="pass_input" name="pass_input" placeholder="Password">
                </div>
                <button type="submit" class="button button_lg button_green" style="margin-left: 472px;width: 150px;">Sign in</button>
            </form>
            
            <?php
    
            // display wrong user error message
            if( isset($_GET[alert]) AND $_GET[alert] == 'user_fail') { ?>
                <div id="user_fail" class="warning">
                    <h2>I couldn't find that user, go ahead and try that again.</h2>
                </div>
            <?php }

            // display wrong password error message
            if( isset($_GET[alert]) AND $_GET[alert] == 'pass_fail') { ?>
                <div id="pass_fail" class="warning">
                    <h2>That password is wrong. Beleive me, I checked. Try it again.</h2>
                </div>
            <?php }

            // display login error message
            if( isset($_GET[alert]) AND $_GET[alert] == 'login') { ?>
                <div id="login" class="warning">
                    <h2>I can't let you do that ... until you log in.</h2>
                </div>
            <?php }
            
            // display logout message
            if( isset($_GET[alert]) AND $_GET[alert] == 'logout') { ?>
                <div id="logout_success" class="success">
                    <h2>You have successfully logged out. See ya later!</h2>
                </div>
            <?php }
            
            ?>
            
        </div>
    </div>
</div>
</body>
</html>