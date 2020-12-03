<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<DOCTYPE! html>
<head>
<title>Admin Dashboard</title>
</head>
<link rel="stylesheet" href="style.css">
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
    <h2 class="heading">Admin Dashboard</h2>   
    <div class="form"> 
        <a href="CA_cads.php">
            <button class="menu-button" id="submit-btn">CA Registration-Applicants</button></a><br><br>
        <a href="feedback_to_admin_list.php">
            <button class="menu-button" id="feedback">Grievance</button>
        </a>
    </div>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>
</body>
</html>