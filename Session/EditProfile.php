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
        <div class=" div-main">
            <fieldset>
                <legend><h2>Edit Profile</h2></legend>
                <form action="editprofileCheck.php" method="post" >
                    <div >
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div >
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div >
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" id="male" value="male" required> Male
                        <input type="radio" name="gender" id="female" value="female" required> Female
                        <input type="radio" name="gender" id="other" value="other" required> Other
                    </div>
                    <div >
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" required>
                    </div>
                    <div >
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>

</body>
<footer>
    <p>Copyright © 2017</p>
</footer>

</html>