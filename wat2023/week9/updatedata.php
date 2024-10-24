<?php
include("connection.php");

if (isset($_GET['updateid'])) {
    $updateid = $_GET['updateid'];

    $sql = "SELECT * FROM product WHERE id=$updateid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die('Record not found');
    }

 
    echo '<form method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="updateid" value="' . $updateid . '">
            <label>Updated Product Name:</label><br>
            <input type="text" name="updatedname" value="' . $row['name'] . '" required><br>
            <label>Updated Product Price:</label><br>
            <input type="text" name="updatedprice" value="' . $row['price'] . '" required><br>
            <label>Updated Category:</label><br>
            <select name="updatedcategory" required>
                <option value="Dress" ' . ($row['category'] === 'cake' ? 'selected' : '') . '>Dress</option>
                <option value="Skirt" ' . ($row['category'] === 'Skirt' ? 'selected' : '') . '>Skirt</option>
                <option value="Tshirt" ' . ($row['category'] === 'Tshirt' ? 'selected' : '') . '>Tshirt</option>
                <option value="Pant" ' . ($row['category'] === 'Pant' ? 'selected' : '') . '>Pant</option>
            </select><br>
            <label>Updated Image:</label><br>
            <input type="file" name="updatedimage"><br>
            <input type="submit" name="update" value="Update">
          </form>';

    // Include the update code (similar to what you have in your original code)
    if (isset($_POST["update"])) {
        // Process the update here based on the submitted form values
        $updatedname = $_POST["updatedname"];
        $updatedprice = $_POST["updatedprice"];
        $updatedcategory = $_POST["updatedcategory"];

        // Handle image upload
        if ($_FILES["updatedimage"]["name"] != "") {
            $updatedfilename = $_FILES["updatedimage"]["name"];
            $updatedtempname = $_FILES["updatedimage"]["tmp_name"];
            $updatedfolder = $updatedfilename;
            move_uploaded_file($updatedtempname, $updatedfolder);
        } else {
            // If no new image is provided, use the existing image path
            $updatedfolder = $row['image'];
        }

        $sql = "UPDATE product 
                SET name='$updatedname', price='$updatedprice', category='$updatedcategory', image='$updatedfolder' 
                WHERE id=$updateid";

        $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if ($qry) {
            
            echo"<script>window.location.href = 'admin.php';</script>";
        }
    }
} else {
    echo 'Invalid request';
}

mysqli_close($conn);
?>