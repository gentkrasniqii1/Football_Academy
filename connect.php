<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'menagjimi_tiketave';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
?>
