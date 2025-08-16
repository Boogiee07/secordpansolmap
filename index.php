<?php
require_once 'config.php';

// Redirect to appropriate dashboard if already logged in
if (isLoggedIn()) {
    if (isAdmin()) {
        header('Location: admin_dashboard.php');
    } else {
        header('Location: user_dashboard.php');
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="landing-page">
        <div class="hero">
            <div class="hero-content">
                <h1>User Management System</h1>
                <p>A complete login and registration system with user and admin panels</p>
                <div class="hero-buttons">
                    <a href="login.php" class="btn btn-primary">Login</a>
                    <a href="register.php" class="btn btn-secondary">Register</a>
                </div>
            </div>
        </div>
        
        <div class="features">
            <div class="container">
                <h2>Features</h2>
                <div class="feature-grid">
                    <div class="feature-card">
                        <h3>Secure Authentication</h3>
                        <p>Password hashing and secure session management</p>
                    </div>
                    <div class="feature-card">
                        <h3>Role-Based Access</h3>
                        <p>Different access levels for users and administrators</p>
                    </div>
                    <div class="feature-card">
                        <h3>User Management</h3>
                        <p>Admin panel for managing all registered users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
