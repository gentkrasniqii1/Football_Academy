
<?php include 'navbarfix.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Team</title>
    <link rel="stylesheet" href="test.css">
    <script src="Script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
       
        .team-section {
            text-align: center;
            margin: 20px 0;
        }
       
        .team-section h2 {
            color: #3a3a3a;
            margin-bottom: 10px;
        }
       
        .cards-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
       
        .card {
            width: 200px;
            height: 260px;
            background-color: #007bff;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }
       
        .card img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: auto;
        }
       
        .card .number {
            font-size: 36px;
            opacity: 0.1;
            position: absolute;
            top: 10px;
            right: 10px;
        }
       
        .card .name {
            font-weight: bold;
            font-size: 14px;
            margin-top: auto;
        }
       
        .card .flag {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }
       
        .on-loan {
            position: absolute;
            top: 0;
            left: 0;
            background: yellow;
            color: black;
            font-size: 10px;
            padding: 2px 5px;
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>

<body>


     
    <!-- Goalkeepers -->
    <div class="team-section">
        <h2>Goalkeepers</h2>
        <div class="cards-container">
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Eve Annets</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Eve Annets</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">35</div>
                        <div class="name">Khiara Keating</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Khiara Keating</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">35</div>
                        <div class="name">Eric Dawson</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong>  Eric Dawson</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Height:</strong> 189</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">22</div>
                        <div class="name">Andrew Hamilton</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Andrew Hamilton</p>
                        <p><strong>Age:</strong> 27</p>
                        <p><strong>Height:</strong> 193</p>
                        <p><strong>Weight:</strong> 62kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <h2>Defenders</h2>
        <div class="cards-container">
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Nathaniel Blake</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong>Nathaniel Blake</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 189</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">35</div>
                        <div class="name">Samuel Richards</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Samuel Richards</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Weight:</strong> 187</p>
                        <p><strong>Weight:</strong> 56kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">35</div>
                        <div class="name">Tyler Benson</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Tyler Benson</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 181</p>
                        <p><strong>Weight:</strong> 63kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">22</div>
                        <div class="name">Sandy MacIver</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Sandy MacIver</p>
                        <p><strong>Age:</strong> 27</p>
                        <p><strong>Height:</strong> 182</p>
                        <p><strong>Weight:</strong> 62kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Eve Annets</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Eve Annets</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 179</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Bradley Harper</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Bradley Harper</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 178</p>
                        <p><strong>Weight:</strong> 67kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Natasha Bella</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Natasha Bella</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 180</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Miecheal Cook</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Miecheal Cook</p>
                        <p><strong>Age:</strong> 27</p>
                        <p><strong>Height:</strong> 171</p>
                        <p><strong>Weight:</strong> 64kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Christina Wood</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Christina Wood</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 177</p>
                        <p><strong>Weight:</strong> 68kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Joe Eriksen</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Joe Eriksen</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 185</p>
                        <p><strong>Weight:</strong> 70kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Carla Hamilton</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Carla Hamilton</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 186</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Lana Shelby</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Lana Shelby</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 176</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">12</div>
                        <div class="name">Iva Rey</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Iva Rey</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 169</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Defender</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">62</div>
                        <div class="name">Rovana Alioski</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Eve Annets</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 170</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Goalkeeper</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-section">
        <h2>Midfielders</h2>
        <div class="cards-container">
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">72</div>
                        <div class="name">Sedy Livoka</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Sedy Livoka</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 174</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">22</div>
                        <div class="name">Lance Blandy</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Lance Blandy</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Height:</strong> 183</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">24</div>
                        <div class="name">Paulina Corsa</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Paulina Corsa</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Height:</strong> 182</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">61</div>
                        <div class="name">Sandy MacIver</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Sandy MacIver</p>
                        <p><strong>Age:</strong> 27</p>
                        <p><strong>Height:</strong> 170</p>
                        <p><strong>Weight:</strong> 62kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">52</div>
                        <div class="name">Henky Capricola</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Henky Capricola</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 167</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">8</div>
                        <div class="name">Anna Maria</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Anna Maria</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 180</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">92</div>
                        <div class="name">Marina Flick</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Marina Flick</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 192</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">26</div>
                        <div class="name">Deca Sumbre</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Deca Sumbre</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 170</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">29</div>
                        <div class="name">Onealy Quanny</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Onealy Quanny</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 173</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">33</div>
                        <div class="name">Stivly Khyner</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Stivly Khyner</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 177</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">38</div>
                        <div class="name">Bokeny Rise</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Bokeny Rise</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 172</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">80</div>
                        <div class="name">Livia Pepe</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong>Livia Pepe</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 174</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">55</div>
                        <div class="name">Sosia Bread</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Sosia Bread</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 184</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">43</div>
                        <div class="name">Hugana Onana</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Hugana Onana </p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 185</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Midfielder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section">
        <h2>Attackers</h2>
        <div class="cards-container">
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">17</div>
                        <div class="name">Kerany Tripper</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Kerany Tripper</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 167</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">16</div>
                        <div class="name">Cuana Zidane</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Cuana Zidane</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Height:</strong> 170</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">15</div>
                        <div class="name">Zenky Cuadrado</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Zenky Cuadrado</p>
                        <p><strong>Age:</strong> 21</p>
                        <p><strong>Height:</strong> 179</p>
                        <p><strong>Weight:</strong> 58kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="number">9</div>
                        <div class="name">Valentina Rose</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Valentina Rose</p>
                        <p><strong>Age:</strong> 27</p>
                        <p><strong>Height:</strong> 178</p>
                        <p><strong>Weight:</strong> 62kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">11</div>
                        <div class="name">Mousa Dembele</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Mousa Dembele</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 187</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">47</div>
                        <div class="name">Keva Fofana</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Keva Fofana</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 180</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">77</div>
                        <div class="name">Deny Rony</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Deny Rony</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 183</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">76</div>
                        <div class="name">Arien Wallcot</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Arien Wallcot</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 168</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">94</div>
                        <div class="name">Emery Khana</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Emery Khana</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 185</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">81</div>
                        <div class="name">Caeon Lohener</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Caeon Lohener</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 188</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">10</div>
                        <div class="name">Feranda Rakitq</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Feranda Rakitiq</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">58</div>
                        <div class="name">Klara Diva</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Klara Diva</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 174</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">67</div>
                        <div class="name">Helen Rashford</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Helen Rashfod</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 181</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">ON LOAN</div>
                        <div class="number">84</div>
                        <div class="name">Deana Kenny</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Deana Kenny</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Height:</strong> 180</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Position:</strong> Attacker</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="team-section">
        <h2>Coach</h2>
        <div class="cards-container">
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">First</div>
                        <div class="name">Tomor Gashi</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Tomor Gashi</p>
                        <p><strong>Age:</strong> 22</p>
                        <p><strong>Weight:</strong> 60kg</p>
                        <p><strong>Height:</strong> 187</p>
                        <p><strong>Position:</strong> Coach</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">First</div>
                        <div class="name">Gent Bytyqi</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Gent Bytyqi</p>
                        <p><strong>Age:</strong> 28</p>
                        <p><strong>Weight:</strong> 67kg</p>
                        <p><strong>Height:</strong> 182</p>
                        <p><strong>Position:</strong> Coach</p>
                    </div>
                </div>
            </div>
            <div class="card" onclick="flipCard(this)">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="on-loan">First</div>
                        <div class="name">Leart Elezi</div>
                    </div>
                    <div class="card-back">
                        <p><strong>Name:</strong> Leart Elezi</p>
                        <p><strong>Age:</strong> 24</p>
                        <p><strong>Weight:</strong> 77kg</p>
                        <p><strong>Height:</strong> 195</p>
                        <p><strong>Position:</strong> Coach</p>
                    </div>
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

