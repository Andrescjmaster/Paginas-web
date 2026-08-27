<?php 
// require 'includes/conexion.php'; 

$total = 0;
$conf = 0;
$taller = 0;
$hackathon = 0;
?>

<?php include('includes/navbar.php'); ?>

<!-- HERO -->
<section class="hero-section text-center">
  <div class="container">
    <span class="badge bg-light text-dark mb-3 px-3 py-2"><i class="bi bi-stars me-1"></i>Plataforma oficial</span>
    <h1>ConnectSystem</h1>
    <p>Plataforma de administracion para eventos tecnologicos:<br>charlas, workshops y hackathons.</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="registro.php" class="btn btn-hero btn-lg fw-semibold px-5 py-3">
        <i class="bi bi-person-plus-fill me-2"></i>Registrar participante
      </a>
      <a href="participantes.php" class="btn btn-outline-light btn-lg fw-semibold px-4 py-3">
        <i class="bi bi-people-fill me-2"></i>Ver participantes
      </a>
    </div>
  </div>
</section>

<!-- STATS rapidas -->
<?php
$result = false;
?>
<section class="container py-4">
  <div class="row g-3 mb-5">
    <div class="col-6 col-md-3">
      <div class="card text-center p-3 stat-card stat-purple">
        <div class="fs-1 fw-bold" style="color:#6C3CE1"><?= $total ?></div>
        <div class="text-muted small">Total participantes</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card text-center p-3 stat-card stat-pink">
        <div class="fs-1 fw-bold" style="color:#E84393"><?= $conf ?></div>
        <div class="text-muted small">Conferencias</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card text-center p-3 stat-card stat-cyan">
        <div class="fs-1 fw-bold" style="color:#00D2D3"><?= $taller ?></div>
        <div class="text-muted small">Talleres</div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card text-center p-3 stat-card stat-yellow">
        <div class="fs-1 fw-bold" style="color:#FECA57"><?= $hackathon ?></div>
        <div class="text-muted small">Hackathons</div>
      </div>
    </div>
  </div>

  <!-- PROXIMOS EVENTOS -->
  <div class="d-flex align-items-center justify-content-between mb-3">
    <h2 class="h5 fw-semibold mb-0"><i class="bi bi-calendar-event-fill me-2" style="color:#6C3CE1"></i>Proximos eventos</h2>
    <a href="registro.php" class="btn btn-sm btn-outline-primary rounded-pill px-3"><i class="bi bi-plus-lg me-1"></i>Inscribirse</a>
  </div>
  <div class="row g-3 mb-5">
    <?php
    $eventos = [
      [
        'tipo' => 'Conferencia',
        'nombre' => 'IA & Futuro Tech',
        'fecha' => '15 Feb 2025',
        'hora' => '10:00 am',
        'lugar' => 'Bogota',
        'ponente' => 'Dra. Carolina Martinez',
        'descripcion' => 'Exploracion de las ultimas tendencias en inteligencia artificial y su impacto en la industria tecnologica.',
        'cupo' => 200
      ],
      [
        'tipo' => 'Taller',
        'nombre' => 'Workshop React',
        'fecha' => '22 Feb 2025',
        'hora' => '2:00 pm',
        'lugar' => 'Medellin',
        'ponente' => 'Ing. Andres Perez',
        'descripcion' => 'Taller practico de desarrollo frontend con React 19, hooks avanzados y Next.js.',
        'cupo' => 50
      ],
      [
        'tipo' => 'Hackathon',
        'nombre' => 'Hack4Climate',
        'fecha' => '1 Mar 2025',
        'hora' => '8:00 am',
        'lugar' => 'Cali',
        'ponente' => 'Equipo GreenTech',
        'descripcion' => 'Competencia de 48 horas para crear soluciones tecnologicas contra el cambio climatico.',
        'cupo' => 100
      ],
      [
        'tipo' => 'Conferencia',
        'nombre' => 'DevOps Summit',
        'fecha' => '10 Mar 2025',
        'hora' => '9:30 am',
        'lugar' => 'Online',
        'ponente' => 'Ing. Laura Gutierrez',
        'descripcion' => 'Integracion continua, Kubernetes, Docker y las mejores practicas de infraestructura moderna.',
        'cupo' => 500
      ],
    ];
    foreach ($eventos as $ev):
      $bc = $ev['tipo']==='Conferencia' ? 'badge-conf' : ($ev['tipo']==='Taller' ? 'badge-taller' : 'badge-hack');
      $icon = $ev['tipo']==='Conferencia' ? 'bi-mic-fill' : ($ev['tipo']==='Taller' ? 'bi-tools' : 'bi-code-square');
    ?>
    <div class="col-sm-6 col-md-3">
      <div class="card h-100 p-3 event-card">
        <div class="d-flex justify-content-between align-items-start mb-2">
          <span class="badge <?= $bc ?> px-2 py-1"><i class="<?= $icon ?> me-1"></i><?= $ev['tipo'] ?></span>
          <small class="text-muted"><i class="bi bi-people-fill me-1"></i><?= $ev['cupo'] ?> cupos</small>
        </div>
        <h6 class="fw-bold mb-1"><?= $ev['nombre'] ?></h6>
        <p class="text-muted small mb-2"><?= $ev['descripcion'] ?></p>
        <div class="mt-auto">
          <div class="d-flex align-items-center gap-2 small mb-1">
            <i class="bi bi-person-badge-fill" style="color:#6C3CE1"></i>
            <span class="text-muted"><?= $ev['ponente'] ?></span>
          </div>
          <div class="d-flex align-items-center gap-2 small">
            <i class="bi bi-calendar3" style="color:#E84393"></i>
            <span class="text-muted"><?= $ev['fecha'] ?> -- <?= $ev['hora'] ?></span>
          </div>
          <div class="d-flex align-items-center gap-2 small mt-1">
            <i class="bi bi-geo-alt-fill" style="color:#00D2D3"></i>
            <span class="text-muted"><?= $ev['lugar'] ?></span>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- CONTACTO -->
  <h2 class="h5 fw-semibold mb-3"><i class="bi bi-geo-alt-fill me-2" style="color:#6C3CE1"></i>Informacion de contacto</h2>
  <div class="card p-4 contact-card">
    <div class="row g-3">
      <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
        <div class="contact-icon" style="background:#6C3CE1"><i class="bi bi-envelope-fill text-white"></i></div>
        <span class="text-muted small">eventos@connectsystem.co</span>
      </div>
      <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
        <div class="contact-icon" style="background:#E84393"><i class="bi bi-telephone-fill text-white"></i></div>
        <span class="text-muted small">+57 601 123 4567</span>
      </div>
      <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
        <div class="contact-icon" style="background:#00D2D3"><i class="bi bi-geo-alt-fill text-white"></i></div>
        <span class="text-muted small">Bogota, Colombia</span>
      </div>
      <div class="col-sm-6 col-md-3 d-flex align-items-center gap-2">
        <div class="contact-icon" style="background:#FECA57"><i class="bi bi-globe2 text-white"></i></div>
        <span class="text-muted small">www.connectsystem.co</span>
      </div>
    </div>
  </div>
</section>

<footer>&copy; 2025 ConnectSystem -- Todos los derechos reservados</footer>
</body>
</html>
