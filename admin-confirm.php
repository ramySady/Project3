<?php

//require 'logout.php';
include 'header.php';
//include 'dbConnect.php';

//session_start();
//set variables from post data
$heading = $_POST['heading'];
$tripDate = $_POST['tripDate'];
$duration = $_POST['duration'];
$summary = $_POST['summary'];

//database server variables
$servername = "localhost";
$username = "id20787465_tripaccess";
$password = "tripDetails@23";
$database = "id20787465_tripdata";
$port = "3306";

//create connection using PDO

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    

    $sql="INSERT INTO TripInfo (`Heading`, `tripDate`, `Duration`, `Summary`) VALUES ('$heading', '$tripDate', '$duration', '$summary')";
     //echo "$sql \n";
     
    // var_dump("$sql \n");
     
    if ($conn->query($sql)) {
        //echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    //$conn->close();
 } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
}

?>

<html>
    <body>
        <h1 style="color:black" >Admin - Confirm</h1>
        <hr class="solid">

        <li><a href="all-adventures.php"><p style="text-align:center">View All Adventures</p></a></li>

        <form action="all-adventures.php" method="POST" required>    
        </form>
        <?php
            include 'footer.php';
            //var_dump($_SESSION);
        ?>
    </body>
</html>