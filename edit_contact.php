<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "menagjimi_kontakteve");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id = $id");
$contact = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone', address='$address', message='$message' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: contact_dashboard.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
    text-align: center;
}

h1 {
    color: #333;
}

form {
    background: #fff;
    padding: 20px;
    width: 50%;
    margin: 20px auto;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="text"],
input[type="email"],
textarea {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

textarea {
    resize: none;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

    <h1>Edit Contact</h1>
    <form method="POST">
        <input type="text" name="name" value="<?php echo htmlspecialchars($contact['name']); ?>" required>
        <input type="email" name="email" value="<?php echo htmlspecialchars($contact['email']); ?>" required>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($contact['phone']); ?>">
        <input type="text" name="address" value="<?php echo htmlspecialchars($contact['address']); ?>">
        <textarea name="message" rows="5" required><?php echo htmlspecialchars($contact['message']); ?></textarea>
        <button type="submit">Update Contact</button>
    </form>

</body>
</html>
<?php $conn->close(); ?>
