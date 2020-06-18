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
          $query= "SELECT requestslist.requestNo,requestslist.status,requestslist.description,requesttypes.details FROM requestslist JOIN requesttypes ON requestslist.requestId=requesttypes.requestId WHERE userId='{$_SESSION['loginID']}' ORDER BY requestNo";
          $result= mysqli_query($connection,$query);
          
          //Genetrating a Job Description table if jobs any are submitted

          if ($result-> num_rows > 0){?>
          <div class="intro">
              <h1 style="color:gray;">සාදරයෙන් පිළිගනිමු </h1>
              <p></p>
          </div>
          <div class="limiter">
          <div class="container-table100">
          <div class="wrap-table100">
				                <div class="table100">
					                <table>
						                <thead>
                                <tr class="table100-head">
                                <th class="column1">Request ID</th>
                                <th class="column1">Details</th>
                                <th class="column1" >Status</th>
                                <th class="column1" >Description</th>
                                </tr>
					                  </thead>
						                <tbody>
            
            <?php
            while($row = $result-> fetch_assoc()){
                echo "<tr><td class='column1' >" .$row["requestNo"]."</td><td class='column1'>".$row["details"]."</td><td class='column1'>".$row["status"] . "</td><td class='column1'>".$row["description"]."</td></tr>";
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
            echo "No Jobs Submitted Yet";
          }     
      ?>
      

    <?php    include_once('inc/foot.php');    ?>
   
  </body>

</html>
