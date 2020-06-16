<?php
//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname)
error_reporting(E_ALL);
$servername='localhost';
$username='root';
$passwrd='';
$database='deon';

$connection = mysqli_connect($servername,$username,$passwrd,$database);
//if ($connection){echo "connected";}
if ($connection->connect_error){
    echo "MySQL COnnection Error";
}
//mysqli_close($connection);
// echo'connection closed'

?>