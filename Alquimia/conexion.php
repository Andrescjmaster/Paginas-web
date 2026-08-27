<?php
$host = "localhost";
$usuario = "root";
$password = ""; // en XAMPP normalmente va vacío
$bd = "alquimia_db";

$conn = new mysqli($host, $usuario, $password, $bd);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>