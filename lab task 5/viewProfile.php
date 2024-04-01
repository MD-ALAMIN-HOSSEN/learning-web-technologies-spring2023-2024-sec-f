<?php

    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: Login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoggedInDashboard</title>
    <style>
    header,
    body,
    footer {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }

    .div-main {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
    }

    .flex-container {
        display: flex;
        justify-content: space-between;
    }

    .flex-container-main {
        display: flex;

    }

    .flex-container-main-nav {
        display: flex;
        justify-content: flex-start;
        padding: 20px;
    }
    </style>
</head>

<header>
    <div class="flex-container">
        <h1>X Company</h1>
        <nav>
            Logged in as
            <a href="#">Bob</a> |
            <a href="Logout.php">Logout</a>
        </nav>
    </div>
</header>

<body>
    <div class="flex-container-main">
        <div class="flex-container-main-nav div-main">
            <nav>
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="LoggedInDashboard.php">Dashboard</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="profilePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="account-details div-main">
            <fieldset>
                <legend><h2>PROFILE</h2></legend>
                <form action="" method="">
                   Name         :Bob <br>
                   Email        :bob@aiub.edu <br>
                   Gender       :Male <br>
                   Date of Birth:19/09/1998
                    <a href="EditProfile.php">Edit Profile</a><br>
                    <a href="profilePicture.php">Change</a>
                </form>
            </fieldset>
        </div>
    </div>

</body>
<footer>
    <p>Copyright © 2017</p>
</footer>

</html>