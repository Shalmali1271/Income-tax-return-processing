<?php 
  include "db.php";

  $userid = 0;
  if(isset($_POST['userid'])){
     $userid = mysqli_real_escape_string($con,$_POST['userid']);
  }
  if($userid > 0){

    // Check record exists
    $checkRecord = mysqli_query($con,"SELECT * FROM `signup_page` WHERE `userid` =".$userid);
    $totalrows = mysqli_num_rows($checkRecord);

    if($totalrows > 0){
      // Delete record
      $query = "DELETE FROM `signup_page` WHERE `userid` =".$userid;
      mysqli_query($con,$query);
      echo 1;
      exit;
    }else{
      echo 0;
      exit;
    }
  }

  echo 0;
  exit;
?>