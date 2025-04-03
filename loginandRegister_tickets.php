<?php
include 'connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (isset($_POST['first-name'])) {
            // REGISTER
            $firstName = $_POST['first-name'];
            $lastName = $_POST['last-name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $phoneNumber = $_POST['phone-number'] ?? null;
            $birthDate = $_POST['birth-date'] ?? null;

            $query = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, phone_number, birth_date) VALUES (?, ?, ?, ?, ?, ?)");
            $query->bind_param("ssssss", $firstName, $lastName, $email, $password, $phoneNumber, $birthDate);
               
            
            if ($query->execute()) {
                echo "<script>alert('Regjistrimi u krye me sukses!');</script>";
            } else {
                echo "<script>alert('Email-i ekziston tashmë!');</script>";
            }
        } else {
            // LOGIN
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $query->bind_param("s", $email);
            $query->execute();
            $result = $query->get_result();

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    header('Location: admin_tickets_dashboard.php');
                    exit();
                } else {
                    echo "<script>alert('Fjalëkalimi është i pasaktë!');</script>";
                }
            } else {
                echo "<script>alert('Përdoruesi nuk ekziston!');</script>";
            }
        }
    }
}
?>


<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header('Location: tickets_dashboard.php'); // Dërgo adminin në panelin admin
                } else {
                    header('Location: admin_tickets_dashboard.php'); // Dërgo përdoruesin normal në panelin e tyre
                }
                exit();
            } else {
                echo "<script>alert('Fjalëkalimi është i pasaktë!');</script>";
            }
        } else {
            echo "<script>alert('Përdoruesi nuk ekziston!');</script>";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-image: url('loginimage.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .container {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        
        input[type="email"],
        input[type="password"],
        input[type="text"],
        input[type="date"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .switch-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        
        .switch-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        
        .switch-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- LOGIN FORM -->
    <div id="login-form" class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="login-email">Email Address</label>
            <input type="email" id="login-email" name="email" placeholder="Enter your email" required>

            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
        </form>
        <div class="switch-link">
            Don't have an account? <a href="#" onclick="showRegisterForm()">Register here</a>
        </div>
    </div>

    <!-- REGISTER FORM -->
    <div id="register-form" class="container" style="display: none;">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>

            <label for="register-email">Email Address</label>
            <input type="email" id="register-email" name="email" placeholder="Enter your email" required>

            <label for="register-password">Password</label>
            <input type="password" id="register-password" name="password" placeholder="Enter your password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Re-enter your password" required>

            <label for="phone-number">Phone Number (Optional)</label>
            <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number">

            <label for="birth-date">Date of Birth</label>
            <input type="date" id="birth-date" name="birth-date">

            <div>
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the Terms and Conditions</label>
            </div>

            <button type="submit">Register</button>
        </form>
        <div class="switch-link">
            Already have an account? <a href="#" onclick="showLoginForm()">Login here</a>
        </div>
    </div>

    <script>
        const loginForm = document.getElementById("login-form");
        const registerForm = document.getElementById("register-form");

        function showRegisterForm() {
            loginForm.style.display = "none";
            registerForm.style.display = "block";
        }

        function showLoginForm() {
            registerForm.style.display = "none";
            loginForm.style.display = "block";
        }
    </script>

</body>

</html>