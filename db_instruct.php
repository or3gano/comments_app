<html>
<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="container">
    <div class="warning" style="margin:50px 0;">
        <h2>Hmm ... I couldn't connect to MySQL ...</h2>
    </div>
<div class="blue_container">
    <div class="container_hd">
        <h3>Don't worry, we can fix this together!</h3>   
    </div>
    <div class="container_body">
        <p>Most likely, you need to configure your database information.</p>
        <br />
        <p>This is quite simple really. Follow these steps and you'll be all set:</p>
        <ol>
            <li>Locate and open the file called "db_config.php" on your server.</li>
            <li>Edit the information in the "DATABASE INFORMATION" section to match your mysql settings.</li>
            <ul>
                <li style="padding-top:0;">It looks something like this:</li>
            </ul>
            <div class="code_box">
                /// DATABASE INFORMATION ///<br/>
                $hostname = 'localhost';<br/>
                $db_user = 'yourmysqlusername';<br/>
                $db_pass = 'yourmysqlpassword';"
            </div>
            <li>Make sure to save the changes!</li>
            <li>Ask yourself: Do I feel lucky?</li>
            <li><a href="login.php">Click here</a> to see if you realy are lucky and the new settings worked.</li>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li style="list-style-type: none;">You are still here? That means you aren't as lucky as you thought.</li>
            </ul>
            <li>Repeat the above steps with the <strong>CORRECT</strong> information until you aren't on this page anymore.</li>
        </ol>
    </div>
</div>
</div>
</body>
</html>