<?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";
$name = $email = $username = $password = $confirmPassword = $gender = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Email validation
 $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Confirm Password validation
        if ($password = $_POST["password"]==$_POST["confirm_password"]) {
            header('location: Login.php');           
            exit();

        }
    
        header('location: Registration.php');
    }
 }
?>