<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid Navbar</title>
    <link rel="stylesheet" href="test.css">
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
        /*Tabela */
        .table-section {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    background: linear-gradient(135deg, #4B0082, #0000FF);
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 30px;
}

.table-section h1 {
    text-align: center;
    margin-bottom: 1rem;
    color: #fff;
    font-size: 2rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 0.75rem;
    text-align: center;
}

thead {
    background: #4B0082; /* Violet */
    color: #fff;
}

tbody tr:nth-child(even) {
    background: #E6E6FA; /* Light Violet */
}

tbody tr:hover {
    background: #ADD8E6; /* Light Blue */
    cursor: pointer;
}

th {
    background: #4B0082; /* Violet */
    color: white;
    font-weight: bold;
}

td {
    color:  #4B0082;
    background-color: white;
}

tbody tr:first-child {
    background: #0000FF; /* Blue */
    color: #fff;
    font-weight: bold;
}

tbody tr:first-child td {
    border-top: 2px solid #4B0082; /* Violet */
    color: white;
}

tbody tr td {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
}

tbody tr td:first-child {
    border-left: 1px solid #ddd;
}

tbody tr:last-child td {
    border-bottom: 2px solid #4B0082; /* Violet */
}

@media (max-width: 768px) {
    .table-section {
        padding: 1rem;
    }

    table, th, td {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    table, th, td {
        font-size: 0.8rem;
    }
}
        /*Tabela  */
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
</head>

<body>
   


    <h1 style="color: #000;padding-left: 20px;padding-right: 20px;margin-top: 30px;">Tuesday 10 December 2024</h1>
    <div class="date-heading" style="padding-left: 20px;margin-top: 20px;">League phase - Matchday 6</div>

    <div class="results-container">
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/alogo3.png" alt="FC Alpha Logo">
                <span>FC Alpha</span>
                <span class="score">3</span>
            </div>
            <div class="team-info">
                <span class="score">1</span>
                <span>Marseille</span>
                <img src="/git/ProjektiGL/lgekp30/Marsiellogo.png" alt="Marseille C.F Logo">


            </div>

        </div>

        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/liverpool logo 1.png" alt="Liverpool Logo">
                <span>Liverpool</span>
                <span class="score">3</span>
            </div>
            <div class="team-info">
                <span class="score">2</span>
                <span>Manchester United </span>
                <img src="/git/ProjektiGL/lgekp30/manulogo.png" alt="Manchester United Logo">


            </div>

        </div>

        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/barlogo.png" alt="Barcelona Logo">
                <span>Barcelona</span>
                <span class="score">4</span>
            </div>
            <div class="team-info">
                <span class="score">1</span>
                <span>Tottenham</span>
                <img src="/git/ProjektiGL/lgekp30/tottenhamlogo.png" alt="Tottenham Logo">


            </div>

        </div>

        <div class="match-card">
            <div class="team-info">
                <img src="/git/projektiGL/lgekp30/sevillalogo.png" alt="Sevilla Logo">
                <span>Sevilla</span>
                <span class="score">2</span>
            </div>
            <div class="team-info">
                <span class="score"> 2</span>
                <span>Roma</span>
                <img src="/git/ProjektiGL/lgekp30/romalogo.png" alt="Roma Logo">


            </div>

        </div>
           
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/ajaxlogo.png" alt="Ajax Logo">
                <span>Ajax</span>
                <span class="score">1</span>
            </div>
            <div class="team-info">
                <span class="score"> 3</span>
                <span>Manchester City</span>
                <img src="/git/ProjektiGL/lgekp30/manclogo.png" alt="Manchester City Logo">


            </div>

        </div>
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/milanlogo.png" alt="Milan Logo">
                <span>FC Milan</span>
                <span class="score">4</span>
            </div>
            <div class="team-info">
                <span class="score"> 1</span>
                <span>FC Lille </span>
                <img src="/git/ProjektiGL/lgekp30/lille logo.png" alt="Lille Logo">


            </div>

        </div>
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/psglogo.png" alt="PSG Logo">
                <span>P S G</span>
                <span class="score">0</span>
            </div>
            <div class="team-info">
                <span class="score">0</span>
                <span>Napoli</span>
                <img src="/git/ProjektiGL/lgekp30/napolilogo.png" alt="Napoli Logo">


            </div>

        </div>
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/rmalogo1.png" alt="Real Madrid Logo">
                <span>Real Madrid</span>
                <span class="score">5</span>
            </div>
            <div class="team-info">
                <span class="score">2</span>
                <span>Inter</span>
                <img src="/git/ProjektiGL/lgekp30/interlogo.png" alt="Inter logo">


            </div>

        </div>

        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/juvelogo.png" alt="Juventus Logo">
                <span>Juventus</span>
                <span class="score">0</span>
            </div>
            <div class="team-info">
                <span class="score">2</span>
                <img src="/git/ProjektiGL/lgekp30/Bvblogo.png" alt="Dortmund Logo">
                <span>Borussia Dortmund</span>

            </div>

        </div>

       
        <div class="match-card">
            <div class="team-info">
                <img src="/git/ProjektiGL/lgekp30/ATMlogo.png" alt="Athletico Madrid Logo">
                <span>Athletico Madrid </span>
                <span class="score">3</span>
            </div>
            <div class="team-info">
                <span class="score">3</span>
                <img src="/git/ProjektiGL/lgekp30/BAMlogo.png" alt="Bayern Munchen Logo">
                <span>Bayern Munchen</span>

            </div>

        </div>

        <div class="match-card ">
            <div class="team-info ">
                <img src="/git/ProjektiGL/lgekp30/brulogo.png" alt="Club Brugge Logo ">
                <span>Club Brugge</span>
                <span class="score ">0</span>
            </div>
            <div class="team-info ">
                <span class="score ">0</span>
                <span>Atalnata</span>
                <img src="/git/ProjektiGL/lgekp30/atllogo.png" alt="Atalanta Logo ">
               
               
            </div>

        </div>

        <div class="match-card ">
            <div class="team-info ">
                <img src="/git/ProjektiGL/lgekp30/porlogo.png " alt="Porto Logo ">
                <span>Porto</span>
                <span class="score ">2</span>
            </div>
            <div class="team-info ">
                <span class="score ">1</span>
                <span>Aston Villa</span>
                <img src="/git/ProjektiGL/lgekp30/astlogo 1.png " alt="Aston Villa Logo ">
               
               
            </div>

        </div>

        <div class="match-card ">
            <div class="team-info ">
                <img src="/git/ProjektiGL/lgekp30/monlogo.png " alt="Monaco Logo ">
                <span>Monaco</span>
                <span class="score ">1</span>
            </div>
            <div class="team-info ">
                <span class="score ">0</span>
                <span>Shahktar Donetsk</span>
                <img src="/git/ProjektiGL/lgekp30/shahlogo.png " alt="Shahktar Donetsk Logo ">
               
               
            </div>

        </div>

        <div class="match-card ">
            <div class="team-info ">
                <img src="/git/ProjektiGL/lgekp30/psvlogo.png " alt="PSV Logo ">
                <span>P S V</span>
                <span class="score ">3</span>
            </div>
            <div class="team-info ">
                <span class="score ">2</span>
                <span>Benfica</span>
                <img src="/git/ProjektiGL/lgekp30/benlogo.png " alt="Benfica Logo ">
               
               
            </div>

        </div>

        <div class="match-card ">
            <div class="team-info ">
                <img src="/git/ProjektiGL/lgekp30/feylogo1 1.png " alt="Feynoord Logo ">
                <span>Feynoord</span>
                <span class="score ">1</span>
            </div>
            <div class="team-info ">
                <span class="score ">1</span>
                <span>Bayer Leverkusen</span>
                <img src="/git/ProjektiGL/lgekp30/bllogo.png " alt="Bayer Leverkusen Logo ">
               
               
            </div>

        </div>
    </div>

    <h1 style="color: #000;padding-left: 20px;padding-right: 20px;margin-top: 30px; ">Tuesday 21 January 2025</h1>
    <div class="date-heading " style="padding-left: 20px;margin-top: 20px; ">League phase - Matchday 7</div>

    <div class="results-container ">
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/alogo3.png " alt="FC Alpha Logo ">
                <span>ALP</span>
                <span class="versus ">VS</span>

            </div>
            <div class="team-infoone ">
               
                <span>RMA</span>
                <img src="/git/ProjektiGL/lgekp30/rmalogo1.png " alt="Real Madrid Logo ">
            </div>
            <span class="match-time ">18:45</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>

        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/monlogo.png " alt="Monaco Logo ">
                <span>MON</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>ASV</span>
                <img src="/git/ProjektiGL/lgekp30/astlogo 1.png " alt="Aston Villa Logo ">
               
            </div>
            <span class="match-time ">18:45</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
       
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/arslogo.png " alt="Arsenal Logo ">
                <span>ARS</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>BLE</span>
                <img src="/git/ProjektiGL/lgekp30/bllogo.png " alt="Bayer Leverkursen Logo ">
               
            </div>
            <span class="match-time ">18:45</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
       
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/manulogo.png " alt="Manchester United Logo ">
                <span>MAN U</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>POR</span>
                <img src="/git/ProjektiGL/lgekp30/porlogo.png " alt="Porto Logo ">
               
            </div>
            <span class="match-time ">18:45</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
       
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/Barlogo.png " alt="Barcelona Logo ">
                <span>BAR</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>MAN C</span>
                <img src="/git/ProjektiGL/lgekp30/manclogo.png " alt="Manchester City Logo ">
               
            </div>
            <span class="match-time ">18:45</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>

        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/napolilogo.png " alt="Napoli Logo ">
                <span>NAP</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>SEV</span>
                <img src="/git/ProjektiGL/lgekp30/sevillalogo.png " alt="Sevilla Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>

        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/brulogo.png " alt="Club Brugge Logo ">
                <span>CLB</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>JUV</span>
                <img src="/git/ProjektiGL/lgekp30/juvelogo.png " alt="Juventus Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>

        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/ATMlogo.png " alt="Atletico Madrid Logo ">
                <span>ATM</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>PSV</span>
                <img src="/git/ProjektiGL/lgekp30/psvlogo.png " alt="PSV Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>

        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/benlogo.png " alt="Benfica Logo ">
                <span>BEN</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>INT</span>
                <img src="/git/ProjektiGL/lgekp30/interlogo.png " alt="Inter Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/milanlogo.png " alt="Milan Logo ">
                <span>MLN</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>PSG</span>
                <img src="/git/ProjektiGL/lgekp30/psglogo.png " alt="PSG Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/Bvblogo.png " alt="Dortmund Logo ">
                <span>BVB</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>FEY</span>
                <img src="/git/ProjektiGL/lgekp30/feylogo1 1.png " alt="Feynoord  Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/BAMlogo.png " alt="Bayern Munchen Logo ">
                <span>BAY</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>LIL</span>
                <img src="/git/ProjektiGL/lgekp30/lille logo.png " alt="Lille Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/liverpool logo 1.png " alt="Liverpool Logo ">
                <span>LIV</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>ROM</span>
                <img src="/git/ProjektiGL/lgekp30/romalogo.png " alt="Roma Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php" class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/tottenhamlogo.png " alt="Tottenham Logo ">
                <span>Tottenham</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>SHK</span>
                <img src="/git/ProjektiGL/lgekp30/shahlogo.png " alt="Shahktar Donetsk Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php" class="details-button ">Ticket</a>
        </div>
        <div class="match-cardone ">
            <div class="team-infoone ">
                <img src="/git/ProjektiGL/lgekp30/Marseillelogo.png " alt="Marseille Logo ">
                <span>MAR</span>
                <span class="versus ">VS</span>
            </div>
            <div class="team-infoone ">
                <span>AJX</span>
                <img src="/git/ProjektiGL/lgekp30/ajaxlogo.png " alt="Ajax Logo ">
               
            </div>
            <span class="match-time ">21:00</span>
            <a href="tickets.php " class="details-button ">Ticket</a>
           
            </div>



        </div>

        <main>
        <section class="table-section">
            <h1>League Phase Table</h1>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Team</th>
                        <th>P</th>
                        <th>W</th>
                        <th>D</th>
                        <th>L</th>
                        <th>F</th>
                        <th>A</th>
                        <th>+/-</th>
                        <th>Pts</th>
                        <th>Form</th>
                    </tr>
                    <tr>
                <td>1</td>
                <td>Real Madrid</td>
                <td>38</td>
                <td>24</td>
                <td>7</td>
                <td>4</td>
                <td>136</td>
                <td>38</td>
                <td>98</td>
                <td>76</td>
                <td>W W W W</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Liverpool</td>
                <td>38</td>
                <td>21</td>
                <td>4</td>
                <td>13</td>
                <td>109</td>
                <td>81</td>
                <td>+28</td>
                <td>67</td>
                <td>W W D W</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bayern Munich</td>
                <td>38</td>
                <td>19</td>
                <td>5</td>
                <td>14</td>
                <td>98</td>
                <td>90</td>
                <td>+8</td>
                <td>62</td>
                <td>W W W D</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Barcelona</td>
                <td>38</td>
                <td>19</td>
                <td>5</td>
                <td>14</td>
                <td>95</td>
                <td>96</td>
                <td>-1</td>
                <td>62</td>
                <td>W W D D</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Borussia Dortmund</td>
                <td>38</td>
                <td>18</td>
                <td>7</td>
                <td>13</td>
                <td>105</td>
                <td>95</td>
                <td>+10</td>
                <td>61</td>
                <td>L D W W</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Manchester United</td>
                <td>38</td>
                <td>17</td>
                <td>9</td>
                <td>12</td>
                <td>84</td>
                <td>69</td>
                <td>+15</td>
                <td>60</td>
                <td>W D D D</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Paris Saint-Germain</td>
                <td>38</td>
                <td>18</td>
                <td>2</td>
                <td>17</td>
                <td>108</td>
                <td>111</td>
                <td>-3</td>
                <td>56</td>
                <td>W W L L</td>
            </tr>
            <tr>
                <td>8</td>
                <td>AC Milan</td>
                <td>38</td>
                <td>17</td>
                <td>7</td>
                <td>14</td>
                <td>78</td>
                <td>78</td>
                <td>0</td>
                <td>55</td>
                <td>D D W L</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Atletico Madrid</td>
                <td>38</td>
                <td>16</td>
                <td>8</td>
                <td>14</td>
                <td>78</td>
                <td>73</td>
                <td>+5</td>
                <td>56</td>
                <td>D D L D</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Napoli</td>
                <td>38</td>
                <td>15</td>
                <td>10</td>
                <td>13</td>
                <td>98</td>
                <td>89</td>
                <td>+9</td>
                <td>55</td>
                <td>L D W D</td>
            </tr>
            <tr>
                <td>11</td>
                <td>RB Leipzig</td>
                <td>38</td>
                <td>16</td>
                <td>7</td>
                <td>15</td>
                <td>97</td>
                <td>96</td>
                <td>+1</td>
                <td>55</td>
                <td>D L L D</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Inter</td>
                <td>38</td>
                <td>16</td>
                <td>7</td>
                <td>15</td>
                <td>101</td>
                <td>94</td>
                <td>+7</td>
                <td>54</td>
                <td>W L D L</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Arsenal</td>
                <td>38</td>
                <td>16</td>
                <td>6</td>
                <td>16</td>
                <td>101</td>
                <td>94</td>
                <td>+7</td>
                <td>54</td>
                <td>D D D D</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Monaco</td>
                <td>38</td>
                <td>14</td>
                <td>10</td>
                <td>14</td>
                <td>94</td>
                <td>94</td>
                <td>0</td>
                <td>52</td>
                <td>W L L L</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Tottenham</td>
                <td>38</td>
                <td>14</td>
                <td>9</td>
                <td>15</td>
                <td>115</td>
                <td>116</td>
                <td>-1</td>
                <td>51</td>
                <td>L D L D</td>
            </tr>
            <tr>
        <td>16</td>
        <td>FC Alphha</td>
        <td>38</td>
        <td>16</td>
        <td>10</td>
        <td>12</td>
        <td>101</td>
        <td>94</td>
        <td>-2</td>
        <td>51</td>
        <td>W W L L</td>
    </tr>
            <tr>
                <td>17</td>
                <td>Manchester City</td>
                <td>38</td>
                <td>13</td>
                <td>12</td>
                <td>13</td>
                <td>92</td>
                <td>95</td>
                <td>-3</td>
                <td>51</td>
                <td>D L L L</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Sevilla</td>
                <td>38</td>
                <td>15</td>
                <td>5</td>
                <td>18</td>
                <td>98</td>
                <td>98</td>
                <td>0</td>
                <td>50</td>
                <td>L L D D</td>
            </tr>
            <tr>
   
   
    <tr>
        <td>19</td>
        <td>Lyon</td>
        <td>38</td>
        <td>13</td>
        <td>6</td>
        <td>19</td>
        <td>101</td>
        <td>111</td>
        <td>-10</td>
        <td>45</td>
        <td>D L L L</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Liverpool</td>
        <td>38</td>
        <td>13</td>
        <td>6</td>
        <td>19</td>
        <td>88</td>
        <td>99</td>
        <td>-11</td>
        <td>45</td>
        <td>L L L L</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Marseille</td>
        <td>38</td>
        <td>13</td>
        <td>5</td>
        <td>20</td>
        <td>86</td>
        <td>105</td>
        <td>-19</td>
        <td>44</td>
        <td>L L L L</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Juventus</td>
        <td>38</td>
        <td>8</td>
        <td>6</td>
        <td>24</td>
        <td>71</td>
        <td>110</td>
        <td>-39</td>
        <td>30</td>
        <td>L L L L</td>
                </thead>
                <tbody>
                    <!-- Add your table rows here -->
                </tbody>
            </table>
        </section>
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

