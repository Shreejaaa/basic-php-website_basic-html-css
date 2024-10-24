<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ('init.php');
if(!isset($_SESSION['txtUser'])){
    header ('location:sessions.php');
}
?> 
<p>Any page content that you want to protect can be placed here</p>
<a href="logout.php">Logout Page</a>


</body>
</html>
