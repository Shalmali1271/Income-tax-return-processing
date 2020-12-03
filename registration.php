<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['fname'])) {
        // removes backslashes
        $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
        $fname = mysqli_real_escape_string($con, $fname);
        $lname    = stripslashes($_REQUEST['lname']);
        $lname    = mysqli_real_escape_string($con, $lname);
        $gender    = stripslashes($_REQUEST['gender']);
        $gender    = mysqli_real_escape_string($con, $gender);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $dob    = stripslashes($_REQUEST['dob']);
        $dob    = mysqli_real_escape_string($con, $dob);
        $peradd    = stripslashes($_REQUEST['peradd']);
        $peradd    = mysqli_real_escape_string($con, $peradd);
        $comadd    = stripslashes($_REQUEST['comadd']);
        $comadd    = mysqli_real_escape_string($con, $comadd);
        $mobileno    = stripslashes($_REQUEST['mobileno']);
        $mobileno    = mysqli_real_escape_string($con, $mobileno);
        $logintype    = stripslashes($_REQUEST['logintype']);
        $logintype    = mysqli_real_escape_string($con, $logintype);
        $query    = "INSERT into `signup_page`(fname,lname,gender,email,password,dob,peradd,comadd,mobileno,logintype) VALUES ('$fname','$lname','$gender', '$email' ,'". md5($password)."','$dob','$peradd','$comadd','$mobileno','$logintype')";
        $result   = mysqli_query($con, $query);
        $subject = "Validation of Email-Id";
        $from = "regulusblack1200@gamil.com";
        $sql = "SELECT `userid`,`fname`,`lname`,`verified` FROM `signup_page`";
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $query1= "Update `signup_page` SET `verified` = '1' WHERE `fname` = '$fname';"; 
                    $query1_run =  mysqli_query($con , $query1)  or die(mysqli_error($con));
                    $msg= "Dear {$row['fname']} {$row['lname']} , {$row['userid']} is Your UserId. You can paste this on login page.\n Your verification is completed .";
                }
            }
        }
        mail($email, $subject, $msg, 'From:' . $from);
        echo 'Email sent to: ' .$email. '<br>';
        if ($result) {
            echo '<script type = "text/javascript"> 
                    alert("Your registrationis successful.") 
                    window.location.replace("login.php");
                  </script>';
        } else {
            echo '<script type = "text/javascript"> 
                    alert("Some required fields are missing!") 
                    window.location.replace("registration.php");
                  </script>';
        }
    } else {
    ?>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="help.html">Help</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>  
    </div>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="fname" placeholder="First name" required />
        <input type="text" class="login-input" name="lname" placeholder="Last name" required />
        <input list="gender" name="gender" placeholder="Choose option" class="login-input">
            <datalist id="gender">
            <option value="Female"></option>
            <option value="Male"></option>
            <option value="Other"></option>
            </datalist>
        <input type="email" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="date" class="login-input" id="dob" name="dob" required>
        <input type="text" class="login-input" name="peradd" placeholder="Permanant Address" required />
        <input type="text" class="login-input" name="comadd" placeholder="Communication Address" required />
        <input type="tel" class="login-input" id="mobileno" name="mobileno" pattern="[0-9]{10}" autocomplete="off" placeholder="Mobile Numbers"  required>
        <input list="logintype" name="logintype" placeholder="Choose option" class="login-input" required>
                <datalist id="logintype">
                <option value="Tax Payer"></option>
                <option value="Accountant"></option>
                <option value="Admin"></option>
                </datalist>
        <input type="checkbox" class="check-box"><span class="check-box" required> <a href="terms.html">I agree to the terms and conditions.</a></span><br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
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
