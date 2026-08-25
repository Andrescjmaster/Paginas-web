<?php
require 'includes/conexion.php';

$errores = [];
$success = false;
$datos   = ['id'=>'','nombre'=>'','correo'=>'','telefono'=>'','evento'=>'','fecha'=>'','comentarios'=>''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $datos = [
        'id'          => trim($_POST['id']          ?? ''),
        'nombre'      => trim($_POST['nombre']      ?? ''),
        'correo'      => trim($_POST['correo']      ?? ''),
        'telefono'    => trim($_POST['telefono']    ?? ''),
        'evento'      => trim($_POST['evento']      ?? ''),
        'fecha'       => trim($_POST['fecha']       ?? ''),
        'comentarios' => trim($_POST['comentarios'] ?? ''),
    ];

    /* VALIDACIONES */
    if (empty($datos['id']))
        $errores['id'] = 'El ID del participante es obligatorio.';

    if (mb_strlen($datos['nombre']) < 5)
        $errores['nombre'] = 'El nombre debe tener minimo 5 caracteres.';

    if (!filter_var($datos['correo'], FILTER_VALIDATE_EMAIL))
        $errores['correo'] = 'El formato del correo electronico no es valido.';

    if (!preg_match('/^\d{10}$/', $datos['telefono']))
        $errores['telefono'] = 'El telefono debe tener exactamente 10 digitos numericos.';

    if (!in_array($datos['evento'], ['Conferencia','Taller','Hackathon']))
        $errores['evento'] = 'Seleccione un tipo de evento valido.';

    if (empty($datos['fecha']))
        $errores['fecha'] = 'La fecha de inscripcion es obligatoria.';

    if (mb_strlen($datos['comentarios']) > 200)
        $errores['comentarios'] = 'Los comentarios no pueden superar 200 caracteres.';

    /* ID DUPLICADO */
    if (empty($errores['id'])) {
        $stmt = $conn->prepare("SELECT id FROM participantes WHERE id = ?");
        $stmt->bind_param("s", $datos['id']);
        $stmt->execute();
        if ($stmt->get_result()->num_rows > 0)
            $errores['id'] = 'Este ID ya esta registrado.';
        $stmt->close();
    }

    /* INSERT */
    if (empty($errores)) {
        $stmt = $conn->prepare(
            "INSERT INTO participantes (id, nombre, correo, telefono, evento, fecha, comentarios)
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param(
            "sssssss",
            $datos['id'], $datos['nombre'], $datos['correo'],
            $datos['telefono'], $datos['evento'], $datos['fecha'], $datos['comentarios']
        );

        if ($stmt->execute()) {
            $success = true;
            $datos   = ['id'=>'','nombre'=>'','correo'=>'','telefono'=>'','evento'=>'','fecha'=>'','comentarios'=>''];
        } else {
            $errores['general'] = 'Error al guardar: ' . $conn->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar — ConnectSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="container py-4" style="max-width:700px">
  <h1 class="h4 fw-semibold mb-4"><i class="bi bi-person-plus-fill me-2"></i>Registrar participante</h1>

  <?php if ($success): ?>
    <div class="alert alert-success" role="alert">
      <i class="bi bi-check-circle-fill me-1"></i><strong>Registro exitoso!</strong> El participante fue guardado en la base de datos.
    </div>
  <?php endif; ?>

  <?php if (!empty($errores)): ?>
    <div class="alert alert-danger">
      <i class="bi bi-exclamation-triangle-fill me-1"></i><strong>Error en la validacion.</strong> Revisa los campos marcados.
    </div>
  <?php endif; ?>

  <div class="card p-4">
    <form method="POST" novalidate>
      <div class="row g-3">

        <div class="col-md-6">
          <label class="form-label fw-medium">ID participante <span class="text-danger">*</span></label>
          <input type="text" name="id" maxlength="10"
            class="form-control <?= isset($errores['id']) ? 'is-invalid' : '' ?>"
            placeholder="Ej: P001" value="<?= htmlspecialchars($datos['id']) ?>">
          <div class="invalid-feedback"><?= $errores['id'] ?? '' ?></div>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-medium">Fecha de inscripcion <span class="text-danger">*</span></label>
          <input type="date" name="fecha"
            class="form-control <?= isset($errores['fecha']) ? 'is-invalid' : '' ?>"
            value="<?= htmlspecialchars($datos['fecha']) ?>">
          <div class="invalid-feedback"><?= $errores['fecha'] ?? '' ?></div>
        </div>

        <div class="col-12">
          <label class="form-label fw-medium">Nombre completo <span class="text-danger">*</span></label>
          <input type="text" name="nombre" maxlength="150"
            class="form-control <?= isset($errores['nombre']) ? 'is-invalid' : '' ?>"
            placeholder="Minimo 5 caracteres" value="<?= htmlspecialchars($datos['nombre']) ?>">
          <div class="invalid-feedback"><?= $errores['nombre'] ?? '' ?></div>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-medium">Correo electronico <span class="text-danger">*</span></label>
          <input type="email" name="correo" maxlength="150"
            class="form-control <?= isset($errores['correo']) ? 'is-invalid' : '' ?>"
            placeholder="usuario@email.com" value="<?= htmlspecialchars($datos['correo']) ?>">
          <div class="invalid-feedback"><?= $errores['correo'] ?? '' ?></div>
        </div>

        <div class="col-md-6">
          <label class="form-label fw-medium">Telefono <span class="text-danger">*</span></label>
          <input type="text" name="telefono" maxlength="10"
            class="form-control <?= isset($errores['telefono']) ? 'is-invalid' : '' ?>"
            placeholder="10 digitos" value="<?= htmlspecialchars($datos['telefono']) ?>">
          <div class="invalid-feedback"><?= $errores['telefono'] ?? '' ?></div>
        </div>

        <div class="col-12">
          <label class="form-label fw-medium">Tipo de evento <span class="text-danger">*</span></label>
          <select name="evento"
            class="form-select <?= isset($errores['evento']) ? 'is-invalid' : '' ?>">
            <option value="">-- Seleccionar --</option>
            <?php foreach (['Conferencia','Taller','Hackathon'] as $e): ?>
              <option value="<?= $e ?>" <?= $datos['evento']===$e ? 'selected':'' ?>><?= $e ?></option>
            <?php endforeach; ?>
          </select>
          <div class="invalid-feedback"><?= $errores['evento'] ?? '' ?></div>
        </div>

        <div class="col-12">
          <label class="form-label fw-medium">
            Comentarios
            <small class="text-muted fw-normal">(opcional, max. 200 caracteres)</small>
          </label>
          <textarea name="comentarios" rows="3" maxlength="200"
            class="form-control <?= isset($errores['comentarios']) ? 'is-invalid' : '' ?>"
            placeholder="Informacion adicional..."><?= htmlspecialchars($datos['comentarios']) ?></textarea>
          <div class="invalid-feedback"><?= $errores['comentarios'] ?? '' ?></div>
        </div>

      </div><!-- /row -->

      <div class="d-flex justify-content-end gap-2 mt-4">
        <a href="index.php" class="btn btn-outline-secondary px-4">Cancelar</a>
        <button type="submit" class="btn btn-success px-4"><i class="bi bi-save-fill me-1"></i>Guardar registro</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
