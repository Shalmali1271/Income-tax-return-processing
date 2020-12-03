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
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Feedback to Developer</h2>
    <form action="feedback.php" method="POST" class="form" name="form">
      <!—Inside the form, let’s put some input fields. -->
      <input name="name" type="text" class="login-input" placeholder="Your name"/>
      <br>
      <input name="email" type="text" class="login-input" placeholder="Email"/>
      <br>
      <textarea cols="32" name="message" placeholder="Your message" class="login-input" rows="5"></textarea>
      <br>
      <!—Let’s add a button that submits this form to the server. -->
      <input type="submit" class="login-button" value="Submit" />
    </form>

<meta charset="UTF-8" />
<!-- The PHP logic begins. -->
<?php
// Time to get the variables from the user’s request. Once we execute these four commands, we’ll have the user’s data in our variables.
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        $header = 'Feedback result';
        // Creating the email message that we’ll send.
        $mes = "Name: $name \nE-mail: $email \nMessage: $message \nThank you for the feedback!";
        // Trying to send the message using the PHP mailer module.
        $send = mail ($email,$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
        // If send successful:
        if($send == 'true') {
            echo '<script type = "text/javascript"> 
                alert("Your feedback has been sent.") 
                window.location.replace("/");
                </script>';
        }
        else {
            echo '<script type = "text/javascript"> 
                alert("Something went wrong try again.") 
                window.location.replace("/");
                </script>';
        }
    }
?>
</body>
</html>