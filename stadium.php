<?php include 'navbarfix.php'; ?>
​
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men 's First Team</title>
    <link rel="stylesheet" href="test.css">
    <script src="Script.js"></script>

    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(to bottom, #0b2545, #0f3a69);
      color: white;
      padding: 50px 20px;
      text-align: center;
    }

    .hero img {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      border-radius: 10px;
    }

    .hero h2 {
      margin-top: 20px;
      font-size: 1.8rem;
    }

    /* Stadium Sections */
    .stadium-sections {
      background-color: #f5f7fa;
      padding: 40px 20px;
      text-align: center;
    }

    .stadium-sections h3 {
      margin-bottom: 20px;
      font-size: 1.5rem;
      color: #333;
    }

    .section-cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .section-card {
      background-color: #192a56;
      color: white;
      padding: 20px;
      border-radius: 10px;
      width: 200px;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1rem;
      font-weight: bold;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .section-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    /* News Section */
    .news-section {
      padding: 40px 20px;
    }

    .news-section h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #333;
    }

    .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .news-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
   
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .news-card img {
      width: 100%;
      display: block;
      max-height:300px;
    }

    .news-card .text {
      padding: 15px;
    }

    .news-card .text h4 {
      font-size: 1rem;
      margin: 0;
      color: #333;
      font-weight: normal;
    }

    .news-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero img {
        width: 100%;
      }

      .section-card {
        width: 100%;
      }
    }
  </style>

</head>

<body>




    <div class="hero">
    <img src="stadiumiAm.png" alt="Stadium Hero Image">
    <h2>View the Stadium Redevelopment Work</h2>
  </div>

  <!-- Stadium Sections -->
  <div class="stadium-sections">
    <h3>Bernabéu Stadium Sections</h3>
    <div class="section-cards">
      <div class="section-card">Events and Concerts</div>
      <div class="section-card">Corporate Events</div>
      <div class="section-card">Tour Bernabéu</div>
      <div class="section-card">Hospitality</div>
    </div>
  </div>

  <!-- News Section -->
  <div class="news-section">
    <h3>Santiago Bernabéu Stadium News</h3>
    <div class="news-grid">
      <div class="news-card">
        <img src="stadiumiliqen.png" alt="News Image">
        <div class="text">
          <h4>All the latest news at the Santiago Bernabéu in the 21st century.</h4>
        </div>
      </div>
      <div class="news-card">
        <img src="stadiumiKkalter.png" alt="News Image">
        <div class="text">
          <h4>You can't miss the Bernabéu's retractable grass as you've never seen it before.</h4>
        </div>
      </div>
     
      <div class="news-card">
        <img src="stadiumigold.png" alt="News Image">
        <div class="text">
          <h4>The spectacular transformation of the Bernabéu.</h4>
        </div>
      </div>
     
      <div class="news-card">
        <img src="stadiumilartH.png" alt="News Image">
        <div class="text">
          <h4>A look at the new Santiago Bernabéu.</h4>
        </div>
      </div>
    </div>
  </div>


  <div class="news-section">
   
    <div class="news-grid">
      <div class="news-card">
        <img src="stadiumifest.png" alt="News Image">
        <div class="text">
          <h4>All the latest news at the Santiago Bernabéu in the 21st century.</h4>
        </div>
      </div>
      <div class="news-card">
        <img src="stadiumifest2.png" alt="News Image">
        <div class="text">
          <h4>You can't miss the Bernabéu's retractable grass as you've never seen it before.</h4>
        </div>
      </div>
     
      <div class="news-card">
        <img src="stadiumikorne.png" alt="News Image">
        <div class="text">
          <h4>The spectacular transformation of the Bernabéu.</h4>
        </div>
      </div>
     
      <div class="news-card">
        <img src="stadiumibrasil.png" alt="News Image">
        <div class="text">
          <h4>A look at the new Santiago Bernabéu.</h4>
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

