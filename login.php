<?php include 'db_config.php' ?>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
<script src="js.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="box_md" style="margin-top:100px;">
        <div class="box_hd">
            <h1>Please Log In</h1>
        </div>
        <div class="container_body">
            <form class="form" action="run_login.php">
                <div class="form_line">
                    <label for="uname_input" class="form_label">Username</label>
                    <input type="username" class="form_input" id="uname_input" placeholder="Username">
                </div>
                <div class="form_line">
                    <label for="pass_input" class="form_label">Password</label>
                        <input type="password" class="form_input" id="pass_input" placeholder="Password">
                </div>
                <button type="submit" class="button button_lg button_green" style="margin-left: 472px;width: 150px;">Sign in</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>