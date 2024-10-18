<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="toggle">
        <button class="toggle-btn active" id="login-btn">Login</button>
        <button class="toggle-btn" id="register-btn">Register</button>
      </div>
      <div class="form-wrapper">
        <form action="../app/Controllers/form_controller.php" method="POST" id="login-form">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <button name="login" type="submit" class="submit-btn">Login</button>
        </form>
        <form action="../app/Controllers/form_controller.php" method="post" id="register-form">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button name="register" type="submit" class="submit-btn" value="register">Register</button>
</form>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>