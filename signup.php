<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./stylesheet.css"/>
	<title>SIGN UP</title>
</head>
<body>
	<div class="nav">
		<nav>
		<img class="logo-img" src="homepage_images/Logo1.svg" width="200" height="150">
			<ul>
				<li><a href="#">Help</a></li>
				<li><a href="#">Feedback</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
		</nav>	
	</div>
	<h1 class="heading1">Welcome to Income Tax Return Processing</h1>
	<h2 class="heading">Signup Page</h2>
	<div class ="form-box">
        <form action="" method="POST" id="Signup" class="login" enctype="multipart/form-data">
			<label for="fname">First name :</label>
			<input type="text" class="input-field" id="fname" name="fname" autocomplete="off" required><br><br>

			<label for="lname">Last name :</label>
			<input type="text" class="input-field" id="lname" name="lname" autocomplete="off" required><br><br>

			<label for="gender">Gender :</label>
			<input list="gender" placeholder="Choose option" class="input-field"><br><br>
			<datalist id="gender">
			<option value="Female">
			<option value="Male">
			<option value="Other">
			</datalist>

			<label for="email">Email-Id:</label>
			<input type="email" class="input-field" id="email" name="email" autocomplete="off" required><br><br>

			<label for="pwd">Password:</label>
			<input type="password" class="input-field" id="pwd" name="pwd" required><br><br>

			<label for="birthday">Date of Birthday:</label>
			<input type="date" class="input-field" id="birthday" name="birthday" required><br><br>

			<label for="peraddress">Permanant Address :</label>
			<input type="text" class="input-field" id="peraddress" name="peraddress" autocomplete="off" required><br><br>

			<label for="commaddress">Communication Address :</label>
			<input type="text" class="input-field" id="commaddress" name="commaddress" autocomplete="off" required><br><br>

			<label for="phone">Mobile number:</label>
			<input type="tel" class="input-field" id="phone" name="phone" pattern="[0-9]{10}" autocomplete="off" required><br><br>

			<label for="logintype">Login Type :</label>
			<input list="logintype" placeholder="Choose option" class="input-field" required><br><br>
			<datalist id="logintype">
			<option value="Tax Payer">
			<option value="Accountant">
			<option value="Admin">
			</datalist>
			<input type="checkbox" class="check-box"><span>I agree to the terms and conditions.</span><br><br>
			<button type="submit" class="submit-btn" id="submit-btn">Sign in</button>
		</form>
	</div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'income_tax_website');
if(isset($_POST["submit-btn"])){
    $User_Id = 
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $gender = $_POST["gender"];
    $email_id = $_POST["email"];
    $password_ = $_POST["pwd"];
    $dob = $_POST["birthday"];
    $permanant_addr = $_POST["peraddress"];
    $Comm_addr = $_POST["commaddress"];
    $mobile_no = $_POST["phone"];
    $logintype = $_POST["logintype"];
    $query = "INSERT INTO `sign_up`(`User_Id`,first_name`, `last_name`, `gender`, `email_id`,`password_`,`dob`,`permanant_addr`,`Comm_addr`,`mobile_no`,`logintype`) VALUES ('$first_name','$last_name','$gender','$email_id','$password','$dob','$permanant_addr','$Comm_addr','$mobile_no','$login_type') ";
    $query_run = mysqli_query($conn, $query);
    }
    
?>
