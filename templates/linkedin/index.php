<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>LinkedIn Login</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap');

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f3f2ef;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .login-container {
    background: #fff;
    width: 380px;
    padding: 48px 48px 64px;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgb(0 0 0 / 0.1);
    text-align: center;
  }

  .logo {
    margin-bottom: 36px;
  }

  .logo svg {
    width: 36px;
    height: 36px;
    fill: #0a66c2;
  }

  h1 {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #222;
  }

  p.subtitle {
    font-size: 14px;
    color: #666;
    margin-bottom: 32px;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  /* Floating label container */
  .floating-label {
    position: relative;
    text-align: left;
  }

  /* Inputs */
  input[type="text"], input[type="password"] {
    width: 100%;
    padding: 16px 12px 12px;
    font-size: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background: none;
    outline: none;
    transition: border-color 0.3s ease;
  }

  input:focus {
    border-color: #0a66c2;
  }

  input.error {
    border-color: #d93025;
  }

  /* Labels */
  label {
    position: absolute;
    left: 12px;
    top: 16px;
    color: #666;
    font-size: 15px;
    font-weight: 600;
    pointer-events: none;
    transition:
      all 0.25s ease-in-out;
    background: white;
    padding: 0 4px;
  }

  /* Label moves up when input focused or has value */
  input:focus + label,
  input:not(:placeholder-shown) + label {
    top: -8px;
    font-size: 12px;
    color: #0a66c2;
  }

  /* Error label color */
  label.error {
    color: #d93025;
  }

  /* Error message */
  .error-message {
    font-size: 13px;
    color: #d93025;
    margin-top: 6px;
    display: none;
  }

  /* Show error message */
  .error-message.active {
    display: block;
  }

  /* Forgot password link */
  .forgot-password {
    font-size: 13px;
    color: #0a66c2;
    text-decoration: none;
    text-align: right;
  }

  .forgot-password:hover {
    text-decoration: underline;
  }

  /* Sign in button */
  button[type="submit"] {
    background-color: #0a66c2;
    color: white;
    font-weight: 600;
    font-size: 16px;
    padding: 14px 0;
    border: none;
    border-radius: 24px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #004182;
  }

  /* Or separator */
  .separator {
    margin: 32px 0 24px;
    text-align: center;
    position: relative;
  }

  .separator::before,
  .separator::after {
    content: "";
    height: 1px;
    background: #ddd;
    position: absolute;
    top: 50%;
    width: 40%;
  }

  .separator::before {
    left: 0;
  }

  .separator::after {
    right: 0;
  }

  .separator span {
    background: white;
    color: #666;
    font-size: 13px;
    padding: 0 12px;
  }

  /* Google sign in button */
  .google-login {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ddd;
    border-radius: 24px;
    padding: 10px 0;
    cursor: pointer;
    font-weight: 600;
    font-size: 15px;
    color: #444;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    user-select: none;
  }

  .google-login:hover {
    background-color: #f7f7f7;
    box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
  }

  .google-login svg {
    width: 20px;
    height: 20px;
    margin-right: 12px;
  }

  /* Signup link */
  .signup-link {
    margin-top: 36px;
    font-size: 14px;
    color: #666;
  }

  .signup-link a {
    color: #0a66c2;
    font-weight: 600;
    text-decoration: none;
  }

  .signup-link a:hover {
    text-decoration: underline;
  }

  footer {
    margin-top: 48px;
    font-size: 12px;
    color: #999;
  }

  footer a {
    color: #666;
    text-decoration: none;
    margin: 0 6px;
  }

  footer a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>

<div class="login-container" role="main" aria-label="LinkedIn sign in form">
  <a href="#" class="logo" aria-label="LinkedIn logo">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" role="img" aria-hidden="true" focusable="false">
      <title>LinkedIn</title>
      <path d="M34,20.339v10.458H27.174V21.5c0-2.15-0.77-3.614-2.693-3.614
      c-1.467,0-2.343,0.987-2.727,1.942c-0.14,0.34-0.175,0.814-0.175,1.29v9.679H14.599
      c0,0,0.094-15.713,0-17.35h6.828v2.458c-0.013,0.022-0.03,0.044-0.044,0.066h0.044v-0.066
      c0.909-1.4,2.528-3.395,6.152-3.395C31.199,14.349,34,16.67,34,20.339z M4.545,7.854
      C2.297,7.854,0.4,5.937,0.4,3.642c0-2.294,1.897-4.211,4.146-4.211
      c2.252,0,4.146,1.917,4.146,4.211C8.692,5.937,6.797,7.854,4.545,7.854z
      M1.763,30.797h5.573V13.448H1.763V30.797z"/>
    </svg>
  </a>

  <h1>Sign in</h1>
  <p class="subtitle">Stay updated on your professional world</p>

  <form id="loginForm" action="login.php" method="POST" novalidate>
    <div class="floating-label">
      <input type="text" id="username" name="username" autocomplete="username" placeholder=" " aria-describedby="usernameError" aria-required="true" />
      <label for="username" id="labelUsername">Email or Username</label>
      <div id="usernameError" class="error-message">Please enter a valid email or username.</div>
    </div>

    <div class="floating-label">
      <input type="password" id="password" name="password" autocomplete="current-password" placeholder=" " aria-describedby="passwordError" aria-required="true" />
      <label for="password" id="labelPassword">Password</label>
      <div id="passwordError" class="error-message">
        Password must be 8+ characters, include uppercase, lowercase, and a number.
      </div>
    </div>

    <a href="#" class="forgot-password" tabindex="0">Forgot password?</a>
    <button type="submit">Sign in</button>
  </form>

  <div class="separator"><span>or</span></div>

  <button class="google-login" type="button" aria-label="Sign in with Google">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 533.5 544.3" aria-hidden="true" focusable="false">
      <path fill="#4285f4" d="M533.5 278.4c0-17.5-1.6-34.4-4.7-50.8H272.1v95.8h147.4c-6.4 34.6-25.9 63.9-55.5 83.6v69.4h89.6c52.4-48.2 82.3-119.3 82.3-197.9z"/>
      <path fill="#34a853" d="M272.1 544.3c75.6 0 139-24.9 185.3-67.6l-89.6-69.4c-24.9 16.8-56.7 26.7-95.7 26.7-73.5 0-135.9-49.6-158.2-116.1H19v72.8c46.1 91.6 140.8 153.6 253.1 153.6z"/>
      <path fill="#fbbc04" d="M113.9 324.9c-5.4-16-8.5-33.1-8.5-50.9s3.1-34.9 8.5-50.9v-72.8H19c-18.7 37.1-29.5 78.8-29.5 123.7s10.8 86.6 29.5 123.7l94.9-72.8z"/>
      <path fill="#ea4335" d="M272.1 107.7c40.9 0 77.7 14.1 106.7 41.9l79.9-79.9C407.3 24.6 347.7 0 272.1 0 159.7 0 64.9 62 19 153.6l94.9 72.8c22.3-66.5 84.7-116.1 158.2-116.1z"/>
    </svg>
    Sign in with Google
  </button>

  <p class="signup-link">New to LinkedIn? <a href="#">Join now</a></p>

  <footer>
    <a href="#">Privacy</a> •
    <a href="#">Terms</a> •
    <a href="#">Cookie</a>
  </footer>
</div>

<script>
  const form = document.getElementById("loginForm");
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");
  const usernameError = document.getElementById("usernameError");
  const passwordError = document.getElementById("passwordError");
  const labelUsername = document.getElementById("labelUsername");
  const labelPassword = document.getElementById("labelPassword");

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function validateUsername(username) {
    const re = /^[a-zA-Z0-9_]{3,20}$/;
    return re.test(username);
  }

  function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    return re.test(password);
  }

  function isValidUsernameOrEmail(input) {
    return validateEmail(input) || validateUsername(input);
  }

  form.addEventListener("submit", (e) => {
    let valid = true;
    const usernameVal = usernameInput.value.trim();
    const passwordVal = passwordInput.value;

    if (!usernameVal) {
      usernameError.textContent = "This field is required.";
      usernameError.classList.add("active");
      usernameInput.classList.add("error");
      labelUsername.classList.add("error");
      valid = false;
    } else if (!isValidUsernameOrEmail(usernameVal)) {
      usernameError.textContent = "Please enter a valid email or username (3-20 chars, letters, numbers, _).";
      usernameError.classList.add("active");
      usernameInput.classList.add("error");
      labelUsername.classList.add("error");
      valid = false;
    } else {
      usernameError.classList.remove("active");
      usernameInput.classList.remove("error");
      labelUsername.classList.remove("error");
    }

    if (!passwordVal) {
      passwordError.textContent = "This field is required.";
      passwordError.classList.add("active");
      passwordInput.classList.add("error");
      labelPassword.classList.add("error");
      valid = false;
    } else if (!validatePassword(passwordVal)) {
      passwordError.textContent = "Password must be 8+ chars, include uppercase, lowercase, and a number.";
      passwordError.classList.add("active");
      passwordInput.classList.add("error");
      labelPassword.classList.add("error");
      valid = false;
    } else {
      passwordError.classList.remove("active");
      passwordInput.classList.remove("error");
      labelPassword.classList.remove("error");
    }

    if (!valid) {
      e.preventDefault();
    }
  });

  // Optional: You can add Google sign-in button action here
  document.querySelector(".google-login").addEventListener("click", () => {
    alert("Google sign-in flow would start here.");
  });
</script>

</body>
</html>

