<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
    $username = $_COOKIE['username'];
} else {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome back, <?php echo htmlspecialchars($username); ?>!</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
