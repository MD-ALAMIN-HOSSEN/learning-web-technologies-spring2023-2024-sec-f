<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
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
        <li class="active"><a href="#">Edit Profile</a></li>
        <li><a href="#">Change Profile Picture</a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <section class="edit-profile">
      <h2>Edit Profile</h2>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <input type="radio" name="gender" id="male" value="male" required> Male
          <input type="radio" name="gender" id="female" value="female" required> Female
          <input type="radio" name="gender" id="other" value="other" required> Other
        </div>
        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
          <input type="date" name="date_of_birth" id="date_of_birth" required>
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
