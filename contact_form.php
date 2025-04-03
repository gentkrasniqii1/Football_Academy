<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        .success {
            color: green;
            margin-bottom: 15px;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Contact Form</h1>

    <?php
    if (isset($_SESSION['success'])) {
        echo "<p class='success'>" . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['error'])) {
        echo "<p class='error'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    ?>

    <form class="contact-form" id="contact" method="POST" action="proces_contact.php">
        <div class="form-row">
            <input type="text" name="name" placeholder="Emri juaj" required>
            <input type="email" name="email" placeholder="Email-i juaj" required>
        </div>
        <div class="form-row">
            <input type="text" name="phone" placeholder="Numri i telefonit" required>
            <input type="text" name="address" placeholder="Adresa juaj">
        </div>
        <textarea name="message" placeholder="Mesazhi juaj" rows="5" required></textarea>
        <button type="submit" class="submit-btn">Dërgo Mesazhin</button>
    </form>
</body>
</html>
