<html>
<head><title> login page</title></head>
<body>
<?php require_once('inc/connection.php');?>
<?php include_once("inc/head.php"); ?>
<div class="alert">
<?php
    if   (isset($_POST['submit'])){
        
        if($_POST['user_name']!=null and $_POST['password']!=null){
            
        $query= "SELECT * FROM passwords WHERE ID='{$_POST['user_name']}'";
            $result= mysqli_query($connection,$query);

            if ($result){

                $details=mysqli_fetch_assoc($result);
                $password=$details['password1'];
                $user_id =$details['ID'];

                if ($password==$_POST['password'] and $user_id==$_POST['user_name']) {
                    echo"<table ><tr><td><hr>.............login successful ! .............</td></tr>";
                   
                    echo'<tr><td><hr>
                     <a href="home.php">.....................home...........</a></td></tr></table><hr></div>';
                     include_once('inc/foot.php');    
                     mysqli_close($connection);
                    die;
                }
                else echo "invalid user name or password";                     
            }
            else echo "<hr>LOGIN FAILED!";
        }
        else echo" user name and password can not be empty";            
    }
?></div>

<form action = "login.php" method="POST">
    <pre id="container-fluid text-left"><br><br><br><h3><center>
user name:  <input name="user_name" type="text" id="">

password :  <input name="password" type="password" id="">

    <input name="submit" type="submit" id="" value="log in"></form>	<br>
   
   
    <hr>
    <a href="ChangePassword.php">CAN'T REMEMBER PASSWORD</a><br>
    <a href="NewAccount.php">CREATE NEW ACCOUNT</a><br></center></h3>
    <hr>
    </pre>
     
	
    


<?php    include_once('inc/foot.php');    ?>
	
</body>
</html>
<?php mysqli_close($connection);?> 