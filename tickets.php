
<?php include 'navbarfix.php'; ?>

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





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC ALPHA - Ticket Purchase</title>
    <link rel="stylesheet" href="test.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        
        .ticket-section {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
        
        .match-info {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .match-info h2 {
            font-size: 28px;
            color: #333;
        }
        
        .match-info p {
            font-size: 16px;
            color: #666;
        }
        
        .ticket-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        
        .ticket-form label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }
        
        .ticket-form select,
        .ticket-form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .total-price {
            grid-column: 1 / -1;
            text-align: right;
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }
        
        .purchase-button {
            grid-column: 1 / -1;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        .purchase-button:hover {
            background-color: #0056b3;
        }
        
        @media (max-width: 600px) {
            .ticket-form {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>




    <br>
    <br>

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
<div class="ticket-section">
    <div class="match-info">
        <h2>FC ALPHA vs Rival Team</h2>
        <p>Sunday, December 15th, 2024, 7:00 PM<br>Alpha Stadium</p>
    </div>

    <form class="ticket-form" id="ticketForm" method="post" action="proces_ticket.php">
        <div>
            <label for="ticketType">Select Ticket Type</label>
            <select id="ticketType" name="ticket_type">
                <option value="standard" data-price="50">Standard - $50</option>
                <option value="vip" data-price="100">VIP - $100</option>
                <option value="premium" data-price="150">Premium - $150</option>
                <option value="family" data-price="120">Family Pack - $120</option>
                <option value="student" data-price="40">Student - $40</option>
            </select>
        </div>
        <div>
            <label for="ticketQuantity">Quantity</label>
            <input type="number" id="ticketQuantity" name="ticket_quantity" min="1" value="1">
        </div>
        <div>
            <label for="stadiumSection">Stadium Section</label>
            <select id="stadiumSection" name="stadium_section">
                <option value="north">North</option>
                <option value="south">South</option>
                <option value="east">East</option>
                <option value="west">West</option>
                <option value="vip-box">VIP Box</option>
            </select>
        </div>
        <div>
            <label for="seatPreference">Seat Preference</label>
            <select id="seatPreference" name="seat_preference">
                <option value="aisle">Aisle Seat</option>
                <option value="center">Center Seat</option>
                <option value="front">Front Row</option>
                <option value="back">Back Row</option>
            </select>
        </div>
        <div>
            <label for="paymentMethod">Payment Method</label>
            <select id="paymentMethod" name="payment_method">
                <option value="credit">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="cash">Cash on Entry</option>
                <option value="bank">Bank Transfer</option>
            </select>
        </div>
        <div>
            <label for="customerName">Your Name</label>
            <input type="text" id="customerName" name="customer_name" placeholder="Enter your full name" required>
        </div>
        <div>
            <label for="customerEmail">Your Email</label>
            <input type="email" id="customerEmail" name="customer_email" placeholder="Enter your email" required>
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div>
            <label for="notes">Special Requests</label>
            <input type="text" id="notes" name="notes" placeholder="Add any special requests (optional)">
        </div>
        <div class="total-price" id="totalPrice">Total: $50</div>
        <button type="submit" class="purchase-button">Purchase Tickets</button>
    </form>
</div>


    <script>
        const ticketType = document.getElementById('ticketType');
        const ticketQuantity = document.getElementById('ticketQuantity');
        const totalPrice = document.getElementById('totalPrice');

        function updateTotalPrice() {
            const selectedOption = ticketType.options[ticketType.selectedIndex];
            const pricePerTicket = parseFloat(selectedOption.getAttribute('data-price'));
            const quantity = parseInt(ticketQuantity.value) || 1;
            totalPrice.textContent = `Total: $${pricePerTicket * quantity}`;
        }

        ticketType.addEventListener('change', updateTotalPrice);
        ticketQuantity.addEventListener('input', updateTotalPrice);

        function purchaseTickets() {
            const name = document.getElementById('customerName').value.trim();
            const email = document.getElementById('customerEmail').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const quantity = ticketQuantity.value;
            const ticketTypeSelected = ticketType.options[ticketType.selectedIndex].text;
            const section = document.getElementById('stadiumSection').value;
            const seatPreference = document.getElementById('seatPreference').value;
            const notes = document.getElementById('notes').value.trim();

            if (!name || !email || !phone) {
                alert('Please fill out all required fields: Name, Email, and Phone Number.');
                return;
            }

            alert(`Thank you, ${name}! You purchased ${quantity} tickets (${ticketTypeSelected}) in the ${section} section with a preference for ${seatPreference}. Special notes: ${notes}. Confirmation will be sent to ${email}.`);
        }
    </script>

    <br>
    <br>


      

    <footer class="footer ">
            <div class="footer-content ">
                <div class="footer-column ">
                    <h4>Football</h4>
                    <ul>
                        <li><a href="firstteam.php">First Team</a></li>
                        <li><a href="academy.php">Academy</a></li>
                        <li><a href="womenteam.php">Women's Team</a></li>
                    </ul>
                </div>
                <div class="footer-column ">
                    <h4>News</h4>
                    <ul>
                        <li><a href="news.php">Latest News</a></li>
                        <li><a href="nextevents.php">Next Events</a></li>
                        <li><a href="schedule.php">Schedules</a></li>
                       
                    </ul>
                </div>
                <div class="footer-column ">
                    <h4>The Club</h4>
                    <ul>
                       
                        <li><a href="history.php ">History</a></li>
                        <li><a href="fcalphacity.php">FC ALPHA City</a></li>
                        <li><a href="stadium.php">New Eagles Stadium</a></li>
                        <li><a href="honors.php">Honors</a></li>
                        <li><a href="fanclubs.php">Fan Clubs</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="foundation.php">Foundation</a></li>
                        <li><a href="4kpics.php">Best Pictures</a></li>
                    </ul>
                </div>
                <div class="footer-column ">
                    <h4>FC ALPHA</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="tickets.php">Tickets</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="sponsors.php">Sponsors</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="matchdaytour.php">FCA Play</a></li>
                    </ul>
                </div>
            </div>
            <div class="social-links ">
                <a href="facebook.svg " aria-label="Facebook "><img src="facebook.svg "></a>
                <a href="x.svg " aria-label="Twitter "><img src="x.svg "></a>
                <a href="instagram.svg " aria-label="Instagram "><img src="instagram.svg "></a>
                <a href="youtube.svg " aria-label="fg "><img src="youtube.svg "></a>
                <a href="# " aria-label="LinkedIn "><img src="tiktok.svg "></a>
                <a href="snapchat.svg " aria-label="Snapchat "><img src="snapchat.svg "></a>
            </div>
        </footer>


    <section id="sponsors">
        <div class="sponsors-row">
            <img src="emirates.svg" alt="Emirates Logo">
            <img src="adidas.svg" alt="Adidas Logo">
            <img src="hp.svg" alt="HP Logo">
        </div>
        <div class="sponsors-row">
            <img src="mahou.svg" alt="Mahou Logo">
            <img src="dubai.svg" alt="Dubai Logo">
            <img src="bmw.svg" alt="BMW Logo">
            <img src="ea-sports.svg" alt="EA Sports Logo">
            <img src="abbot.svg" alt="Abbott Logo">
            <img src="nivea.svg" alt="Nivea Men Logo">
            <img src="cantabria.svg" alt="Cantabria Labs Logo">
            <img src="linglong.svg" alt="Linglong Tire Logo">
        </div>
        <div class="sponsors-row">
            <img src="easymarkets.svg" alt="Easy Markets Logo">
            <img src="adobe.svg" alt="Adobe Logo">
            <img src="zegna.svg" alt="Zegna Logo">
            <img src="palladium.svg" alt="Palladium Hotel Logo">
            <img src="daktronics.svg" alt="Daktronics Logo">
            <img src="cisco.svg" alt="Cisco Logo">
            <img src="softtek.svg" alt="Softtek Logo">
            <img src="canon.svg" alt="Canon Medical Logo">
        </div>
        <div class="sponsors-row">
            <img src="unicaja.svg" alt="Unicaja Logo">
            <img src="orange.svg" alt="Orange Logo">
            <img src="hisense.svg" alt="Hisense Logo">
            <img src="playstation.svg" alt="PlayStation Logo">
            <img src="codere.svg" alt="Codere Logo">
            <img src="sanitas.svg" alt="Sanitas Logo">
            <img src="cocacola.svg" alt="Coca Cola Logo">
            <img src="solan.svg" alt="Solan De Cabras Logo">
        </div>
    </section>


   
    <div class="copyright ">
            <p>FC ALPHA © 2025 All rights reserved</p>
            <p>
                <a href="sponsors.html ">SEE ALL SPONSORS</a> ·
                <a href="#legal ">Legal notice</a> ·
                <a href="#privacy ">Privacy Policy</a> ·
                <a href="#cookies ">Cookies Policy</a> ·
                <a href="#info ">Canal de información</a> ·
                <a href="https://www.realmadrid.com ">fcalpha.com</a>
            </p>
        </div>

        <!-- Back to Top Button -->
        <button class="back-to-top " id="backToTop ">↑ Top</button>

        <script>
            const backToTopButton = document.getElementById("backToTop ");

            // Show/hide the button based on scroll position
            window.addEventListener("scroll ", () => {
                if (window.scrollY > 300) {
                    backToTopButton.style.display = "block ";
                } else {
                    backToTopButton.style.display = "none ";
                }
            });

            // Scroll to the top when the button is clicked
            backToTopButton.addEventListener("click ", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth "
                });
            });
        </script>
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
</body>

</html>