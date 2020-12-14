<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Feedback_list</title>
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
                <li><a href="welcome_admin_page.php">Back</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Feedback from tax payer</h2>
    <?php
    require('db.php');
        $sql = "SELECT * FROM feedback";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result)>0) {
            echo "<div class ='form'><table id='customers'><tr><th>Name Of the Taxpayer</th><th>Subject of the feedback</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row["name"]. "</td>
                        <td><a class= 'btn-link' href='http://localhost/IP%20mini%20project/feedback_from_taxpayer.php? key= ".$row['keyy']."'>" . $row["subject"]. "</a></td>
                      </tr>";
            }
            echo "</table></div>";
        } else {
            echo '<script type = "text/javascript"> 
                                alert("No Tax payer has given any feedback yet!") 
                                window.location.replace("welcome_admin_page.php");
                              </script>';
        }

    ?>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="#">For any help click here</a></p>
    </footer>
</body>
</html>
