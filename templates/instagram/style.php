<?php header("Content-type: text/css"); ?>

body {
  background-color: #000;
  font-family: sans-serif;
  color: #fff;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px;
}

.login-box {
  background-color: #1c1c1c;
  padding: 30px;
  border-radius: 10px;
  width: 300px;
  text-align: center;
}

.logo img {
  width: 120px;
  margin-bottom: 20px;
}

input {
  width: 90%;
  padding: 10px;
  margin: 10px 0;
  border: none;
  border-radius: 5px;
}

button {
  width: 95%;
  padding: 10px;
  background-color: #0095f6;
  border: none;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  margin-top: 10px;
}

.divider {
  display: flex;
  align-items: center;
  margin: 20px 0;
}

.divider .line {
  flex: 1;
  height: 1px;
  background-color: #555;
}

.divider .or {
  margin: 0 10px;
  font-size: 14px;
  color: #aaa;
}

/* Standardized Login Buttons */
.google-login,
.facebook-login {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-size: 14px;
  padding: 8px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 500;
  width: 100%;
  max-width: 260px;
  margin: 10px auto;
  transition: background-color 0.3s ease;
}

/* Google Button */
.google-login {
  background-color: #fff;
  color: #444;
  border: 1px solid #ccc;
}

.google-login:hover {
  background-color: #f1f1f1;
}

/* Facebook Button */
.facebook-login {
  background-color: #1877f2;
  color: white;
}

.facebook-login:hover {
  background-color: #155dc1;
}

/* Icons */
.google-login img,
.facebook-login img {
  width: 18px;
  height: 18px;
}

.forgot-password,
.signup-box a {
  color: #aaa;
  text-decoration: none;
}

.get-app {
  margin-top: 20px;
  text-align: center;
}

.app-buttons img {
  width: 120px;
  margin: 10px;
}
.footer-links {
  margin-top: 30px;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  font-size: 12px;
  justify-content: center;
  color: #888;
}

.footer-links a {
  color: #888;
  text-decoration: none;
}

.footer-links a:visited {
  color: #888;
}

.footer-links a:hover {
  color: #aaa;
  text-decoration: underline;
}

.footer p {
  text-align: center;
  font-size: 12px;
  color: #666;
  margin-top: 10px;
}

.error-msg {
  color: red;
  margin: 10px 0;
}

