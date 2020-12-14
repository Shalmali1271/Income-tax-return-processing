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
    <?php 
        require('db.php');
        if (!isset($_GET['userid'])) {    
            $userid = $_SESSION['userid'];    // removes backslashes
            $sql = "SELECT `request` FROM `signup_page` where `userid`='$userid'";
            $result = mysqli_query($con,$sql);
            if (mysqli_num_rows($result)>0) { 
                while($row = mysqli_fetch_assoc($result)) {
                    if ($row["request"] == '1'){
                        echo"
                        <div class='form'>
                            <a href='verify_form_list.php'><input type='submit' value='Verify Form (16)' name='verify' class='menu-button'></a>
                        </div>";
                    }else{
                        echo "You are not verified by the admin yet";
                    }
                }
            }else{
                echo 0;
            }
        }
    ?>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>
</body>
</html>
