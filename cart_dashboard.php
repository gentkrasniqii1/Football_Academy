<?php
session_start();
require 'shopconnect.php';

// Handle Update Quantity
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE cart SET quantity = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $quantity, $id);
    $stmt->execute();
}

// Handle Delete Item
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM cart WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: cart_dashboard.php");
    exit();
}

// Fetch Cart Data
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Dashboard</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 80%;
    background: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #28a745;
    color: white;
}

input {
    width: 50px;
    padding: 5px;
    text-align: center;
}

button {
    background-color: #007bff;
    color: white;
    padding: 5px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    color: red;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
</head>
<body>
    <div class="container">
        <h2>Shopping Cart</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Session ID</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['product_id'] ?></td>
                <td>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="number" name="quantity" value="<?= $row['quantity'] ?>" min="1">
                        <button type="submit" name="update">Update</button>
                    </form>
                </td>
                <td><?= $row['session_id'] ?></td>
                <td>
                    <a href="cart_dashboard.php?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
