<?php require_once('inc/connection.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>adminUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
     
  </head>
  <body>
  
  

    <?php include_once("inc/head.php"); ?>
      
      <?php
<<<<<<< HEAD
          $query= "SELECT requestslist.requestNo,requestslist.requestId,requestslist.userId,requestslist.status,requestslist.description,requesttypes.details FROM requestslist JOIN requesttypes ON requestslist.requestId=requesttypes.requestId ORDER BY requestNo ASC ";
=======
          $query= "SELECT requestslist.requestNo,requestslist.requestId,requestslist.userId,requestslist.status,requestslist.description,requesttypes.details FROM requestslist JOIN requesttypes ON requestslist.requestId=requesttypes.requestId ORDER BY requestNo ";
>>>>>>> 62ed51641eaf598cd9862c1f9b103c94a39163bf
          $result= mysqli_query($connection,$query);
          
          //Genetrating a Job Description table if jobs any are submitted

          if ($result-> num_rows > 0){?>
          <div class="intro">
              <!--<h1 style="color:gray;">සාදරයෙන් පිළිගනිමු </h1>-->
              
          </div>
          <div class="limiter">
          <div class="container-table100">
          <div class="wrap-table100">
				                <div class="table100">
					                <table id="editable_table">
						                <thead>
                                <tr class="table100-head">
                                <th class="column1">Request No</th>
                                <th class="column1">Request ID</th>
                                <th class="column1">Request Type</th>
                                
                                <th class="column1">User ID</th>
                                <th class="column1" >Status</th>
                                <th class="column1" >Description</th>
                                </tr>
					                  </thead>
						                <tbody>
            
            <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr ><td class='column1' >".$row["requestNo"].
                     "</td><td class='column1'>" .$row["requestId"].
                     "</td><td class='column1'>".$row["details"].
                     "</td><td class='column1'>".$row["userId"].
                     "</td><td class='column1'>".$row["status"] . 
                     "</td><td class='column1'>".$row["description"].
                     "</td></tr>";
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
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'TableEditAction.php',
      columns:{
       identifier:[0, "requestNo"],
       editable:[[4, 'status'], [5, 'description']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.requestNo).remove();
       }
      }
     });
 
});  
 </script>
