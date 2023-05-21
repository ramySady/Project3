<?php
session_start();
?>

</html>

    <head>
        <html lang="en">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Halifax Canoe and Kayak</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <!-- the Header Bar code-->
        <header class="header_bar">
            <img id="nav_toggle_button" class="header_button" src="images/hamburger.png">
            <h1>Halifax Canoe and Kayak</h1>
            <img src="images/paddle-white.png" alt="Logo with two white paddle" >
            <h4>
            <?php
                    if (isset($_SESSION["current_user"])) {
                    echo $_SESSION["current_user"];
                }
            ?>
            </h4>
            
        </header>

        <form action="logout.php">
            <div style="text-align:right"><a href="logout.php" >Logout</a></div>
        </form>
    </body>
</html>