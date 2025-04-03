<?php
session_start();

$conn = new mysqli("localhost", "root", "", "menagjimi_kontakteve");

$result = $conn->query("SELECT * FROM contacts");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

.logout-btn {
    text-decoration: none;
    color: white;
    font-weight: bold;
    background-color: #dc3545;
    padding: 10px 15px;
    border-radius: 5px;
    display: inline-block;
    margin-bottom: 20px;
}

.logout-btn:hover {
    background-color: #b22222;
}

table {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
}

tr:hover {
    background-color: #f1f1f1;
}

td a {
    padding: 6px 10px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.edit {
    background-color: #ffc107;
    padding: 6px 12px;
}

.edit:hover {
    background-color: #e0a800;
}

.delete {
    background-color: #dc3545;
    padding: 6px 12px;
}

.delete:hover {
    background-color: #b22222;
}

        </style>

</head>
<body>

    <h1>Admin Dashboard</h1>
    <a href="logout.php" class="logout-btn">Logout</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td>
                    <a href="edit_contact.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a> |
                    <a href="delete_contact.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>
<?php $conn->close(); ?>
