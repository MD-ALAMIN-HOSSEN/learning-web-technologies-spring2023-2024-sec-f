<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Login Registration</title>
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
    <section class="home-banner">
      <h2>X Company</h2>
      <p>Welcome to the X Company website, where we provide exceptional services...</p>
      <a href="#" class="explore-more-button">Explore More</a>
    </section>
    <section class="login-section">
      <h2>Login</h2>
      <form action="process_login.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
          <a href="#">Forgot Password?</a>
        </div>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
      <p class="register-link">
        New user? <a href="#">Register Here</a>
      </p>
    </section>
  </main>
  <footer>
    <p>Copyright © 2017</p>
  </footer>
</body>
</html>
