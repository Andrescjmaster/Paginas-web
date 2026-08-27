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
    <title>Coctelería | Tratamientos e Instrumentos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/CocteleriaTeI.css">
    <link rel="stylesheet" href="../static/css/modales.css">
</head>
<body>

    <nav class="navegacion">
        <h1 class="logo">Alquimia</h1>
        <div class="menu">
            <a href="Home.php">Inicio</a>
            <a href="Barismo.php">Barismo</a>
            <a href="Cocteleria.php" class="active">Coctelería</a>
            <a href="Acompañamientos Barismo.php">Acompañamientos</a>
            <a href="Contacto.php">Contactos</a>
            <?php if (isset($_SESSION['usuario_correo']) && $_SESSION['usuario_correo'] === 'andresfelipeaguasaco@gmail.com'): ?>
                <a href="Admin.php" style="color: #ffc107; font-weight: bold;"><i class="bi bi-shield-lock"></i> Admin</a>
            <?php endif; ?>
        </div>
       <div style="display:flex; align-items:center; gap:10px;">
    <span style="color:white;">
        <i class="bi bi-person-circle"></i> 
        <?php echo $_SESSION['usuario_nombre']; ?>
    </span>
    
    <a href="logout.php" class="btn btn-outline-light rounded-pill">
        Cerrar sesión
    </a>

    </div>
    </nav>
    
    <section class="seccion-filtros">
        <div class="filtros-container">
            <a href="Cocteleria.php" class="filtro-link">Recetas</a>
            <a href="CocteleriaTeI.php" class="filtro-link activo">Instrumentos</a>
        </div>
    </section>

    <main class="container-treatment">
        
        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">CUCHARA DE BAR</h3>
                <p class="treatment-text">Herramienta esencial para mezclar cócteles con precisión. Permite un control perfecto del hielo y los ingredientes en la preparación.</p>
                <a href="#" onclick="openModal('modal-cuchara'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/Cuchara de bar.jpg" alt="Cuchara de Bar" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/Hawtorne.jpg" alt="Hawthorne Strainer" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">HAWTORNE STRAINER</h3>
                <p class="treatment-text">Colador especializado con espiral metálica. Perfecto para colar cócteles agitados, reteniendo el hielo y los sólidos.</p>
                <a href="#" onclick="openModal('modal-hawtorne'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">MIXING GLASS</h3>
                <p class="treatment-text">Vaso de mezcla profesional para preparar cócteles stirred (removidos). Material de cristal de alta calidad que mantiene la temperatura ideal.</p>
                <a href="#" onclick="openModal('modal-mixxing'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/Mixxing glase.jpg" alt="Mixing Glass" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/Muddler.jpg" alt="Muddler" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">MUDDLER</h3>
                <p class="treatment-text">Mazo de madera o silicona para machacar hierbas y frutas. Fundamental para cócteles como Mojito, Caipirinha y Old Fashioned.</p>
                <a href="#" onclick="openModal('modal-muddler'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">SHAKER</h3>
                <p class="treatment-text">Coctelera profesional para agitar cócteles. Disponible en estilo Boston (dos piezas) o Cobbler (tres piezas con colador integrado).</p>
                <a href="#" onclick="openModal('modal-shaker'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/Shaker.jpg" alt="Shaker" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos coctel/shigger.jpg" alt="Jigger" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">JIGGER</h3>
                <p class="treatment-text">Medidor de doble cara para precisión en cantidades. Las medidas estándar son 1.5 oz (45 ml) y 0.5 oz (15 ml), aunque varían según el tipo.</p>
                <a href="#" onclick="openModal('modal-jigger'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

    </main>

    <!-- Modales para Instrumentos de Coctelería -->
    <div id="modal-cuchara" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-cuchara')">×</button>
            <h2 class="modal-title">Cuchara de Bar</h2>
            <p class="modal-description">Herramienta fundamental en la coctelería que permite mezclar ingredientes con precisión y elegancia. Esencial para cócteles tipo "stirred".</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li>Largo: 30-35 cm típicamente</li>
                    <li>Cabeza: Redondeada de 5-6 cm de diámetro</li>
                    <li>Material: Acero inoxidable pulido</li>
                    <li>Diseño: Espiral en el mango para mejor rotación</li>
                    <li>Peso: Equilibrado para control preciso</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li>Mezclar martinis, manhattans y negronis</li>
                    <li>Movimiento rotativo suave en el mixing glass</li>
                    <li>Tiempo de mezcla: 20-30 segundos</li>
                    <li>Se utiliza con mixing glass y hielo</li>
                    <li>Crea una dilución controlada ideal</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-hawtorne" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-hawtorne')">×</button>
            <h2 class="modal-title">Hawthorne Strainer</h2>
            <p class="modal-description">Colador profesional especializado en separar hielo y sólidos. Su espiral metálica se adapta perfectamente a cualquier copa o vaso.</p>
            <div class="modal-details">
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Espiral metálica ajustable</li>
                    <li>Mango ergonómico de acero inoxidable</li>
                    <li>Diámetro: 7-8 cm para adaptarse a diferentes vasos</li>
                    <li>Material: Acero inoxidable 18/10</li>
                    <li>Peso: Ligero pero resistente</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Función y aplicación:</h4>
                <ul>
                    <li>Colar cócteles shake (agitados)</li>
                    <li>Separar hielo de bebidas</li>
                    <li>Retener frutas, hierbas y otros sólidos</li>
                    <li>Compatible con cocteleras Boston</li>
                    <li>Presionar contra el borde del vaso para colar</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-mixxing" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-mixxing')">×</button>
            <h2 class="modal-title">Mixing Glass</h2>
            <p class="modal-description">Vaso de cristal especializado para preparar cócteles removidos. Mantiene la temperatura ideal y permite visualizar la preparación.</p>
            <div class="modal-details">
                <h4>Especificaciones técnicas:</h4>
                <ul>
                    <li>Capacidad: 400-500 ml</li>
                    <li>Material: Cristal borosilicato resistente</li>
                    <li>Forma: Cónica ligeramente ancha</li>
                    <li>Peso: Cristal de grosor medio para resistencia</li>
                    <li>Base: Plana y estable</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de uso:</h4>
                <ul>
                    <li>Llenar 2/3 con hielo de buena calidad</li>
                    <li>Verter ingredientes líquidos</li>
                    <li>Remover con cuchara de bar 20-30 segundos</li>
                    <li>Mantener movimiento constante y elegante</li>
                    <li>Colar sobre copa precalentada</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-muddler" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-muddler')">×</button>
            <h2 class="modal-title">Muddler</h2>
            <p class="modal-description">Mazo de coctelería para machacar hierbas y frutas. Libera aromas y sabores sin destruir completamente los ingredientes.</p>
            <div class="modal-details">
                <h4>Tipos y características:</h4>
                <ul>
                    <li>Material de cabeza: Madera, silicona o acero</li>
                    <li>Cabeza plana para mejor aplicación</li>
                    <li>Largo: 20-25 cm</li>
                    <li>Peso: 150-200 gramos para presión óptima</li>
                    <li>Mango antideslizante</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Cócteles que lo requieren:</h4>
                <ul>
                    <li>Mojito: machacar menta y limón ligeramente</li>
                    <li>Caipirinha: machacar lima y azúcar</li>
                    <li>Old Fashioned: machacar sugar cube y angostura</li>
                    <li>Sazerac: machacar anís con azúcar</li>
                    <li>Técnica: Movimiento suave, no violento</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-shaker" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-shaker')">×</button>
            <h2 class="modal-title">Shaker / Coctelera</h2>
            <p class="modal-description">Herramienta principal para agitar cócteles, enfriándolos y diluyéndolos de manera uniforme. La técnica más icónica de la coctelería.</p>
            <div class="modal-details">
                <h4>Tipos de cocteleras:</h4>
                <ul>
                    <li><strong>Boston:</strong> Dos piezas (vaso + lata), profesional y versátil</li>
                    <li><strong>Cobbler:</strong> Tres piezas con colador integrado, más fácil</li>
                    <li><strong>French:</strong> Estilo parisino con forma elegante</li>
                    <li>Capacidad típica: 500-700 ml</li>
                    <li>Material: Acero inoxidable o cristal</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de agitación:</h4>
                <ul>
                    <li>Llenar coctelera con hielo buena calidad</li>
                    <li>Verter ingredientes en orden</li>
                    <li>Cerrar herméticamente ambas partes</li>
                    <li>Agitar vigorosamente 10-15 segundos</li>
                    <li>Colar sobre copa enfriada</li>
                    <li>Movimiento: firme, constante y musical</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-jigger" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-jigger')">×</button>
            <h2 class="modal-title">Jigger / Medidor</h2>
            <p class="modal-description">Medidor de precisión esencial para la coctelería profesional. Garantiza consistencia y equilibrio en cada cóctel.</p>
            <div class="modal-details">
                <h4>Especificaciones:</h4>
                <ul>
                    <li>Forma: Dos copas conectadas (double jigger)</li>
                    <li>Medidas comunes: 1.5 oz / 0.5 oz (45 ml / 15 ml)</li>
                    <li>Otras medidas: 2 oz / 1 oz o 1 oz / 0.5 oz</li>
                    <li>Material: Acero inoxidable pulido</li>
                    <li>Mango ergonómico para fácil sujeción</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de medición:</h4>
                <ul>
                    <li>Sostener jigger con firmeza y nivelado</li>
                    <li>Llenar hasta el borde sin exceso</li>
                    <li>Verter lentamente en coctelera o mixing glass</li>
                    <li>Una medida = una cara del jigger</li>
                    <li>Medir en orden de potencia del licor</li>
                    <li>Precisión: diferencia entre buen y mal cóctel</li>
                </ul>
            </div>
        </div>
    </div>

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

    <script src="../static/js/modales.js"></script>
    <?php include 'chat_widget.php'; ?>
</body>
</html>
