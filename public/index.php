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
            <form id="login-form">
              <input type="email" placeholder="Email" required>
              <input type="password" placeholder="Password" required>
              <button type="submit" class="submit-btn">Login</button>
            </form>
            <form action="../app/Controllers/form_controller.php" method="POST" id="register-form" style="display: none;">
              <input type="text" name="username" placeholder="Username" name="username" required>
              <input type="email" name="email" placeholder="Email" name="useremail" required>
              <input type="password" name="password" placeh older="Password" name="userpassword" required>
              <button type="submit" class="submit-btn">Register</button>
            </form>
          </div>
        </div>
      </div>
      
    <script src="script.js"></script>
</body>
</html>