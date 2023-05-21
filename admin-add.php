<?php

//require 'logout.php';
include 'header.php';

//var_dump($_SESSION);
?>

<html>
    <body>
        <form action="admin-confirm.php" method="POST" required>
            <h1 style="color:black">Admin - Add Adventure</h1>
                <hr class="solid">
                <table>
                <tr><h4>Input details about the Trip</h4></tr>
                <tr> 
                    <label>Heading</label>
                    <input type="text" name="heading" id="heading">
                    <br><br>
                </tr>
                <tr> 
                    <label>Trip Date</label>
                    <input type="date" name="tripDate" id="tripDate">
                    <br><br>
                </tr>
                <tr> 
                    <label>Duration</label>
                    <input type="text" name="duration" id="duration">
                    <br><br>
                </tr>
                <tr> 
                    <label>Summary</label>
                    <input type="text" name="summary" id="summary">
                    <br><br>
                </tr>
            </table>
            <input type="submit" value="Submit">
            
        </form>
        <?php
            include 'footer.php';
            //var_dump($_SESSION);
        ?>
    </body>
</html>