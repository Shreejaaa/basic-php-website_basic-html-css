<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4</title>
</head>
<body>
    <?php
    echo"<h1>Selection</h1>";
    echo"Q.no 2 <br>";
    $day = date('l'); //that is a lower case L
	echo 'It\'s '.$day . '.';
    echo"<br><br>";

    echo"Q.no 3<br>";

    $day = date('l');
    if($day == "Wednesday")
    {
        echo"It's midweek.";
    }
    else
    {
        echo "It's not a midweek.";

    }
    echo"<br><br>";
    echo"Q.no 4<br>";

date_default_timezone_set('Asia/Kathmandu');
$morning = date("H");

    if($morning > 12 && $morning < 18)
    {
        echo"Good Afternoon";
    }
    elseif($morning < 12)
    {
        echo"Good Morning";
    }
    else
    {
        echo"Good Night";
    }

    echo"<br><br>";
    echo"Q.no 5<br>";
    $pass = "password";
    $length = strlen($pass);
    if($length > 4 and $length < 10)
    {
        echo"Password length is valid.";
    }
    else
    {
        echo"Password length is invalid.";
    }
    echo"<br>";
    if($pass == "password" or $pass == "username")
    {
        echo"Password valid.";
    }
    else
    {
        echo "Password invalid.";
    }
    echo"<br><br>";
     $ticket_price = 25;
     $age = 15;
     $membership = true;
     if($membership)
     {
        if($age <= 12)
        {
            $discount = ((50+10)/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }
        else if($age <= 18 )
        {
            $discount = ((25+10)/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }
        else if($age >= 65)
        {
            $discount = ((25+10)/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }


     }

     else
     {
        if($age <= 12)
        {
            $discount = (50/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }
        else if($age <= 18 )
        {
            $discount = (25/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }
        else if($age >= 65)
        {
            $discount = (25/100)* $ticket_price;
            $finalCost =  $ticket_price - $discount;
        }

     }
     echo"Initial Ticket Price: $ticket_price<br>";
     echo"Age: $age<br>";
     echo"Membership: ".($membership ? "Yes":"No")."<br>";
     echo"Final Ticket Price: $finalCost<br>";

     
    
    echo"<h1>Arrays</h1>";
    echo"<h2>Simple Arrays</h2>";
    echo"Q.no 1<br>";

    $products= array("t-shirt" , "cap", "mug");
    print_r($products);

    echo"<br><br>";
    echo"Q.no 2<br>";
    $products[1] = ("shirt");
    print_r($products);

    echo"<br><br>";
    echo"Q.no 3<br>";
    $products[3] =("skirt");
    print_r($products);
    echo"<br>";
    echo"The item at index[2] is: $products[2]<br>";
    echo"The item at index[3] is: $products[3]<br>";

    echo"<h3>Associative Arrays</h3>";
  
    $customer = array('CustID'=>12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
    print_r($customer);
    echo"<br>";
    $customer['CustAge'] = 23;
    $customer['CustEmail'] = 'sarah@gamil.com';
    print_r($customer);
    echo"Items in my customer array<br>";
	echo"The item at index [CustName] is: ". $customer['CustName'];
    echo"<br>";
	echo"The item at index [CustEmail] is: ".$customer['CustEmail'];

    echo"<h3>Multi-Dimensional Arrays</h3>";
    $stock = array(
        'id1' => array(
            'description' => 't-shirt',
            'price' => 9.99,
            'stock' => 100,
            'colour' => array('blue', 'green', 'red')
        ),
        'id2' => array(
            'description' => 'cap',
            'price' => 4.99,
            'stock' => 50,
            'colour' => array('blue', 'black', 'grey')
        ),
        'id3' => array(
            'description' => 'mug',
            'price' => 6.99,
            'stock' => 30,
            'colour' => array('yellow', 'green', 'pink')
        )
    );
    
    // Display the entire array
    echo "<pre>";
    print_r($stock);
    echo "</pre>";
    
    // Display the order details
    echo "<p><i>This is my order:</i></p>";
    
    foreach ($stock as $item) {
        echo "<p>{$item['colour'][1]} {$item['description']}</p>";
        echo "<p>Price: £{$item['price']}</p>";
    }
    
    echo "<h2>Multi-Dimensional Associative Arrays</h2>";
    
    // Display the order details again
    echo "<p><i>This is my order:</i></p>";
    
    foreach ($stock as $item) {
        echo "<p>{$item['colour'][1]} {$item['description']}</p>";
        echo "<p>Price: £{$item['price']}</p>";
    }
    echo"<br>";
    echo"<h1>Loops</h1>";
    echo"<h2>While Loops</h2>";
  
    echo"Q.no 2<br>";
    $counter = 1;
    while($counter < 6)
    {
        echo"Count= $counter<br>";
        $counter++;
    }
    echo"<br>";
    echo"Q.no 3,4<br>";
     $shirtPrice = 9.99;
     $counter = 1;
     while($counter <=10)
     {
        $totalPrice = $shirtPrice * $counter; 
        
        echo" $counter -£$totalPrice<br>";
        $counter++;
     }
     echo"<br>";
    echo"Q.no 5<br>";

echo "<table border=1>";
echo "<tr>";
echo"<th> Quantity </th>";
echo"<th> Price </th>";
echo "</tr>";

$shirtPrice = 9.99;
$counter = 1;

while ($counter <= 10) {
    $totalPrice = $shirtPrice * $counter;
    echo "<tr>";
    echo "<td>" . $counter . "</td>";
    echo "<td>" ."£".$totalPrice . "</td>";

    echo "</tr>";
    $counter++;
}

echo "</table>";
echo"<h2> For Loops </h2>";

echo"Q.no 3,4<br>";

$names = array("Shreeja", "Rashi", "Shreeyam", "Utsukta", "Purnima" );
for($i = 0; $i<5 ; $i++)
{
    echo$names[$i]."<br>";
}
 
echo"<h2> Foreach Loops </h2>";
echo"Q.no 5<br>";
$names = array("Shreeja"=> "c7536778", "Rashi"=> "c7520000", "Shreeyam"=> "c7530000", "Utsukta"=> "c7523893", "Purnima"=> "c78657493" );
foreach ($names as $k => $v)
{
    echo" Name: $k ID: $v <br>";
}
echo"<br>";
echo"Q.no 6 <br>";
$city= array('Peter'=>'LEEDS' , 'Kat '=>'bradford', 'Laura'=>'wakeFIeld');
print_r($city);
echo"<br>";
foreach($city as $k => $v)
{
    $city[$k] = ucfirst(strtolower($v));
}
print_r($city);














?>

    
</body>
</html>