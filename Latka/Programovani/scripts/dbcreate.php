<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvořit připojení
$conn = new mysqli($servername, $username, $password);
// Zkontrolování připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Vytvoření databáze
$sql = "CREATE DATABASE test1";
if ($conn->query($sql) === TRUE) {
    echo "Databaze uspesne vytvorena.";
} else {
    echo "Chyba pri vytvareni databaze: " . $conn->error;
}

$conn->close();
?>