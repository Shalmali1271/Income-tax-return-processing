<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Reset password</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="help.html">Help</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
        <h2 class="heading">Reset Password</h2>
    </div>
    <?php
        require('db.php');
        if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"])){
            $key = $_GET["key"];
            $error="";
            $email = $_GET["email"];
            $curDate = date("Y-m-d H:i:s");
            $sql = "SELECT * FROM `reset_pass` WHERE `key`=trim('".$key."') and `email`=trim('".$email."');";
            $query = mysqli_query($con , $sql);
            $row = mysqli_num_rows($query);
            echo "$row";
            if ($row == ""){
              $error .= "<h2>Invalid Link</h2>
                <p>The link is invalid/expired. Either you did not copy the correct link
                from the email, or you have already used the key in which case it is 
                deactivated.'".$curDate."' '".$email."' '".$key."' <br>".$sql."</p>
                <p><a href='./forget_pass.php'>
                Click here</a> to reset password.</p>";
            }else{
                $row = mysqli_fetch_assoc($query);
                $expDate = $row['expDate'];
                if ($expDate >= $curDate){
                ?>
                    <br />
                    <form method="post" class="form" action="" name="update">
                    <input type="hidden" name="action" class="login-input" value="update" />
                    <br /><br />
                    <label><strong>Enter New Password:</strong></label><br />
                    <input type="password" name="pass1" class="login-input" maxlength="15" required />
                    <br /><br />
                    <label><strong>Re-Enter New Password:</strong></label><br />
                    <input type="password" name="pass2" class="login-input" maxlength="15" required/>
                    <br /><br />
                    <input type="hidden" name="email" class="login-input" value="<?php echo $email;?>"/>
                    <input type="submit" class="login-button" value="Reset Password" />
                    </form>
                <?php
                }else{
                    $error .= "<h2>Link Expired</h2>
                    <p>The link is expired. You are trying to use the expired link which 
                    as valid only 24 hours (1 days after request).<br /><br /></p>";
                }
            }
            if($error!=""){
            echo "<div class='error'>".$error."</div><br />";
            } 
        } // isset email key validate end
         
         
        if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
            $error="";
            $pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
            $pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
            $email = $_POST["email"];
            $curDate = date("Y-m-d H:i:s");
            if ($pass1!=$pass2){
                $error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
            }
            if($error!=""){
                echo "<div class='error'>".$error."</div><br />";
            }else{
                $pass1 = md5($pass1);
                mysqli_query($con,
                "UPDATE `signup_page` SET `password`=trim('".$pass1."'), `trn_date`=trim('".$curDate."') WHERE `email`=trim('".$email."');");
                $sql1 = "DELETE from `reset_pass` where `email`= trim('".$email."');";
                mysqli_query($con,$sql1);
                 
                echo '<script type = "text/javascript"> 
                alert("Your password has been changed.") 
                window.location.replace("login.php");
                </script>';
            } 
        }
    ?>
</body>
</html>