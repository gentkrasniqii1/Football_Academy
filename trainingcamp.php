
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traning Camp</title>
    <link rel="stylesheet" href="test.css">
</head>
 <style>
     body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
       
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            position: relative;
            z-index: 2;
        }
       
        .navbar .logo {
            display: flex;
            align-items: center;
        }
       
        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }
       
        .navbar .links {
            display: flex;
            align-items: center;
            gap: 20px;
            margin: 0 auto;
        }
       
        .navbar .links a {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            transition: color 0.3s;
        }
       
        .navbar .links a:hover {
            color: #0056b3;
        }
       
        .navbar .icons {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 30px;
        }
       
        .navbar .icons img {
            height: 30px;
        }
       
        .navbar .sign-in {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #0056b3;
            font-size: 16px;
            border: 1px solid #0056b3;
            padding: 5px 15px;
            border-radius: 20px;
            transition: all 0.3s;
            margin-right: 10px;
        }
       
        .navbar .sign-in:hover {
            background-color: #0056b3;
            color: #fff;
        }
        .menu {
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
            border-radius: 7px;
            padding: 5px;
            transition: transform 0.3s;
            z-index: 3;
        }
       
        .menu::after {
            content: "☰";
            font-size: 20px;
        }
       
        .menu.active::after {
            content: "\00d7";
            /* Unicode for 'X' */
            font-size: 24px;
        }
       
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: none;
            z-index: 1;
        }
       
        .overlay.active {
            display: block;
        }
       
        .menu-content {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 300px;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            transform: translateX(-100%);
            transition: transform 0.3s;
            z-index: 2;
        }
       
        .menu-content.active {
            transform: translateX(0);
        }
       
        .menu-content ul {
            list-style: none;
            padding: 20px;
            margin: 0;
        }
       
        .menu-content ul li {
            margin: 15px 0;
            display: block;
        }
       
        .menu-content ul li a {
            text-decoration: none;
            color: #000;
            font-size: 18px;
        }
       
        .menu-content ul li .submenu {
            margin-top: 10px;
            padding-left: 15px;
        }
       
        .menu-content ul li .submenu a {
            font-size: 16px;
            color: #555;
        }
       
        .menu-content ul li .submenu a:hover {
            color: #000;
        }

       
/*---------About---------*/

.about-section {
    padding: 20px;
    display: flex;
    align-items: center;
    background-color: green;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.about-section:hover {
    transform: scale(1.03);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    overflow-y: hidden;
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
    overflow-y: hidden;
}

.about-content h2 {
    font-size: 24px;
    color: #fff;
    margin-bottom: 15px;
}

#para-traning {
   color: white;
}
.about-content p {
    font-size: 16px;
    color: #fff;
    line-height: 1.6;
    color: rgba(0, 0, 0, 1);
}

@media (max-width: 768px) {
    .about-section {
        flex-direction: column;
        margin-top: 40px;
        padding: 100px 20px;
    }
    .about-image {
        height: 200px;
    }
}


/*---------Historic-------*/

.historic-section {
    margin-top: 40px;
    padding: 20px;
    display: flex;
    align-items: center;
    background-color: #ffffff;
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
    background-color: lightblue;
}

.historic-content h2 {
    font-size: 24px;
    color:rgb(10, 89, 180);
    margin-bottom: 15px;
}

.historic-content p {
    font-size: 16px;
    color: #002b5c;
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

@media (max-width: 768px) {
    .historic-section {
        flex-direction: column;
    }
    .historic-image {
        height: 200px;
    }
}
       
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
        }
       
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }
       
        .footer-column {
            flex: 1 1 150px;
            min-width: 150px;
        }
       
        .footer-column h4 {
            margin-bottom: 15px;
            font-size: 16px;
            color: #343a40;
        }
       
        .footer-column ul {
            list-style-type: none;
        }
       
        .footer-column ul li {
            margin-bottom: 10px;
        }
       
        .footer-column ul li a {
            text-decoration: none;
            color: #495057;
            font-size: 14px;
        }
       
        .footer-column ul li a:hover {
            text-decoration: underline;
        }
       
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
       
        .social-links a img {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
       
        .social-links img:hover {
            background-color: skyblue;
        }
       
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .footer-column {
                text-align: center;
            }
            .social-links {
                justify-content: center;
            }
        }
       
        @media (max-width: 768px) {
            .navbar {
                flex-wrap: wrap;
            }
            .navbar .links {
                display: none;
            }
            .navbar .sign-in {
                margin-left: 100px;
            }
            .navbar .icons {
                margin-right: 50px;
            }
            .menu-content li {
                display: block;
            }
            @media (max-width: 576px) {
                .navbar .logo img {
                    height: 40px;
                }
                .navbar .icons {
                    display: none;
                }
                .navbar .sign-in {}
                .menu-content ul li a {
                    font-size: 16px;
                }
                .menu-content ul li .submenu a {
                    font-size: 14px;
                }
            }
        }
 </style>
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

    <section class="about-section" id="about">
        <div class="about-image">
            <img src="passion.png" alt="About Image">
        </div>
        <div class="about-content">
            <h2>Football and basketball squads enjoy a Christmas lunch</h2>
            <p>
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
                <p id="para-traning">
                    Real Madrid has a legacy of unforgettable moments that have defined football history. From record-breaking titles to legendary players, every chapter is a testament to excellence and determination. Explore the history that continues to inspire millions
                    worldwide.
                </p>
            </div>
            <div class="historic-image">
                <img src="Traningfoto.png" alt="Historic Image">
            </div>
        </section>
        <main>
        <div class="trainers-section" id="trainers">
            <h2 class="trainers-sectioni">Trajnerët dhe Asistentët</h2>
            <div class="trainer-box">
                <img src="trajneri.jpg" alt="Foto e Trajnerit">
                <h3>Tomor Gashi</h3>
                <p>Pozita: Trajner Kryesor</p>
                <p>Eksperienca: 10+ vite në sportin e Futbollit</p>
                <p>Specializimet: Trajnues i certifikuar nga UEFA dhe FIFA</p>
                <p>Email: tomor.g@example.com</p>
            </div>
            <div class="assistant-box">
                <img src="asistentipare.jpg" alt="Foto e Asistentit">
                <h3> Gent Bytyqi</h3>
                <p>Pozita: Asistent</p>
                <p>Eksperienca: 5 vite në futbollin nderkombetar,trajner ne disa akademi te njohura.</p>
                <p>Specializimet: UEFA,FIFA,FFK,FSHF.</p>
                <p>Email:assistant1@example.com</p>
            </div>
            <div class="assistant-box">
                <img src="asistentidyte.jpg" alt="Foto e Asistentit">

                <h3>Leart Elezi</h3>
                <p>Pozita: Asistent</p>
                <p>Eksperienca: 3 vite në disa klube nderkombetare, dhe ne disa akademi ne Europe.</p>
                <p>Specializimet: UEFA,FIFA,FFK,FSHF.</p>
                <p>Email:leart.e@example.com</p>
            </div>
        </div>
        </main>


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
                <a href="sponsors.php">SEE ALL SPONSORS</a> ·
                <a href="#legal ">Legal notice</a> ·
                <a href="#privacy ">Privacy Policy</a> ·
                <a href="#cookies ">Cookies Policy</a> ·
                <a href="#info ">Canal de información</a> ·
                <a href="https://index.php ">fcalpha.com</a>
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

