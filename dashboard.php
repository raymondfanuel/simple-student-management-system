<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: index.html"); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
    </header>
    
    <div class="dashboard-container">
        <h2>Hello, <?php echo $_SESSION['email']; ?></h2>
        <p>This is your student dashboard. Here you can access your courses, grades, and more!</p>

        <button onclick="location.href='index.html'">Logout</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
