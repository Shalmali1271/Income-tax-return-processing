<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Income Tax form</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, check and create user session. 
    if (!isset($_GET['userid'])) {
        $userid = $_SESSION['userid'];    // removes backslashes
        $query3 = "select * from `tax_form` where `userid`='$userid';";
        $query_run3 = mysqli_query($con , $query3)  or die(mysqli_error($con));
        $row = mysqli_num_rows($query_run3);
        if ($row == '0') {
            if(isset($_POST["submit"])) {
                $userid = stripslashes($_REQUEST['userid']); 
                $userid = mysqli_real_escape_string($con, $userid);
                $name = stripslashes($_REQUEST['name']); 
                $name = mysqli_real_escape_string($con, $name);
                $pannumber = stripslashes($_REQUEST['pannumber']); 
                $pannumber = mysqli_real_escape_string($con, $pannumber);
                $address = stripslashes($_REQUEST['address']); 
                $address = mysqli_real_escape_string($con, $address);
                $city = stripslashes($_REQUEST['city']); 
                $city = mysqli_real_escape_string($con, $city);
                $state = stripslashes($_REQUEST['state']); 
                $state = mysqli_real_escape_string($con, $state);
                $zip = stripslashes($_REQUEST['zip']); 
                $zip = mysqli_real_escape_string($con, $zip);
                $contactnumber = stripslashes($_REQUEST['contactnumber']); 
                $contactnumber = mysqli_real_escape_string($con, $contactnumber);
                $email = stripslashes($_REQUEST['email']); 
                $email = mysqli_real_escape_string($con, $email);
                $fromdate = stripslashes($_REQUEST['fromdate']); 
                $fromdate = mysqli_real_escape_string($con, $fromdate);
                $todate = stripslashes($_REQUEST['todate']); 
                $todate = mysqli_real_escape_string($con, $todate);
                $fixedincome = stripslashes($_REQUEST['fixedincome']); 
                $fixedincome = mysqli_real_escape_string($con, $fixedincome);
                $otherincome = stripslashes($_REQUEST['otherincome']); 
                $otherincome = mysqli_real_escape_string($con, $otherincome);
                $noofresidents = stripslashes($_REQUEST['noofresidents']); 
                $noofresidents = mysqli_real_escape_string($con, $noofresidents);
                $name1 = stripslashes($_REQUEST['name1']); 
                $name1 = mysqli_real_escape_string($con, $name1);
                $name2 = stripslashes($_REQUEST['name2']); 
                $name2 = mysqli_real_escape_string($con, $name2);
                $work = stripslashes($_REQUEST['work']); 
                $work = mysqli_real_escape_string($con, $work);
                $amt = stripslashes($_REQUEST['amt']); 
                $amt = mysqli_real_escape_string($con, $amt);
                $words = stripslashes($_REQUEST['words']); 
                $words = mysqli_real_escape_string($con, $words);
                $sign = stripslashes($_REQUEST['sign']); 
                $sign = mysqli_real_escape_string($con, $sign);
                $place = stripslashes($_REQUEST['place']); 
                $place = mysqli_real_escape_string($con, $place);
                $date = stripslashes($_REQUEST['date']); 
                $date = mysqli_real_escape_string($con, $date);
                $keyw = substr(md5(uniqid(rand(),1)),3,10);
                
                $query2 = "Insert into `tax_form` (`userid`,`name`,`pannumber`,`address`,`city`,`state`,`zip`,`contactnumber`,`email`,`fromdate`,`todate`,`fixedincome`,`otherincome`,`noofresidents`,`name1`,`name2`,`work`,`amt`,`words`,`sign`,`place`,`date`,`keyw`) values ('$userid','$name','$pannumber','$address','$city','$state','$zip','$contactnumber','$email','$fromdate','$todate','$fixedincome','$otherincome','$noofresidents','$name1','$name2','$work','$amt','$words','$sign','$place','$date','$keyw')";
                $query_run = mysqli_query($con , $query2)  or die(mysqli_error($con));
                if($query_run) {
                    echo '<script type = "text/javascript"> 
                        alert("Your form has been sent to Accountant.") 
                        window.location.replace("taxpayer_wlc.php");
                        </script>';
                }
                else {
                    echo '<script type = "text/javascript"> alert("Data not uploaded") </script>';
                }
            }
            else{      
        ?>
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="logout.php">Log-out</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="taxpayer_wlc.php">Back</a></li>
                </ul>
            </nav>  
        </div>
            <h1 class="heading">Fill Form 16(A)</h1>
            <div class="form-box">
                <form action="income_tax_form.php" method="post" name="verify" class="form">
                    <label for="userid"><b>User ID : </b></label>
                    <input type="text" class="login-input" value="<?php echo $_SESSION['userid'];?>" id="psd" name="userid" required><br><br>


                    <label for="name"><b>Name : </b></label>
                    <input type="text" class="login-input" id="psd" name="name" required><br><br>

                    <label for="pannumber"><b>PAN Number : </b></label>
                    <input type="text" class="login-input" id="psd" name="pannumber" required><br><br>
                    
                    <label for="address"><b>Address : </b></label>
                    <input type="text" class="login-input" id="psd" name="address" required><br><br>

                    <label for="city"><b>City : </b></label>
                    <input type="text" class="login-input" id="psd" name="city" required><br><br>

                    <label for="state"><b>State : </b></label>
                    <input type="text" class="login-input" id="psd" name="state" require><br><br>

                    <label for="zip"><b>Zip : </b></label>
                    <input type="text" class="login-input" id="psd" name="zip" required><br><br>
                    
                    <label for="contactnumber"><b>Contact Number : </b></label>
                    <input type="text" class="login-input" id="psd" name="contactnumber" required><br><br>
                    
                    <label for="email"><b>Email ID : </b></label>
                    <input type="email" class="login-input" id="psd" name="email" required><br><br>
                    
                    <label for="fromdate"><b>From Date : </b></label>
                    <input type="date" class="login-input" id="psd" name="fromdate" required><br><br>
                     
                    <label for="todate"><b>To Date : </b></label>
                    <input type="date"class="login-input" id="psd" name="todate" required><br><br>
                     
                    <label for="fixedincome"><b>Fixed Income : </b></label>
                    <input type="text" class="login-input" id="psd" name="fixedincome" required><br><br>
                    
                    <label for="otherincome"><b>Other Income : </b></label>
                    <input type="text" class="login-input" id="psd" name="otherincome" required><br><br>
                    
                    <div class="divBlock">
                        <label for="noofresidents"><b>Number of Residents: </b></label>
                        <input type="text" class="login-input-x" name="noofresidents" id="1" required><br><br>
                    </div>
                    
                    <script>
                        const divBlock=document.querySelector(".divBlock")
                        const ipField=document.querySelectorAll(".login-input-x")
                        const prev=1;
                        const addInputFields=(e)=> {
                                const c=parseInt(e.target.value);
                                let newHtml=divBlock.innerHTML;
                                for (let index = 0; index <c ; index++) {
                                        let s=`<label for="residentname"><b>Resident Name ${index+1} : </b></label>
                                    <input type="text" class="login-input-x" name="residentname" id="${prev+1}" required><br><br>
                                    
                                    <label for="residentage"><b>Resident Age ${index+1} : </b></label>
                                    <input type="text" class="login-input-x" name="residentage" id="${prev+1}" required><br><br>` 
                                        newHtml+=s;                                
                                }
                                divBlock.innerHTML=newHtml;
                        }

                        ipField.forEach(field => field.addEventListener('input',addInputFields));
                    </script>
                    
                    
                    <p class="para"> I,<input type="text" class="input-form" id="psd" name="name1" required> Son/Daughter of <input type="text" class="input-form" id="psd" name="name2" required> working in the capacity of <input type="text" class="input-form" id="psd" name="work" placeholder="Designation" required> do hereby certify that a sum of Rs<input type="text" class="input-form" id="psd" name="amt" required> <input type="text" class="input-form" id="psd" name="words" placeholder="In words" required> has been deducted and deposited to the credit of the Central Government. I further certify that information given above is true, complete correct and is based on the books of account, TDS deposited and other available records.</p>
                    <hr>
                    
                    <input type="checkbox" class="check-box" name="terms" id="terms" required>  I Agree to the Terms & Conditions
                    <br><br>
                    <label for="name"><b>Name : </b></label>
                    <input type="text" class="login-input" id="psd" name="sign" required>
                    
                    <label for="place"><b>Place : </b></label>
                    <input type="text" class="login-input" id="psd" name="place" required>
                    
                    <label for="date"><b>Date : </b></label>
                    <input type="date" class="login-input" id="psd" name="date" required>
                    
                    <input type="submit" name="submit" value="Send to Accountant" class="login-button">
                </form>
            </div>
        <?php
            }
        }else { 
            echo '<script type = "text/javascript"> 
                        alert("Your form has sent to Accountant") 
                        window.location.replace("taxpayer_wlc.php");
                        </script>';
        }
    }else { 
    
    }
?>
</body>
</html>