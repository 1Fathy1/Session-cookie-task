<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to the Cookie and Session App!</h1>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a></p>
    <?php endif; ?>
</body>
</html>
