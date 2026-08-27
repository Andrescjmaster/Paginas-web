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
    <title>Coctelería Alquimia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/Cocteleria.css">
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
    
    <section class="seccion-filtros text-center py-3">
        <div class="filtros-container d-flex justify-content-center gap-3">
            <a href="Cocteleria.php" class="filtro-link activo">Recetas</a>
            <a href="CocteleriaTeI.php" class="filtro-link">Instrumentos</a>
        </div>
    </section>

    <main class="editorial-container-fluid">
        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Recetas</span>
                <h2 class="editorial-title">Mojito<span>Tropical</span></h2>
                <p class="editorial-desc">Combinación fresca de ron blanco, menta, limón y azúcar.</p>
                <a href="#" onclick="openModal('modal-mojito'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-1">
                    <img src="../static/img/Coctel/Mojito.jpg" alt="Mojito" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Clásicos</span>
                <h2 class="editorial-title">Margarita<span>Clásica</span></h2>
                <p class="editorial-desc">Tequila premium, triple seco y jugo de limón fresco.</p>
                <a href="#" onclick="openModal('modal-margarita'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-2">
                    <img src="../static/img/Coctel/Margarita.jpg" alt="Margarita" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Elegancia</span>
                <h2 class="editorial-title">Cosmopolitano<span>Politan</span></h2>
                <p class="editorial-desc">Vodka y licor de arándanos con un toque de naranja.</p>
                <a href="#" onclick="openModal('modal-cosmopolitano'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-3">
                    <img src="../static/img/Coctel/Cosmo.jpg" alt="Cosmo" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Frío</span>
                <h2 class="editorial-title">Daiquiri<span>Helado</span></h2>
                <p class="editorial-desc">Ron blanco con limón fresco y azúcar.</p>
                <a href="#" onclick="openModal('modal-daiquiri'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-1">
                    <img src="../static/img/Coctel/Daiquiri.jpg" alt="Daiquiri" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center">
            <div class="text-section-fluid">
                <span class="tagline">Verano</span>
                <h2 class="editorial-title">Piña Colada<span>Colada</span></h2>
                <p class="editorial-desc">Ron, crema de coco y zumo de piña natural.</p>
                <a href="#" onclick="openModal('modal-pinocolada'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-2">
                    <img src="../static/img/Coctel/Piña colada.jpg" alt="Piña" class="cocktail-glass">
                </div>
            </div>
        </div>

        <div class="editorial-block-fluid d-flex align-items-center flex-row-reverse">
            <div class="text-section-fluid text-end">
                <span class="tagline">Fuerte</span>
                <h2 class="editorial-title">Manhattan<span>Royal</span></h2>
                <p class="editorial-desc">Whiskey, vermut rojo y angostura clásica.</p>
                <a href="#" onclick="openModal('modal-manhattan'); return false;" class="order-link">DETALLES —</a>
            </div>
            <div class="image-section-fluid">
                <div class="shape-bg shape-3">
                    <img src="../static/img/Coctel/Manhatan.jpg" alt="Manhattan" class="cocktail-glass">
                </div>
            </div>
        </div>
    </main>

    <!-- Modales para Cócteles -->
    <div id="modal-mojito" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-mojito')">×</button>
            <h2 class="modal-title">Mojito Tropical</h2>
            <p class="modal-description">Un clásico cubano refrescante que combina ron blanco, menta fresca, limón y azúcar en una bebida vibrante y tropical.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>45 ml de ron blanco</li>
                    <li>6-8 hojas de menta fresca</li>
                    <li>½ limón cortado en cuartos</li>
                    <li>2 cucharadas de azúcar blanca</li>
                    <li>Hielo picado</li>
                    <li>60 ml de agua con gas</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Colocar menta y limón en un vaso</li>
                    <li>Verter azúcar y hacer muddle suave</li>
                    <li>Llenar de hielo picado</li>
                    <li>Verter ron blanco</li>
                    <li>Completar con agua con gas</li>
                    <li>Remover y decorar con menta</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-margarita" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-margarita')">×</button>
            <h2 class="modal-title">Margarita Clásica</h2>
            <p class="modal-description">El cóctel mexicano más icónico, con un perfecto equilibrio entre tequila, triple seco y cítricos, terminado en sal.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>45 ml de tequila premium</li>
                    <li>20 ml de triple seco (Cointreau)</li>
                    <li>25 ml de jugo de limón fresco</li>
                    <li>15 ml de jarabe simple</li>
                    <li>Sal para la orilla</li>
                    <li>Hielo</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Preparar vaso con sal en la orilla</li>
                    <li>Agregar hielo en la coctelera</li>
                    <li>Verter todos los ingredientes</li>
                    <li>Agitar enérgicamente 10 segundos</li>
                    <li>Servir en vaso con hielo</li>
                    <li>Decorar con rodaja de limón</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-cosmopolitano" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-cosmopolitano')">×</button>
            <h2 class="modal-title">Cosmopolitano</h2>
            <p class="modal-description">Un cóctel elegante y sofisticado que combina vodka, licor de arándanos y cítricos en una bebida de color rosa vibrante.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>45 ml de vodka</li>
                    <li>20 ml de licor de arándanos (Cointreau)</li>
                    <li>25 ml de jugo de limón fresco</li>
                    <li>15 ml de jugo de arándano</li>
                    <li>Hielo</li>
                    <li>Cáscara de naranja</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Llenar coctelera con hielo</li>
                    <li>Verter vodka y licor de arándanos</li>
                    <li>Agregar jugos de limón y arándano</li>
                    <li>Agitar vigorosamente 10 segundos</li>
                    <li>Colar en copa martini enfriada</li>
                    <li>Decorar con cáscara de naranja</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-daiquiri" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-daiquiri')">×</button>
            <h2 class="modal-title">Daiquiri Helado</h2>
            <p class="modal-description">Un refrescante cóctel cubano que destaca la pureza del ron blanco, equilibrado con limón y azúcar en forma congelada.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>60 ml de ron blanco</li>
                    <li>30 ml de jugo de limón fresco</li>
                    <li>15 ml de jarabe simple</li>
                    <li>Hielo picado generoso</li>
                    <li>Rodaja de limón</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Llenar coctelera 3/4 con hielo</li>
                    <li>Verter ron, limón y jarabe</li>
                    <li>Agitar enérgicamente 10-15 segundos</li>
                    <li>Colar en vaso con hielo</li>
                    <li>Servir inmediatamente</li>
                    <li>Decorar con rodaja de limón</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-pinocolada" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-pinocolada')">×</button>
            <h2 class="modal-title">Piña Colada</h2>
            <p class="modal-description">Una bebida tropical y cremosa que combina ron, crema de coco y jugo de piña fresco, perfecta para días de playa.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>45 ml de ron blanco o dorado</li>
                    <li>90 ml de jugo de piña fresco</li>
                    <li>45 ml de crema de coco</li>
                    <li>Hielo picado</li>
                    <li>Rodaja y hoja de piña</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Agregar hielo a la licuadora</li>
                    <li>Verter ron, jugo de piña y crema de coco</li>
                    <li>Licuar hasta obtener consistencia cremosa</li>
                    <li>Servir en vaso con sombrilla</li>
                    <li>Decorar con rodaja y hoja de piña</li>
                    <li>Servir con pajita</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-manhattan" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-manhattan')">×</button>
            <h2 class="modal-title">Manhattan Royal</h2>
            <p class="modal-description">Un cóctel clásico y sofisticado de Nueva York que combina whiskey, vermut rojo y angostura en una bebida oscura y robusta.</p>
            <div class="modal-details">
                <h4>Ingredientes:</h4>
                <ul>
                    <li>60 ml de whiskey (Rye o Bourbon)</li>
                    <li>30 ml de vermut rojo</li>
                    <li>2-3 gotas de angostura</li>
                    <li>Hielo para mezclar</li>
                    <li>Cereza maraschino</li>
                    <li>Cáscara de naranja</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación:</h4>
                <ul>
                    <li>Llenar vaso mezclador con hielo</li>
                    <li>Verter whiskey y vermut rojo</li>
                    <li>Agregar gotas de angostura</li>
                    <li>Remover 30 segundos (no agitar)</li>
                    <li>Colar en copa martini enfriada</li>
                    <li>Decorar con cereza y cáscara de naranja</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="acompañamientos-banner-elegant py-4 mt-4">
        <div class="row align-items-center g-0">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center text-side">
                <h2>¿Qué acompañaría un buen cóctel?</h2>
                <p>Descubre nuestra selección artesanal de tapas y aperitivos diseñados para elevar tu experiencia.</p>
                <a href="Acompañamientos coctel.html" class="boton-ver-mas-elegant">Ver acompañamientos</a>
            </div>
            <div class="col-md-6 image-side d-flex justify-content-center align-items-center">
                <div class="image-frame">
                    <img src="../static/img/AcompañamientoCoctel.png" alt="Acompañamiento" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

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
