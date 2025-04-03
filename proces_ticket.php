<?php
session_start();
$conn = new mysqli("localhost", "root", "", "menagjimi_tiketave");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_name = $conn->real_escape_string($_POST['customer_name']);
    $customer_email = $conn->real_escape_string($_POST['customer_email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $ticket_type = $conn->real_escape_string($_POST['ticket_type']);
    $ticket_quantity = (int) $_POST['ticket_quantity']; // FIXED: Using correct column name
    $stadium_section = $conn->real_escape_string($_POST['stadium_section']);
    $seat_preference = $conn->real_escape_string($_POST['seat_preference']);
    $payment_method = $conn->real_escape_string($_POST['payment_method']);
    $special_requests = $conn->real_escape_string($_POST['notes']);

    // FIXED: Using correct column name (ticket_quantity instead of quantity)
    $stmt = $conn->prepare("INSERT INTO tickets 
        (customer_name, customer_email, phone, ticket_type, ticket_quantity, stadium_section, seat_preference, payment_method, notes) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // FIXED: 9 placeholders matching the 9 columns
    $stmt->bind_param("ssssissss", $customer_name, $customer_email, $phone, $ticket_type, $ticket_quantity, $stadium_section, $seat_preference, $payment_method, $special_requests);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Ticket booked successfully!";
    } else {
        $_SESSION['error'] = "Error booking ticket: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

    header("Location: tickets.php");
    exit();
}
?>
