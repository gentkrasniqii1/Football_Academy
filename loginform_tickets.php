<?php

require 'connect.php';
session_start();




// Set session timeout duration (in seconds)
$timeout_duration = 1800;

// Check if the session is timed out
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header('Location: loginandRegister_tickets.php?timeout=true');
    exit();
}



echo password_hash('admin123', PASSWORD_BCRYPT);




// Validate CSRF token




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header('Location: admin_tickets_dashboard.php');
    } else {
        echo 'Invalid email or password.';
    }
}
?>
