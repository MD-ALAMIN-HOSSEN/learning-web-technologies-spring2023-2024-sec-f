<?php
session_start();
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validUsername = "bob";
    $validPassword = "123";

    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername == $validUsername && $inputPassword == $validPassword) {

        $_SESSION['flag'] = "true";
        header('Location: LoggedInDashboard.php');
        exit();
    } else {
        header('location: Login.php'); 
    }
}
?>