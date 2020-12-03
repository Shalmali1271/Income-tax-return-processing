<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verified Accountants List</title>
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
    <h2 class="heading">Registered Accountants</h2>
    <?php
    require('db.php');
        $sql = "SELECT userid, fname, logintype, verified FROM signup_page";
        $result = mysqli_query($con,$sql);

        if (mysqli_num_rows($result)>0) {
            echo "<div class='form'><table><tr><th>UserID</th><th>Name</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if (($row["logintype"] == 'Accountant') and ($row["verified"] == '1')){
                    echo "<tr>
                    <td>" . $row["userid"]. "</td>
                    <td>" . $row["fname"]. "</td>
                    </tr>";
                }
            }
            echo "</table></div>";
        } else {
            echo '<script type = "text/javascript"> 
                alert("No Accountant have registerd yet!") 
                window.location.replace("welcome_admin_page.php");
                </script>';
        }
        
    ?>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>
</body>
</html>
