<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>
<body>
  <header>
    <div class="company-logo">
    </div>
    <div class="user-info">
      <p>Home | Login</p>
    </div>
  </header>
  <main>
    <section class="registration-form">
      <h2>REGISTRATION</h2>
      <form action="process_registration.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" name="confirm_password" id="confirm_password" required>
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
          <button type="reset">Reset</button>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <p>Copyright © 2017</p>
  </footer>
</body>
</html>
