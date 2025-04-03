<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "menagjimi_kontakteve");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: contact_dashboard.php");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
