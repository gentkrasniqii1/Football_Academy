<?php
$host = "localhost"; // Serveri MySQL
$user = "root"; // Emri i përdoruesit
$password = ""; // Fjalëkalimi (ndrysho sipas konfigurimit tënd)
$database = "menagjimi_kontakteve"; // Emri i bazës së të dhënave

// Krijo lidhjen
$conn = new mysqli($host, $user, $password, $database);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave dështoi: " . $conn->connect_error);
}
?>
