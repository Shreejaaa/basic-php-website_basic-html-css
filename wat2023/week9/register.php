<?php
    $allerror = $uerr = $eerr = $aerr = $perr = $terr = $fnerr = $lnerr = "";



    if(isset($_POST['registerSubmit'])){

        $fname = $_POST['registerFname'];
        $lname = $_POST['registerLname'];
        $uname = $_POST['registerUsername'];
        $email = $_POST['registerEmail'];
        $pass = $_POST['registerPassword'];
        $ageRange = $_POST['registerAge'];



        if(empty($fname) && empty($lname) && empty($uname) && empty($email) && empty($pass) ){
            $allerror = "Please enter all data";
        }
        elseif(empty($fname)){
            $fnerr = "Please enter first name";
        }
        elseif(empty($lname)){
            $lnerr = "Please enter last name";
        }
        elseif(empty($uname)){
            $uerr = "Please enter username";
        }
        elseif(empty($email)){
            $eerr = "Please enter Email";
        }
        elseif(empty($pass)){
            $perr = "Please enter password";
        }
        elseif($ageRange=="null"){
            $aerr = "Please choose age";
        }
        elseif(!(preg_match("/^[a-zA-Z]*$/", $fname))){
            $fnerr = "First name must contain alplabet characters only";
        }
        elseif(!(preg_match("/^[a-zA-Z]*$/", $lname))){
            $lnerr = "Last name must contain alplabet characters only";
        }
        elseif(!(preg_match("/^[a-zA-Z0-9]*$/", $uname))){
            $uname = "Username should be alpha numeric";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $eerr = "Please enter Valid email";
        }
        elseif(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',$pass )){
            $perr = "Password should contain at least one uppercase letter, one lowercase letter, and a number";
        }
        elseif(!isset($_POST['registerTerms'])){
            $terr = "Please agree to our terms and conditions";
        }
        else{
            $pass1 = md5($pass);            
            $stmt = "INSERT INTO users (fname, lname, uname, email, pass, age) VALUES ('$fname', '$lname', '$uname', '$email', '$pass1', '$ageRange' ) ";

            include('connection.php');
            $query = mysqli_query($conn, $stmt);

            if($query){
                echo "<script>window.location.href = 'login.php';</script>";
             }
            else{
                 echo "Connection error! Something went wrong";
            }
        }
    }
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

        <p>Register Form</p>
        <div class="error"> <?php echo $allerror ?> </div>

        <form method="POST" action="" >            
            <div class="error"> <?php echo $fnerr ?> </div>
            <label >First Name:</label>
            <input type="text" name="registerFname" value="<?php if(isset($_POST['registerFname'])){ echo $_POST['registerFname']; } ?>"><br><br>
            
            <div class="error"> <?php echo $lnerr?> </div>
            <label >Last Name:</label>
            <input type="text" name="registerLname" value="<?php if(isset($_POST['registerLname'])){ echo $_POST['registerLname']; } ?>"><br><br>


            <div class="error"> <?php echo $uerr ?> </div>
            <label>Username: </label>
            <input type="text" name="registerUsername" value="<?php if(isset($_POST['registerUsername'])){ echo $_POST['registerUsername']; } ?>"  ><br><br>
            

            <div class="error"> <?php echo $eerr ?> </div>
            <label>Email: </label>
            <input type="email" name="registerEmail" value="<?php if(isset($_POST['registerEmail'])){ echo $_POST['registerEmail']; } ?>"><br><br>

            <div class="error"> <?php echo $perr ?> </div>
            <label>Password: </label>
            <input type="password" name="registerPassword" value="<?php if(isset($_POST['registerPassword'])){ echo $_POST['registerPassword']; } ?>"><br><br>

            <div class="error"> <?php echo $aerr ?> </div>
            <label>Choose Age Range: </label>
            <Select name="registerAge" >
                <option value="null">Choose Age:</option>
                <option value="0-5" <?php if(isset($ageRange)){ if($ageRange == "0-5"){   echo "selected"; } } ?>>0-5</option>
                <option value="5-20" <?php if(isset($ageRange)){ if($ageRange == "5-20"){   echo "selected"; } } ?>  >5-20</option>
                <option value="20-50"  <?php if(isset($ageRange)){ if($ageRange == "20-50"){   echo "selected"; } } ?> >20-50 </option>
                <option value="50-80"  <?php if(isset($ageRange)){ if($ageRange == "50-80"){   echo "selected"; } } ?> >50-80</option>
                <option value="80-100"  <?php if(isset($ageRange)){ if($ageRange == "80-100"){   echo "selected"; } } ?> >80-100</option>
            </Select><br><br>
            

            <div class="error"> <?php echo $terr?> </div>
            <input type="checkbox" name="registerTerms" <?php if(isset($_POST['aterms'])){ echo "Checked"; } ?> > Click to agree to the terms and conditions
            <br><br>

            <input type="submit" name="registerSubmit" value="Register" />
        </form>
</body>
</html>