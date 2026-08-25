<?php
$host     = 'localhost';
$usuario  = 'root';
$password = '';
$base     = 'connectsystem';

$conn = new mysqli($host, $usuario, $password, $base);
$conn->set_charset('utf8mb4');

if ($conn->connect_error) {
    die('<div style="font-family:sans-serif;color:red;padding:2rem">
        <strong>Error de conexion:</strong> ' . $conn->connect_error . '
    </div>');
}
