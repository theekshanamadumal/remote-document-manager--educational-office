<?php require_once('inc/connection.php');?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
    </head>
    <body>

<?php include_once("inc/head.php"); ?>
<div class="alert"> 
   <?php
   
    if   (isset($_POST['submit'])){

        $id=$_POST['user_id'];
        $email=$_POST['email'];
        
        if($id !=null and $email !=null){
            
            
            
            $query= "SELECT ID,Email FROM userdetails WHERE ID='{$id}'";
            $result= mysqli_query($connection,$query);

            if ($result){

                $details=mysqli_fetch_assoc($result);
                $emailo=$details['Email'];
                $ido =$details['ID'];
                
                if ($email==$emailo and $id==$id) {
                    echo"password reset";
                   
                    echo'<hr> <a href="home.php">home</a>';
                    include_once('inc/foot.php');    
                    mysqli_close($connection);
                    die;
                }
                else echo "invalid user ID or Email address";
                     
            }
            else echo "<hr>ACTION FAILED!";

        }
        else echo" user name and email can not be empty";

            }?></div>

<form action = "ChangePassword.php" method="POST">
    <pre id="container-fluid text-left"><h3><center><br><br><br>
user ID  :<input name="user_id" type="text" id="">

Email    :<input name="email" type="email" id="">

    <input name="submit" type="submit" id="" value="Submit"></form>	<br>
   
        </center></h3></pre>
            </body>

<?php include_once('inc/foot.php'); ?>
</html>
<?php mysqli_close($connection);?> 