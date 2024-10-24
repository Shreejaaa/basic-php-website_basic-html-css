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
    
    
    if (isset($_SESSION['txtUser']))
     {
      
        echo 'Welcome, ' . $_SESSION['txtUser'] . '!<br>';
        
        echo '<a href="protected.php">Protected Page</a><br>';
        echo '<a href="logout.php">Logout</a>';
    } 
    else 
    {
      
        include ("loginform.php");
        if (isset($_SESSION['error'])) 
        {
            echo $_SESSION['error'];
            unset($_SESSION['error']); 
        }
    }
?>
  
</body>
</html>