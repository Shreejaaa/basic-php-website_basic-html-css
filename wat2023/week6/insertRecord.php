<?php

if(isset($_POST["submit"]))
{
    $first = $_POST["firstName"];
    $last = $_POST["surname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];

    include('connection.php');

    $sql = "INSERT INTO customer(FirstName,LastName,Email,Password,Gender,Age) VALUES('$first','$last', '$email' ,'$pass' ,'$gender' ,'$age')";

    $qry = mysqli_query($connection , $sql) or die(mysqli_error($connection));
    if($qry)
    {
        echo"Record inserted successfully";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }


}

include("mysql.php");



?>