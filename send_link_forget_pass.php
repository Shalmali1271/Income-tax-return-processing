<html>
<head>
    <meta charset="utf-8"/>
    <title>Reset password</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
   require('db.php');
   if(isset($_POST["email"]) && (!empty($_POST["email"]))){
      $email = $_POST["email"];
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);
      $error = "";
      if (!$email) {
         $error ="<p>Invalid email address please type a valid email address!</p>";
      }else{
         $sel_query = "SELECT * FROM `signup_page` WHERE email='".$email."'";
         $results = mysqli_query($con,$sel_query);
         $row = mysqli_num_rows($results);
         if ($row==""){
            $error = "<p>No user is registered with this email address!</p>";
         }
      }
      if($error!=""){
         echo "<div class='error'>".$error."</div>
         <br /><a href='javascript:history.go(-1)'>Go Back</a>";
      }else{
         $expFormat = mktime(
         date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y"));
         $expdate = date("Y-m-d H:i:s",$expFormat);
         $key = md5(2418*2+ (int)$email);
         $addKey = substr(md5(uniqid(rand(),1)),3,10);
         $key = $key . $addKey;
         // Insert Temp Table
         $result = mysqli_query($con,
         "INSERT INTO `reset_pass` (`email`, `key`, `expdate`)
         VALUES ('".$email."', '".$key."', '".$expdate."');");
         
         $headers  = 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
         $output='
         <html>
            <body>
            <p>Dear user,</p>
            <p>Please click on the following link to reset your password.</p>
            <p>-------------------------------------------------------------</p>
            <p><a href="http://localhost/IP%20mini%20project/reset_pass.php? key= '.$key.' &email= '.$email.' &action=reset " target="_blank">http://localhost/IP%20mini%20project/reset_pass.php
            ?key='.$key.'&email='.$email.'&action=reset</a></p> 
            <p>-------------------------------------------------------------</p>
            <p>Please be sure to copy the entire link into your browser.
            The link will expire after 1 day for security reason.</p>
            <p>If you did not request this forgotten password email, no action 
            is needed, your password will not be reset. However, you may want to log into 
            your account and change your security password as someone may have guessed it.</p>  
            <p>Thanks,</p>
            <p>Project Team</p>
            </body>
         </html>';
         
         $body = $output; 
         
         $subject = "Password Recovery";
         $from = "regulusblack1200@gmail.com";

         mail("$email", $subject, $body, $headers);
         
         if ($result) {
            echo "<div class='form'>
               <h3>Your Email has been sent.</h3><br/>
               <p class='link'>Click here to <a href='login.php'>Login</a></p>
               </div>";
         } else {
            echo "<div class='form'>
               <h3>Required fields are missing.</h3><br/>
               <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
               </div>";
         }
      }
   }else{
      ?>
         <div class="nav">
            <nav>
               <ul>
                   <li><a href="help.html">Help</a></li>
                   <li><a href="#">Contact us</a></li>
               </ul>
            </nav>  
         </div>
         <form method="post" action="" name="reset" class="form"><br /><br />
         <label><strong>Enter Your Email Address:</strong></label><br /><br />
         <input class="login-input" type="email" name="email" placeholder="username@email.com" />
         <br /><br />
         <input type="submit" class="login-button" value="Send link"/>
         </form>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <footer>
            <p class="link">Contact us on Email : regulusblack1200@gmail.com</p><br>
            <p class="link"><a href="help.html">For any help click here</a></p>
         </footer>
      <?php 
   }
?>
</body>
</html>