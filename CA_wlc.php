<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CA Welcome Page  </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="nav">
        <nav>
        <img class="logo-img" src="./Logo1.svg" width="200" height="150">
            <ul>
            	<li><a href="logout.php">Log-out</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
    </div>
    <h2>Welcome!</h2>
    <div class="form">
        <input type="submit" value="Verify Form (16)" name="verify" class="verify-button"/>
        <input type="submit" value="Upload verfied form to Taxpayer" name="upload" class="verify-button"/>
    </div>
</body>
</html>
