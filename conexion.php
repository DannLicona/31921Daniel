<?php
$servername = "localhost";  // Puedes cambiar esto si tu servidor de base de datos está en otro lugar
$username = "root";
$password = "123456789";
$dbname = "CRUD";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

