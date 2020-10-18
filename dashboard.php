<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard </title>
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
    <div class="form">
        <p>You are in <?php echo $_SESSION['userid']; ?> dashboard page.</p>
    </div>
</body>
</html>
