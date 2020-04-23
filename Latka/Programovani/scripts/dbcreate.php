<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvoøit pøipojení
$conn = new mysqli($servername, $username, $password);
// Zkontrolování pøipojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Vytvoøení databáze
$sql = "CREATE DATABASE test1";
if ($conn->query($sql) === TRUE) {
    echo "Databaze uspesne vytvorena.";
} else {
    echo "Chyba pri vytvareni databaze: " . $conn->error;
}

$conn->close();
?>