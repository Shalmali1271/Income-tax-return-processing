<?php
    session_start();
    // Destroy session
	unset($_SESSION['logged']);
	unset($_SESSION['userid']);
	unset($_SESSION['valid_user']);
	$hour = time() - 3600 *24 * 30;
	setcookie('userid', "", $hour);
	setcookie('username', "", $hour);
	setcookie('active', "", $hour);
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
