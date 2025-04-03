<?php

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
        $id = (int)$_POST['id'];

        if ($_POST['action'] == 'delete') {
            $stmt = $conn->prepare("DELETE FROM tickets WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();

            $_SESSION['success_message'] = "Ticket deleted successfully!";
            header("Location: tickets.php");
            exit;
        } elseif ($_POST['action'] == 'update') {
            $ticket_type = $conn->real_escape_string($_POST['ticketType']);
            $ticket_quantity = (int)$_POST['ticketQuantity'];
            $total_price = (float)$_POST['totalPrice'];

            $stmt = $conn->prepare("UPDATE tickets SET ticket_type = ?, ticket_quantity = ?, total_price = ? WHERE id = ?");
            $stmt->bind_param("sidi", $ticket_type, $ticket_quantity, $total_price, $id);
            $stmt->execute();
            $stmt->close();

            $_SESSION['success_message'] = "Ticket updated successfully!";
            header("Location: tickets.php");
            exit;
        }
    }
}

// Fetch tickets for admin
$tickets = [];
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    $result = $conn->query("SELECT * FROM tickets ORDER BY created_at DESC");
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
    <title>Tickets</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        .admin-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .admin-table th, .admin-table td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        .admin-table th { background-color: #f4f4f4; }
        .success-message { color: green; }
    </style>
</head>
<body>

 <!-- Admin Dashboard -->
 <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']): ?>
        <h2>Admin Dashboard</h2>
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Ticket Type</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tickets as $ticket): ?>
                    <tr>
                        <td><?php echo $ticket['id']; ?></td>
                        <td><?php echo $ticket['customer_name']; ?></td>
                        <td><?php echo $ticket['ticket_type']; ?></td>
                        <td><?php echo $ticket['ticket_quantity']; ?></td>
                        <td>$<?php echo $ticket['total_price']; ?></td>
                        <td>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $ticket['id']; ?>">
                                <input type="hidden" name="action" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?php echo $ticket['id']; ?>">
                                <input type="hidden" name="action" value="update">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
