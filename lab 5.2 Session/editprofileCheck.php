<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Email validation
 $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
        header('location: LoggedInDashboard.php');
    }
 }
?>