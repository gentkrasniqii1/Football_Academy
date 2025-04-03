<?php
// Të dhënat e lidhjes me bazën e të dhënave
$host = 'localhost'; // Adresa e host-it 
$user = 'root';      // Emri i përdoruesit për MySQL
$password = '';      // Fjalëkalimi për MySQL 
$database = 'menagjimi_userave'; // Emri i bazës së të dhënave

// Krijo një lidhje me bazën e të dhënave
$conn = new mysqli($host, "root", "", $database);

// Kontrollo nëse ka ndonjë gabim në lidhje
if ($conn->connect_error) {
    die("Lidhja me bazën e të dhënave dështoi: " . $conn->connect_error);
}

?>

