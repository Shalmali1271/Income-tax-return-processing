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
    // When form submitted, check and create user session.
    if (isset($_POST['userid'])) {
        $userid = stripslashes($_REQUEST['userid']);    // removes backslashes
        $userid = mysqli_real_escape_string($con, $userid);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $logintype = stripslashes($_REQUEST['logintype']);
        $logintype = mysqli_real_escape_string($con, $logintype);
        // Check user is exist in the database
        $query    = "SELECT * FROM `signup_page` WHERE userid='$userid'
                     AND password='$password' AND logintype='$logintype'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            if ($_POST['logintype'] == "Accountant") {
                $_SESSION['userid'] = $userid;
                // Redirect to user dashboard page
                header("Location: CA_wlc.php");
            }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Userid/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
        if(isset($_POST["submit"])) {
            $userid =$_POST["userid"];
            $password = $_POST["password"];
            $logintype = $_POST["logintype"];
            $query2 = "Insert into `login_page` (`userid`,`password`,`logintype`) values ('$userid','$password','$logintype')";
            $query_run = mysqli_query($con , $query2)  or die(mysqli_error($con));

            if($query_run) 
            {
                echo '<script type = "text/javascript"> alert("Data uploaded") </script>';
            }
            else 
            {
                echo '<script type = "text/javascript"> alert("Data not uploaded") </script>';
            }
        }
        if(!empty($_POST["remember"])) {
            setcookie ("userid",$_POST["userid"],time()+ 3600);
            setcookie ("password",$_POST["password"],time()+ 3600);
            setcookie ("logintype",$_POST["logintype"],time()+ 3600);
            echo "Cookies Set Successfuly";
        } else {
            setcookie("userid","");
            setcookie("password","");
            setcookie("logintype","");
            echo "Cookies Not Set";
        }
    } 
    else {       
?>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
    </div>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="userid" placeholder="UserId" autofocus="true" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required />
        <input list="logintype" name="logintype" placeholder="Choose option" class="login-input" required><br><br>
            <datalist id="logintype">
            <option value="Tax Payer">
            <option value="Accountant">
            <option value="Admin">
            </datalist>
        <input type="checkbox" class="check-box" name="remember" ><span class="check-box">Remember Password</span><br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
    </form>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="#">For any help click here</a></p>
    </footer>
<?php
    }
?>
</body>
</html>
