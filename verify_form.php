<!DOCTYPE html>
<html>
<head>
    <title>Verify Form(16)</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="logout.php">Log-out</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="CA_wlc.php">Back</a></li>
            </ul>
        </nav>  
    </div>
    <h1 class="heading">Verify Form 16(A)</h1>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session. 
    if (isset($_GET['key'])) {
        $error="";
        $key = $_GET["key"];
        $query2 = "select * from `tax_form` where `keyw` = trim('".$key."');";
        $query_run = mysqli_query($con , $query2)  or die(mysqli_error($con));
        $row = mysqli_fetch_assoc($query_run);
        if(isset($_POST['verify']))
        {
            echo '<script type = "text/javascript"> 
                    alert("Form is verified") 
                    window.location.replace("verify_form_list.php");
                  </script>';
            $verification = "1";
            $query1= "Update `tax_form` SET `verification` = '1' WHERE `keyw` = trim('".$key."');"; 
            $query1_run =  mysqli_query($con , $query1)  or die(mysqli_error($con));
        }
        if(isset($POST['decline'])) {
            echo '<script type = "text/javascript"> 
                    alert("You can always verify it anytime!") 
                    window.location.replace("verify_form_list.php");
                  </script>';
        }
        if ($row == ""){
              $error .= "<h2>Invalid Form</h2> 
                <p><a href='/verify_form_list.php'>
                Click here</a> to Go back.</p>";
            }else{
                $verification = $row['verification'];
                if ($verification == 0){
                ?>
                        
                    <div class="form-box">
                        <form action="" method="post" class="form">
                            <label for="userid"><b>User ID : </b></label>
                            <input type="text" value="<?php echo $row['userid']?>" class="login-input" id="psd" name="userid" required><br><br>


                            <label for="name"><b>Name : </b></label>
                            <input type="text" value="<?php echo $row['name']?>" class="login-input" id="psd" name="name" required><br><br>

                            <label for="pannumber"><b>PAN Number : </b></label>
                            <input type="text" value="<?php echo $row['pannumber']?>" class="login-input" id="psd" name="pannumber" required><br><br>
                                
                            <label for="address"><b>Address : </b></label>
                            <input type="text" value="<?php echo $row['address']?>" class="login-input" id="psd" name="address" required><br><br>

                            <label for="city"><b>City : </b></label>
                            <input type="text" value="<?php echo $row['city']?>" class="login-input" id="psd" name="city" required><br><br>

                            <label for="state"><b>State : </b></label>
                            <input type="text" value="<?php echo $row['state']?>" class="login-input" id="psd" name="state" require><br><br>

                            <label for="zip"><b>Zip : </b></label>
                            <input type="text" value="<?php echo $row['zip']?>" class="login-input" id="psd" name="zip" required><br><br>
                                
                            <label for="contactnumber"><b>Contact Number : </b></label>
                            <input type="text" value="<?php echo $row['contactnumber']?>" class="login-input" id="psd" name="contactnumber" required><br><br>
                                
                            <label for="email"><b>Email ID : </b></label>
                            <input type="email" value="<?php echo $row['email']?>" class="login-input" id="psd" name="email" required><br><br>
                                
                            <label for="fromdate"><b>From Date : </b></label>
                            <input type="date" value="<?php echo $row['fromdate']?>" class="login-input" id="psd" name="fromdate" required><br><br>
                                 
                            <label for="todate"><b>To Date : </b></label>
                            <input type="date" value="<?php echo $row['todate']?>" class="login-input" id="psd" name="todate" required><br><br>
                                 
                            <label for="fixedincome"><b>Fixed Income : </b></label>
                            <input type="text" value="<?php echo $row['fixedincome']?>" class="login-input" id="psd" name="fixedincome" required><br><br>
                            
                            <label for="otherincome"><b>Other Income : </b></label>
                            <input type="text" value="<?php echo $row['otherincome']?>" class="login-input" id="psd" name="otherincome" required><br><br>
                                
                            <div class="divBlock">
                                <label for="noofresidents"><b>Number of Residents: </b></label>
                                <input type="text" value="<?php echo $row['noofresidents']?>" class="login-input-x" name="noofresidents" id="1" required><br><br>
                            </div>

                            <p class="para"> I,<input type="text" value="<?php echo $row['name1']?>" class="input-form" id="psd" name="name1" required> Son/Daughter of <input type="text" class="input-form" value="<?php echo $row['name2']?>" id="psd" name="name2" required> working in the capacity of <input type="text" value="<?php echo $row['work']?>" class="input-form" id="psd" name="work" placeholder="Designation" required> do hereby certify that a sum of Rs<input type="text" value="<?php echo $row['amt']?>" class="input-form" id="psd" name="amt" required> <input type="text" class="input-form" id="psd" value="<?php echo $row['words']?>" name="words" placeholder="In words" required> has been deducted and deposited to the credit of the Central Government. I further certify that information given above is true, complete correct and is based on the books of account, TDS deposited and other available records.</p>
                    <hr>
                                    
                            <label for="name"><b>Name : </b></label>
                            <input type="text" value="<?php echo $row['sign']?>" class="login-input" id="psd" name="sign" required>
                                
                            <label for="place"><b>Place : </b></label>
                            <input type="text" value="<?php echo $row['place']?>" class="login-input" id="psd" name="place" required>
                                
                            <label for="date"><b>Date : </b></label>
                            <input type="date" value="<?php echo $row['date']?>" class="login-input" id="psd" name="date" required>
                                
                            <input type="submit" value="Verify" name="verify" class="verify-button">
                            <a href="verify_form_list.php"><input type="submit" name="decline" value="Decline" class="verify-button"></a>
                        </form>
                    </div>
                <?php
                }
                else{
                    echo '<script type = "text/javascript"> 
                                alert("The form is already verified.") 
                                window.location.replace("verify_form_list.php");
                              </script>';
                }
            }
        }
?>
</body>
</html>