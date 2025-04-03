
<?php include 'navbarfix.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Alpha</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="Script.js"></script>


    <style>
    .btn-login {
        display: inline-block;
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-login:hover {
        background-color: #0056b3;
    }
 /* General Styles */
.age-groups ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px; /* Adjusted for better spacing */
    margin-top: 20px;
}

.age-group {
    padding: 12px 18px;
    border: 2px solid #007BFF;
    background-color: #f8f9fa;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    border-radius: 12px;
    font-weight: 600;
    color: #007BFF;
    text-align: center;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
    width: auto; /* Prevents overflow issues */
    min-width: 120px;
}

.age-group:hover {
    background-color: #007BFF;
    color: white;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
}

/* Players Section */
.players-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 30px;
    gap: 20px;
}

.player-box {
    border: 1px solid #ddd;
    padding: 18px;
    border-radius: 12px;
    width: 260px;
    background: white;
    text-align: center;
    box-shadow: 2px 6px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.player-box:hover {
    transform: translateY(-5px);
    box-shadow: 3px 8px 18px rgba(0, 0, 0, 0.15);
}

/* Text Styles */
.player-box h4 {
    font-size: 18px;
    margin-bottom: 8px;
    color: #007BFF;
    font-weight: 600;
}

.player-box p {
    font-size: 14px;
    color: #555;
    margin: 6px 0;
    line-height: 1.6;
}
@media (max-width: 768px) {
    .age-group {
        flex: 1 1 48%; /* Each button takes 48% width for 2 per row */
        max-width: 180px; /* Adjust max-width for better fitting */
    }
}

@media (max-width: 480px) {
    .age-group {
        flex: 1 1 100%; /* Full width for small screens */
        max-width: 100%;
    }
}


</style>
  
</head>

<body>



    <section class="about-section" id="about">
        <div class="about-image">
            <img src="fushaedyte.jpg" alt="About Image">
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
                <p>
                    Real Madrid has a legacy of unforgettable moments that have defined football history. From record-breaking titles to legendary players, every chapter is a testament to excellence and determination. Explore the history that continues to inspire millions
                    worldwide.
                </p>
            </div>
            <div class="historic-image">
                <img src="historiaakademise.jpg" alt="Historic Image">
            </div>
        </section>



        <style>
            @media (max-width: 768px) {
                .HistoricofLiri {
                    position: relative;
                    left: -100px;
                }
                .course-col {
                    flex: 1 1 100%;
                }
                .courseimages {
                    flex: 1 1 100%;
                    margin-top: 1rem;
                }
            }
        </style>


    </main>

   
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

        </section>


        <div class="players-section" id="Players">
    <h2>Lojtarët sipas Grupmoshave</h2>
    
    <div class="age-groups">
        <ul id="age-group-list"></ul>
    </div>
    
    <div id="players-container" class="players-container"></div>

     <!-- <a href="register_players.php" class="btn-login">Sign in</a>  -->
</div>

<script>
    // Krijimi dinamik i grupmoshave
    const ageGroups = ["u11", "u12", "u13", "u14", "u15", "u16", "u17", "u18", "u19", "u20", "u21"];
    const ageGroupList = document.getElementById("age-group-list");

    ageGroups.forEach(group => {
        const listItem = document.createElement("li");
        listItem.className = "age-group";
        listItem.innerText = `Grupmosha ${group.toUpperCase()}`;
        listItem.onclick = () => showPlayers(group);
        ageGroupList.appendChild(listItem);
    });

    function showPlayers(group) {
        const container = document.getElementById("players-container");
        container.innerHTML = ""; // Pastro përmbajtjen e mëparshme

        fetch(`get_players.php?group=${group}`)
            .then(response => response.json())
            .then(players => {
                if (players.length === 0) {
                    container.innerHTML = `<p>Nuk ka lojtarë të regjistruar për grupmoshën ${group.toUpperCase()}.</p>`;
                    return;
                }

                players.forEach((player, index) => {
                    const playerBox = document.createElement("div");
                    playerBox.className = "player-box";
                    playerBox.innerHTML = `
                        <h4>${index + 1}. Emri: ${player.name} ${player.surname}</h4>
                        <p>Mosha: ${player.age}</p>
                        <p>Grupmosha: ${player.group_age.toUpperCase()}</p>
                        <p>Pozita: ${player.position}</p>
                        <p>Email: ${player.email}</p>
                    `;
                    container.appendChild(playerBox);
                });

                container.style.display = "flex";
                container.style.flexWrap = "wrap";
                container.style.justifyContent = "center";
            })
            .catch(error => console.error('Gabim në marrjen e lojtarëve:', error));
    }
</script>


        <section id="contact-section" class="contact-section">
            <h2>Kontakto Me Ne</h2>
            <p>Ne jemi këtu për t'ju ndihmuar. Plotësoni formularin më poshtë dhe do t'ju përgjigjemi sa më shpejt të jetë e mundur.</p>

            <div class="contact-info">
                <div class="info-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h4>Adresa:</h4>
                    <p>Prishtinë, Kosovë</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-phone-alt"></i>
                    <h4>Telefoni:</h4>
                    <p>+383 44 123 456</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                </div>
            </div>

            <form  class="contact-form" id="contact" method="POST" action="proces_contact.php">
                <div class="form-row">
                    <input type="text"  name="name"placeholder="Emri juaj" required>
                    <input type="email"  name="email"placeholder="Email-i juaj" required>
                </div>
                <div class="form-row">
                    <input type="text" name="phone" placeholder="Numri i telefonit" required>
                    <input type="text" name="address" placeholder="Adresa juaj">
                </div>
                <textarea  name="message"placeholder="Mesazhi juaj" rows="5" required></textarea>
                <button type="submit" class="submit-btn">Dërgo Mesazhin</button>
            </form>
        </section>


    </main>
<!--
    <-----Testimonials--------------->

    <section class="testimonial-section">
        <h2>What Our People Say</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="testimonial-container">
            <!-- Testimonial Box 1 -->
            <div class="testimonial-box">
                <img src="user1.jpeg" alt="User Photo">
                <p>Hello, I'm a fan of this club, I wanted to tell you that they are a wonderful staff who are achieving success.</p>
                <h3>Afrim Bytyçi</h3>
                <div class="stars">★★★★★</div>
            </div>
            <!-- Testimonial Box 2 -->
            <div class="testimonial-box">
                <img src="user 3.jpeg" alt="User Photo">
                <p>Hello, I am a parent where my child practices with the u13 generation, these are the real clubs that are giving you the market big players</p>
                <h3>Vesa Krasniqi</h3>
                <div class="stars">★★★★☆</div>
            </div>
            <!-- Testimonial Box 3 -->
            <div class="testimonial-box">
                <img src="personi4.jpg" alt="User Photo">
                <p>Hello, I'm Erion, a manager of the fan club "Wolves" where these people are giving us emotions every game with you guys.</p>
                <h3>Erion Gashi</h3>
                <div class="stars">★★★★★</div>
            </div>
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