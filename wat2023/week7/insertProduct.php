<?php

include 'connection.php';

if(isset($_POST['submit'])) {
    
    $productname=$_POST['productname'];
    $productprice=$_POST['productprice'];

    $filename =  $_FILES["filename"]["name"];
    $tempname =  $_FILES["filename"]["tmp_name"];
    $folder="images/".$filename;
    move_uploaded_file($tempname,$folder);


$query="INSERT INTO products (productname,productprice,productimagename) VALUES
 ('$productname','$productprice','$folder')";

if(mysqli_query($connection,$query)){
    header("Location:crud.php");
}
else{
    echo "Query could not be executed".mysqli_error($connection);
}

    }
		
?>
