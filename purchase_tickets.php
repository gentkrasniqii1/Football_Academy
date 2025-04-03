<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!isset($_SESSION['user_id'])) {
        die("User not logged in");
    }

    $ticketType = $_POST['ticketType'];
    $quantity = $_POST['ticketQuantity'];
    $stadiumSection = $_POST['stadiumSection'];
    $seatPreference = $_POST['seatPreference'];
    $paymentMethod = $_POST['paymentMethod'];
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];
    $totalPrice = $_POST['totalPrice'];
    $userId = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO tickets 
        (user_id, ticket_type, quantity, stadium_section, seat_preference, payment_method, customer_name, customer_email, phone, notes, total_price) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt->execute([$userId, $ticketType, $quantity, $stadiumSection, $seatPreference, $paymentMethod, $customerName, $customerEmail, $phone, $notes, $totalPrice])) {
        echo "Ticket Purchased Successfully!";
    } else {
        echo "Error purchasing ticket!";
    }
}
?>
