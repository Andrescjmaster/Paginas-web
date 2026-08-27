<?php
session_start();
include '../conexion.php';

// SEGURIDAD: Solo tu (Andrew) puedes entrar
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_correo'] !== 'andresfelipeaguasaco@gmail.com') {
    header("Location: Home.php");
    exit();
}

// 1. LÓGICA PARA ELIMINAR (Se mantiene igual)
if (isset($_GET['eliminar'])) {
    $id_eliminar = $_GET['eliminar'];
    if ($id_eliminar != $_SESSION['usuario_id']) {
        $sql_delete = "DELETE FROM usuarios WHERE id = ?";
        $stmt = $conn->prepare($sql_delete);
        $stmt->bind_param("i", $id_eliminar);
        $stmt->execute();
        header("Location: Admin.php?msg=eliminado");
        exit();
    }
}

// 2. LÓGICA PARA ACTUALIZAR (Con detección de nueva contraseña)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nuevo_user = $_POST['nuevo_usuario'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $pass_nueva = $_POST['nueva_pass']; // Capturamos lo que se escribió

    if (!empty($pass_nueva)) {
        // SI ESCRIBIÓ ALGO: Generamos un nuevo hash y actualizamos todo
        $hash_final = password_hash($pass_nueva, PASSWORD_DEFAULT);
        $sql_update = "UPDATE usuarios SET usuario=?, nombre_completo=?, contrasena=? WHERE id=?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("sssi", $nuevo_user, $nuevo_nombre, $hash_final, $id);
    } else {
        // SI ESTÁ VACÍO: Solo actualizamos usuario y nombre, manteniendo el hash actual
        $sql_update = "UPDATE usuarios SET usuario=?, nombre_completo=? WHERE id=?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssi", $nuevo_user, $nuevo_nombre, $id);
    }
    
    if ($stmt->execute()) {
        header("Location: Admin.php?msg=actualizado");
        exit();
    }
}

$usuarios = $conn->query("SELECT id, usuario, nombre_completo, correo FROM usuarios");

$mensajes = $conn->query("SELECT id, usuario_nombre, mensaje, created_at FROM mensajes ORDER BY created_at DESC LIMIT 100");
$total_mensajes = $conn->query("SELECT COUNT(*) as total FROM mensajes")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Alquimia - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
    body { 
        background-color: #1e2125; 
        color: #e9ecef; 
        padding: 60px 20px; /* Más espacio superior */
        font-family: 'Segoe UI', Roboto, sans-serif;
        font-size: 1.2rem; /* Aumento de fuente base */
    }

    .container {
        background-color: #2b3035; 
        padding: 50px; /* Mucho más aire interno */
        border-radius: 16px;
        box-shadow: 0 12px 24px rgba(0,0,0,0.4);
        max-width: 1400px; /* Permitimos que se expanda más en pantallas grandes */
    }

    h2 { 
        font-size: 2.5rem; /* Título gigante */
        font-weight: 700;
        color: #ffffff; 
        margin-bottom: 40px; 
    }

    /* Botón Volver al Inicio */
    .btn-outline-light {
        font-size: 1.1rem;
        padding: 10px 20px;
        border-width: 2px;
    }

    /* Ajustes de la Tabla */
    .table { 
        background-color: #343a40; 
        color: #dee2e6; 
        border-collapse: separate;
        border-spacing: 0 15px; 
        font-size: 1.1rem;
    }

    .table thead th {
        background-color: #212529;
        padding: 20px;
        font-size: 1rem;
        letter-spacing: 1.5px;
        border: none;
    }

    .table tbody tr {
        background-color: #3c4248;
        transition: all 0.3s ease;
    }

    .table tbody td {
        padding: 20px; /* Celdas mucho más grandes */
        border: none;
    }

    /* Inputs Gigantes */
    .form-control-sm { 
        background-color: #212529; 
        border: 2px solid #495057; 
        color: #fff;
        font-size: 1.1rem !important; 
        padding: 12px 15px !important; /* Inputs más altos */
        height: auto !important;
    }

    .form-control-sm:focus { 
        border-color: #28a745; 
        box-shadow: 0 0 10px rgba(40, 167, 69, 0.4);
    }

    /* Iconos y Botones de Acción */
    .btn-group .btn {
        padding: 10px 18px;
        font-size: 1.3rem; /* Iconos más grandes */
    }

    .bi { vertical-align: middle; }

    .text-muted { 
        font-size: 1rem;
        color: #adb5bd !important; 
    }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Gestión de Usuarios - Alquimia</h2>
        <a href="Home.php" class="btn btn-outline-light btn-sm">Volver al Inicio</a>
    </div>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Nueva Contraseña</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $usuarios->fetch_assoc()): ?>
            <tr>
                <form method="POST" action="Admin.php">
                    <td>
                        <?php echo $row['id']; ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    </td>
                    <td><input type="text" name="nuevo_usuario" class="form-control form-control-sm" value="<?php echo $row['usuario']; ?>"></td>
                    <td><input type="text" name="nuevo_nombre" class="form-control form-control-sm" value="<?php echo $row['nombre_completo']; ?>"></td>
                    <td><small class="text-muted"><?php echo $row['correo']; ?></small></td>
                    <td>
                        <input type="password" name="nueva_pass" class="form-control form-control-sm" placeholder="Dejar vacío para mantener">
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="submit" name="actualizar" class="btn btn-success btn-sm">
                                <i class="bi bi-check-circle"></i>
                            </button>
                            <a href="Admin.php?eliminar=<?php echo $row['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('¿Eliminar a <?php echo $row['usuario']; ?>?');">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </form>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <hr class="my-5" style="border-color:#495057;">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold" style="font-size:1.8rem;">Chat - Historial de Mensajes</h3>
        <span class="badge bg-secondary" style="font-size:1rem;"><?php echo $total_mensajes; ?> mensajes</span>
    </div>

    <?php if ($total_mensajes > 0): ?>
    <div class="text-end mb-3">
        <button class="btn btn-danger btn-sm" onclick="clearChat()">
            <i class="bi bi-trash3"></i> Limpiar todo
        </button>
    </div>
    <div style="max-height:400px; overflow-y:auto;">
        <table class="table table-hover align-middle">
            <thead class="table-dark" style="position:sticky; top:0;">
                <tr>
                    <th style="width:60px;">ID</th>
                    <th style="width:150px;">Usuario</th>
                    <th>Mensaje</th>
                    <th style="width:80px;">Hora</th>
                    <th style="width:60px;" class="text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while($msg = $mensajes->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $msg['id']; ?></td>
                    <td><strong><?php echo htmlspecialchars($msg['usuario_nombre']); ?></strong></td>
                    <td><?php echo htmlspecialchars($msg['mensaje']); ?></td>
                    <td><small class="text-muted"><?php echo date('H:i', strtotime($msg['created_at'])); ?></small></td>
                    <td class="text-center">
                        <button class="btn btn-outline-danger btn-sm" onclick="deleteMsg(<?php echo $msg['id']; ?>, this)">
                            <i class="bi bi-x-circle"></i>
                        </button>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <p class="text-muted">No hay mensajes en el chat.</p>
    <?php endif; ?>

</div>

<script>
function deleteMsg(id, btn) {
    if (!confirm('¿Eliminar este mensaje?')) return;
    fetch('chat_handler.php?action=delete&id=' + id)
        .then(r => r.json())
        .then(data => {
            if (data.ok) btn.closest('tr').remove();
        });
}

function clearChat() {
    if (!confirm('¿Eliminar TODOS los mensajes del chat?')) return;
    fetch('chat_handler.php?action=clear')
        .then(r => r.json())
        .then(data => {
            if (data.ok) location.reload();
        });
}
</script>

</body>
</html>