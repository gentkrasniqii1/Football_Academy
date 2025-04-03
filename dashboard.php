<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: loginadnregister.php');
    exit();
}

$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            width: 350px;
        }

        h1 {
            color: #333;
        }

        .dashboard-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .dashboard-links a {
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 10px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .dashboard-links a:hover {
            background: #0056b3;
        }

        .logout-btn {
            margin-top: 15px;
            background: #dc3545 !important;
        }

        .logout-btn:hover {
            background: #b52b37 !important;
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <?php if ($role === 'admin'): ?>
            <h1>Welcome, Admin!</h1>
            <div class="dashboard-links">
                <a href="menage_users.php">Manage Users</a>
                <a href="players_dashboard.php">Manage Academy Players </a>
                <a href="contact_dashboard.php">Manage Contact Users</a>
                <a href="admin_tickets_dashboard.php">Manage Tickets</a>
                <a href="shop_dashboard.php">Manage Shop Products</a>
                
            </div>
        <?php else: ?>
            <h1>Welcome, User!</h1>
        <?php endif; ?>
        <div class="dashboard-links">
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>

</body>
</html>
