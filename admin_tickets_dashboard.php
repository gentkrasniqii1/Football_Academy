<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "menagjimi_tiketave");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Delete Action
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = (int)$_POST['id'];
    $stmt = $conn->prepare("DELETE FROM tickets WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Ticket deleted successfully!";
    } else {
        $_SESSION['error_message'] = "Failed to delete ticket: " . $stmt->error;
    }
    $stmt->close();
    header("Location: admin_tickets_dashboard.php");
    exit;
}

// Fetch tickets
$tickets = [];
$result = $conn->query("SELECT * FROM tickets ORDER BY created_at DESC");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $tickets[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* Messages */
        .success-message, .error-message {
            font-weight: bold;
            padding: 10px;
            width: 50%;
            margin: 10px auto;
            border-radius: 5px;
            text-align: center;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Table Styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        /* Buttons & Links */
        .delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .update-link {
            background-color: #ffc107;
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .update-link:hover {
            background-color: #e0a800;
        }

        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #ff5733;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background-color: #e04e2c;
        }
    </style>
</head>
<body>

    <h1>Admin Ticket Dashboard</h1>

    <!-- Display Success or Error Messages -->
    <?php if (isset($_SESSION['success_message'])): ?>
        <p class="success-message"><?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?></p>
    <?php endif; ?>
    <?php if (isset($_SESSION['error_message'])): ?>
        <p class="error-message"><?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?></p>
    <?php endif; ?>

    <!-- Tickets Table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Ticket Type</th>
                <th>Quantity</th>
                <th>Section</th>
                <th>Seat Preference</th>
                <th>Payment Method</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($tickets)): ?>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td><?php echo $ticket['id']; ?></td>
                        <td><?php echo $ticket['customer_name']; ?></td>
                        <td><?php echo $ticket['customer_email']; ?></td>
                        <td><?php echo $ticket['phone']; ?></td>
                        <td><?php echo ucfirst($ticket['ticket_type']); ?></td>
                        <td><?php echo $ticket['ticket_quantity']; ?></td>
                        <td><?php echo ucfirst($ticket['stadium_section']); ?></td>
                        <td><?php echo ucfirst($ticket['seat_preference']); ?></td>
                        <td><?php echo ucfirst($ticket['payment_method']); ?></td>
                        <td>$<?php echo number_format($ticket['total_price'], 2); ?></td>
                        <td>
                            <!-- Update Link -->
                            <a class="update-link" href="edit_tickets.php?id=<?php echo $ticket['id']; ?>">Update</a>
                            
                            <!-- Delete Button -->
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $ticket['id']; ?>">
                                <input type="hidden" name="action" value="delete">
                                <button class="delete-btn" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11">No tickets found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a class="logout-btn" href="logout.php">Logout</a>

</body>
</html>

<?php $conn->close(); ?>
