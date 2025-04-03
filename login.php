<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $conn->prepare("SELECT * FROM useri WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['role'] = $user['role']; // Assuming 'role' column exists in database

                // Redirect admin to dashboard, users to index.php
                if ($user['role'] === 'admin') {
                    header('Location: dashboard.php'); 
                } else {
                    header('Location: index.php'); 
                }
                exit();
            } else {
                echo "<script>alert('Incorrect password!');</script>";
            }
        } else {
            echo "<script>alert('User does not exist!');</script>";
        }
    }
}
?>
