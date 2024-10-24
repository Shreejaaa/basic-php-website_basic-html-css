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
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="GET" action="" >
<fieldset>
		<legend>
			Login
		</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
</fieldset>
    </form>

    <?php
    
    if(isset($_GET['txtEmail']) && isset($_GET['txtPass'])){
    $email = $_GET["txtEmail"];
    $password = $_GET["txtPass"];
    echo"Email: ".$email." Password: ".$password;
    }
    ?>
<h2>Login Form using POST</h2>
<form method="POST" action="" >
<fieldset>
		<legend>
			Login
		</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
</fieldset>
    </form>

    <?php
  
    if(isset($_POST['loginSubmit'])){
        // Check if email is not empty
        if(!empty($_POST['txtEmail'])){
            $email = $_POST['txtEmail'];

            // Validate email using filter function
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $password = $_POST['txtPass'];
                echo "<p>Email: $email Password: $password</p>";
            } else {
                echo 'Invalid email format';
            }
        } else {
            echo 'Email must not be empty';
        }
    }
?>


<h2>Comments Form using POST</h2>
    <form method="post" action="">
        <fieldset>
            <legend>Comments</legend>
            <label for="commentEmail">Email: </label>
            <input type="text" name="commentEmail" value="<?php echo isset($_POST['commentEmail']) ? $_POST['commentEmail'] : ''; ?>" /><br />
            <!-- <textarea rows="4" cols="50" name="commentText"></textarea><br /> -->
            <label for="commentText">Comment:</label><br />
            <textarea rows="4" cols="50" name="commentText"><?php echo isset($_POST['commentText']) ? $_POST['commentText'] : ''; ?></textarea><br />
            <!-- <input type="text" name="commentText" value="" /><br /> -->
            <label for="checkConfirm">Click to Confirm: </label>
            <input type="checkbox" name="checkConfirm" value="agree"><br />
            <input type="submit" value="Submit" name="commentSubmit"/>
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <!-- <?php
        if(isset($_POST['commentSubmit'])){
            $commentEmail = $_POST['commentEmail'];
            $commentText = $_POST['commentText'];
            
            // Check if checkbox is checked
            $confirm = (isset($_POST['checkConfirm'])) ? 'Agreed' : 'Not Agreed';

            echo "<p>Email: $commentEmail<br />Comments: $commentText<br />Confirm: $confirm</p>";
        }
    ?> -->

    <?php
        if(isset($_POST['commentSubmit'])){
            // Check if email is not empty
            if(!empty($_POST['commentEmail'])){
                $commentEmail = $_POST['commentEmail'];

                // Validate email using filter function
                if(filter_var($commentEmail, FILTER_VALIDATE_EMAIL)){
                    $commentText = $_POST['commentText'];
                    
                    // Check if checkbox is checked
                    $confirm = (isset($_POST['checkConfirm'])) ? 'Agreed' : 'Not Agreed';

                    echo "<p>Email: $commentEmail<br />Comments: $commentText<br />Confirm: $confirm</p>";
                } else {
                    echo 'Invalid email format';
                }
            } else {
                echo 'Email must not be empty';
            }
        }
    ?>


<form action="" method="POST" name="form" enctype="multipart-form/data">
        <fieldset>
        <legend>Without tax calculator</legend>
       After Tax Price: <input type="text" name="tax" >
       Tax Rate: <input type="text" name="rate" >
       <input type="submit" name="submits" >
       <input type="reset" name="clear" value="clear" >

        </fieldset>
    </form>
    <?php



if(isset($_POST["submits"]))
{
    $after = $_POST["tax"];
    $rate = $_POST["rate"];
  
if(empty($after) or empty($rate))
{
    echo"Field should not be empty";
}

else if(!preg_match('/^\d+(\.\d{2,})?$/', $after))
{
    echo "Please enter the price in the format \"9.99\".";
}

else if($after < 0 or $rate < 0)
{
    echo"Please enter a whole number for tax rate";
}

else
{
    $before =  number_format((100 * $after)/(100 + $rate),2);
    echo"Price before tax = £$before";

}
}

?>
<h1>Passing Data Appended to an URL</h1>
	<h2>Pick a category</h2>
	<a href="forms.php?cat=Films">Films</a>
	<a href=" forms.php?cat=Books">Books</a>
	<a href=" forms.php?cat=Music">Music</a>
    <?php
    if(isset($_GET["cat"]))
    {
      echo"<br>The category chosen is ". $_GET["cat"];  
    }



?>








    
</body>
</html>