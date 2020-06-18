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

if ($result-> num_rows > 0){?>
  <div class="limiter">
  <div class="container-table100">
  <div class="wrap-table100">
                <div class="table100">
                  <table>
                    <thead>
                        <tr class="table100-head">
                        <th class="column1">Request NO        :</th>
                        <th class="column2">Request ID         :</th>
                        <th class="column3">ID            :</th>
                        <th class="column4" >Status          :</th>
                        <th class="column5" >Description          :</th>
                        </tr>
                    </thead>
                    <tbody>
    
    <?php
    while($row = $result-> fetch_assoc()){
        echo "<tr><td class='column1' >" .$row["requestNo"]."</td><td class='column2' >" .$row["requestId"]."</td><td class='column3'>".$row["ID"] ."</td><td class='column4'>".$row["status"] . "</td><td class='column5'>".$row["description"]."</td></tr>";
        
      }
    echo "</tbody>";
    echo "</table>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    //echo"<div class=' col-sm'></div>";
     
    
    
    

  }

  //Generate Message if no jobs are submitted yet

else{
    echo "No Requests are Available";
}

?>
<br/>
<br/>
<br/>
<button type="button" class="btn btn-default"><a href="approve.php" target="_self">APPROVE A REQUEST</a></button>
  <?php    include_once('inc/foot.php');    ?>
  </body>
  </html>
  <?php mysqli_close($connection);?> 