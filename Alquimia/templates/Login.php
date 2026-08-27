<?php
session_start();
include '../conexion.php';

$error = '';
$exito = '';

if (isset($_SESSION['usuario_id'])) {
    header("Location: Home.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_input = trim($_POST['usuario'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($usuario_input) || empty($password)) {
        $error = 'Por favor completa todos los campos';
    } else {
        if ($conn !== null) {
            $sql = "SELECT id, usuario, nombre_completo, correo, contrasena FROM usuarios WHERE usuario = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("s", $usuario_input);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if ($resultado->num_rows == 1) {
                    $usuario = $resultado->fetch_assoc();

                    // VERIFICACIÓN PROFESIONAL: Comparamos contraseña con el Hash
                    if (password_verify($password, $usuario['contrasena'])) {
                        $_SESSION['usuario_id'] = $usuario['id'];
                        $_SESSION['usuario_nombre'] = $usuario['usuario'];
                        $_SESSION['usuario_correo'] = $usuario['correo'];

                        header("Location: Home.php");
                        exit();
                    } else {
                        $error = 'Contraseña incorrecta';
                    }
                } else {
                    $error = 'El usuario no existe';
                }
            }
        } else {
            $error = "La base de datos no está disponible en este momento.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../static/css/Login.css">
</head>
<body class="cuerpo-login">
    <div class="contenedor-principal">
        <div class="tarjeta-login">
            <h2 class="titulo-login">Iniciar Sesión</h2>
            
            <?php if ($error): ?>
                <div class="alerta alerta-error">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form action="Login.php" method="POST" class="formulario-login">
                <div class="grupo-entrada">
                    <label>Usuario</label>
                    <input 
                        type="text" 
                        name="usuario" 
                        placeholder="Tu usuario"
                        value="<?php echo htmlspecialchars($usuario_guardado); ?>"
                        required
                    >
                </div>

                <div class="grupo-entrada">
                    <label>Contraseña</label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Tu contraseña"
                        required
                    >
                </div>

                <div class="grupo-checkbox">
                    <input type="checkbox" name="recordar">
                    <label>Recuérdame</label>
                </div>

                <button type="submit" class="boton-ingresar">Ingresar</button>
            </form>

            <div class="pie-tarjeta">
                <p>¿No tienes cuenta? <a href="Register.php">Regístrate</a></p>
            </div>
        </div>
    </div>
</body>
</html>
