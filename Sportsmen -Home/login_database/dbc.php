<?php 

$dbServerName ="localhost";
$dbUserName ="root";
$dbPassword ="";
$dbName ="sportsmans";
$port ="3306";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName,$port );

if(!$conn){

    die("Connection failed :" .mysqli_connect_error());
}


?>
