<?php
// This is a basic dashboard page for demonstration purposes
session_start();

// Check if the user is logged in (you might have a more robust authentication mechanism)
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is a simple dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
