<?php
$servername = "localhost";
$username = "root";  // Ndrysho nëse është e nevojshme
$password = "";      // Ndrysho nëse është e nevojshme
$dbname = "menagjimi_lojtareve"; // Zëvendëso me emrin e databazës

// Krijimi i lidhjes me databazën
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Merr grupmoshën nga kërkesa
$group = isset($_GET['group']) ? $conn->real_escape_string($_GET['group']) : '';

// Kontrollo nëse është dhënë një grupmoshë
if ($group === '') {
    echo json_encode(["error" => "Grupmosha nuk është e specifikuar"]);
    exit;
}

// Nxjerr lojtarët nga databaza
$sql = "SELECT * FROM players WHERE group_age = '$group'";
$result = $conn->query($sql);

$players = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $players[] = $row;
    }
}

// Kthe të dhënat si JSON
echo json_encode($players);
$conn->close();
?>
