<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Vytvoření připojení
$conn = new mysqli($servername, $username, $password, $dbname);
// Zkontrolování připojení
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO vyfuk (vstriky, prezdivka, valce)
VALUES ('deset', 'ahojdahoj', 'osm')";

if ($conn->query($sql) === TRUE) {

   echo "Novy zaznam uspesne vytvoren.";
} else { 
    echo "Chyba: " . $sqp . "<br>" . $conn->error;
}

$conn->close();
?>
