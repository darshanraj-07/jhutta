<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background-color: #f5f6fa;
        }
        header {
            background-color: #1e90ff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            background-color: #0074cc;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 6px 12px;
            border-radius: 6px;
        }
        nav a:hover {
            background-color: #005fa3;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .welcome {
            text-align: center;
            margin-bottom: 30px;
        }
        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background-color: white;
            padding: 20px;
            width: 250px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card h3 {
            margin-bottom: 15px;
        }
        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 14px;
            background-color: #1e90ff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .card a:hover {
            background-color: #0f71d0;
        }
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            background-color: #e4e4e4;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
        <p>Hello, <?php echo htmlspecialchars($_SESSION["user_name"]); ?>!</p>
    </header>

    <nav>
        <a href="dashboard.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="settings.php">Settings</a>
        <a href="notifications.php">Notifications</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <div class="welcome">
            <h2>Your Actions</h2>
            <p>Manage your account, settings, and more from here.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Profile</h3>
                <p>View and edit your personal information.</p>
                <a href="profile.php">Go</a>
            </div>
            <div class="card">
                <h3>Settings</h3>
                <p>Change your password or account settings.</p>
                <a href="settings.php">Go</a>
            </div>
            <div class="card">
                <h3>Notifications</h3>
                <p>Check your latest notifications.</p>
                <a href="notifications.php">Go</a>
            </div>
            <div class="card">
                <h3>Support</h3>
                <p>Contact support or help center.</p>
                <a href="support.php">Go</a>
            </div>
        </div>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.
    </footer>
</body>
</html>
