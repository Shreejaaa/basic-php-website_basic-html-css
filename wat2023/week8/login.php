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
include ("init.php");
if(isset($_POST["subLogin"]))
{
    $name = $_POST["txtUser"];
    $pass = $_POST["txtPass"];

    $sql2 = "SELECT * from users
    where username = '$name' and password = '$pass'" ;

    $qry2 = mysqli_query($connection, $sql2) or die(mysqli_error($connection));
    

if ($row = mysqli_fetch_assoc($qry2)) 
{
	$_SESSION['txtUser'] = $name;
    header('location: sessions.php');
    

} else 
{
    $_SESSION['error'] = 'User not recognized';

 
    header('location: sessions.php');
}
}


?>
</body>
</html>


