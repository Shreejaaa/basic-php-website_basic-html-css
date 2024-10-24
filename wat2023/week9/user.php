<?php
include("connection.php");
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit();
}
?>
<a href = "logout.php">Logout</a>
<style>
    .items {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .items > div {
        flex-basis: calc(20% - 10px); /* 20% for each item with 10px margin */
        margin: 10px;
        text-align: center;
    }

    .items > div img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
</style>
<form action="" method="GET">
            <label for="category"></label>
            <select name="category" id="">
                <option value="">Select category</option>
                <option value="Dress">Dress</option>
                <option value="Skirt">Skirt</option>
                <option value="Tshirt">Tshirt</option>
                <option value="Pant">Pant</option>
            </select>

            <label for="search"></label>
            <input type="text" name="search" placeholder="item name">

            <label for="sort"></label>
            <input type="radio" name="sort" value="name" checked> Name
            <input type="radio" name="sort" value="price"> Price

            <input type="submit" name="submit" value="Submit">
        </form>
     

        <?php
        include("connection.php");

     
        $sql = "SELECT * FROM product WHERE 1 = 1";//AND use garda duitai term true banauna

      
        if (isset($_GET["submit"])) {
            $selected = $_GET['category'];
            $searching = $_GET['search'];
            $sorting = $_GET["sort"];

            if (!empty($selected)) {
                $sql .= " AND category = '$selected'";
            }

            if (!empty($searching)) {
                $sql .= " AND (name LIKE '%$searching%' OR category LIKE '%$searching%')";
            }

            if (!empty($sorting)) {
                $sql .= " ORDER BY $sorting";
            }
        }
        

        $query = mysqli_query($conn, $sql);


        if (mysqli_num_rows($query) > 0) 
        {
            echo "<div class='items' style='display: flex; justify-content: space-between'>";
            while ($table = mysqli_fetch_array($query)) {
                echo "<div>";
                $image = $table['image'];
                echo "<img src=image/$image width=225px height=300px><br>";
                echo "Name: " . $table['name'] . "<br>";
                echo "Price: " . "£" . $table['price'] . "<br>";
                echo "Category: " . $table['category'] . "<br>";
                echo "</div>";
               
            }
            echo "</div>";
        } else {
            echo "<p>No items found.</p>";
        }
    
        ?>

    </div>