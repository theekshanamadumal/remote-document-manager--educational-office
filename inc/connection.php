<?php
//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname)
error_reporting(E_ALL);
$servername='localhost';
$username='root';
$passwrd='';
$database='userdb';

$connection = mysqli_connect($servername,$username,$passwrd,$database);

if ($connection->connect_error){
    echo "MySQL COnnection Error";
}
//mysqli_close($connection);
// echo'connection closed'

?>