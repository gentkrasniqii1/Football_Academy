<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match Schedule</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="test.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;

            background-color: #f4f4f4;
        }
       
        .schedule-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
       
        ..logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.logo img {
    height: 40px;
}

nav {
    display: flex;
    gap: 20px;
}

nav a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: color 0.3s;
}

nav a:hover {
    color: #007bff;
}

.menu {
    display: none;
    cursor: pointer;
    flex-direction: column;
    gap: 5px;
}

.menu div {
    width: 25px;
    height: 3px;
    background-color: #333;
}

.sign-in {
    border: 1px solid #007bff;
    color: #007bff;
    margin-top: -5px;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s;
}

.sign-in:hover {
    background-color: #007bff;
    color: #fff;
}


/*Responsive Design*/

@media (max-width: 768px) {
    nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        right: 20px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 30px;
    }
    nav.active {
        display: flex;
    }
    .menu {
        display: flex;
        position: absolute;
        text-align: center;
    }
}
       
        .next-match {
            font-size: 16px;
            color: #555;
        }
       
        .match-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
       
        .match-card .team {
            display: flex;
            align-items: center;
        }
       
        .match-card .team img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }
       
        .match-card .details {
            text-align: center;
        }
       
        .match-card .details .date {
            font-size: 14px;
            color: #888;
        }
       
        .match-card .details .score {
            font-size: 20px;
            font-weight: bold;
            color: #000;
            margin: 5px 0;
        }
       
        .match-card .actions button {
            background-color: #0078d7;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
       
        .match-card .actions button:hover {
            background-color: #005bb5;
        }
    </style>
</head>

<body>




    <div class="schedule-container">
        <div class="header">
            <h1>Alpha First Team Matches</h1>
            <div class="next-match"><b>Next Match: <span id="next-match-timer">02:00:21</b></span>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/rmalogo1.png" alt="Real Madrid">
                <span>Real Madrid</span>
            </div>
            <div class="details">
                <div class="date">Sunday, January 12</div>
                <div class="score">4 - 5</div>
                <div>SuperLeague</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>FC Alpha</span>
            </div>
            <div class="actions">
            <button src="news.php">Full Match Report</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>FC Alpha</span>
            </div>
            <div class="details">
                <div class="date">Wednesday, January 15</div>
                <div class="score">5 - 1</div>
                <div>UEFA Champions League</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/Marsiellogo.png" alt="Marseille">
                <span>Marseille</span>
            </div>
            <div class="actions">
            <button src="news.php">Full Match Report</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/interlogo.png" alt="Inter">
                <span>Inter</span>
            </div>
            <div class="details">
                <div class="date">Wednesday, January 15</div>
                <div class="score">1 - 3</div>
                <div>SuperLeague</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>FC Alpha</span>
            </div>
            <div class="actions">
            <button src="news.php">Full Match Report</button>
            </div>
        </div>
        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="details">
                <div class="date">Wednesday, January 15</div>
                <div class="score">1 - 0</div>
                <div>SuperCup Kosovo</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/liverpool logo 1.png" alt="Real Betis">
                <span>Liverpool</span>
            </div>
            <div class="actions">
            <button src="news.php">Full Match Report</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/BAMlogo.png" alt="Bayern Munchen">
                <span>Bayern Munchen</span>
            </div>
            <div class="details">
                <div class="date">Wednesday, January 15</div>
                <div class="score">2 - 1</div>
                <div>King's Cup</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="actions">
            <button src="news.php">Full Match Report</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="details">
                <div class="date">Wednesday, January 15</div>
                <div class="score">2 - 0</div>
                <div>SuperLeague</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/manclogo.png" alt="Manchester City">
                <span>Manchester City</span>
            </div>
            <div class="actions">
                <button src="news.php">Full Match Report</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/manulogo.png" alt="Manchester United">
                <span>Manchester United</span>
            </div>
            <div class="details">
                <div class="date">Saturday, January 18</div>
                <div class="score">21:00</div>
                <div>World Club Cup</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="actions">
            <button src="tickets.php">Buy Tickets</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="details">
                <div class="date">Saturday, January 18</div>
                <div class="score">21:00</div>
                <div> International Cup</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/milanlogo.png" alt="Milan">
                <span>Milan</span>
            </div>
            <div class="actions">
            <button src="tickets.php">Buy Tickets</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/Bvblogo.png" alt="Borussia Dortmund">
                <span>Borussia Dortmund</span>
            </div>
            <div class="details">
                <div class="date">Saturday, January 18</div>
                <div class="score">21:00</div>
                <div>SuperLeague</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="actions">
            <button src="tickets.php">Buy Tickets</button>
            </div>
        </div>

        <div class="match-card">
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/alogo3.png" alt="Alpha">
                <span>Alpha</span>
            </div>
            <div class="details">
                <div class="date">Saturday, January 18</div>
                <div class="score">21:00</div>
                <div>UEFA Champions League</div>
            </div>
            <div class="team">
                <img src="/git/ProjektiGL/lgekp48/arslogo.png" alt="Arsenal">
                <span>Arsenal</span>
            </div>
            <div class="actions">
                <button src="tickets.php">Buy Tickets</button>
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
    <script>
        function startCountdown() {
            const timerElement = document.getElementById('next-match-timer');
            let seconds = 2 * 24 * 60 * 60 + 21; // Example: 2 days, 21 seconds

            const updateTimer = () => {
                const days = Math.floor(seconds / (24 * 60 * 60));
                const hours = Math.floor((seconds % (24 * 60 * 60)) / (60 * 60));
                const minutes = Math.floor((seconds % (60 * 60)) / 60);
                const secs = seconds % 60;
                timerElement.textContent = `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
                seconds--;

                if (seconds < 0) {
                    clearInterval(interval);
                }
            };

            updateTimer();
            const interval = setInterval(updateTimer, 1000);
        }

        startCountdown();
    </script>
</body>

</html>

