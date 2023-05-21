<?php

include 'header.php';

if ($_SESSION) {
    // remove all session variables
    session_unset();
    echo "Session variables are unset and You are now logged out of the session";
}
else {
    echo "You are now logged out of the session";
}


include 'footer.php';
?>

