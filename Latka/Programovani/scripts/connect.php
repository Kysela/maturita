<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvořit připojení
$conn = new mysqli($servername, $username, $password);

// Zkontrolovat připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Uspesne pripojeno.";
?>