<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Error de conexion: " . $conn->connect_error);
} 

echo "Conexión OK";
?>
