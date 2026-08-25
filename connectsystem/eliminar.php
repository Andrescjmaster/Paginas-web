<?php
require 'includes/conexion.php';

$id = $_GET['id'] ?? '';
if (empty($id)) { header('Location: participantes.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {
    $stmt = $conn->prepare("DELETE FROM participantes WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();
    header('Location: participantes.php?msg=eliminado');
    exit;
}

$stmt = $conn->prepare("SELECT nombre FROM participantes WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) { header('Location: participantes.php'); exit; }
$p = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eliminar — ConnectSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="container py-5" style="max-width:500px">
  <div class="card p-4 text-center border-danger">
    <i class="bi bi-exclamation-triangle-fill fs-1 text-warning mb-3"></i>
    <h5 class="fw-bold">Eliminar participante</h5>
    <p class="text-muted">Esta accion no se puede deshacer.</p>
    <p class="fw-semibold"><?= htmlspecialchars($p['nombre']) ?> <span class="text-muted fw-normal">(ID: <?= htmlspecialchars($id) ?>)</span></p>
    <form method="POST">
      <input type="hidden" name="confirmar" value="1">
      <div class="d-flex justify-content-center gap-2">
        <a href="participantes.php" class="btn btn-outline-secondary px-4">Cancelar</a>
        <button type="submit" class="btn btn-danger px-4"><i class="bi bi-trash3-fill me-1"></i>Eliminar</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
