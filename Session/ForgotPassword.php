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
    <legend>FORGOT PASSWORD</legend> 
      <form action=".php" method="post">
        <div class="form-group">
          <label for="username">Enter Email:</label>
          <input type="text" name="username" id="username" required>
        </div>
        <hr>
        <div class="form-group">
          <button type="submit">Submit</button>
        </div>
      </form>
  </fieldset>  

</body>
<footer>
    <p>Copyright © 2017</p>
  </footer>
</html>
