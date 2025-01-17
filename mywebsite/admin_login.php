<?php
// Start the session to handle login
session_start();

// Admin password (hardcoded for now)
$adminPassword = "admin123";

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the password entered by the user
    $password = $_POST['password'];

    // Check if the password is correct
    if ($password == $adminPassword) {
        // Redirect to admin dashboard
        header("Location: admin_dashboard.php");
        exit(); // Make sure nothing runs after the redirect
    } else {
        // Display error if the password is incorrect
        echo "<p>Invalid password!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="admin_login.php" method="POST">
        <label for="password">Admin Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
