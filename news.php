
<?php include 'navbarfix.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel</title>
    <link rel="stylesheet" href="test.css">
    <script src="Script.js"></script>
    <!-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
            overflow-x: hidden;
        }
        
        .carousel {
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .carousel-card {
            min-width: 200px;
            flex: 0 0 auto;
            margin: 0 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .carousel-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        
        .carousel-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        
        .carousel-content {
            padding: 15px;
        }
        
        .carousel-content h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .carousel-content p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        
        .carousel-content button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .carousel-content button:hover {
            background-color: #0056b3;
        }
        
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        
        .carousel-btn.left {
            left: 10px;
        }
        
        .carousel-btn.right {
            right: 10px;
        }
        
        @media (max-width: 768px) {
            .carousel-card img {
                height: 150px;
            }
            .carousel-btn {
                width: 30px;
                height: 30px;
            }
        }
    </style> -->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #000;
            font-family: 'Anonymous Pro', monospace;
        }
        
        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
            padding: 20px;
        }
        
        .news-item {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }
        
        .news-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .news-content {
            padding: 15px;
        }
        
        .news-content h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
            transition: color 0.3s ease;
        }
        
        .news-content p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        
        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .news-item:hover h3 {
            color: #d32f2f;
        }
        
        .news-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #d32f2f;
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 3px;
            text-transform: uppercase;
        }
        
        .timestamp {
            font-size: 12px;
            color: #999;
            margin-top: 10px;
        }
        
        .cursor {
            position: relative;
            width: 24em;
            margin: 0 auto;
            border-right: 2px solid rgba(255, 255, 255, .75);
            font-size: 30px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            transform: translateY(-50%);
        }
        /* Animation */
        
        .typewriter-animation {
            padding: 10px;
            margin-top: 30px;
            animation: typewriter 5s steps(50) 1s 1 normal both, blinkingCursor 500ms steps(50) infinite normal;
            text-transform: uppercase;
        }
        
        @media only screen and (max-width: 667px) {
            .typewriter-animation {
                display: none;
            }
        }
        
        @keyframes typewriter {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }
        
        @keyframes blinkingCursor {
            from {
                border-right-color: rgba(255, 255, 255, .75);
            }
            to {
                border-right-color: transparent;
            }
        }
        /* Global */
    </style>
</head>

<body>



    <p class="cursor typewriter-animation">All Football News about FC ALPHA Academy</p>
    <div class="news-container">
        <div class="news-item">
            <img src="newsphotoone.jpeg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Hansi Flick happy with 'performance' against Betis</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphototwo.jpeg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Quarter final draw on January 20</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotothree.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Barça 5-1 Betis: High five... again!</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotofour.jpeg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Passed the 100 mark for goals at home in Montjuïc</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
    </div>


    <div class="news-container">
        <div class="news-item">
            <img src="newsphotofive.jpeg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Hansi Flick happy with 'performance' against Betis</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotosix.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Quarter final draw on January 20</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotoseven.jpeg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Barça 5-1 Betis: High five... again!</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotoeight.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Passed the 100 mark for goals at home in Montjuïc</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
    </div>


    <div class="news-container">
        <div class="news-item">
            <img src="newsphotonine.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Hansi Flick happy with 'performance' against Betis</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphototeen.png" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Quarter final draw on January 20</h3>
                <p class="timestamp">22 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphotoeleven.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Barça 5-1 Betis: High five... again!</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
        <div class="news-item">
            <img src="newsphototwelve.jpg" alt="News Image">
            <div class="news-content">
                <span class="news-badge">First Team</span>
                <h3>Passed the 100 mark for goals at home in Montjuïc</h3>
                <p class="timestamp">23 hrs ago</p>
            </div>
        </div>
    </div>
    <!-- 
    <div class="carousel" style="margin-top: 30px;">
        <button class="carousel-btn left" onclick="moveCarousel(-1)">&#8249;</button>
        <div class="carousel-track">
            <div class="carousel-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image 1">
                <div class="carousel-content">
                    <h3>Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <button onclick="handleClick('Title 1')">Learn More</button>
                </div>
            </div>
            <div class="carousel-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image 2">
                <div class="carousel-content">
                    <h3>Title 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <button onclick="handleClick('Title 2')">Learn More</button>
                </div>
            </div>
            <div class="carousel-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image 3">
                <div class="carousel-content">
                    <h3>Title 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <button onclick="handleClick('Title 3')">Learn More</button>
                </div>
            </div>
            <div class="carousel-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image 4">
                <div class="carousel-content">
                    <h3>Title 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <button onclick="handleClick('Title 4')">Learn More</button>
                </div>
            </div>

            <div class="carousel-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image 4">
                <div class="carousel-content">
                    <h3>Title 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <button onclick="handleClick('Title 4')">Learn More</button>
                </div>
            </div>
        </div>
        <button class="carousel-btn right" onclick="moveCarousel(1)">&#8250;</button>
    </div>

    <script>
        const track = document.querySelector('.carousel-track');
        let currentIndex = 0;

        function moveCarousel(direction) {
            const cards = document.querySelectorAll('.carousel-card');
            const cardWidth = cards[0].offsetWidth + 20; // card width + margin

            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = cards.length - 1;
            } else if (currentIndex >= cards.length) {
                currentIndex = 0;
            }

            track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }

        function handleClick(title) {
            alert(`You clicked on ${title}`);
        }
    </script> -->

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