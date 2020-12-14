<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify Accountants List</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
        <div class="nav">
        <nav>
            <ul>
                <li><a href="logout.php">Log-out</a></li>
                <li><a href="help.html">Help</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="welcome_admin_page.php">Back</a></li>
            </ul>
        </nav>  
    </div>
    <h2 class="heading">Registered Accountants</h2>
    <?php
    require('db.php');
        $sql = "SELECT userid, fname, logintype, verified ,request FROM signup_page";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result)>0) { 
            echo "<div class='form'><table id='customers'><tr><th>UserID</th><th>Name</th><th>Request</th></tr>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $userid= $row["userid"];
                if (($row["logintype"] == 'Accountant') and ($row["request"] == '0')){ 
                    echo "<tr>
                    <td>".$userid."</td>
                    <td>" .$row["fname"]. "</td>
                    <td><span class='update' data-id = ".$userid."><button type='button' class='btn'>Accept</button></span>
                        <span class='delete' data-id = ".$userid."><button type='button' class='btn'>Deny</button></span></td>
                    </tr>";
                }
            }
            echo "</table></div>";
        } else {
            echo '<script type = "text/javascript"> 
                alert("No Accountant have registerd yet!") 
                window.location.replace("welcome_admin_page.php");
                </script>';
        }
        
    ?>
    <script type="text/javascript">
        $(document).ready(function(){

         // Delete 
         $('.delete').click(function(){
           var el = this;
          
           // Delete id
           var deleteid = $(this).data('id');
           var confirmalert = confirm("Are you sure?");
           if (confirmalert == true) {
              // AJAX Request
              $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { userid:deleteid },
                success: function(response){
                    if(response == 1){
                    // Remove row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                        $(this).remove();
                    });
                    }else{
                        alert('Delete failed');
                    }
                }
              });
           }

         });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

         // Update 
         $('.update').click(function(){
           var el = this;
          
           // Update id
           var updateid = $(this).data('id');
           var confirmalert = confirm("Are you sure?");
           if (confirmalert == true) {
              // AJAX Request
              $.ajax({
                url: 'update.php',
                type: 'POST',
                data: { userid:updateid },
                success: function(response){

                    if(response == 1){
                        // Remove row from HTML Table
                        $(el).closest('tr').css('background','#dba6ed');
                        $(el).closest('tr').fadeOut(800,function(){
                        $(this).remove();
                    });
                    }else{
                        alert('Update failed');
                    }
                }
              });
           }

         });

        });
    </script>
    <footer>
        <p class="link">Contact us on Email : regulusblack1200@gmail.com</p>
        <br>
        <p class="link"><a href="help.html">For any help click here</a></p>
    </footer>
</body>
</html>
