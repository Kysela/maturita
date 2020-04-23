<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Vytvoøení pøipojení
$conn = new mysqli($servername, $username, $password, $dbname);
// Zkontrolování pøipojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Vytvoøení tabulky
$sql = "CREATE TABLE vyfuk (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
vstriky VARCHAR(30) NOT NULL,
prezdivka VARCHAR(30) NOT NULL,
valce VARCHAR(50),
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabulka Motor uspesne vytvorena.";
} else {
    echo "Chyba pri vytvareni tabulky: " . $conn->error;
}

$conn->close();
?>