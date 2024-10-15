<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $remember = isset($_POST['remember']);

    // Basic authentication logic
    if ($username === 'user') {
        $_SESSION['username'] = $username;
        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
        }
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember">Remember Me</label>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
