<?php require_once('inc/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new account</title>
</head>
<body>
<?php include_once("inc/head.php"); ?>
    
<form action = "NewAccount.php" method="POST">    
    <pre id="container-fluid text-left"><h4><center>
 NATIONAL ID NO : <input name="ID" type="text" id=""><br>
 FIRST_NAME     : <input name="first_name" type="text" id=""><br>
 SECOND_NAME    : <input name="second_name" type="text" id=""><br>
 ADDRESS        : <input name="address" type="text" id=""><br>
 TELEPHONE      : <input name="telephone" type="text" id=""><br>
 EMAIL ADDRESS   : <input name="email" type="text" id=""> <br>
 SCHOOL         : <input name="school" type="text" id="">
   
 OCCUPATION    :          <select name="occupation">
 <option value="teacher">teacher</option>
 <option value="Principal">Principal</option>
 <option value="Staff">Staff</option>

            </select>
    <br>
 enter   password : <input name="password1" type="password" id=""><br>
 confirm password : <input name="password2" type="password" id=""><br>   
<input name="submit" type="submit" id=""></h4></center></pre>
</form>
<div class="alert">   
<?php

    
        
    $first_name=NULL;
    $second_name=NULL;
    $address=NULL;
    $telephone=NULL;
    $email=NULL;
    $school=NULL;
    $occupation=NULL;
  
    if (isset($_POST['submit'])) {

    
        $ID=$_POST["ID"];    
        $pp=$_POST["password1"];
        
        $first_name=$_POST['first_name'];
        $second_name=$_POST['second_name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $occupation=$_POST['occupation'];

    $query_id= "SELECT ID FROM userdetails WHERE ID='{$ID}'";  

    $query_user="INSERT INTO userdetails VALUES(
    '{$ID}',
    '{$first_name}',
    '{$second_name}',
    '{$address}',
    '{$telephone}',
    '{$email}',
    '{$school}',
    '{$occupation}')";

    $query_password="INSERT INTO passwords 
        VALUES('{$ID}','{$pp}')";

        if($_POST['ID']!=null){
                
            if ($_POST['password1']==$_POST['password2'] and $_POST['password1']!=null ) {
                //echo"re entered password is correct<br>";
                
                        
                $id_result= mysqli_query($connection,$query_id);
                
                
                if ($id_result){
                    $id_details=mysqli_num_rows($id_result);
                    
                    if ($id_details==null){

                       

                        $result= mysqli_query($connection,$query_user);
                        $pass  = mysqli_query($connection,$query_password);   
            
                                                 
                        if ($pass && $result) {
                            
                            echo"account created successfully<br><hr>";
                            echo'<a href="home.php">Home Page</a>';       }  
                                                       
                        else  echo"account creation failed <br><hr>";  
                    
                    }
                    else echo "Already account exists!";
                
                }    
                else  echo"account creation failed 2<br><hr>";  

            }
            elseif ($_POST['password1']==null){
                    echo"password can not be empty.<hr>";    
            }

            else echo"passwords are not maching.<hr>";    
        }
        
        else echo'National Identy value can not be empty<br>';                    
        
    }
   
?></div>
<?php include_once('inc/foot.php'); ?>
</body>
</html>
<?php mysqli_close($connection);?> 