<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        require('db.php');
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.
        if (isset($_GET['key'])) {
            $error="";
            $key = $_GET["key"];
            $query2 = "select * from `feedback` where `keyy` = trim('".$key."');";
            $query_run = mysqli_query($con , $query2)  or die(mysqli_error($con));
            $row = mysqli_fetch_assoc($query_run);
            if ($row == ""){
                  $error .= "<h2>Invalid Form</h2>";
            }else{
                ?>
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
                    <h2 class="heading">Feedback to Admin</h2>
                    <form action="feedback_from_taxpayer.php" method="POST" class="form" name="form">
                      <!—Inside the form, let’s put some input fields. -->
                      <input name="name" type="text" value="<?php echo $row['name']?>" class="login-input" placeholder="Your name"/>
                      <br>
                      <textarea cols="32" name="subject" placeholder="Your subject" class="login-input" rows="5"><?php echo $row['subject']?></textarea>
                      <textarea cols="32" name="message" placeholder="Your message" class="login-input" rows="5"><?php echo $row['message']?></textarea>
                      <br>
                      <!—Let’s add a button that submits this form to the server. -->
                    </form>
                    <footer>
                        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
                        <br>
                        <p class="link"><a href="help.html">For any help click here</a></p>
                    </footer>
        <?php
            }
        }
?>

</body>
</html>