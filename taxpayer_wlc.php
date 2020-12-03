<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css"/>
<title>Tax Payer Dashboard</title>
</head>
<body>

<div>
    <div class="nav">
		<nav>
			<ul>
                <li><a href="logout.php">Log-out</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
			</ul>
		</nav>	
    </div>
    <h2 class="heading">Tax Payer Dashboard</h2>
    <form action="" class="form">
        <button type="submit" class="menu-button" id="submit-btn"><a class="btn-link" href="income_tax_form.php">Income Tax Form</a></button><br>
        <button type="submit" class="menu-button" id="submit-btn"><a class="btn-link" href="taxpayer_status.php">Tax Payer Status</a></button><br>
        <button type="submit" class="menu-button" id="submit-btn"><a class="btn-link" href="feedback_to_admin.php">Feedback to Admin</a></button><br>
    </form>
</div>
<footer>
    <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
    <br>
    <p class="link"><a href="help.html">For any help click here</a></p>
</footer>
</body>
</html>
            