<?php
session_start();
include 'shopconnect.php';

if (isset($_GET['id'])) {
    $cart_id = $_GET['id'];
    $sql = "DELETE FROM cart WHERE id = '$cart_id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: cart.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
