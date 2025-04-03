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

<body>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #CAC4CE;
      color: #000;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      text-align: left;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 28px;
      margin: 0;
      color: #000;
      font-weight: bold;
    }

    .tabs {
      display: flex;
      gap: 20px;
      margin-bottom: 30px;
      border-bottom: 2px solid #e0e0e0;
    }

    .tabs a {
      text-decoration: none;
      color: #6c757d;
      font-weight: bold;
      padding: 10px 0;
      position: relative;
    }

    .tabs a.active {
      color: #000;
    }

    .tabs a.active::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      right: 0;
      height: 3px;
      background-color: #000;
    }

    .list {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
    }

    .item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 15px;
    }

    .item img {
      max-width: 150px;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    .item-content {
      flex: 1;
      margin-left: 20px;
    }

    .item-content h3 {
      font-size: 20px;
      margin: 0;
      color: #000;
      font-weight: bold;
    }

    .item-content p {
      margin: 8px 0 0;
      font-size: 14px;
      color: #666;
    }

    @media (min-width: 768px) {
      .list {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (min-width: 1024px) {
      .list {
        grid-template-columns: 1fr;
      }
    }

    .item img.trophy {
      max-width: 100px;
    }

    .year-list {
      display: flex;
      gap: 10px;
      font-size: 14px;
      flex-wrap: wrap;
    }
  </style>


  <div class="container">
    <div class="header">
      <h1>List of Winners</h1>
    </div>

    <div class="tabs">
      <a href="#" class="active">Football</a>
    
    </div>

    <div class="list">
      <div class="item">
        <img src="bestclubrbg.png" alt="The Best Club Trophy" class="trophy">
        <div class="item-content">
          <h3>The Best Club of the 20th Century FIFA Trophy</h3>
          <p>11 December 2000</p>
        </div>
      </div>

      <div class="item">
        <img src="uclrbg.png" alt="Champions League Trophy" class="trophy">
        <div class="item-content">
          <h3>15 Champions Leagues</h3>
          <p class="year-list">1955-56, 1956-57, 1957-58, 1958-59, 1959-60, 1965-66, 1997-98, 1999-00, 2001-02, 2013-14, 2015-16, 2016-17, 2017-18, 2021-22, 2023-24</p>
        </div>
      </div>

      <!-- Additional Titles as shown in the photo -->
      <div class="item">
        <img src="copadelreyrbg.png" alt="La Liga Trophy" class="trophy">
        <div class="item-content">
          <h3>10 La Liga Titles</h3>
          <p class="year-list">2001-02 to 2023-24</p>
        </div>
      </div>

      <div class="item">
        <img src="supercuprbg.png" alt="Copa del Rey Trophy" class="trophy">
        <div class="item-content">
          <h3>5 Copa del Rey Titles</h3>
          <p>2009-10 to 2021-22</p>
        </div>
      </div>

      <div class="item">
        <img src="supercuptworbg.png" alt="UEFA Super Cup Trophy" class="trophy">
        <div class="item-content">
          <h3>4 UEFA Super Cups</h3>
          <p>2002, 2014, 2016, 2022</p>
        </div>
      </div>
      <div class="item">
        <img src="facuprbg.png" alt="UEFA Super Cup Trophy" class="trophy">
        <div class="item-content">
          <h3>4 UEFA Super Cups</h3>
          <p>2002, 2014, 2016, 2022</p>
        </div>
      </div>
         
      <div class="item">
        <img src="carabaocuprbg.png" alt="UEFA Super Cup Trophy" class="trophy">
        <div class="item-content">
          <h3>4 UEFA Super Cups</h3>
          <p>2002, 2014, 2016, 2022</p>
        </div>
      </div>


      <div class="item">
        <img src="clubwcrbg.png" alt="FIFA Club World Cups Trophy" class="trophy">
        <div class="item-content">
          <h3>3 FIFA Club World Cups</h3>
          <p>2014, 2016, 2018</p>
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