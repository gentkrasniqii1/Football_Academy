<?php
$conn = new mysqli("localhost", "root", "", "menagjimi_lojtareve");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
