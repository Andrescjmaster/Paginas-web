<?php
require 'includes/conexion.php';

$id = $_GET['id'] ?? '';
if (empty($id)) { header('Location: participantes.php'); exit; }

/* READ del registro a editar */
$stmt = $conn->prepare("SELECT * FROM participantes WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$resultado = $stmt->get_result();
if ($resultado->num_rows === 0) { header('Location: participantes.php'); exit; }
$p = $resultado->fetch_assoc();
$stmt->close();

$errores = [];

/* UPDATE */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre      = trim($_POST['nombre']      ?? '');
    $correo      = trim($_POST['correo']      ?? '');
    $telefono    = trim($_POST['telefono']    ?? '');
    $evento      = trim($_POST['evento']      ?? '');
    $comentarios = trim($_POST['comentarios'] ?? '');

    /* Validaciones */
    if (mb_strlen($nombre) < 5)
        $errores['nombre'] = 'El nombre debe tener minimo 5 caracteres.';

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL))
        $errores['correo'] = 'El formato del correo no es valido.';

    if (!preg_match('/^\d{10}$/', $telefono))
        $errores['telefono'] = 'El telefono debe tener exactamente 10 digitos numericos.';

    if (!in_array($evento, ['Conferencia','Taller','Hackathon']))
        $errores['evento'] = 'Seleccione un tipo de evento valido.';

    if (mb_strlen($comentarios) > 200)
        $errores['comentarios'] = 'Los comentarios no pueden superar 200 caracteres.';

    if (empty($errores)) {
        $stmt = $conn->prepare(
            "UPDATE participantes
             SET nombre=?, correo=?, telefono=?, evento=?, comentarios=?
             WHERE id=?"
        );
        $stmt->bind_param("ssssss", $nombre, $correo, $telefono, $evento, $comentarios, $id);

        if ($stmt->execute()) {
            $stmt->close();
            header('Location: participantes.php?msg=actualizado');
            exit;
        }
        $errores['general'] = 'Error al actualizar: ' . $conn->error;
        $stmt->close();
    }

    /* Actualizar $p con los valores enviados para re-mostrar */
    $p = array_merge($p, compact('nombre','correo','telefono','evento','comentarios'));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar participante — ConnectSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="container py-4" style="max-width:700px">
  <h1 class="h4 fw-semibold mb-1"><i class="bi bi-pencil-square me-2"></i>Editar participante</h1>
  <p class="text-muted small mb-4">ID: <strong><?= htmlspecialchars($id) ?></strong></p>

  <?php if (!empty($errores)): ?>
    <div class="alert alert-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i> Por favor corrige los errores marcados.</div>
  <?php endif; ?>

  <div class="card p-4">
    <form method="POST" novalidate>
      <div class="row g-3">

        <div class="col-12">
          <label class="form-label fw-medium">Nombre completo <span class="text-danger">*</span></label>
          <input type="text" name="nombre" maxlength="150"
            class="form-control <?= isset($errores['nombre']) ? 'is-invalid':'' ?>"
            value="<?= htmlspecialchars($p['nombre']) ?>">
          <div class="invalid-feedback"><?= $errores['nombre'] ?? '' ?></div>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-medium">Correo electronico <span class="text-danger">*</span></label>
          <input type="email" name="correo" maxlength="150"
            class="form-control <?= isset($errores['correo']) ? 'is-invalid':'' ?>"
            value="<?= htmlspecialchars($p['correo']) ?>">
          <div class="invalid-feedback"><?= $errores['correo'] ?? '' ?></div>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-medium">Telefono <span class="text-danger">*</span></label>
          <input type="text" name="telefono" maxlength="10"
            class="form-control <?= isset($errores['telefono']) ? 'is-invalid':'' ?>"
            value="<?= htmlspecialchars($p['telefono']) ?>">
          <div class="invalid-feedback"><?= $errores['telefono'] ?? '' ?></div>
        </div>

        <div class="col-12">
          <label class="form-label fw-medium">Tipo de evento <span class="text-danger">*</span></label>
          <select name="evento"
            class="form-select <?= isset($errores['evento']) ? 'is-invalid':'' ?>">
            <?php foreach (['Conferencia','Taller','Hackathon'] as $e): ?>
              <option value="<?= $e ?>" <?= $p['evento']===$e ? 'selected':'' ?>><?= $e ?></option>
            <?php endforeach; ?>
          </select>
          <div class="invalid-feedback"><?= $errores['evento'] ?? '' ?></div>
        </div>

        <div class="col-12">
          <label class="form-label fw-medium">
            Comentarios <small class="text-muted fw-normal">(max. 200 caracteres)</small>
          </label>
          <textarea name="comentarios" rows="3" maxlength="200"
            class="form-control <?= isset($errores['comentarios']) ? 'is-invalid':'' ?>"><?= htmlspecialchars($p['comentarios'] ?? '') ?></textarea>
          <div class="invalid-feedback"><?= $errores['comentarios'] ?? '' ?></div>
        </div>

      </div>

      <div class="d-flex justify-content-end gap-2 mt-4">
        <a href="participantes.php" class="btn btn-outline-secondary px-4">Cancelar</a>
        <button type="submit" class="btn btn-warning px-4"><i class="bi bi-check-lg me-1"></i>Guardar cambios</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
