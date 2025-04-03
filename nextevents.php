<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Event Boxes</title>
    <link rel="stylesheet" href="test.css">



    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
       
        .events-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
       
        .event-card {
            background-color: #0d1a3e;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
       
        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
       
        .event-card img {
            width: 100%;
            height: 200px;
        }
       
        .event-header {
            padding: 20px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
       
        .event-details {
            padding: 15px;
            font-size: 0.9em;
        }
       
        .event-details div {
            margin: 10px 0;
        }
       
        .event-details .more {
            color: #61dafb;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }
       
        .event-details .more:hover {
            text-decoration: underline;
        }
       
        .neon-text {
            font-size: 2rem;
            text-align: center;
            padding: 15px;
            color: #fff;
            text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
            animation: glow 1.5s infinite alternate;
        }
       
        ​ @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ff005e, 0 0 10px #ff005e, 0 0 20px #ff005e, 0 0 40px #ff005e, 0 0 80px #ff005e;
            }
            100% {
                text-shadow: 0 0 10px #00d4ff, 0 0 20px #00d4ff, 0 0 40px #00d4ff, 0 0 80px #00d4ff, 0 0 160px #00d4ff;
            }
        }
    </style>
</head>

<body>



    <div class="neon-container">
        <h1 class="neon-text">FC ALPHA EVENTS</h1>
    </div>
    <div class="events-container">
        <div class="event-card">
            <img src="trainingphoto.jpg">
            <div class="event-header">Training Session
                Open only to press (15 minutes).
            </div>
            <div class="event-details">
                <div>📅 Sunday, Jan 19, 4:15 PM</div>
                <div>📍 Estadio Santiago Bernabéu</div>
                <a href="trainingcamp.php" class="more">More</a>
            </div>
        </div>

        <div class="event-card">
            <img src="uclphototwo.jpg">
            <div class="event-header">Champions League - Matchday 7</div>
            <div class="event-details">
                <div>📅 Wednesday, Jan 22, 9:00 PM</div>
                <div>📍 New Eagles Stadium</div>
                <a href="ucl.php" class="more">More</a>
            </div>
        </div>

        <div class="event-card">
            <img src="copadelrey.jpg">
            <div class="event-header">Superleague Santander - Matchday 21</div>
            <div class="event-details">
                <div>📅 Saturday, Jan 25, 9:00 PM</div>
                <div>📍 Estadio Municipal José Zorrilla</div>
                <a href="superleaguesantander.php" class="more">More</a>
            </div>
        </div>

        <div class="event-card">
            <img src="supercup.png">
            <div class="event-header">Supercup of Kosovo- Matchday 21</div>
            <div class="event-details">
                <div>📅 Saturday, Jan 25, 9:00 PM</div>
                <div>📍 Estadio Municipal José Zorrilla</div>
                <a href="supercupofkosovo.php" class="more">More</a>
            </div>
        </div>

        <div class="event-card">
            <img src="supercupdeutsch.jpg">
            <div class="event-header">Intercontinental Supercup- Matchday 21</div>
            <div class="event-details">
                <div>📅 Saturday, Jan 25, 9:00 PM</div>
                <div>📍 Estadio Municipal José Zorrilla</div>
                <a href="intercontinental.php" class="more">More</a>
            </div>
        </div>

        <div class="event-card">
            <img src="facup.jpg">
            <div class="event-header">Kings Cup Trophy- Matchday 21</div>
            <div class="event-details">
                <div>📅 Saturday, Jan 25, 9:00 PM</div>
                <div>📍 Estadio Municipal José Zorrilla</div>
                <a href="kingscup.php" class="more">More</a>
            </div>
        </div>

     

        <div class="event-card">
            <img src="clubwc.jpeg">
            <div class="event-header">Club World Cup - Matchday 20</div>
            <div class="event-details">
                <div>📅 Sunday, Jan 19, 4:15 PM</div>
                <div>📍 New Eagles Stadium</div>
                <a href="clubworldcup.php" class="more">More</a>
            </div>
        </div>
    </div>
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

        <section id="sponsors ">
            <div class="sponsors-row ">
                <img src="emirates.svg " alt="Emirates Logo ">
                <img src="adidas.svg " alt="Adidas Logo ">
                <img src="hp.svg " alt="HP Logo ">
            </div>
            <div class="sponsors-row ">
                <img src="mahou.svg " alt="Mahou Logo ">
                <img src="dubai.svg " alt="Dubai Logo ">
                <img src="bmw.svg " alt="BMW Logo ">
                <img src="ea-sports.svg " alt="EA Sports Logo ">
                <img src="abbot.svg " alt="Abbott Logo ">
                <img src="nivea.svg " alt="Nivea Men Logo ">
                <img src="cantabria.svg " alt="Cantabria Labs Logo ">
                <img src="linglong.svg " alt="Linglong Tire Logo ">
            </div>
            <div class="sponsors-row ">
                <img src="easymarkets.svg " alt="Easy Markets Logo ">
                <img src="adobe.svg " alt="Adobe Logo ">
                <img src="zegna.svg " alt="Zegna Logo ">
                <img src="palladium.svg " alt="Palladium Hotel Logo ">
                <img src="daktronics.svg " alt="Daktronics Logo ">
                <img src="cisco.svg " alt="Cisco Logo ">
                <img src="softtek.svg " alt="Softtek Logo ">
                <img src="canon.svg " alt="Canon Medical Logo ">
            </div>
            <div class="sponsors-row ">
                <img src="unicaja.svg " alt="Unicaja Logo ">
                <img src="orange.svg " alt="Orange Logo ">
                <img src="hisense.svg " alt="Hisense Logo ">
                <img src="playstation.svg " alt="PlayStation Logo ">
                <img src="codere.svg " alt="Codere Logo ">
                <img src="sanitas.svg " alt="Sanitas Logo ">
                <img src="cocacola.svg " alt="Coca Cola Logo ">
                <img src="solan.svg " alt="Solan De Cabras Logo ">
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

