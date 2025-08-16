<?php
require_once 'config.php';
requireLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="sidebar-header">
                <h3>User Panel</h3>
            </div>
            <div class="sidebar-menu">
                <a href="#profile" class="menu-item active">Profile</a>
                <a href="#settings" class="menu-item">Settings</a>
                <a href="logout.php" class="menu-item">Logout</a>
            </div>
        </div>
        
        <div class="main-content">
            <div class="header">
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <div class="user-info">
                    <span>Role: User</span>
                </div>
            </div>
            
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h3>Profile Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="profile-info">
                            <div class="info-item">
                                <label>Username:</label>
                                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            </div>
                            <div class="info-item">
                                <label>Email:</label>
                                <span><?php echo htmlspecialchars($_SESSION['email']); ?></span>
                            </div>
                            <div class="info-item">
                                <label>Role:</label>
                                <span><?php echo htmlspecialchars($_SESSION['role']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h3>Quick Actions</h3>
                    </div>
                    <div class="card-body">
                        <div class="actions">
                            <button class="btn btn-secondary">Update Profile</button>
                            <button class="btn btn-secondary">Change Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
