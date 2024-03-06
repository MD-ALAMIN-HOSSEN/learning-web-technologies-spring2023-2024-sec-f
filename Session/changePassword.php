<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
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
        <li><a href="#">Change Profile Picture</a></li>
        <li class="active"><a href="#">Change Password</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <section class="change-password-form">
      <h2>Change Password</h2>
      <form>
        <div class="form-group">
          <label for="current_password">Current Password:</label>
          <input type="password" name="current_password" id="current_password" required>
        </div>
        <div class="form-group">
          <label for="new_password">New Password:</label>
          <input type="password" name="new_password" id="new_password" required>
        </div>
        <div class="form-group">
          <label for="retype_new_password">Retype New Password:</label>
          <input type="password" name="retype_new_password" id="retype_new_password" required>
        </div>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <p>Copyright © 2017</p>
  </footer>
</body>
</html>
