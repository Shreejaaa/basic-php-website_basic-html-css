<?php

include 'connection.php';


if(isset($_GET['id'])) {
    $deleteid = $_GET['id'];


    $query = "DELETE FROM products where productid=$deleteid";

    if(mysqli_query($connection,$query)){      

        if (mysqli_affected_rows($connection) > 0) {
            
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
        else {
           
            echo "Error in query: $query. " . mysqli_error($connection);
            exit ;
        }
    }
    else{
        echo "Error in query".mysqli_error($connection);
    }
}
?>

