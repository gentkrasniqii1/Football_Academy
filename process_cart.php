<?php
session_start();
include 'shopconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    $session_id = session_id(); // Unique session identifier

    if ($product_id > 0 && $quantity > 0) {
        $stmt = $conn->prepare("INSERT INTO cart (product_id, quantity, session_id) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $product_id, $quantity, $session_id);
        
        if ($stmt->execute()) {
            echo "Product added to cart!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Invalid product selection.";
    }
}

$conn->close();
header("Location: shop.php"); // Redirect back to shop
exit();
?>
