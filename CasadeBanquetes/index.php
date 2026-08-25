<?php
require_once 'php/conexion.php';

$tipos_evento = [];
$result = $conn->query("SELECT * FROM tipos_evento");
while ($row = $result->fetch_assoc()) {
    $tipos_evento[] = $row;
}

$servicios = [];
$result = $conn->query("SELECT * FROM servicios");
while ($row = $result->fetch_assoc()) {
    $servicios[] = $row;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Banquetes Elsa de Torres Banquetes en Bogotá</title>
    <meta name="description" content="Organización de bodas, eventos empresariales y sociales en Bogotá. Casa de Banquetes Elsa de Torres, tradición y elegancia desde el corazón de Chapinero.">
    <meta name="keywords" content="banquetes en Bogotá, organización de bodas, eventos empresariales, salones de eventos Bogotá, catering Bogotá">
    <meta name="author" content="Casa de Banquetes Elsa de Torres">

    <meta property="og:title" content="Casa de Banquetes Elsa de Torres | Banquetes en Bogotá">
    <meta property="og:description" content="Celebramos tus momentos más especiales con la elegancia y calidez que mereces. Bodas, eventos empresariales y sociales.">
    <meta property="og:image" content="img/og-image.jpg">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

<!--WHATSAPP FLOTANTE-->
<a href="https://wa.me/573214319033?text=¡Hola!%20Quiero%20más%20información%20sobre%20sus%20servicios%20de%20banquetes." class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
    <i class="bi bi-whatsapp"></i>
    <span class="tooltip-text">¡Escríbenos por WhatsApp!</span>
</a>

<!--NAVBAR-->
<nav class="navbar navbar-expand-lg fixed-top" style="background:rgba(26,26,26,0.95)!important;">
    <div class="container">
        <a class="navbar-brand" href="#">CB <span style="color:var(--blanco)"></span> Elsa de Torres</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                <li class="nav-item"><a class="nav-link" href="#cotizador">Cotiza aquí</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--HERO-->
<section id="inicio" class="hero" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1a1a1a 100%);">
    <div class="hero-overlay"></div>
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;overflow:hidden;">
        <div style="width:100%;height:100%;background:url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1600&q=80') center/cover no-repeat;filter:brightness(0.4);"></div>
    </div>
    <div class="hero-content">
        <p class="hero-subtitle ">Tradición & Elegancia</p>
        <h1 class="hero-title ">Celebra la vida<br>con <span>estilo inolvidable</span></h1>
        <p class="hero-description ">Más de 20 años creando momentos mágicos en Bogotá. Cada evento es una historia única que merece ser contada con la mejor mesa, el mejor servicio y el corazón puesto en cada detalle.</p>
        <div class="">
            <a href="https://wa.me/573214319033?text=¡Hola!%20Quiero%20cotizar%20mi%20evento" class="btn-dorado me-3" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-whatsapp"></i> Cotiza tu evento
            </a>
            <a href="#servicios" class="btn-outline-dorado">Ver servicios</a>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Descubre más</span>
        <div class="mouse"></div>
    </div>
</section>

<!--STATS-->
<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-lg-3 mb-4 mb-lg-0 stat-item ">
                <h3>+20</h3>
                <p>Años de experiencia</p>
            </div>
            <div class="col-6 col-lg-3 mb-4 mb-lg-0 stat-item ">
                <h3>+500</h3>
                <p>Eventos realizados</p>
            </div>
            <div class="col-6 col-lg-3 stat-item ">
                <h3>+300</h3>
                <p>Parejas felices</p>
            </div>
            <div class="col-6 col-lg-3 stat-item ">
                <h3>100%</h3>
                <p>Recomendados</p>
            </div>
        </div>
    </div>
</section>

<!--SERVICIOS-->
<section id="servicios" class="section-padding">
    <div class="container">
        <div class="text-center mb-5 ">
            <p class="section-subtitle">Nuestros Servicios</p>
            <h2 class="section-title">Hacemos de tu evento<br>una experiencia inolvidable</h2>
            <div class="section-divider"></div>
            <p class="text-muted" style="max-width:600px;margin:0 auto;">Ya sea una boda de ensueño, un evento corporativo o una celebración íntima, tenemos la experiencia y los espacios para hacerlo realidad.</p>
        </div>
        <div class="row g-4">
            <?php
            $iconos = [1 => 'heart-fill', 2 => 'briefcase-fill', 3 => 'stars'];
            $btn_textos = [1 => 'Cotizar boda', 2 => 'Cotizar evento', 3 => 'Cotizar celebración'];
            $img_default = 'https://images.unsplash.com/photo-1519741497674-611481863552?w=600&q=80';
            foreach ($tipos_evento as $tipo):
            ?>
            <div class="col-lg-4 ">
                <div class="servicio-card">
                    <img src="<?php echo $tipo['imagen_url'] ?: $img_default; ?>" class="servicio-img card-img-top" alt="<?php echo $tipo['nombre']; ?>">
                    <div class="servicio-icon"><i class="bi bi-<?php echo $iconos[$tipo['id']] ?? 'heart-fill'; ?>"></i></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $tipo['nombre']; ?></h5>
                        <p class="card-text"><?php echo $tipo['descripcion']; ?></p>
                        <a href="#cotizador" class="btn-dorado btn-sm" style="padding:10px 25px;font-size:12px;"><?php echo $btn_textos[$tipo['id']] ?? 'Cotizar'; ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5 pt-4 border-top">
            <p class="section-subtitle">Precios base</p>
            <h3 class="section-title" style="font-size:28px;">Servicios adicionales por persona</h3>
            <div class="section-divider" style="margin-bottom:30px;"></div>
            <div class="row justify-content-center g-4">
                <?php foreach ($servicios as $s): ?>
                <div class="col-md-4">
                    <div class="servicio-card" style="padding:30px 20px;">
                        <h4 style="color:var(--dorado);font-size:22px;margin-bottom:10px;"><?php echo $s['nombre']; ?></h4>
                        <p class="text-muted" style="font-size:14px;min-height:40px;"><?php echo $s['descripcion']; ?></p>
                        <p style="font-size:28px;font-weight:700;color:var(--negro);margin:15px 0;">$<?php echo number_format($s['precio_base'], 0, ',', '.'); ?></p>
                        <p style="font-size:13px;color:#999;">por persona</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!--NOSOTROS-->
<section id="nosotros" class="nosotros-section section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 ">
                <p class="section-subtitle" style="color:var(--dorado);">Sobre Nosotros</p>
                <h2 class="section-title" style="color:var(--blanco);">Elsa de Torres<br>Un legado de elegancia</h2>
                <div class="section-divider-left" style="background:var(--dorado);"></div>
                <p class="nosotros-text">Desde hace más de dos décadas, <strong>Elsa de Torres</strong> ha sido sinónimo de excelencia en la organización de banquetes en Bogotá. Lo que comenzó como un sueño familiar se ha convertido en un referente de elegancia y calidez en cada celebración.</p>
                <p class="nosotros-text">Creemos firmemente que <strong>cada evento cuenta una historia única</strong>. Por eso, trabajamos mano a mano con cada cliente para entender sus sueños y convertirlos en una experiencia tangible, donde ningún detalle queda al azar. Nuestra filosofía es simple: <em>si no se hace con el corazón, no se hace</em>.</p>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="nosotros-valor">
                            <div class="nosotros-valor-icon"><i class="bi bi-hand-index-thumb"></i></div>
                            <div>
                                <h5>Atención Personalizada</h5>
                                <p>Te acompañamos en cada paso del proceso con dedicación exclusiva.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="nosotros-valor">
                            <div class="nosotros-valor-icon"><i class="bi bi-award"></i></div>
                            <div>
                                <h5>Calidad Garantizada</h5>
                                <p>Proveedores seleccionados y estándares que superan expectativas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div style="position:relative;">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80" alt="Salón de eventos" class="img-fluid rounded-4 shadow" style="width:100%;">
                    <div style="position:absolute;bottom:-20px;left:-20px;background:var(--dorado);padding:25px 35px;border-radius:15px;color:var(--negro);">
                        <h3 style="font-family:'Playfair Display',serif;font-weight:700;margin:0;font-size:28px;">+20</h3>
                        <p style="margin:0;font-size:13px;font-weight:600;">Años creando<br>momentos inolvidables</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--GALERIAS-->
<section id="galeria" class="section-padding">
    <div class="container">
        <div class="text-center mb-5 ">
            <p class="section-subtitle">Nuestros trabajos</p>
            <h2 class="section-title">Galería de momentos</h2>
            <div class="section-divider"></div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=600&q=80" alt="Decoración de boda">
                    <div class="galeria-overlay"><span>Bodas</span></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1555244162-803834f70033?w=600&q=80" alt="Catering">
                    <div class="galeria-overlay"><span>Catering</span></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1478147427282-58a87a120781?w=600&q=80" alt="Salón decorado">
                    <div class="galeria-overlay"><span>Salones</span></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=600&q=80" alt="Evento empresarial">
                    <div class="galeria-overlay"><span>Empresariales</span></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=600&q=80" alt="Celebración social">
                    <div class="galeria-overlay"><span>Sociales</span></div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="galeria-img">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=600&q=80" alt="Decoración con flores">
                    <div class="galeria-overlay"><span>Decoración</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--TESTIMONIOS-->
<section class="section-padding" style="background:var(--beige);">
    <div class="container">
        <div class="text-center mb-5 ">
            <p class="section-subtitle">Testimonios</p>
            <h2 class="section-title">Lo que dicen nuestros clientes</h2>
            <div class="section-divider"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 ">
                <div class="testimonio-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"La boda de nuestros sueños. Cada invitado quedó maravillado con la decoración y el banquete. Elsa y su equipo hicieron de nuestro día algo mágico."</p>
                    <div class="cliente-nombre">María José & Andrés</div>
                    <div class="cliente-evento">Boda - Diciembre 2025</div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="testimonio-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"Organizamos nuestra convención anual con ellos y superaron todas las expectativas. Profesionalismo, puntualidad y una calidad en el servicio impecable."</p>
                    <div class="cliente-nombre">Grupo Empresarial XYZ</div>
                    <div class="cliente-evento">Evento Corporativo - Marzo 2026</div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="testimonio-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <p>"Celebramos los 15 años de mi hija y fue perfecto. La atención personalizada marcó la diferencia. Recomiendo a Elsa de Torres con los ojos cerrados."</p>
                    <div class="cliente-nombre">Carmenza R.</div>
                    <div class="cliente-evento">Celebración Social - Febrero 2026</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--COTIZADOR-->
<section id="cotizador" class="cotizador-section section-padding">
    <div class="container">
        <div class="text-center mb-5 ">
            <p class="section-subtitle">Calcula tu presupuesto</p>
            <h2 class="section-title">Cotiza tu evento en segundos</h2>
            <div class="section-divider"></div>
            <p class="text-muted" style="max-width:550px;margin:0 auto;">Completa el formulario y recibe una cotización personalizada al instante por WhatsApp. ¡Sin compromisos!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form class="cotizador-form " action="php/procesar_cotizacion.php" method="POST">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="321 431 9033" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com">
                        </div>
                        <div class="col-md-6">
                            <label for="tipo_evento" class="form-label">Tipo de evento</label>
                            <select class="form-select" id="tipo_evento" name="tipo_evento" required>
                                <option value="">Selecciona una opción</option>
                                <option value="1">Boda</option>
                                <option value="2">Evento Empresarial</option>
                                <option value="3">Celebración Social</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="num_invitados" class="form-label">Número de invitados</label>
                            <input type="number" class="form-control" id="num_invitados" name="num_invitados" min="10" placeholder="Ej: 100" required>
                        </div>
                        <div class="col-md-6">
                            <label for="fecha_evento" class="form-label">Fecha del evento (aproximada)</label>
                            <input type="date" class="form-control" id="fecha_evento" name="fecha_evento">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Servicios adicionales que deseas</label>
                            <div class="row g-3 mt-1">
                                <?php foreach ($servicios as $s): ?>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="<?php echo strtolower($s['nombre']); ?>" name="<?php echo strtolower($s['nombre']); ?>" value="1">
                                        <label class="form-check-label" for="<?php echo strtolower($s['nombre']); ?>">
                                            <strong><?php echo $s['nombre']; ?></strong><br>
                                            <small class="text-muted"><?php echo $s['descripcion']; ?></small>
                                        </label>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label">Mensaje o comentarios adicionales</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Cuéntanos más sobre tu evento..."></textarea>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn-dorado" style="border:none;">
                                <i class="bi bi-whatsapp"></i> Obtener cotización por WhatsApp
                            </button>
                            <p class="text-muted mt-3" style="font-size:12px;">Recibirás el presupuesto estimado directamente en tu WhatsApp sin ningún compromiso.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--UBICACION-->
<section class="section-padding" style="background:var(--blanco);">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 ">
                <p class="section-subtitle">Visítanos</p>
                <h2 class="section-title">Estamos en el corazón de Bogotá</h2>
                <div class="section-divider-left"></div>
                <p class="mb-4" style="font-size:16px;line-height:1.8;">Nuestro salón principal está ubicado en una de las zonas más exclusivas de Chapinero, con fácil acceso y parqueadero privado.</p>
                <div class="d-flex align-items-center mb-3">
                    <div style="width:45px;height:45px;background:var(--dorado);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-right:15px;color:var(--negro);font-size:18px;">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <strong>Carrera 16 #68-46</strong><br>
                        <span class="text-muted">Chapinero, Bogotá</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div style="width:45px;height:45px;background:var(--dorado);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-right:15px;color:var(--negro);font-size:18px;">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <strong>+57 321 4319033</strong><br>
                        <span class="text-muted">Lun - Sáb: 9:00 AM - 7:00 PM</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div style="width:45px;height:45px;background:var(--dorado);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-right:15px;color:var(--negro);font-size:18px;">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <strong>contacto@elsadetorres.com</strong><br>
                        <span class="text-muted">Respuesta en menos de 24 horas</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div style="border-radius:15px;overflow:hidden;box-shadow:0 10px 40px rgba(0,0,0,0.1);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.688404439076!2d-74.062255!3d4.658689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a3c5b5b5b5b%3A0x5b5b5b5b5b5b5b5b!2sCra.%2016%20%2368-46%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER-->
<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="footer-brand mb-3">Casa de Banquetes<br>Elsa de Torres</div>
                <p style="font-size:14px;line-height:1.8;">Tradición, elegancia y atención personalizada para hacer de tu evento un recuerdo inolvidable.</p>
                <div class="mt-3">
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5>Enlaces</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#inicio">Inicio</a></li>
                    <li class="mb-2"><a href="#servicios">Servicios</a></li>
                    <li class="mb-2"><a href="#nosotros">Nosotros</a></li>
                    <li class="mb-2"><a href="#galeria">Galería</a></li>
                    <li class="mb-2"><a href="#cotizador">Cotizar</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Servicios</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#cotizador">Bodas</a></li>
                    <li class="mb-2"><a href="#cotizador">Eventos Empresariales</a></li>
                    <li class="mb-2"><a href="#cotizador">Celebraciones Sociales</a></li>
                    <li class="mb-2"><a href="#cotizador">Catering</a></li>
                    <li class="mb-2"><a href="#cotizador">Decoración</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>Carrera 16 #68-46, Bogotá</li>
                    <li class="mb-2"><i class="bi bi-telephone me-2"></i>+57 321 4319033</li>
                    <li class="mb-2"><i class="bi bi-envelope me-2"></i>contacto@elsadetorres.com</li>
                    <li class="mb-2"><i class="bi bi-clock me-2"></i>Lun - Sáb: 9AM - 7PM</li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="row">
            <div class="col text-center footer-bottom">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Casa de Banquetes Elsa de Torres. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
