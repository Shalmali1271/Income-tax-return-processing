<?php
    session_start();
    if(isset($_COOKIE['userid'])){
            $userid = $_COOKIE['userid'];
    }
    if(isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
    }
    if(!isset($userid)){
        echo '<script type = "text/javascript"> 
                alert("NYour session time is out plaese login again!") 
                window.location.replace("login.php");
                </script>';
            die();
    }
    if(!isset($_SESSION["userid"])) {
        header("Location: login.php");
        exit();
    }
?>
