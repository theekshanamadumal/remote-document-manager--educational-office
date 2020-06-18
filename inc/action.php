
//action.php
<?php require_once('connection.php');?>
<?php
$input = filter_input_array(INPUT_POST);

$status= mysqli_real_escape_string($connection, $input["status"]);
$description = mysqli_real_escape_string($connection, $input["description"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE tbl_user 
 SET status = '".$status."', 
 description = '".$description."' 
 WHERE userId = '".$input["userId"]."'
 ";

 mysqli_query($connection, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM tbl_user 
 WHERE userId = '".$input["userId"]."'
 ";
 mysqli_query($connection, $query);
}

echo json_encode($input);

?>