<?php
include 'db.php';

// Fetch player data for editing
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM players WHERE id='$id'";
    $result = $conn->query($query);
    $player = $result->fetch_assoc();
}

if (isset($_POST['update_player'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $age = intval($_POST['age']);
    $group_age = $conn->real_escape_string($_POST['group_age']);
    $position = $conn->real_escape_string($_POST['position']);
    $email = $conn->real_escape_string($_POST['email']);

    $query = "UPDATE players SET name='$name', surname='$surname', age='$age', 
              group_age='$group_age', position='$position', email='$email' WHERE id='$id'";
    
    if ($conn->query($query) === TRUE) {
        echo "Player updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Player</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Update Player</h2>
    <form action="update_player.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $player['name']; ?>" required>
        <label>Surname:</label>
        <input type="text" name="surname" value="<?php echo $player['surname']; ?>" required>
        <label>Age:</label>
        <input type="number" name="age" value="<?php echo $player['age']; ?>" required>
        <label>Group Age:</label>
        <select name="group_age" required>
            <?php for ($i = 11; $i <= 21; $i++) { ?>
                <option value="U<?php echo $i; ?>" <?php echo ($player['group_age'] == "U$i") ? 'selected' : ''; ?>>U<?php echo $i; ?></option>
            <?php } ?>
        </select>
        <label>Position:</label>
        <select name="position" required>
            <?php 
            $positions = ["goalkeeper", "LB", "CB", "RB", "CDM", "CM", "RMF", "LMF", "AMF", "LWF", "RWF", "SS", "CF"];
            foreach ($positions as $pos) { ?>
                <option value="<?php echo $pos; ?>" <?php echo ($player['position'] == $pos) ? 'selected' : ''; ?>><?php echo strtoupper($pos); ?></option>
            <?php } ?>
        </select>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $player['email']; ?>" required>
        <button type="submit" name="update_player">Update Player</button>
    </form>
</body>
</html>
