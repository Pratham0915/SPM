<?php header("Content-type: text/css"); ?>

body {
  background-color: #fff;
  font-family: Roboto, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  color: #202124;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.login-box {
  width: 360px;
  padding: 40px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  border-radius: 8px;
  text-align: center;
}

.logo {
  width: 75px;
  margin-bottom: 20px;
}

h2 {
  margin: 10px 0;
  font-size: 24px;
  font-weight: normal;
}

.subtitle {
  margin-bottom: 20px;
  color: #5f6368;
  font-size: 16px;
}

input {
  width: 100%;
  padding: 14px;
  margin: 10px 0;
  border: 1px solid #dadce0;
  border-radius: 4px;
  font-size: 16px;
}

button {
  width: 100%;
  padding: 14px;
  background-color: #1a73e8;
  color: #fff;
  border: none;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #1558d6;
}

.links {
  text-align: left;
  margin-top: 10px;
}

.links a {
  color: #1a73e8;
  text-decoration: none;
  font-size: 14px;
}

.signup {
  font-size: 12px;
  margin-top: 20px;
  color: #5f6368;
}

.signup a {
  color: #1a73e8;
  text-decoration: none;
  font-size: 12px;
}

.create-account {
  margin-top: 30px;
  font-size: 14px;
}

.create-account a {
  color: #1a73e8;
  text-decoration: none;
}

.footer-links {
  margin-top: 40px;
  font-size: 12px;
  color: #5f6368;
  display: flex;
  gap: 20px;
  justify-content: center;
}

.footer-links a {
  color: #5f6368;
  text-decoration: none;
}

.error-msg {
  color: red;
  font-size: 14px;
  margin-bottom: 10px;
}

