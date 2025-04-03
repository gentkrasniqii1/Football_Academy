<?php
include 'config.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $query = $conn->prepare("DELETE FROM useri WHERE id = ?");
    $query->bind_param("i", $userId);

    if ($query->execute()) {
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Error deleting user.";
    }
}
?>
