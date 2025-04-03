<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure ID is an integer to prevent SQL injection
    
    $query = "DELETE FROM players WHERE id='$id'";
    
    if ($conn->query($query) === TRUE) {
        echo "Player deleted successfully!";
        header("Location: players_dashboard.php"); // Redirect back to the dashboard after deletion
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
