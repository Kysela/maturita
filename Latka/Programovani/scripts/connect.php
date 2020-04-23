<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvoøit pøipojení
$conn = new mysqli($servername, $username, $password);

// Zkontrolovat pøipojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Uspesne pripojeno.";
?>