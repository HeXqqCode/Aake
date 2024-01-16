<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Process registration (you should store user information in a database in a real-world scenario)

    // Redirect to the dashboard for demonstration purposes
    header("Location: dashboard.php");
    exit();
}
?>
