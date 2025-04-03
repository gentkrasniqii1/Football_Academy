<?php
include 'shopconnect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: shop_dashboard.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
