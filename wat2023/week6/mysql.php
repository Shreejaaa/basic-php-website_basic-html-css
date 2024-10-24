<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insertRecord.php" method="POST">
        <fieldset>
            <legend>Enter Customer Details</legend>
            <label>First Name: </label>
            <input type="text" name="firstName"><br><br>
            <label>Surname: </label>
            <input type="text" name="surname"><br><br>
            <label>Email: </label>
            <input type="text" name="email"><br><br>
            <label>Password: </label>
            <input type="text" name="password"><br><br>
            <label>Gender</label>
            <select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
            <br><br>
            <label>Age: </label>
            <input type="text" name="age"><br><br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
<?php
    
	include 'selectRecord.php';
?>

</body>
</html>

