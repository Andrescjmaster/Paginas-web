<?php
session_start();

/*if (!isset($_SESSION['usuario_id'])) {
    header("Location: Login.php");
    exit();
*/}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barismo Alquimia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/Barismo.css">
    <link rel="stylesheet" href="../static/css/modales.css">
</head>
<body>

    <nav class="navegacion">
        <h1 class="logo">Alquimia</h1>
        <div class="menu">
            <a href="Home.php">Inicio</a>
            <a href="Barismo.php" class="active">Barismo</a>
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
        <?php echo $_SESSION['usuario_nombre']; ?>
    </span>
    
    <a href="logout.php" class="btn btn-outline-light rounded-pill">
        Cerrar sesión
    </a>

    </div>
    </nav>
    
    <section class="seccion-filtros text-center py-3">
        <div class="filtros-container d-flex justify-content-center gap-3">
            <a href="Barismo.php" class="filtro-link activo">Recetas</a>
            <a href="BarismoTeI.php" class="filtro-link">Instrumentos</a>
        </div>
    </section>

    <main class="editorial-container-fluid">
        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Clásicos</span>
                <h2 class="editorial-title">Café Latte<span>Tropical</span></h2>
                <p class="editorial-desc">Espresso suave con leche vaporizada cremosa y un toque de aromas tropicales.</p>
                <a href="#" onclick="openModal('modal-latte'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-1">
                    <img src="../static/img/Barismo/cafe latte.jpg" alt="Café Latte" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Italiano</span>
                <h2 class="editorial-title">Cappuccino<span>Clásico</span></h2>
                <p class="editorial-desc">La proporción perfecta: espresso, leche vaporizada y espuma en equilibrio italiano puro.</p>
                <a href="#" onclick="openModal('modal-cappuccino'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-2">
                    <img src="../static/img/Barismo/cappuccino.jpg" alt="Cappuccino" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Moderno</span>
                <h2 class="editorial-title">Flat White<span>Sedoso</span></h2>
                <p class="editorial-desc">Microespuma fina y sedosa que envuelve el espresso con elegancia australiana.</p>
                <a href="#" onclick="openModal('modal-flatwhite'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-3">
                    <img src="../static/img/Barismo/Flat white.jpg" alt="Flat White" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Clásico</span>
                <h2 class="editorial-title">Macchiato<span>Marcado</span></h2>
                <p class="editorial-desc">Espresso "marcado" con una pequeña cantidad de leche vaporizada, manteniendo la intensidad del café.</p>
                <a href="#" onclick="openModal('modal-macchiato'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-1">
                    <img src="../static/img/Barismo/macchiato.jpg" alt="Macchiato" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Fusión</span>
                <h2 class="editorial-title">Moca Coffee<span>Chocolate</span></h2>
                <p class="editorial-desc">Café y chocolate en armonía perfecta, endulzado con leche vaporizada y un toque de cacao premium.</p>
                <a href="#" onclick="openModal('modal-moca'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-2">
                    <img src="../static/img/Barismo/Moca caffe.jpg" alt="Moca Coffee" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Clásico Europeo</span>
                <h2 class="editorial-title">Viennois<span>Crema</span></h2>
                <p class="editorial-desc">Café vienes elegante coronado con crema batida fresca y chocolate rallado fino.</p>
                <a href="#" onclick="openModal('modal-viennois'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-3">
                    <img src="../static/img/Barismo/Viennois caffe.jpg" alt="Viennois" class="cocktail-glass">
                </div>
            </div>
        </div>
    </main>


    <section class="acompañamientos-banner-elegant py-4 mt-4">
        <div class="row align-items-center g-0">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center text-side">
                <h2>¿Qué acompañaría un buen café?</h2>
                <p>Descubre nuestra selección artesanal de pasteles y acompañamientos diseñados para elevar tu experiencia.</p>
                <a href="Acompañamientos Barismo.html" class="boton-ver-mas-elegant">Ver acompañamientos</a>
            </div>
            <div class="col-md-6 image-side d-flex justify-content-center align-items-center">
                <div class="image-frame">
                    <img src="../static/img/AcompañamientoCoctel.png" alt="Acompañamiento" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Modales -->
    <div id="modal-latte" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-latte')">×</button>
            <h2 class="modal-title">Café Latte Tropical</h2>
            <p class="modal-description">Una bebida cremosa y suave que destaca la leche vaporizada como protagonista, con un fondo de espresso aromático.</p>
            <div class="modal-details">
                <h4>Ingredientes precisos:</h4>
                <ul>
                    <li>30 ml de espresso fresco</li>
                    <li>150 ml de leche vaporizada (65-75°C)</li>
                    <li>10 ml de microespuma fina</li>
                    <li>Toque de extracto de vainilla (opcional)</li>
                    <li>Canela o cacao en polvo para decorar</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de preparación:</h4>
                <ul>
                    <li>Extraer espresso doble en taza de 240 ml precalentada</li>
                    <li>Vaporizar leche: sumergir varilla 1/3 del trayecto</li>
                    <li>Crear remolino suave para integrar aire</li>
                    <li>Volumen final: leche a 65-75°C</li>
                    <li>Verter leche lentamente sobre espresso</li>
                    <li>Remate: capa fina de microespuma</li>
                    <li>Proporción ideal: 1 espresso : 3-4 leche</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-cappuccino" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-cappuccino')">×</button>
            <h2 class="modal-title">Cappuccino Clásico</h2>
            <p class="modal-description">La bebida italiana más emblemática. Perfecto equilibrio entre espresso, leche vaporizada y espuma cremosa.</p>
            <div class="modal-details">
                <h4>Ingredientes precisos:</h4>
                <ul>
                    <li>25 ml de espresso doble (2 shots)</li>
                    <li>75 ml de leche vaporizada</li>
                    <li>75 ml de microespuma densa</li>
                    <li>Cacao en polvo premium</li>
                    <li>Canela molida (opcional)</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica profesional:</h4>
                <ul>
                    <li>Taza de 150-180 ml pretemperada a 40°C</li>
                    <li>Espresso: 2 shots en la base</li>
                    <li>Vaporizar leche con varilla a 65°C</li>
                    <li>Crear espuma densa (grosor medio 5-8mm)</li>
                    <li>Verter leche primero, espuma al final</li>
                    <li>Proporción: 1/3 espresso, 1/3 leche, 1/3 espuma</li>
                    <li>Decorar: cacao fino en la crema</li>
                    <li>Temperatura final: 63-68°C</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-flatwhite" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-flatwhite')">×</button>
            <h2 class="modal-title">Flat White Sedoso</h2>
            <p class="modal-description">Procedente de Australia y Nueva Zelanda, destaca por su microespuma integrada que envuelve el café con sedosidad.</p>
            <div class="modal-details">
                <h4>Ingredientes específicos:</h4>
                <ul>
                    <li>30 ml de espresso doble fuerte</li>
                    <li>120 ml de leche entera fría (3-4°C)</li>
                    <li>Microespuma muy fina integrada</li>
                    <li>Decoración: latte art simple</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Diferencias clave:</h4>
                <ul>
                    <li>Mayor proporción de espresso que cappuccino (1:4 vs 1:4-5)</li>
                    <li>Leche más fría para vaporizar</li>
                    <li>Microespuma mucho más fina (1-2mm)</li>
                    <li>Espuma integrada, no separada</li>
                    <li>Sabor del café más presente</li>
                    <li>Textura: aterciopelada y suave</li>
                    <li>Temperatura final: 55-60°C</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-macchiato" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-macchiato')">×</button>
            <h2 class="modal-title">Macchiato Marcado</h2>
            <p class="modal-description">Espresso "marcado" con leche. Mantiene la intensidad del café como protagonista principal.</p>
            <div class="modal-details">
                <h4>Ingredientes necesarios:</h4>
                <ul>
                    <li>30 ml de espresso doble fuerte</li>
                    <li>15-20 ml de leche vaporizada</li>
                    <li>Pequeña cantidad de microespuma</li>
                    <li>Taza pequeña de 75-100 ml</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación exacta:</h4>
                <ul>
                    <li>Extraer espresso doble en taza precalentada</li>
                    <li>Vaporizar mínima cantidad de leche (15-20ml)</li>
                    <li>Espuma muy fina, apenas visible</li>
                    <li>Verter leche lentamente sobre espresso</li>
                    <li>Remate: pequeña capa de microespuma</li>
                    <li>Proporción: 2 partes espresso, 1 parte leche</li>
                    <li>Sabor fuerte del café debe predominar</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-moca" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-moca')">×</button>
            <h2 class="modal-title">Moca Coffee Chocolate</h2>
            <p class="modal-description">Fusión perfecta entre café y chocolate. Una bebida indulgente que combina lo mejor de ambos mundos.</p>
            <div class="modal-details">
                <h4>Ingredientes de calidad:</h4>
                <ul>
                    <li>25 ml de espresso doble</li>
                    <li>15 ml de chocolate premium líquido o polvo</li>
                    <li>100 ml de leche vaporizada</li>
                    <li>50 ml de microespuma de leche</li>
                    <li>Crema batida fresca (opcional)</li>
                    <li>Cacao en polvo para decorar</li>
                    <li>Virutas de chocolate oscuro</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de elaboración:</h4>
                <ul>
                    <li>Preparar chocolate derretido o mezclar en fondo</li>
                    <li>Extraer espresso doble sobre el chocolate</li>
                    <li>Remover para integrar bien</li>
                    <li>Vaporizar leche a 65-70°C</li>
                    <li>Verter leche vaporizada lentamente</li>
                    <li>Coronar con microespuma</li>
                    <li>Espolvorear cacao y virutas de chocolate</li>
                    <li>Opcional: añadir crema batida</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-viennois" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-viennois')">×</button>
            <h2 class="modal-title">Viennois Crema</h2>
            <p class="modal-description">Clásico europeo de origen austriaco. Café robusto coronado con crema batida y chocolate rallado finamente.</p>
            <div class="modal-details">
                <h4>Ingredientes elegantes:</h4>
                <ul>
                    <li>30-40 ml de espresso simple o doble</li>
                    <li>80 ml de agua caliente (si es americano)</li>
                    <li>100 ml de crema batida fresca</li>
                    <li>Chocolate rallado o virutas premium</li>
                    <li>Azúcar en polvo (opcional)</li>
                    <li>Canela molida (opcional)</li>
                    <li>Taza de porcelana fina</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación profesional:</h4>
                <ul>
                    <li>Preparar café americano o espresso simple</li>
                    <li>Usar agua a 90-95°C si es americano</li>
                    <li>Verter en taza de porcelana precalentada</li>
                    <li>Dejar enfriar ligeramente (5 segundos)</li>
                    <li>Batir crema hasta punto medio</li>
                    <li>Colocar cucharada de crema sobre el café</li>
                    <li>Espolvorear chocolate rallado fino</li>
                    <li>Presentar con cucharilla especial</li>
                    <li>Servir inmediatamente</li>
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
