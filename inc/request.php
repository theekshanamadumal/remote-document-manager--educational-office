 <?php
            
            if (isset($_POST['Request'])) {
            require_once('inc/connection.php');
            //include_once("inc/head.php"); 
            //echo "hbdh";
            if(isset($_SESSION['loginID'])){
            $query1="select * from requestslist ORDER BY requestNo DESC LIMIT 1";
                $result1= mysqli_query($connection,$query1);
            
                $details=mysqli_fetch_assoc($result1);
                $lastreqNo=$details['requestNo'];
                //echo $lastreqNo;
                $newNo=$lastreqNo+1;
                //echo $newNo;
                $id=$_SESSION['loginID'];
                //echo $id;
                $query="INSERT INTO requestslist VALUES('$newNo','$variable','$id','new','')";
                
                $result= mysqli_query($connection,$query);
                if ($result1){
                  echo "<div class='container'> <div class='alert alert-success alert-dismissible '>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <strong>Success!</strong> Request submitted successfully.
                </div></div>";
                
                }
                else{
                  echo "<div class='container'> <div class='alert alert-danger alert-dismissible '>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  <strong>Danger!</strong> Unable to submit request check whether you qualify as an candiate for the request.
                </div></div>";
                }
              }
              else{
                echo "<div class='container'> <div class='alert alert-warning alert-dismissible '>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Warning!</strong> Must be logged in inoder to submit request.
                </div></div>";
                
              }
            }
            ?>