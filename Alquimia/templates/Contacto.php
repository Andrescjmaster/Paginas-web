<?php
session_start();

/*if (!isset($_SESSION['usuario_id'])) {
    header("Location: Login.php");
    exit();
}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Alquimia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../static/css/Contacto.css">
</head>
<body>
    <!-- Navegación -->
    <nav class="navegacion">
        <h1 class="logo">Alquimia</h1>
        <div class="menu">
            <a href="Home.php">Inicio</a>
            <a href="Barismo.php">Barismo</a>
            <a href="Cocteleria.php">Coctelería</a>
            <a href="Acompañamientos Barismo.php">Acompañamientos</a>
            <a href="Contacto.php" class="active">Contactos</a>
            <?php if (isset($_SESSION['usuario_correo']) && $_SESSION['usuario_correo'] === 'andresfelipeaguasaco@gmail.com'): ?>
                <a href="Admin.php" style="color: #ffc107; font-weight: bold;"><i class="bi bi-shield-lock"></i> Admin</a>
            <?php endif; ?>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
    <span style="color:white;">
        <i class="bi bi-person-circle"></i> 
<?php echo htmlspecialchars($_SESSION['usuario_nombre'] ?? 'Invitado'); ?>    </span>
    </span>
    
    <a href="logout.php" class="btn btn-outline-light rounded-pill">
        Cerrar sesión
    </a>

    </div>
    </nav>

    <!-- Sección de Contactos -->
    <section class="seccion-contactos">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="titulo-contactanos">CONTACTANOS</h2>
                </div>
            </div>

            <div class="row g-5">
                <!-- Columna 1: Información de Contacto -->
                <div class="col-lg-3 col-md-6">
                    <div class="bloque-contacto">
                        <h3>Redes Sociales</h3>
                        <p>Instagram: @Alquimios</p>
                        <p>Facebook: @Alquimiaweb</p>
                        <p>TikTok: @Alquimiasweb</p>
                    </div>

                    <div class="bloque-contacto mt-4">
                        <h3>Teléfonos</h3>
                        <p>+57 321 4319033</p>
                        <p>+57 322 8766062</p>
                    </div>

                    <div class="bloque-contacto mt-4">
                        <h3>Correos</h3>
                        <p>alquimia13032024@gmail.com</p>
                    </div>
                </div>

                <!-- Columna 2: Desarrollador -->
                <div class="col-lg-3 col-md-6">
                    <div class="columna-perfil">
                        <h3 class="text-center mb-4">Desarrollador:</h3>
                        <div class="foto-perfil mx-auto">
                            <img src="../static/img/Diseñador.png" alt="Andres Felipe Aguasaco">
                        </div>
                        <div class="datos-perfil text-center mt-3">
                            <p class="nombre">Andres Felipe Moreno Aguasaco</p>
                            <p class="cargo">Ingeniero de Sistemas</p>
                        </div>
                    </div>
                </div>

                <!-- Columna 3: Diseñadora -->
                <div class="col-lg-3 col-md-6">
                    <div class="columna-perfil">
                        <h3 class="text-center mb-4">Diseñadora:</h3>
                        <div class="foto-perfil mx-auto">
                            <img src="../static/img/Diseñadora.png" alt="Karen Daniela Rodriguez">
                        </div>
                        <div class="datos-perfil text-center mt-3">
                            <p class="nombre">Karen Daniela Rodriguez Gutierrez</p>
                            <p class="cargo">Comunicadora social</p>
                        </div>
                    </div>
                </div>

                <!-- Columna 4: Ubicación -->
                <div class="col-lg-3 col-md-6">
                    <div class="columna-mapa-container">
                        <h3 class="text-center mb-4">Ubicación:</h3>
                        <div class="contenedor-mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.171481293333!2d-74.09354728984611!3d4.740246995215032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84f0e580f3f5%3A0xa6ea081e8b31752a!2zQ3JhLiA5OGIgIyAxNDAtMTQsIFN1YmEsIEJvZ290w6EsIEQuQy4sIEJvZ290w6EsIEJvZ290w6EsIEQuQy4!5e0!3m2!1ses!2sco!4v1776986053092!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                   
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nueva fila para Misión y Visión -->
            <div class="row g-5 mt-5">
                <div class="col-lg-6">
                    <div class="bloque-contacto">
                        <h3>Misión</h3>
                        <p>Nuestra misión es transformar elementos puros en experiencias extraordinarias a través del arte del barismo y la coctelería, educando e inspirando a nuestros clientes para que se conviertan en expertos en el maravilloso arte de la alquimia.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bloque-contacto">
                        <h3>Visión</h3>
                        <p>Ser el refugio botánico líder donde la precisión, la creatividad y la comunidad se fusionan para elevar los sentidos de las personas en todo el mundo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>Alquimia 2026 | Todos los derechos reservados.</p>
            <div class="social-links">
                <a href="https://www.instagram.com/andrew.bift5" target="_blank" rel="noopener noreferrer" class="social-link instagram" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M12 7.2a4.8 4.8 0 104.8 4.8A4.81 4.81 0 0012 7.2zm0 7.9a3.1 3.1 0 113.1-3.1 3.11 3.11 0 01-3.1 3.1zm4.95-7.9a1.12 1.12 0 11-1.12-1.12 1.12 1.12 0 011.12 1.12z"/>
                        <path d="M17.5 2.5H6.5A4 4 0 002.5 6.5v9A4 4 0 006.5 19.5h11a4 4 0 004-4v-9a4 4 0 00-4-4zm2.5 13a2.5 2.5 0 01-2.5 2.5h-11a2.5 2.5 0 01-2.5-2.5v-9a2.5 2.5 0 012.5-2.5h11a2.5 2.5 0 012.5 2.5z"/>
                    </svg>
                </a>
                
                <a href="https://wa.me/3214319033" target="_blank" rel="noopener noreferrer" class="social-link whatsapp" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.149-.672.149s-.771.967-.945 1.166c-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.654-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.15-.172.2-.297.3-.496.099-.199.05-.373-.025-.522-.075-.149-.672-1.612-.92-2.207-.242-.579-.487-.5-.672-.51l-.573-.01c-.199 0-.522.075-.795.373s-1.04 1.016-1.04 2.479 1.064 2.876 1.213 3.074c.149.199 2.095 3.2 5.076 4.487.709.306 1.261.489 1.692.627.71.226 1.356.194 1.867.118.569-.085 1.758-.719 2.006-1.412.248-.694.248-1.29.173-1.412-.074-.123-.273-.199-.57-.347z"/>
                        <path d="M12 2C6.486 2 2 6.485 2 12.001c0 2.11.626 4.068 1.707 5.717L2 22l4.516-1.597A9.93 9.93 0 0012 22c5.514 0 10-4.486 10-9.999C22 6.486 17.514 2 12 2zm0 18.165c-1.496 0-2.955-.405-4.23-1.17l-.303-.18-2.678.947.9-2.617-.197-.314A7.994 7.994 0 014.995 12.001c0-4.414 3.58-7.999 7.998-7.999 4.415 0 7.997 3.585 7.997 7.999 0 4.414-3.582 7.999-7.997 7.999z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/kdanny_1202" target="_blank" rel="noopener noreferrer" class="social-link instagram" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M12 7.2a4.8 4.8 0 104.8 4.8A4.81 4.81 0 0012 7.2zm0 7.9a3.1 3.1 0 113.1-3.1 3.11 3.11 0 01-3.1 3.1zm4.95-7.9a1.12 1.12 0 11-1.12-1.12 1.12 1.12 0 011.12 1.12z"/>
                        <path d="M17.5 2.5H6.5A4 4 0 002.5 6.5v9A4 4 0 006.5 19.5h11a4 4 0 004-4v-9a4 4 0 00-4-4zm2.5 13a2.5 2.5 0 01-2.5 2.5h-11a2.5 2.5 0 01-2.5-2.5v-9a2.5 2.5 0 012.5-2.5h11a2.5 2.5 0 012.5 2.5z"/>
                    </svg>
                </a>
                
                <a href="https://wa.me/3228766062" target="_blank" rel="noopener noreferrer" class="social-link whatsapp" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.149-.672.149s-.771.967-.945 1.166c-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.654-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.15-.172.2-.297.3-.496.099-.199.05-.373-.025-.522-.075-.149-.672-1.612-.92-2.207-.242-.579-.487-.5-.672-.51l-.573-.01c-.199 0-.522.075-.795.373s-1.04 1.016-1.04 2.479 1.064 2.876 1.213 3.074c.149.199 2.095 3.2 5.076 4.487.709.306 1.261.489 1.692.627.71.226 1.356.194 1.867.118.569-.085 1.758-.719 2.006-1.412.248-.694.248-1.29.173-1.412-.074-.123-.273-.199-.57-.347z"/>
                        <path d="M12 2C6.486 2 2 6.485 2 12.001c0 2.11.626 4.068 1.707 5.717L2 22l4.516-1.597A9.93 9.93 0 0012 22c5.514 0 10-4.486 10-9.999C22 6.486 17.514 2 12 2zm0 18.165c-1.496 0-2.955-.405-4.23-1.17l-.303-.18-2.678.947.9-2.617-.197-.314A7.994 7.994 0 014.995 12.001c0-4.414 3.58-7.999 7.998-7.999 4.415 0 7.997 3.585 7.997 7.999 0 4.414-3.582 7.999-7.997 7.999z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'chat_widget.php'; ?>
</body>
</html>
