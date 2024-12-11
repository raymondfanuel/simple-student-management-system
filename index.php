<?php
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
    echo "<p>You have successfully logged out.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>University Portal</h1>
    </header>
    
    <div class="login-container">
        <form id="loginForm" action="login.php" method="POST">
            <label for="username">Email:</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="register.html">Register here</a></p>
    </div>

    <script src="script.js"></script>
</body>
</html>
