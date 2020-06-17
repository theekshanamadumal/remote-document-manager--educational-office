<?php require_once('inc/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new admin</title>
</head>
<body>
<?php include_once("inc/head.php"); ?>
    
<form action = "NewAdmin.php" method="POST">    
    <pre id="container-fluid text-left"><h4><center>
 NATIONAL ID NO : <input name="ID" type="text" id="">
 <br>
    <br>
 enter   password : <input name="password1" type="password" id=""><br>
 confirm password : <input name="password2" type="password" id=""><br>   
<input name="submit" type="submit" id=""></h4></center></pre>
</form>
<div class="alert">   
<?php


    

    $query_password="INSERT INTO adminpwrds 
        VALUES('{$_POST[ID]}','{$_POST[password1]}')";

    $query_id= "SELECT ID FROM adminpwrds WHERE ID='{$_POST[ID]}'";

    if (isset($_POST['submit'])) {
        
        if($_POST[ID]!=null){
                
            if ($_POST[password1]==$_POST[password2] and $_POST[password1]!=null ) {
                //echo"re entered password is correct<br>";

                $id_result= mysqli_query($connection,$query_id);
                
                if ($id_result){
                    $id_details=mysqli_num_rows($id_result);
                    //echo $id_details; 

                    if ($id_details==null){
                        $pass  = mysqli_query($connection,$query_password);   
            
                        if ($pass) {
                            echo"account created successfully<br><hr>";
                            echo'<a href="home.php">Home Page</a>';                                        
                        }

                        else  echo"account creation failed<br><hr>";  
                    
                    }
                    else echo "Already account exists!";
                
                }    
                else  echo"account creation failed<br><hr>";  

            }
            elseif ($_POST[password1]==null){
                    echo"password can not be empty.<hr>";    
            }

            else echo"password are not maching.<hr>";    
        }
        
        else echo'National Identy value can not be empty<br>';                    
        
    }
   
?></div>
<?php include_once('inc/foot.php'); ?>
</body>
</html>
<?php mysqli_close($connection);?> 