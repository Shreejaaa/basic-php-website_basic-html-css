<?php
$h = "localhost";//"localhost:3307";
$u = "root";
$p = "root";//nothing no root just "";
$db = "session";
$conn = mysqli_connect($h, $u, $p, $db) or exit("Unable to connect to database");
?>