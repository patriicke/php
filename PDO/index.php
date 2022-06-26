<?php
$servername = "127.0.0.1";
$username = "PATRICK";
$password = "DATAbase@123";
try {
  $conn = new PDO("mysql:host=$servername;dbname=STOCK_MANAGEMENT", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>