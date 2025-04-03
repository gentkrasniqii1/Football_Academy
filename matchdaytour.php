<?php include 'navbarfix.php'; ?>
​
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Day Section</title>
    <link rel="stylesheet" href="test.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .title {
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 20px;
            color: orangered;

        }
       
        p {
            font-weight: 700;

        }

        .icons-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .icon-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 150px;
            border: 1px solid black;
        }

        .icon-card img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .card {
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-content {
            padding: 16px;
        }

        .card-content h3 {
            font-size: 18px;
            margin-bottom: 8px;
            color: #fff;
        }

        .card-content span {
            font-size: 14px;
            color: #fff;
        }

        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            .icons-container {
                flex-direction: column;
                align-items: center;
            }

            .icon-card {
                width: 80px;
            }
        }
    </style>
</head>

<body>
   


    <div class="container">
        <div class="title">Match Day Highlights</div>
       
        <div class="icons-container">
            <div class="icon-card">
                <img src="mentality.png" alt="Icon 1">
                <p>Mentality</p>
            </div>
            <div class="icon-card">
                <img src="chiemestry.png" alt="Icon 2">
                <p>Chiemestry</p>
            </div>
            <div class="icon-card">
                <img src="iconteam.png" alt="Icon 3">
                <p>Team</p>
            </div>
        </div>

        <div class="cards-container">
            <div class="card">
                <img src="Stadiumi1.png" alt="Match Day Challenge">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>The Match Day Challenge is on!</h3>
                </div>
            </div>
            <div class="card">
                <img src="AaA.png" alt="Pere Romeu">
                <div class="card-content">
                    <span>00:44</span>
                    <h3>Pere Romeu prèvia València J.13</h3>
                </div>
            </div>
            <div class="card">
                <img src="futbollloj.png" alt="Hansi Flick">
                <div class="card-content">
                    <span>02:08</span>
                    <h3>Hansi Flick: 'It's up to us'</h3>
                </div>
            </div>
            <div class="card">
                <img src="futbollloj2.png" alt="Barça v Leganés">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>Five things about Barça v Leganés</h3>
                </div>
            </div>
            <div class="card">
                <img src="Traningfotop.png" alt="Barça v Leganés">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>Five things about Barça v Leganés</h3>
                </div>
            </div>
            <div class="card">
                <img src="Traningfoto.png" alt="Barça v Leganés">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>Five things about Barça v Leganés</h3>
                </div>
            </div>
            <div class="card">
                <img src="ekipifutboll.png" alt="Barça v Leganés">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>Five things about Barça v Leganés</h3>
                </div>
            </div>
            <div class="card">
                <img src="pepoplee.png" alt="Barça v Leganés">
                <div class="card-content">
                    <span>FIRST TEAM · 14 Dec 24</span>
                    <h3>Five things about Barça v Leganés</h3>
                </div>
            </div>
        </div>
    </div>

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


