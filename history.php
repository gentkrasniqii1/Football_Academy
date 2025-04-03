<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men 's First Team</title>
    <link rel="stylesheet" href="test.css">
    <script src="Script.js"></script>

    <style>
    /* General Styles */
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #EFF1F3;
    }

    h1, h2, h3 {
      font-family: 'Georgia', serif;
      color: #0056b3;
    }

    a {
      color: #0056b3;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 70vh;
      background-image: url('/git/projektiGL/historiftupassion.jpg'); /* Replace with your image */
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
    }

    .hero p {
      font-size: 1.5rem;
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

    /* Founders Section */
    .founders {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-between;
      margin-bottom: 40px;
    }

    .founder {
      flex: 1 1 calc(33.33% - 20px);
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .founder:hover {
      transform: scale(1.05);
    }

    .founder img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .founder h3 {
      font-size: 1.5rem;
      margin: 10px 0;
    }

    .founder p {
      padding: 0 10px 20px;
      color: #555;
    }

    /* Gallery Section */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 15px;
    }

    .gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Timeline Section */
    .timeline {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }

    .timeline h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      text-align: center;
      color: #0056b3;
    }

    .timeline ul {
      list-style: none;
      padding: 0;
    }

    .timeline ul li {
      position: relative;
      padding-left: 40px;
      margin-bottom: 20px;
      color: #555;
    }

    .timeline ul li::before {
      content: '';
      position: absolute;
      top: 8px;
      left: 0;
      width: 12px;
      height: 12px;
      background-color: #0056b3;
      border-radius: 50%;
    }

    /* Testimonials Section */
    .testimonials {
      background: #f8f9fa;
      padding: 40px 20px;
      text-align: center;
    }

    .testimonial {
      font-style: italic;
      color: #666;
      margin-bottom: 20px;
    }

    .testimonial-author {
      font-weight: bold;
      margin-top: 10px;
      color: #333;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .founder {
        flex: 1 1 100%;
      }
    }
  </style>

</head>

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

    <!-- Founders Section -->
    <section>
      <h2 class="section-title">Founders of the Club</h2>
      <div class="founders">
        <div class="founder">
          <img src="/git/projektiGL/histori/historiperson1.png" alt="Founder 1">
          <h3>John Doe</h3>
          <p>A visionary leader who started it all.</p>
        </div>
        <div class="founder">
          <img src="/git/projektiGL/histori/historiperson2.png" alt="Founder 2">
          <h3>Jane Smith</h3>
          <p>The strategist who built a winning legacy.</p>
        </div>
        <div class="founder">
          <img src="/git/projektiGL/histori/historiperson3.png" alt="Founder 3">
          <h3>Michael Johnson</h3>
          <p>Shaping the philosophy of our team.</p>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section>
      <h2 class="section-title">Gallery of Memorable Moments</h2>
      <div class="gallery">
        <img src="/git/projektiGL/histori/historifemnat.png" alt="Moment 1">
        <img src="/git/projektiGL/histori/historifans.png" alt="Moment 2">
        <img src="/git/projektiGL/histori/historifutboll2.png" alt="Moment 3">
      </div>
      <div class="gallery">
        <img src="/git/projektiGL/histori/historipassionfut.png" alt="Moment 1">
        <img src="/git/projektiGL/histori/historipassion.png" alt="Moment 2">
        <img src="/git/projektiGL/histori/historifootball.png" alt="Moment 3">
      </div>
      <div class="gallery">
        <img src="/git/projektiGL/histori/historiball.png" alt="Moment 1">
        <img src="/git/projektiGL/histori/historitraning.png" alt="Moment 2">
        <img src="/git/projektiGL/histori/historigame.png" alt="Moment 3">
      </div>

    </section>

    <!-- Timeline Section -->
    <section>
      <div class="timeline">
        <h2>Milestones</h2>
        <ul>
          <li><strong>[Year]</strong>: Founded in [City].</li>
          <li><strong>[Year]</strong>: Won first championship.</li>
        </ul>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
      <h2 class="section-title">What Fans Say</h2>
      <p class="testimonial">"This club has changed my life!"</p>
      <p class="testimonial-author">- Loyal Fan</p>
    </section>
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

