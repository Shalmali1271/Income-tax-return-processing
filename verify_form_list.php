<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify form(16)</title>
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
                <li><a href="CA_wlc.php">Back</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Verify Form(16)</h2>
    <?php
    require('db.php');
        $sql = "SELECT userid, name, keyw , verification FROM tax_form";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result)>0) {
            echo "<div class='form'><table id='customers'><tr><th>UserID</th><th>Name</th><th>Form</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if ($row["verification"] == 0) {
                    echo "<tr>
                            <td>" . $row["userid"]. "</td>
                            <td>" . $row["name"]. "</td>
                            <td><a class= 'btn-link' href='http://localhost/IP%20mini%20project/verify_form.php? key= ".$row['keyw']."'><button type='button' class='btn1'>Check</button></a></td>
                          </tr>";
                }
            }
            echo "</table></div>";
        } else {
            echo '<script type = "text/javascript"> 
                                alert("No tax payer has filed any forms yet!") 
                                window.location.replace("taxpayer_wlc.php");
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
