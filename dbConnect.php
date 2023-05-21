<?php
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
    
    //$heading='test4';
    //$tripDate =  '2023-05-23';
    //$duration =  '6';
    //$summary = 'Testing the input4444.';
    
        //$sql="INSERT INTO TripInfo (`Heading`, `tripDate`, `Duration`, `Summary`) VALUES ('$heading', '$tripDate', //'$duration', '$summary')";
    //echo "$sql \n";
 
    // var_dump("$sql \n");
 
    //if ($conn->query($sql)) {
    //    echo "record inserted successfully";
    //} else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    //}
    
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
    
    
?>

