<?php
session_start();
$conn = new mysqli('localhost', 'username', 'password', 'database_name');

// Kontrollo nëse forma e login është dorëzuar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Kontrollo përdoruesin në bazën e të dhënave
    $sql = "SELECT id, first_name, user_role, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Kontrollo nëse password-i përputhet
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'];
            $_SESSION['user_role'] = $user['user_role'];

            // Ridrejto bazuar në rolin e përdoruesit
            if ($user['user_role'] == 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            $error = "Email ose fjalëkalim i pasaktë.";
        }
    } else {
        $error = "Email ose fjalëkalim i pasaktë.";
    }
}
?>
