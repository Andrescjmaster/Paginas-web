<?php
session_start();
include '../conexion.php';

header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

switch ($action) {

    case 'load':
        $result = $conn->query("SELECT id, usuario_nombre, mensaje, created_at FROM mensajes ORDER BY created_at ASC");
        $mensajes = [];
        while ($row = $result->fetch_assoc()) {
            $row['created_at'] = date('H:i', strtotime($row['created_at']));
            $mensajes[] = $row;
        }
        echo json_encode($mensajes);
        break;

    case 'send':
        if (!isset($_SESSION['usuario_id'])) {
            http_response_code(403);
            echo json_encode(['error' => 'No autorizado']);
            exit;
        }
        $usuario_id = (int)$_SESSION['usuario_id'];
        $usuario_nombre = $_SESSION['usuario_nombre'];
        $mensaje = trim($_POST['mensaje'] ?? '');

        if ($mensaje === '') {
            echo json_encode(['error' => 'Mensaje vacio']);
            exit;
        }
        if (strlen($mensaje) > 500) {
            echo json_encode(['error' => 'Maximo 500 caracteres']);
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO mensajes (usuario_id, usuario_nombre, mensaje) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $usuario_id, $usuario_nombre, $mensaje);
        $stmt->execute();
        echo json_encode(['ok' => true]);
        break;

    case 'delete':
        if (!isset($_SESSION['usuario_correo']) || $_SESSION['usuario_correo'] !== 'andresfelipeaguasaco@gmail.com') {
            http_response_code(403);
            echo json_encode(['error' => 'No autorizado']);
            exit;
        }
        $id = (int)$_GET['id'];
        $stmt = $conn->prepare("DELETE FROM mensajes WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        echo json_encode(['ok' => true]);
        break;

    case 'clear':
        if (!isset($_SESSION['usuario_correo']) || $_SESSION['usuario_correo'] !== 'andresfelipeaguasaco@gmail.com') {
            http_response_code(403);
            echo json_encode(['error' => 'No autorizado']);
            exit;
        }
        $conn->query("DELETE FROM mensajes");
        echo json_encode(['ok' => true]);
        break;

    default:
        echo json_encode(['error' => 'Accion no valida']);
}
