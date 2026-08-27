<?php
session_start();
/*
if (!isset($_SESSION['usuario_id'])) {
    header("Location: Login.php");
    exit();
}
    */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alquimia</title>
    <link rel="stylesheet" href="../static/css/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body>

<nav class="navegacion">
        <h1 class="logo" style="margin: 0 8px;">Alquimia</h1>
        <div class="menu">
            <a href="Home.php" class="active">Inicio</a>
            <a href="Barismo.php">Barismo</a>
            <a href="Cocteleria.php">Coctelería</a>
            <a href="Acompañamientos Barismo.php">Acompañamientos</a>
            <a href="Contacto.php">Contactos</a>
            
            <?php if (isset($_SESSION['usuario_correo']) && $_SESSION['usuario_correo'] === 'andresfelipeaguasaco@gmail.com'): ?>
                <a href="Admin.php" style="color: #ffc107; font-weight: bold;"><i class="bi bi-shield-lock"></i> Admin</a>
            <?php endif; ?>
        </div>

        <div style="display:flex; align-items:center; gap:10px;">
    <span style="color:white;">
        <i class="bi bi-person-circle"></i> 
<?php echo htmlspecialchars($_SESSION['usuario_nombre'] ?? 'Invitado'); ?>    </span>
    
    <a href="logout.php" class="btn btn-outline-light rounded-pill">
        Cerrar sesión
    </a>

    </div>
</nav>

    <section class="seccion-hero">
        <div class="contenedor-hero">
            <p>El arte de transformar elementos puros en experiencias extraordinarias. Somos un refugio botánico donde la precisión del barismo y la creatividad se fusionan para elevar tus sentidos.</p>
        </div>
    </section>

    <section class="seccion-info">
        <div class="bebida-contenedor izq">
            <img src="../static/img/Coctel.png" alt="Bebida Izquierda" class="bebida-img">
        </div>       
        
        <div class="texto-central">
            <h2>¿Por qué escogernos?</h2>
            <p class="resaltado">Aquí encontrarás las mejores recetas en barismo y coctelería, 
                también aprenderás las técnicas y herramientas de cada mundo, 
                vuélvete un experto en el maravilloso arte de la alquimia.</p>
            <ul class="lista-beneficios">
                <li><strong>Transparencia Creativa:</strong> Te enseñamos el "cómo" detrás de la barra. 
                Compartimos nuestras recetas exclusivas, las herramientas profesionales que utilizamos y 
                 las técnicas de extracción y maceración que nos definen.</li>
                <li><strong>Comunidad de aprendizaje:</strong> Queremos que lleves la experiencia de la cueva
                a tu casa. Nuestra plataforma está diseñada para que entusiastas y profesionales perfeccionen
                su arte junto a nosotros.</li>
            </ul>
        </div>
        
        <div class="bebida-contenedor der">
            <img src="../static/img/Cafe.png" alt="Bebida Derecha" class="bebida-img">
        </div>
    </section>

    <section class="seccion-galeria">
        <input type="radio" name="slider" id="c1" class="radio-btn">
        <input type="radio" name="slider" id="c2" checked class="radio-btn">
        <input type="radio" name="slider" id="c3" class="radio-btn">

        <div class="contenedor-carrusel">
            <label for="c1" class="tarjeta t1">
    <div class="tarjeta-inner">
        <div class="tarjeta-front">
            <img src="../static/img/Postre.png" alt="Postre">
            <div class="etiqueta">Postres</div>
        </div>
        <div class="tarjeta-back">
            <h3>Dulce Tentación</h3>
            <p>Acompañamientos artesanales diseñados para resaltar cada nota de tu bebida.</p>
        </div>
    </div>
</label>

<label for="c2" class="tarjeta t2">
    <div class="tarjeta-inner">
        <div class="tarjeta-front">
            <img src="../static/img/Barismo.png" alt="Barismo">
            <div class="etiqueta">Barismo</div>
        </div>
        <div class="tarjeta-back">
            <h3>Arte en Café</h3>
            <p>Técnicas de extracción precisas y granos de origen seleccionados botánicamente.</p>
        </div>
    </div>
</label>

<label for="c3" class="tarjeta t3">
    <div class="tarjeta-inner">
        <div class="tarjeta-front">
            <img src="../static/img/Cocteleria.png" alt="Coctelería">
            <div class="etiqueta">Coctelería</div>
        </div>
        <div class="tarjeta-back">
            <h3>Alquimia Espiritual</h3>
            <p>Cocteles de autor donde las hierbas y elixires crean mezclas inolvidables.</p>
        </div>
    </div>
</label>   
        </div>
        <div class="indicadores">
            <label for="c1" class="punto p1"></label>
            <label for="c2" class="punto p2"></label>
            <label for="c3" class="punto p3"></label>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>Alquimia 2026 | Todos los derechos reservados.</p>
            <div class="social-links">
                <a href="https://www.instagram.com/
                .bift5" target="_blank" rel="noopener noreferrer" class="social-link instagram" aria-label="Instagram">
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
