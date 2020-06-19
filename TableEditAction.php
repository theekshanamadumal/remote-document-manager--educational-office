<?php require_once('inc/connection.php');

$input = filter_input_array(INPUT_POST);

$status = mysqli_real_escape_string($connection,$input["status"]);
$description = mysqli_real_escape_string($connection,$input["description"]);

/*Edit Record Function*/
if($input["action"]=='edit'){
    $query = "UPDATE requestslist SET status ='".$status."',description='".$description."' WHERE requestNo ='".$input["requestNo"]."'";

    mysqli_query($connection, $query);
    header("location: adminUI");

}
/* Delete Record Function*/
if($input["action"]=='delete'){
    $query = "DELETE FROM requestslist WHERE requestNo ='".$input["requestNo"]."'";
    
    mysqli_query($connection, $query);
    header("location: adminUI");
}


echo json_encode($input);
?>