<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Halifax Canoe and Kayak</title>
</head>
<body>
    <!-- the Header Bar code-->
        <header class="header_bar">
            <img id="nav_toggle_button" class="header_button" src="images/hamburger.png">
            <h1>Halifax Canoe and Kayak</h1>
            <img src="images/paddle-white.png" alt="Logo with two white paddle" >
            
        </header>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="script.js"></script>
    
    <!-- Canoe Image container-->
    <div class="container">
        <img src="images/canoe.jpg" alt="Picture of canoe" width = 100% >
        <div class="centered">Come Experience Canada</div>
    </div>
    <!-- Code for the page content-->
    <div>
        <h2>Upcoming Adventures</h2>
        
        <?php
        //database server variables
        $servername = "localhost";
        $username = "id20787465_tripaccess";
        $password = "tripDetails@23";
        $database = "id20787465_tripdata";
        //$port = "3306";
        
        //create connection using PDO
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            
            $stmt = $conn->prepare("SELECT * FROM TripInfo");

            if ($stmt->execute()) {
                $trips = $stmt->fetchAll();
                foreach($trips as $tripData) {
                    //echo $tripData['ID'];
        ?>
        <h3><?php echo $tripData['Heading']; ?></h3>
        <p>Date:<?php echo $tripData['tripDate']; ?><br>Duration: <?php echo $tripData['Duration']; ?></p>
        <h4>Summary</h4>
        <p><?php echo $tripData['Summary']; ?></p>
        <?php
            } //close for foreach
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } //close for if-else
            
        $conn->close();
        } catch(PDOException $e) {    
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>