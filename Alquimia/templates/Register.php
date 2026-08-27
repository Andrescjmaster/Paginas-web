<?php
session_start();
include '../conexion.php';

$error = '';

if (isset($_SESSION['usuario_id'])) {
    header("Location: Home.php"); // Corregido de .html a .php
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $nombre = trim($_POST['nombre_completo'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirmar = $_POST['password_confirmar'] ?? '';
    $terminos = isset($_POST['terminos']);

    if (empty($usuario) || empty($nombre) || empty($email) || empty($password) || empty($password_confirmar)) {
        $error = 'Completa todos los campos';
    } elseif ($password !== $password_confirmar) {
        $error = 'Las contraseñas no coinciden';
    } elseif (!$terminos) {
        $error = 'Debes aceptar los términos';
    } else {
        $sql = "SELECT id FROM usuarios WHERE usuario = ? OR correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $usuario, $email);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows > 0) {
            $error = "Usuario o correo ya existe";
        } else {
            // ENCRIPTACIÓN PROFESIONAL: Creamos el hash de la contraseña
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql_insert = "INSERT INTO usuarios (usuario, nombre_completo, correo, contrasena) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bind_param("ssss", $usuario, $nombre, $email, $hash);

            if ($stmt->execute()) {
                header("Location: Login.php");
                exit();
            } else {
                $error = "Error al registrar";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../static/css/Register.css">
</head>
<body class="cuerpo-registro">
    <div class="contenedor-principal">
        <div class="tarjeta-registro">
            <h2 class="titulo-registro">Crear Cuenta</h2>
            
            <?php if ($error): ?>
                <div class="alerta alerta-error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form action="Register.php" method="POST" class="formulario-registro">
                <div class="grupo-entrada">
                    <label>Usuario</label>
                    <input type="text" name="usuario" required>
                </div>

                <div class="grupo-entrada">
                    <label>Nombre completo</label>
                    <input type="text" name="nombre_completo" required>
                </div>

                <div class="grupo-entrada">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" required>
                </div>

                <div class="grupo-entrada">
                    <label>Contraseña</label>
                    <input type="password" name="password" required>
                </div>

                <div class="grupo-entrada">
                    <label>Confirmar contraseña</label>
                    <input type="password" name="password_confirmar" required>
                </div>

                <div class="grupo-terminos">
                    <input type="checkbox" name="terminos" required>
                    <label>Acepto términos</label>
                </div>

                <button type="submit" class="boton-registrar">Crear Cuenta</button>
            </form>

            <div class="pie-tarjeta">
                <p>¿Ya tienes cuenta? <a href="Login.php">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>