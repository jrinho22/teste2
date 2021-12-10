<?php
include_once 'database\conection.php';


// connect to mysql
$connect = connectar();

// mysql select query

$query = "SELECT * FROM table1";


// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two 
$result2 = mysqli_query($connect, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td></tr>";
}

?>