<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default password is empty for XAMPP/WAMP
$dbname = "menagjimi_kontakteve";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, phone, address, message) 
            VALUES ('$name', '$email', '$phone', '$address', '$message')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = "Mesazhi juaj është dërguar me sukses!";
    } else {
        $_SESSION['error'] = "Gabim gjatë dërgimit të mesazhit: " . $conn->error;
    }

    // Redirect back to the contact form
    header("Location: contact.php");
    exit();
}

$conn->close();
?>
