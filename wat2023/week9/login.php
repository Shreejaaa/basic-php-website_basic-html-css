<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: grey;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: grey;
        }
    </style>
</head>
<body>

    <form action="" method="POST" name="login1">
        <legend></legend>
        <input type="text" name="username" placeholder="Username" value="<?php
            if(isset($_POST['username'])){
                echo $_POST['username'];
            }
        ?>">
        <br><br>
        <input type="password" name="password" placeholder="Password" value="<?php
            if(isset($_POST['password'])){
                echo $_POST['password'];
            }
        ?>">
        <br><br>
        Role: <select name="who" id="">
            <option value="1">User</option>
            <option value="0">Admin</option>
        </select>
        <br><br>
        <input type="submit" name="submit">
    </form>


    
        <?php
        if(isset($_POST["submit"]))
        {
            $name= $_POST["username"];
            $password = md5($_POST["password"]);
            $role = $_POST["who"];

            include("connection.php");
            $sql = "SELECT * FROM users where uname = '$name' and pass = '$password' and role = '$role'";
            $query = mysqli_query($conn , $sql) or die(mysqli_error($conn));
            
            $table = mysqli_fetch_assoc($query);

            if ($table) {
                
                if ($role == 1) 
                {
                    $_SESSION["user"]= $name;
                    echo"<script>window.location.href = 'user.php';</script>";
                    exit();
                } 
                elseif ($role == 0) 
                {
                    $_SESSION["admin"]= $name;
                    echo"<script>window.location.href = 'admin.php';</script>";
                    exit();
                }
               

                
            } else {
                echo "Login failed";
            }
        
        }





?>
        