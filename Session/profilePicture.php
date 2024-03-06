<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Profile Picture</title>
</head>
<body>
  <header>
    <div class="company-logo">
      </div>
    <div class="user-info">
      <p>Logged in as Bob | <a href="#">Logout</a></p>
    </div>
  </header>
  <main>
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">View Profile</a></li>
        <li><a href="#">Edit Profile</a></li>
        <li class="active"><a href="#">Change Profile Picture</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <section class="change-profile-picture">
      <h2>Change Profile Picture</h2>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">
          <div class="profile-pic">
            </div>
          <span>Choose File</span>
          <input type="file" name="fileToUpload" id="fileToUpload">
        </label>
        <input type="submit" value="Submit" class="submit-button">
      </form>
    </section>
  </main>
  <footer>
    <p>Copyright © 2017</p>
  </footer>
</body>
</html>
