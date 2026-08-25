<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold fs-4" href="index.php">
      <span style="opacity:.75">Connect</span>System
    </a>
    <ul class="navbar-nav ms-auto flex-wrap">
      <li class="nav-item">
        <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active fw-semibold' : '' ?>" href="index.php">
          <i class="bi bi-house-fill me-1"></i>Inicio
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) === 'registro.php' ? 'active fw-semibold' : '' ?>" href="registro.php">
          <i class="bi bi-person-plus-fill me-1"></i>Registrar
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 <?= basename($_SERVER['PHP_SELF']) === 'participantes.php' ? 'active fw-semibold' : '' ?>" href="participantes.php">
          <i class="bi bi-people-fill me-1"></i>Participantes
        </a>
      </li>
    </ul>
  </div>
</nav>
