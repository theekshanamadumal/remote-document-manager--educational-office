<?php require_once('inc/connection.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Jobs Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
     
  </head>
  <body>
  
  

    <?php include_once("inc/head.php"); ?>
      
      <?php
          $query= "SELECT requestId,status,description FROM requestslist WHERE userId='{$_SESSION['UserName']}' ";
          $result= mysqli_query($connection,$query);
          
          //Genetrating a Job Description table if jobs any are submitted

          if ($result-> num_rows > 0){?>
          <div class="intro">
              <h1 style="color:gray;">සාදරයෙන් පිළිගනිමු </h1>
              <p></p>
          </div>
          <div class="table-content" style="padding-top:50px;padding-bottom :50px;">
          <div class=" table-responsive">
          <div class="col-sm-1 "></div>
          <div class=" col-sm-4 col-md-6 ">
            <table class="table table-hover table-striped">
            <th>Request ID</th>
            <th >Status</th>
            <th >Description</th>
            
            <?php
            while($row = $result-> fetch_assoc()){
                echo "<tr><td>" .$row["requestId"]."</td><td>".$row["status"] . "</td><td>".$row["description"]."</td></tr>";
            }
            
            echo "</table>";
            echo"</div>";
            //echo"<div class=' col-sm'></div>";
             
            
            echo"</div>";
            echo"</div>";

          }

          //Generate Message if no jobs are submitted yet

          else{
            echo "No Jobs Submitted Yet";
          }     
      ?>
      

    <?php    include_once('inc/foot.php');    ?>
   
  </body>

</html>
