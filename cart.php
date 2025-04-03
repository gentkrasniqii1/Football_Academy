<?php
session_start();
include 'shopconnect.php';

$session_id = session_id();
$sql = "SELECT cart.id, products.name, products.price, cart.quantity 
        FROM cart 
        JOIN products ON cart.product_id = products.id 
        WHERE cart.session_id = '$session_id'";
$result = $conn->query($sql);
?>

<h2>Shopping Cart</h2>
<table border="1">
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td>
            <a href="remove_from_cart.php?id=<?php echo $row['id']; ?>">Remove</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
