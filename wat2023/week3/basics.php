<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>

<?php


echo "<h1> Variables </h1>";
echo"Q.no 1<br>";
$name = 'Shreeyam';
$age = 21;

echo '<b>Hi my name is ' . $name. ' and I am ' .$age. ' years old.</b>';
echo '<br>';

echo"<br><br>";
echo"Q.no 2<br>";
echo "<b>Mi nombre es David y tengo 12 anos de edad. </b>";
echo '<br>';
echo"<br><br>";
echo"Q.no 3<br>";
echo gettype($name); //returns variable data type.
echo '<br>';
echo strlen($name); //returns variable length.
echo '<br>';
echo strtoUpper($name);//change value to uppercase.
echo '<br>';


echo '<h1> Arithmetic </h1>';
echo"Q.no 4<br>";
echo 'First number: ' . $num1 = 9;
echo '<br>';
echo 'Second number: ' . $num2 = 12;
echo '<br>';
echo 'First Number * Second Number = ' . $num1 * $num2 ;
echo '<br>';
echo 'First Number as a percentage of Second Number = ' . ($num1 / $num2 )* 100 .'%';
echo '<br>';
echo 'First Number / Second Number = ' . number_format($num2 / $num1 );
echo '<br>';
echo 'First Number divided by Second Number = ' .number_format($num2 / $num1) .'and Remainder = ' . number_format($num2 % $num1 );
echo '<br>';
echo '<br>';

echo"Q.no 5<br>";
$height_in_meters = 1.5;
$height_in_inches =($height_in_meters *100 )/2.54;
$feet = ($height_in_inches / 12);
$inches = (int)$height_in_inches % 12;
echo'<b>';

echo 'Name: ' .$name;
echo '<br>';
echo '<br>';
echo 'Age: '. $age;
echo '<br>';
echo '<br>';
echo 'Height in meters: ' .$height_in_meters . ' meters';
echo '<br>';
echo '<br>';
echo 'Height in Feet and inches: ' . floor($feet) .' ft ' .$inches .' inch <br>';
echo'</b>';



?>
    
</body>
</html>









