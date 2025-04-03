<?php
include 'shopconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: shop_dashboard.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
    text-align: center;
}

form {
    background: #fff;
    padding: 20px;
    width: 50%;
    margin: 20px auto;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

input[type="text"] {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>

    <h2>Add a New Product</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="price" placeholder="Price" required>
        <input type="text" name="image" placeholder="Image URL" required>
        <button type="submit">Add Product</button>
    </form>

</body>
</html>
