<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validUsername = "bob";
    $validPassword = "123";

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername == $validUsername && $inputPassword == $validPassword) {

        header('Location: LoggedInDashboard.php');
        exit();
    } else {
        header('location: Login.php'); 
    }
}
?>