
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
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #1b1b3a;
      color: #fff;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #fff;
    }

    .photo-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .photo-card {
      background-color: #28284b;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .photo-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    }

    .photo-card img {
      width: 100%;
      display: block;
    }

    .photo-card .content {
      padding: 15px;
    }

    .photo-card h3 {
      font-size: 1.1rem;
      margin: 0 0 10px;
      color: #fff;
    }

    .photo-card p {
      font-size: 0.9rem;
      margin: 5px 0;
      color: #bbb;
    }

    .photo-card .metadata {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.8rem;
      margin-top: 10px;
      color: #999;
    }

    .metadata .icon {
      background-color: #3e3e6b;
      border-radius: 50%;
      width: 25px;
      height: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 0.8rem;
    }

    .metadata span {
      display: flex;
      align-items: center;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .photo-card {
        margin-bottom: 20px;
      }
    }
  </style>

</head>

<body>

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
        <a href="loginandRegister.php" class="sign-in">Sign in</a>
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


    <div class="container">
    <h1>Beautiful Photos</h1>
    <div class="photo-grid">
      <div class="photo-card">
        <img src="/git/projektiGL/femijetfutboll.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>
</div>
    <div class="photo-grid">
      <div class="photo-card">
        <img src="/git/projektiGL/greenfutball.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>
      <div class="photo-card">
        <img src="/git/projektiGL/lojafemija.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>
      <div class="photo-card">
        <img src="/git/projektiGL/topitraning.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/pamjatraning.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/traningmoment.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/futballmoment.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/ndeshja.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/skuadra.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/lojashiu.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/ndeshjamoment.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>  <div class="photo-card">
        <img src="/git/projektiGL/porta.png" alt="Photo 1">
        <div class="content">
          <h3>Les imatges d'Araujo al Barça</h3>
          <p>FIRST TEAM · 5 hrs ago</p>
          <div class="metadata">
            <span class="icon">33</span>
            <span>5 hrs ago</span>
          </div>
        </div>
      </div>
      <div class="photo-card">
        <img src="/git/projektiGL/skuadranxemje.png" alt="Photo 2">
        <div class="content">
          <h3>Ronald Araujo extends contract, in pictures</h3>
          <p>FIRST TEAM · 9 hrs ago</p>
          <div class="metadata">
            <span class="icon">9</span>
            <span>9 hrs ago</span>
          </div>
        </div>
      </div>
      <!-- Add more cards here, following the same structure -->
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

