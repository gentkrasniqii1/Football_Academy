<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men 's First Team</title>
    <link rel="stylesheet" href="test.css">
    <script src="Script.js"></script>

</head>
<style>
  <style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #EFF1F3;
    }

    h1, h2, h3 {
        font-family: 'Georgia', serif;
    }

    a {
        color: #B08D57;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

   

    /* Hero Section */
    .hero {
        position: relative;
        height: 85vh;
        background-image: url('prizrenwallper.png');
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 10px;
        width: 90%;
        max-width: 1200px;
        color: red;
    }

    .hero p {
        font-size: 1.5rem;
        width: 90%;
        max-width: 1200px;
    }

    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .section-title {
        font-size: 2.5rem;
        margin-bottom: 20px;
        text-align: center;
        color:  #2D2D2D;
    }

    /* History Section */
    .history-section {
        margin-bottom: 50px;
        color: #444;
    }

    .history-section p {
        text-align: justify;
        margin-bottom: 20px;
    }

    /* About Section */
    .about-section {
        padding: 20px;
        display: flex;
        align-items: center;
        background-color: #B08D57;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .about-section:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .about-image {
        flex: 1;
    }

    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-content {
        flex: 1;
        padding: 20px;
        background-color: #2D2D2D;
    }

    .about-content h2 {
        font-size: 24px;
        color: white;
        margin-bottom: 15px;
    }

    .about-content p {
        font-size: 16px;
        color: #B08D57;
        line-height: 1.6;
    }

    /* Historic Section */
    .historic-section {
        margin-top: 40px;
        padding: 20px;
        display: flex;
        align-items: center;
        background-color: #2D2D2D;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .historic-section:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .historic-content {
        flex: 1;
        padding: 20px;
        background-color: #B08D57;
    }

    .historic-content h2 {
        font-size: 24px;
        color: #ffff;
        margin-bottom: 15px;
    }

    .historic-content p {
        font-size: 16px;
        color: #2D2D2D;
        line-height: 1.6;
    }

    .historic-image {
        flex: 1;
    }

    .historic-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }



    /* Sponsors Section */
    #sponsors {
        padding: 20px;
        background-color: #fff;
    }

    .sponsors-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
    }

    .sponsors-row img {
        height: 50px;
    }


    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
        .navbar .links, .navbar .icons {
            display: none;
        }

        .navbar .menu {
            display: block;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .about-section, .historic-section {
            flex-direction: column;
        }

        .about-image, .historic-image {
            height: 200px;
        }

    }

    @media (max-width: 480px) {
        .hero h1 {
            font-size: 2rem;
        }

        .hero p {
            font-size: 1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .about-content h2, .historic-content h2 {
            font-size: 20px;
        }

        .about-content p, .historic-content p {
            font-size: 14px;
        }
    }
</style>
</style>
<body>



    <div class="hero">
    <div>
      <h1>Our Football Club's History</h1>
      <p>A journey through time, passion, and achievements</p>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container">
    <!-- History Section -->
    <section class="history-section">
      <h2 class="section-title">The Story of Our Club</h2>
      <p>
        Founded in [Year], our football club is a symbol of resilience and ambition. Starting from a small group of enthusiasts,
        the club quickly gained popularity, winning hearts and trophies alike.
        From early challenges to becoming an internationally acclaimed club, every chapter in our story is a testament to perseverance.
      </p>
      <p>
        Our club's milestones include historic wins, unforgettable matches, and nurturing world-class talent.
        We have always stayed true to our mission: to inspire and bring people together through the love of football.
      </p>
    </section>

   
    <section class="about-section" id="about">
        <div class="about-image">
            <img src="prizren8.png" alt="About Image">
        </div>
        <div class="about-content">
            <h2>Football and basketball squads enjoy a Christmas lunch</h2>
            <p id="about-paragraph">
                The Real Madrid football and basketball teams gathered to celebrate the holiday season with a special Christmas lunch. Players, staff, and management shared a memorable moment, reflecting on their achievements and fostering team spirit ahead of upcoming
                challenges.
            </p>
        </div>
    </section>

    <!------Course--------->
    <main>
        <section class="historic-section" id="historic">
            <div class="historic-content">
                <h2>Reliving the Historic Moments</h2>
                <p>
                    Real Madrid has a legacy of unforgettable moments that have defined football history. From record-breaking titles to legendary players, every chapter is a testament to excellence and determination. Explore the history that continues to inspire millions
                    worldwide.
                </p>
            </div>
            <div class="historic-image">
                <img src="prizren6.png" alt="Historic Image">
            </div>
        </section>

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




