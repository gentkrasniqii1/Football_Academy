
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academy Awards</title>
    <link rel="stylesheet" href="test.css">
   

    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #212529;
    }

    .container-one {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .section {
      margin-bottom: 40px;
    }

    .section h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .highlights, .fan-clubs {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
    }

    .highlight-card, .fan-club-card {
      position: relative;
      background: #000;
      color: #fff;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      padding: 20px;
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .highlight-card img, .news-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.6;
      position: absolute;
      top: 0;
      left: 0;
    }

    .highlight-card span, .news-card span {
      position: relative;
      z-index: 1;
    }

    .news {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 15px;
    }

    .news-card {
      position: relative;
      border-radius: 10px;
      overflow: hidden;
      height: 200px;
      display: flex;
      align-items: flex-end;
      color: #fff;
      padding: 15px;
      background: #000;
    }

    .news-card img {
      opacity: 0.5;
    }

    .fan-clubs {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
    }

    .fan-club-card {
      background: green;
      color: #fff;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
    }
    .title {
            font-size: 34px;
            font-weight: bold;
            margin-bottom: 20px;
            color: green;

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

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header h2 {
      font-size: 24px;
      margin: 0;
      color: #000;
    }

    .header a {
      text-decoration: none;
      font-size: 14px;
      color: #007BFF;
      font-weight: bold;
    }

    .news-section {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
    }

    .main-news {
      display: flex;
      position: relative;
    }

    .main-news img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    .main-news-content {
      position: absolute;
      bottom: 20px;
      left: 20px;
      background: rgba(255, 255, 255, 0.8);
      padding: 10px 15px;
      border-radius: 8px;
      max-width: 80%;
    }

    .main-news-content h3 {
      margin: 0;
      font-size: 18px;
      color: #000;
    }

    .secondary-news {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 20px;
    }

    .secondary-news .news-item {
      display: flex;
      flex-direction: column;
    }

    .secondary-news .news-item img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .secondary-news .news-item h4 {
      margin: 0;
      font-size: 14px;
      color: #000;
    }

    @media (max-width: 768px) {
      .news-section {
        grid-template-columns: 1fr;
      }

      .secondary-news {
        grid-template-columns: 1fr;
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
             
     

              <div class="container-one">
    <!-- Fans Club Highlights -->
    <div class="section">
      <h2>Fans Club Highlights</h2>
      <div class="highlights">
        <div class="highlight-card">
          <img src="traningchild1.png" alt="Highlight">
          <span>Macedonia</span>
        </div>
        <div class="highlight-card">
          <img src="traningpamja.png" alt="Highlight">
          <span>Munich</span>
        </div>
        <div class="highlight-card">
          <img src="traningchild2.png" alt="Highlight">
          <span>Sur de California</span>
        </div>
        <div class="highlight-card">
          <img src="traningpamja2.png" alt="Highlight">
          <span>Atlanta</span>
        </div>
        <div class="highlight-card">
          <img src="traningchild3.png" alt="Highlight">
          <span>Boston</span>
        </div>
        <div class="highlight-card">
          <img src="traningpamja3.png" alt="Highlight">
          <span>Casa Madridista</span>
        </div>
      </div>
    </div>

    <div class="container">
    <div class="header">
      <h2>News</h2>
      <a href="news.php">See all news →</a>
    </div>

    <div class="news-section">
      <div class="main-news">
        <img src="traningM.png" alt="Main News">
        <div class="main-news-content">
          <h3>Supporters clubs meet up in Doha</h3>
        </div>
      </div>

      <div class="secondary-news">
        <div class="news-item">
          <img src="traningnine1.png" alt="News 1">
          <h4>Honoring a Legend: Goyo Benito’s Legacy Inspires FC Alpha Academy</h4>
        </div>

        <div class="news-item">
          <img src="traningnine2.png" alt="News 2">
          <h4>Strength, Passion, and Loyalty: The Spirit of Goyo Benito Lives in FC Alpha</h4>
        </div>
         
        <div class="news-item">
          <img src="traningnine3.png" alt="News 2">
          <h4>From Greatness to Guidance: Goyo Benito’s Influence on FC Alpha’s Future Stars</h4>
        </div>
        <div class="news-item">
          <img src="traningnine4.png" alt="News 2">
          <h4>A Warrior Remembered: FC Alpha Academy Pays Tribute to Goyo Benito</h4>
        </div>
        <div class="news-item">
          <img src="traningnine5.png" alt="News 2">
          <h4>Defending Dreams: How Goyo Benito’s Legacy Shapes FC Alpha’s Youth</h4>
        </div>
        <div class="news-item">
          <img src="traningnine6.png" alt="News 2">
          <h4>More Than a Player: Goyo Benito’s Everlasting Impact on Football Education</h4>
        </div>
        <div class="news-item">
          <img src="traningnine7.png" alt="News 2">
          <h4>Building Champions the Benito Way: FC Alpha Academy’s Tribute to a Legend</h4>
        </div>
        <div class="news-item">
          <img src="traningnine8.png" alt="News 2">
          <h4>Heart of a Lion, Soul of a Mentor: Goyo Benito’s Influence on Young Players</h4>
        </div>

        <div class="news-item">
          <img src="traningnine10.png.png" alt="News 3">
          <h4>A Name That Echoes Through Generations: FC Alpha Honors Goyo Benito</h4>
        </div>
      </div>
    </div>
  </div>
    <!-- Fan Clubs Sections -->
    <div class="section">
      <h2>Fan Clubs Sections</h2>
      <div class="fan-clubs">
        <div class="fan-club-card">List of supporters' clubs</div>
        <div class="fan-club-card">Fan clubs YouTube channel</div>
        <div class="fan-club-card">How to create a fan club</div>
        <div class="fan-club-card">Tell us the story of your supporters club</div>
      </div>
    </div>
  </div>

 
  <div class="container">
        <div class="title">The main reasons for success</div>
       
        <div class="icons-container">
            <div class="icon-card">
                <img src="academiicon1.png" alt="Icon 1">
                <p>Listening</p>
            </div>
            <div class="icon-card">
                <img src="academiicon2.png" alt="Icon 2">
                <p>Future</p>
            </div>
            <div class="icon-card">
                <img src="academiicon3.png" alt="Icon 3">
                <p>Commitment</p>
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

