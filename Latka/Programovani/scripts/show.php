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

$sql = "SELECT id, vstriky, prezdivka FROM vyfuk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // výstupní data z každého øádku
while($row = $result->fetch_assoc()) {
 echo "id: " . $row["id"]. " - Pocet: " . $row["vstriky"]. " " . $row["prezdivka"]. " <br>";
 }
} else {
 echo "0 Results";
}
$conn->close();
?>