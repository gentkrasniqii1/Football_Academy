<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Day Section</title>
    <link rel="stylesheet" href="test.css">

<style>
    .user-info {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 16px;
        font-weight: 500;
        color: #000;
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 15px;
        border-radius: 20px;
    }

    .user-info img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
    }

    .user-info span {
        font-weight: 500;
        white-space: nowrap;
    }

    .logout-btn {
        display: inline-block;
        padding: 12px 20px;
        background-color: #ff5733;
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 5px;
        transition: background 0.3s;
        vertical-align: middle;
    }

    .logout-btn:hover {
        background-color: #e04e2c;
    }
   
</style>

<div class="navbar">
    <div class="logo">
        <img src="logo.png" alt="Real Madrid">
    </div>
    <div class="links">
        <a href="index.php">Home</a>
        <a href="tickets.php">Tickets</a>
        <a href="shop.php">Shop</a>
        <a href="sponsors.php">Sponsors</a>
        <a href="contact.php">Contact</a>
        <a href="matchdaytour.php">FCA Tour</a>
    </div>
    <div class="icons">
        <img src="adidas-removebg-preview.png" alt="Icon 1">
        <img src="emirates.png" alt="Icon 2">
    </div>

    <?php if (isset($_SESSION['first_name']) && $_SESSION['role'] !== 'admin'): ?>
    <div class="user-info">
        <img src="profile.png" alt="User Profile"> 
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</span>
        <a class="logout-btn" href="logout.php">Logout</a>
    </div>
<?php else: ?> <!-- Fix: Show sign-in button when not logged in -->
    <a href="loginandRegister.php" class="sign-in">Sign in</a>
<?php endif; ?>

    <div class="menu" id="menuToggle"></div>
</div>

<div class="overlay" id="overlay"></div>

<div class="menu-content" id="menuContent">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="tickets.php">Tickets</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="index.php">Sponsors</a></li>
        <li><a href="tickets.php">Contact</a></li>
        <li><a href="matchdaytour.php">FCA Tour</a></li>
        <li><a href="#">Football</a>
            <ul class="submenu">
                <li><a href="firstteam.php">First Team</a></li>
                <li><a href="womenteam.php">Women's Team</a></li>
                <li><a href="academy.php">Academy</a></li>
            </ul>
        </li>
        <li><a href="#">News</a>
            <ul class="submenu">
                <li><a href="news.php">Latest News</a></li>
                <li><a href="nextevents.php">Next Events</a></li>
                <li><a href="schedule.php">Schedules</a></li>
            </ul>
        </li>
        <li><a href="#">The Club</a>
            <ul class="submenu">
                <li><a href="history.php">History</a></li>
                <li><a href="fcalphacity.php">FC ALPHA City</a></li>
                <li><a href="stadium.php">New Eagles Stadium</a></li>
                <li><a href="honors.php">Honors</a></li>
                <li><a href="fanclubs.php">Fan Clubs</a></li>
            </ul>
        </li>
        <li><a href="foundation.php">Foundation</a></li>
        <li><a href="4kpics.php">Best Pictures</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const menuContent = document.getElementById('menuContent');
    const overlay = document.getElementById('overlay');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        menuContent.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
        menuToggle.classList.remove('active');
        menuContent.classList.remove('active');
        overlay.classList.remove('active');
    });
</script>
