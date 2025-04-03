<?php
include 'shopconnect.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
   
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
    text-align: center;
}

h2 {
    color: #333;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

table th, table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
}

table tr:hover {
    background-color: #f1f1f1;
}

img {
    border-radius: 5px;
}

.btn {
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 5px;
    margin: 5px;
    display: inline-block;
    font-weight: bold;
    color: white;
}

.add {
    background-color: #28a745;
}

.edit {
    background-color: #ffc107;
}

.delete {
    background-color: #dc3545;
}

   </style> <!-- Linking external CSS -->
</head>
<body>

    <h2>Product Dashboard</h2>
    <a href="add_product.php" class="btn add">Add Product</a>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><img src="<?php echo $row['image']; ?>" width="50"></td>
            <td>
                <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn edit">Edit</a>
                <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn delete">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
