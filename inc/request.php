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
                  echo "Request is done";
                }
                else{
                  echo "Request is fail";
                }
              }
              else{
                header("location:login.php");
              }
            }
            ?>