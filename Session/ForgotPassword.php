<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
</head>
<body>
  <header>
    <div class="company-logo">
      </div>
    <div class="user-info">
      <p>Home | Registration</p>
    </div>
  </header>
  <main>
    <section class="forgot-password">
      <h2>FORGOT PASSWORD</h2>
      <form action="process_forgot_password.php" method="post">
        <div class="form-group">
          <label for="email">Enter Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
      <p class="link">
        <a href="#">Back to Login</a>
      </p>
    </section>
  </main>
  <footer>
    <p>Copyright © 2017</p>
  </footer>
</body>
</html>
