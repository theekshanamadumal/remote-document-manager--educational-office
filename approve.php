<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
     
  </head>
  <body>
  <?php require_once('inc/connection.php');?>
<?php include_once("inc/head.php"); ?>
<?php
$query= "SELECT * FROM requestslist";
$result= mysqli_query($connection,$query);
$count = mysqli_num_rows($result);

if ($count==TRUE){
    while($row=$result->fetch_assoc()){
        //echo "hii";
        $No=$row["requestNo"];
        $id=$row["ID"];
        //echo $No;
        //echo $id;
        //echo $row["requestNo"]."   "."<br>";
        $sql="INSERT INTO approvelist VALUES('$No','$id')";
        $result= mysqli_query($connection,$sql);
        $del="DELETE FROM requestslist WHERE requestNo='$No'";
        $res= mysqli_query($connection,$del);
        if ($result and $del) {
            echo"account Approved successfully<br><hr>";
                                                  
        }

        else  echo"account Approved failed<br><hr>";  
        //echo "$row["requestNo"]."   ".$row["ID"]."   ".Approvement is Done";
    }
    
}
else{
    echo "No Data in the Database";
}

?>
</body>
</html>
<?php mysqli_close($connection);?> 
  