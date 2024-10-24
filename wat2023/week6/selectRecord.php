
<?php
//Make connection to database
include 'connection.php';
//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';
//run query to select all records from customer table
$query="SELECT * FROM customer";
//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

echo '<h2>Select ALL from the Customer Table with Age > 22</h2>';
$qry2= "SELECT * FROM customer where Age > 22";
$result=mysqli_query($connection, $qry2);
while ($row=mysqli_fetch_assoc($result)){
    echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].$row['Age'].'<br />';
    }

    echo '<h2>Select ALL from the Customer Table with Age >=22</h2>';
    $qry2= "SELECT * FROM customer where Age >= 22";
    $result=mysqli_query($connection, $qry2);
    while ($row=mysqli_fetch_assoc($result)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].$row['Age'].'<br />';
        }

    echo '<h2>Select Males from the Customer Table list by age descending</h2>';
    $qry2= "SELECT * FROM customer where Gender = 'M' order by Age desc" ;
    $result=mysqli_query($connection, $qry2);
    while ($row=mysqli_fetch_assoc($result)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].$row['Age'].'<br />';
        }

        echo '<h2>Select ALL from the Customer Table with a in the first name</h2>';
        $qry2= "SELECT * FROM customer where FirstName like '%a%' ";
        $result=mysqli_query($connection, $qry2);
        while ($row=mysqli_fetch_assoc($result)){
            echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].$row['Age'].'<br />';
            }

?>