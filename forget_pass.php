<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
  require('db.php');
  session_start();
//This code runs if the form has been submitted
  if (isset($_POST['submit']))
  {

    // check for valid email address
    $email = $_POST['remail'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error[] = 'Please enter a valid email address';
    }

    // checks if the username is in use
    $check = mysqli_query($con,"SELECT email FROM signup_page WHERE email = '$email'")or die(mysqli_error($con));
    $check2 = mysqli_num_rows($check);

    //if the name exists it gives an error
    if ($check2 == 0) {
      $error[] = 'Sorry, we cannot find your account details please try another email address.';
    }

    // if no errors then carry on
    if (!isset($error)) {

      $query = mysqli_query($con,"SELECT userid FROM signup_page WHERE email = '$email' ")or die (mysqli_error($con));
      $r = mysqli_fetch_object($query);

      //create a new random password

      $password = substr(md5(uniqid(rand(),1)),3,10);
      $pass = md5($password); //encrypted version for database entry

      //send email
      $to = "$email";
      $from = "regulusblack1200@gmail.com";
      $subject = "Account Details Recovery";
      $body = "Hi $r->userid, nn you or someone else have requested your account details. nn Here is your account information please keep this as you may need this at a later stage. nnYour username is $r->userid nn your password is $pass nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
      mail($to, $subject, $body,$from);

      //update database
      $sql = mysqli_query($con,"UPDATE signup_page SET password ='$pass' WHERE email = '$email'")or die (mysqli_error($con));
    }// close errors
  }// close if form sent

//show any errors
  if (!empty($error))
  {
    $i = 0;
    while ($i < count($error)){
      echo "<div class='msg-error'>".$error[$i]."</div>";
      $i ++;
    }
  }// close if empty errors


  if ($sql){
    echo "<p>You have been sent an email with your account details to $email</p>
          <div class='form'>
          <h3>Goto Login.</h3><br/>
          <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
          </div>";
  } else {
    echo "<p>Please enter your e-mail address. You will receive a new password via e-mail.</p>n";
  }
?>
  <div class="nav">
      <h2 class="heading">Income Tax return Processing</h2>
      <nav>
          <ul>
              <li><a href="#">Help</a></li>
              <li><a href="#">Feedback</a></li>
              <li><a href="#">Contact us</a></li>
          </ul>
      </nav>  
  </div>
  <h1 class="login-title">Forgot Password</h1>
  <form action="" method="post" class="form">
    <p>Email Address: <input type="text" class="login-input" name="remail" size="50" maxlength="255">
    <input type="submit" name="submit" class="login-button" value="Get New Password"></p>
  </form>
  <footer>
    <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
    <br>
    <p class="link"><a href="#">For any help click here</a></p>
  </footer>
</body>
</html>