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
    <div class="nav">
        <nav>
            <ul>
                <li><a href="logout.php">Log-out</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="taxpayer_wlc.php">Back</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Feedback to Admin</h2>
    <form action="feedback_to_admin.php" method="POST" class="form" name="form">
      <!—Inside the form, let’s put some input fields. -->
      <input name="name" type="text" class="login-input" placeholder="Your name"/>
      <br>
      <textarea cols="32" name="subject" placeholder="Your subject" class="login-input" rows="5"></textarea>
      <textarea cols="32" name="message" placeholder="Your message" class="login-input" rows="5"></textarea>
      <br>
      <!—Let’s add a button that submits this form to the server. -->
      <input type="submit" class="login-button" name="submit" value="Submit" />
    </form>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>

<meta charset="UTF-8" />
<!-- The PHP logic begins. -->
<?php
    require('db.php');
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.
    if (!isset($_GET['userid'])) {
        $userid = $_SESSION['userid'];
        $que = "select * from signup_page where `userid` = '$userid'";
        $que_run = mysqli_query($con , $que) or die(mysqli_error($con));
        while ($result = (mysqli_fetch_assoc($que_run))){
            if ($result['feedback'] == 1) {
                echo '<script type = "text/javascript"> 
                alert("You have already given a feedback") 
                window.location.replace("taxpayer_wlc.php");
                </script>';
            }
            else{
            
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    
                    $keyy = substr(md5(uniqid(rand(),1)),3,10);
                
                    $query = "Insert into `feedback` (`name`,`subject`,`message`,`keyy`) values ('$name','$subject','$message','$keyy')";
                    $query_run = mysqli_query($con , $query)  or die(mysqli_error($con));
                    // If send successful:
                    if($query_run) {
                        echo '<script type = "text/javascript"> 
                                alert("Feedback sent") 
                                window.location.replace("taxpayer_wlc.php");
                              </script>';
                        $sql = "Update `signup_page` SET `feedback` = '1' where `userid`='$userid'";
                        $sql_run = mysqli_query($con , $sql) or die(mysqli_error($con));
                    }
                    else {
                        echo '<script type = "text/javascript"> 
                                alert("Something went wrong") 
                                window.location.replace("taxpayer_wlc.php");
                              </script>';
                    }
                }
            }
        }
    }
?>

</body>
</html>