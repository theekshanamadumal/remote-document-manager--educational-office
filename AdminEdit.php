<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
     
  </head>
  <body>
  <?php include_once("inc/head.php"); ?>
  <?php require_once('inc/connection.php');?>
  

<?php
$query= "SELECT * FROM requestslist";
$result= mysqli_query($connection,$query);
$count = mysqli_num_rows($result);

if ($count==TRUE){
    
    while($row=$result->fetch_assoc()){
         echo $row["requestNo"]."   ".$row["requestId"]."   ".$row["ID"]."   ".$row["status"].$row["description"]."<br>";
    
    
    
    }
}
else{
    echo "No Data in the Database";
}

?>
<br/>
<br/>
<br/>
<button type="button" class="btn btn-default"><a href="approve.php" target="_self">APPROVE ALL REQUESTS</a></button>
  <?php    include_once('inc/foot.php');    ?>
  </body>
  </html>
  <?php mysqli_close($connection);?> 