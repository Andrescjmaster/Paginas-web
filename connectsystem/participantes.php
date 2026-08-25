<?php
require 'includes/conexion.php';

$resultado = $conn->query("SELECT * FROM participantes ORDER BY creado_en DESC");
$msg       = $_GET['msg'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Participantes — ConnectSystem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h4 fw-semibold mb-0">
      <i class="bi bi-people-fill me-2"></i>Participantes registrados
      <span class="badge bg-secondary ms-1"><?= $resultado->num_rows ?></span>
    </h1>
    <a href="registro.php" class="btn btn-success"><i class="bi bi-person-plus-fill me-1"></i>Nuevo participante</a>
  </div>

  <?php if ($msg === 'eliminado'): ?>
    <div class="alert alert-success">
      <i class="bi bi-check-circle-fill me-1"></i> Participante eliminado correctamente.
    </div>
  <?php elseif ($msg === 'actualizado'): ?>
    <div class="alert alert-success">
      <i class="bi bi-check-circle-fill me-1"></i> Participante actualizado correctamente.
    </div>
  <?php endif; ?>

  <?php if ($resultado->num_rows === 0): ?>
    <div class="card p-5 text-center text-muted">
      <i class="bi bi-inbox fs-1 d-block mb-3"></i>
      <p class="fs-5 mb-3">No hay participantes registrados aun.</p>
      <a href="registro.php" class="btn btn-success mx-auto" style="width:fit-content">Registrar el primero</a>
    </div>
  <?php else: ?>
    <div class="card">
      <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>Evento</th>
              <th>Fecha</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
          <?php while ($p = $resultado->fetch_assoc()): ?>
            <?php
              $bc = match($p['evento']) {
                'Taller'    => 'badge-taller',
                'Hackathon' => 'badge-hack',
                default     => 'badge-conf'
              };
            ?>
            <tr>
              <td class="text-muted small"><?= htmlspecialchars($p['id']) ?></td>
              <td class="fw-medium"><?= htmlspecialchars($p['nombre']) ?></td>
              <td><?= htmlspecialchars($p['correo']) ?></td>
              <td><?= htmlspecialchars($p['telefono']) ?></td>
              <td><span class="badge <?= $bc ?> px-2 py-1"><?= $p['evento'] ?></span></td>
              <td><?= date('d/m/Y', strtotime($p['fecha'])) ?></td>
              <td class="text-center">
                <a href="editar.php?id=<?= urlencode($p['id']) ?>" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil-fill me-1"></i>Editar</a>
                <a href="eliminar.php?id=<?= urlencode($p['id']) ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill me-1"></i>Eliminar</a>
              </td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php endif; ?>
</div>

</body>
</html>
