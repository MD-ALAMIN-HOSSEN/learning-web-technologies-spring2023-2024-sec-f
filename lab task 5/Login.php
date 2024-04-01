<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login </title>
  <style>
    header, body, footer {
      border: 1px solid #ddd; 
      padding: 10px; 
      margin-bottom: 10px; 
    }
    .flex-container {
        display: flex;
        justify-content: space-between;
    }
  </style>
</head>
<header >
    <div class="flex-container">
    <h1>X Company</h1>
    <nav>
      <a href="publicHome.php">Home</a>
      <a href="Login.php">Login</a>
      <a href="Registration.php">Registration</a>
    </nav>
    </div>
  </header>

<body>
 <fieldset>
    <legend>Login</legend> 
      <form action="loginCheck.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
        </div>
        <hr>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> Remember Me</label><br>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
        <div class="form-group">
          <a href="ForgotPassword.php">Forgot Password?</a>
        </div>
      </form>
  </fieldset>  

</body>
<footer>
    <p>Copyright © 2017</p>
  </footer>
</html>
