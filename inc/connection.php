<?php
//$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname)


$servername='localhost';
$username='root';
$passwrd='';
$database='deon';

$connection = mysqli_connect($servername,$username,$passwrd,$database);
//if ($connection){echo "connected";}
if ($connection->connect_error){
    echo "MySQL COnnection Error";
    die("Connection failed: " . $conn->connect_error);
}

//mysqli_close($connection);
// echo'connection closed'
//session_start();
?>