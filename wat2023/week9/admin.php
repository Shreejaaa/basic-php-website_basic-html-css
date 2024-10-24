<?php
include("connection.php");
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:login.php");
    exit();
}
?>
<a href = "logout.php">Logout</a>
<?php

// Create operation
if (isset($_POST["submit"])) {
    $productname = $_POST["productname"];
    $productprice = $_POST["productprice"];
    $productcategory = $_POST["productcategory"];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = $filename;
    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO product(name, price, category, image) 
            VALUES('$productname', '$productprice', '$productcategory', '$folder')";

    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($qry) {
        echo "<h1>Data Inserted</h1>";
    }
}

// Read operation
$sql = "SELECT * FROM product";
$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo "<table border='1' style='padding: 130px;'>";
echo "<tr><th>Image</th> <th>Product Name</th> <th>Price</th> <th>Category</th> <th>Update/Delete</th></tr>";

while ($row = mysqli_fetch_array($qry)) {
    echo "<tr>";
    
    $image = $row['image'];
    echo "<td><img src=image/$image width=225px height=300px><br></td>";
    // echo "<td><img src='" . $row['image'] . "' height='100px' width='100px'></td>";


    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['category'] . "</td>";
    $id = $row['id'];
    echo '<td><button><a href="updatedata.php?updateid=' . $id . '">Update</a></button>
      <button><a href="?deleteid=' . $id . '">Delete</a></button></td>';

    echo "</tr>";
}

echo "</table>";

// Update operation - Update data in the database
if (isset($_POST["update"])) {
    $updateid = $_POST["updateid"];
    $updatedname = $_POST["updatedname"];
    $updatedprice = $_POST["updatedprice"];
    $updatedcategory = $_POST["updatedcategory"];

    $sql = "UPDATE product 
            SET name='$updatedname', price='$updatedprice', category='$updatedcategory' 
            WHERE id=$updateid";

    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($qry) {
        echo "<h1>Data Updated</h1>";
    }
}

// Delete operation - Delete data from the database
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM product WHERE id=$id";
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($qry) {
        echo"Deleted";
    }
}

mysqli_close($conn);
?>

<!-- HTML form for updating data -->
<form method="post" action="" name="updateForm" enctype="multipart/form-data">
    <fieldset>
        <legend>Add/Update Product</legend>
        <label>Product Name:</label><br>
        <input type="text" name="productname" required><br>

        <label>Product Price:</label><br>
        <input type="text" name="productprice" required><br>

        <label>Category:</label><br>
        <input type="text" name="productcategory" required><br>

        <label>Image to upload:</label><br>
        <input type="file" name="uploadfile"><br>

        <input type="submit" name="submit" value="Insert">
    </fieldset>
</form>
