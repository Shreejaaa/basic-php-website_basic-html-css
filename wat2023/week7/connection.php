<?php 
$hostname = "localhost";//"localhost:3307";
$username = "root";
$password= "";
$databaseName = "session"; 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>
