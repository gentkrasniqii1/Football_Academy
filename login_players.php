<?php
session_start();
include 'db.php';

$error_message = "";

if (isset($_POST['login'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // Store plain password for admin check

    // Check if the user is the admin
    if ($email === 'admin@example.com' && $password === 'admin1234') {
        $_SESSION['user'] = $email;
        header("Location: players_dashboard.php");
        exit();
    }

    // Otherwise, check in the database
    $password = md5($password); // Hash password for regular users
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('loginimage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        
        .register-link {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        
        .register-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_players.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <?php if (!empty($error_message)) { echo "<span class='error-message'>$error_message</span>"; } ?>
            <button type="submit" name="login">Login</button>
            <a href="register_players.php" class="register-link">Don't have an Account? Register here</a>
        </form>
    </div>
</body>
</html>
