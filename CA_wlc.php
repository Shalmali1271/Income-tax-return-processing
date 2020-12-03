<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Accountant Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="nav">
        <nav>
            <ul>
            	<li><a href="logout.php">Log-out</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Accountant Dashboard</h2>
    <div class="form">
        <a href="verify_form_list.php"><input type="submit" value="Verify Form (16)" name="verify" class="menu-button"></a>
    </div>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>
</body>
</html>
