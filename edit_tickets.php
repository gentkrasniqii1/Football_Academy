<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "menagjimi_tiketave");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get ticket ID from URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid ticket ID.");
}
$ticket_id = (int)$_GET['id'];

// Fetch ticket data
$stmt = $conn->prepare("SELECT * FROM tickets WHERE id = ?");
$stmt->bind_param("i", $ticket_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    die("Ticket not found.");
}
$ticket = $result->fetch_assoc();
$stmt->close();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $phone = $_POST['phone'];
    $ticket_type = $_POST['ticket_type'];
    $ticket_quantity = (int)$_POST['ticket_quantity'];
    $stadium_section = $_POST['stadium_section'];
    $seat_preference = $_POST['seat_preference'];
    $payment_method = $_POST['payment_method'];
    $total_price = (float)$_POST['total_price'];

    // Update ticket in database
    $update_stmt = $conn->prepare("
        UPDATE tickets 
        SET customer_name=?, customer_email=?, phone=?, ticket_type=?, ticket_quantity=?, 
            stadium_section=?, seat_preference=?, payment_method=?, total_price=? 
        WHERE id=?
    ");
    $update_stmt->bind_param(
        "ssssisssdi", 
        $customer_name, $customer_email, $phone, $ticket_type, $ticket_quantity, 
        $stadium_section, $seat_preference, $payment_method, $total_price, $ticket_id
    );

    if ($update_stmt->execute()) {
        $_SESSION['success_message'] = "Ticket updated successfully!";
        header("Location: admin_tickets_dashboard.php");
        exit;
    } else {
        $error_message = "Failed to update ticket: " . $update_stmt->error;
    }

    $update_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            background: #ffffff;
            padding: 20px;
            width: 50%;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .btn-update {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-update:hover {
            background-color: #0056b3;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
        }

        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Update Ticket</h2>

    <?php if (isset($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Customer Name:</label>
        <input type="text" name="customer_name" value="<?php echo htmlspecialchars($ticket['customer_name']); ?>" required>

        <label>Email:</label>
        <input type="email" name="customer_email" value="<?php echo htmlspecialchars($ticket['customer_email']); ?>" required>

        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($ticket['phone']); ?>" required>

        <label for="ticketType">Select Ticket Type</label>
        <select id="ticketType" name="ticket_type">
            <option value="standard" <?php echo ($ticket['ticket_type'] == 'standard') ? 'selected' : ''; ?>>Standard - $50</option>
            <option value="vip" <?php echo ($ticket['ticket_type'] == 'vip') ? 'selected' : ''; ?>>VIP - $100</option>
            <option value="premium" <?php echo ($ticket['ticket_type'] == 'premium') ? 'selected' : ''; ?>>Premium - $150</option>
            <option value="family" <?php echo ($ticket['ticket_type'] == 'family') ? 'selected' : ''; ?>>Family Pack - $120</option>
            <option value="student" <?php echo ($ticket['ticket_type'] == 'student') ? 'selected' : ''; ?>>Student - $40</option>
                </select>

        <label>Quantity:</label>
        <input type="number" name="ticket_quantity" value="<?php echo $ticket['ticket_quantity']; ?>" required>
        <label for="stadiumSection">Stadium Section</label>

        <select id="stadiumSection" name="stadium_section">
            <option value="north" <?php echo ($ticket['stadium_section'] == 'north') ? 'selected' : ''; ?>>North</option>
            <option value="south" <?php echo ($ticket['stadium_section'] == 'south') ? 'selected' : ''; ?>>South</option>
            <option value="east" <?php echo ($ticket['stadium_section'] == 'east') ? 'selected' : ''; ?>>East</option>
            <option value="west" <?php echo ($ticket['stadium_section'] == 'west') ? 'selected' : ''; ?>>West</option>
            <option value="vip-box" <?php echo ($ticket['stadium_section'] == 'vip-box') ? 'selected' : ''; ?>>VIP Box</option>
        </select>

        <label for="seatPreference">Seat Preference</label>
        <select id="seatPreference" name="seat_preference">
            <option value="aisle" <?php echo ($ticket['seat_preference'] == 'aisle') ? 'selected' : ''; ?>>Aisle Seat</option>
            <option value="center" <?php echo ($ticket['seat_preference'] == 'center') ? 'selected' : ''; ?>>Center Seat</option>
            <option value="front" <?php echo ($ticket['seat_preference'] == 'front') ? 'selected' : ''; ?>>Front Row</option>
            <option value="back" <?php echo ($ticket['seat_preference'] == 'back') ? 'selected' : ''; ?>>Back Row</option>
                </select>

                <label for="paymentMethod">Payment Method</label>
        <select id="paymentMethod" name="payment_method">
            <option value="credit" <?php echo ($ticket['payment_method'] == 'credit') ? 'selected' : ''; ?>>Credit Card</option>
            <option value="paypal" <?php echo ($ticket['payment_method'] == 'paypal') ? 'selected' : ''; ?>>PayPal</option>
            <option value="cash" <?php echo ($ticket['payment_method'] == 'cash') ? 'selected' : ''; ?>>Cash on Entry</option>
            <option value="bank" <?php echo ($ticket['payment_method'] == 'bank') ? 'selected' : ''; ?>>Bank Transfer</option>
        </select>

        <label>Total Price ($):</label>
        <input type="number" name="total_price" step="0.01" value="<?php echo $ticket['total_price']; ?>" required>

        <button type="submit" class="btn-update">Update Ticket</button>
        <a href="admin_tickets_dashboard.php" class="btn-cancel">Cancel</a>
    </form>

</body>
</html>
