<?php
session_start();
require"db.php";

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $age = intval($_POST['age']);
    $group_age = trim($_POST['group_age']);
    $position = trim($_POST['position']);
    $email = trim($_POST['email']);

    // Validate inputs
    if (empty($name) || empty($surname) || empty($age) || empty($group_age) || empty($position) || empty($email)) {
        $error_message = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format!";
    } else {
        // Check if email already exists
        $check_query = "SELECT * FROM players WHERE email = ?";
        $stmt = $conn->prepare($check_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error_message = "This email is already registered!";
        } else {
            // Insert into the `players` table
            $insert_query = "INSERT INTO players (name, surname, age, group_age, position, email, created_at) 
                             VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $stmt = $conn->prepare($insert_query);
            $stmt->bind_param("ssisss", $name, $surname, $age, $group_age, $position, $email);

            if ($stmt->execute()) {
                $success_message = "Player registered successfully!";
                header("refresh:3; url=register_players.php"); // Auto-refresh after 3 sec
            } else {
                $error_message = "Something went wrong!";
            }
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Registration</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 { margin-bottom: 20px; }
        label { display: block; text-align: left; font-weight: bold; margin-bottom: 5px; }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error-message { color: red; font-size: 14px; margin-bottom: 10px; display: block; }
        .success-message { color: green; font-size: 14px; font-weight: bold; margin-bottom: 10px; display: block; }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover { background: #218838; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Player Registration</h2>
        <form action="register_players.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Surname:</label>
            <input type="text" name="surname" required>
            <label>Age:</label>
            <input type="number" name="age" required min="10" max="30">
            <label>Group Age:</label>
            <select name="group_age" required>
                <option value="U11">U11</option>
                <option value="U12">U12</option>
                <option value="U13">U13</option>
                <option value="U14">U14</option>
                <option value="U15">U15</option>
                <option value="U16">U16</option>
                <option value="U17">U17</option>
                <option value="U18">U18</option>
                <option value="U19">U19</option>
                <option value="U20">U20</option>
                <option value="U21">U21</option>
            </select>
            <label>Position:</label>
            <select name="position" required>
                <option value="Goalkeeper">Goalkeeper</option>
                <option value="Defender">Defender</option>
                <option value="Midfield">Midfield</option>
                <option value="Forward">Forward</option>
            </select>
            <label>Email:</label>
            <input type="email" name="email" required>
            <?php 
                if (!empty($error_message)) { echo "<span class='error-message'>$error_message</span>"; }
                if (!empty($success_message)) { echo "<span class='success-message'>$success_message</span>"; }
            ?>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
