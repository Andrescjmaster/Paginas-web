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
    <title>Alquimia | Acompañamientos Coctelería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/Acompañamientos coctel.css">
    <link rel="stylesheet" href="../static/css/modales.css">
</head>
<body>

    <nav class="navegacion">
        <h1 class="logo">Alquimia</h1>
        <div class="menu">
            <a href="Home.php">Inicio</a>
            <a href="Barismo.php">Barismo</a>
            <a href="Cocteleria.php">Coctelería</a>
            <a href="Acompañamientos Barismo.php" class="active">Acompañamientos</a>
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
    
    <section class="seccion-filtros-premium text-center">
        <div class="filtros-container-premium">
            <a href="Acompañamientos Barismo.php" class="filtro-link-premium">Barismo</a>
            <a href="Acompañamientos coctel.php" class="filtro-link-premium activo">Coctelería</a>
        </div>
    </section>

    <main class="editorial-container-67">
        
        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/almendras romero y chile.jpg" alt="Almendras" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 01 — FRUTOS SECOS TOSTADOS</span>
                <h2 class="title-67">ALMENDRAS ROMERO Y CHILE <br><span>Picantes</span></h2>
                <p class="description-67">Almendras premium tostadas con hierbas aromáticas y toque de chile picante para Mojitos.</p>
                <a href="#" onclick="openModal('modal-almendras'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/Brochetas.jpg" alt="Brochetas" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 02 — CAMARONES A LA PARRILLA</span>
                <h2 class="title-67">BROCHETAS <br><span>Gourmet</span></h2>
                <p class="description-67">Camarones frescos marinados y asados en brochetas, compañía perfecta para Margaritas clásicas.</p>
                <a href="#" onclick="openModal('modal-brochetas'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/Carpaccio.jpg" alt="Carpaccio" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 03 — PESCADO CRUDO DELICADO</span>
                <h2 class="title-67">CARPACCIO <br><span>Premium</span></h2>
                <p class="description-67">Carpaccio de atún rojo laminado finamente con aliño elegante para Cosmopolitanos sofisticados.</p>
                <a href="#" onclick="openModal('modal-carpaccio'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/ceviche.jpg" alt="Ceviche" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 04 — MARISCOS CÍTRICOS</span>
                <h2 class="title-67">CEVICHE <br><span>Fresco</span></h2>
                <p class="description-67">Ceviche de camarones cocinado en cítricos naturales, aliado perfecto del Daiquiri helado.</p>
                <a href="#" onclick="openModal('modal-ceviche'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/pan tostado con salsa agridulce.jpg" alt="Pan Tostado" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 05 — PAN ARTESANAL TOSTADO</span>
                <h2 class="title-67">PAN TOSTADO SALSA AGRIDULCE <br><span>Exótico</span></h2>
                <p class="description-67">Pan casero tostado con salsa agridulce tropical, acompañamiento tropical para Piña Colada.</p>
                <a href="#" onclick="openModal('modal-pantostado'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos coctel/Pasta agridulce.jpg" alt="Pasta Agridulce" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 06 — PASTA GOURMET</span>
                <h2 class="title-67">PASTA AGRIDULCE <br><span>Intenso</span></h2>
                <p class="description-67">Pasta artesanal con vegetales confitados, complemento elegante para Manhattan Royal.</p>
                <a href="#" onclick="openModal('modal-pasta'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>
    </main>

    <!-- Modales para Acompañamientos Coctelería -->
    <div id="modal-almendras" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-almendras')">×</button>
            <h2 class="modal-title">Almendras Romero y Chile</h2>
            <p class="modal-description">Frutos secos tostados con aromas mediterráneos y toque de picante, aperitivo perfecto para cócteles tropicales.</p>
            <div class="modal-details">
                <h4>Ingredientes premium:</h4>
                <ul>
                    <li>Almendras españolas seleccionadas</li>
                    <li>Romero fresco de origen geográfico protegido</li>
                    <li>Chile rojo desecado (Guajillo o Puya)</li>
                    <li>Aceite de oliva virgen extra</li>
                    <li>Sal marina de Guérande</li>
                    <li>Miel de flores silvestres</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Proceso artesanal:</h4>
                <ul>
                    <li>Tostado lento a temperatura controlada</li>
                    <li>Marinado con aceite y especias por 24 horas</li>
                    <li>Tostado final con romero fresco</li>
                    <li>Enfriado lentamente para máximo sabor</li>
                    <li>Servir a temperatura ambiente en copa pequeña</li>
                    <li>Maridaje: Especialmente con Mojito y Daiquiri</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-brochetas" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-brochetas')">×</button>
            <h2 class="modal-title">Brochetas de Camarones Gourmet</h2>
            <p class="modal-description">Camarones frescos de captura selectiva, marinados y asados en brochetas de bambú natural.</p>
            <div class="modal-details">
                <h4>Ingredientes seleccionados:</h4>
                <ul>
                    <li>Camarones jumbo frescos (16-20 piezas/kilo)</li>
                    <li>Aceite de oliva premium virgen extra</li>
                    <li>Ajo fresco pelado</li>
                    <li>Limón fresco de huerto</li>
                    <li>Pimentón ahumado español</li>
                    <li>Perejil italiano fresco</li>
                    <li>Pimienta negra recién molida</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Técnica de preparación:</h4>
                <ul>
                    <li>Limpiar y desvenar camarones cuidadosamente</li>
                    <li>Marinar en aceite, ajo y limón 2 horas</li>
                    <li>Brochetas de bambú previamente remojadas</li>
                    <li>Asar a fuego alto, 2 minutos cada lado</li>
                    <li>Servir caliente recién sacado del fuego</li>
                    <li>Temperatura ideal: 65-70°C</li>
                    <li>Acompañar: Especialmente Margarita</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-carpaccio" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-carpaccio')">×</button>
            <h2 class="modal-title">Carpaccio de Atún Rojo</h2>
            <p class="modal-description">Atún rojo laminado finamente con técnica italiana, maridaje sofisticado para cócteles elegantes.</p>
            <div class="modal-details">
                <h4>Especificaciones del producto:</h4>
                <ul>
                    <li>Atún rojo fresco (Bluefin) de primera calidad</li>
                    <li>Origen: Mediterráneo o Atlántico Norte</li>
                    <li>Corte: Lomo sin grasa (parte más tierna)</li>
                    <li>Laminado: 2-3 mm de grosor uniforme</li>
                    <li>Aceite: Oliva virgen extra Italiano</li>
                    <li>Emulsión: Cítricos y especias aromáticas</li>
                    <li>Alcaparra: De Salina di Trapani</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación elegante:</h4>
                <ul>
                    <li>Servir en plato frío por mínimo 30 min</li>
                    <li>Láminas de atún dispuestas en espiral</li>
                    <li>Rociar aceite generosamente en último momento</li>
                    <li>Limón fresco exprimido ligeramente</li>
                    <li>Decoración: Microgreens y flores comestibles</li>
                    <li>Maridaje premium: Cosmopolitano</li>
                    <li>Porción: 60-80 gramos por persona</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-ceviche" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-ceviche')">×</button>
            <h2 class="modal-title">Ceviche de Camarones Fresco</h2>
            <p class="modal-description">Plato tradicional peruano donde los camarones se cocinan en jugos cítricos naturales, fresco y revitalizante.</p>
            <div class="modal-details">
                <h4>Ingredientes frescos:</h4>
                <ul>
                    <li>Camarones medianos (20-25 piezas/kilo)</li>
                    <li>Limón fresco exprimido (mínimo 2 piezas)</li>
                    <li>Cebolla morada cortada en juliana fina</li>
                    <li>Cilantro fresco picado</li>
                    <li>Aj amarillo desecado (picante peruano)</li>
                    <li>Camote hervido en cubos</li>
                    <li>Maíz choclo tostado</li>
                    <li>Sal marina y pimienta</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Proceso de cocción en jugo:</h4>
                <ul>
                    <li>Limpiar perfectamente los camarones</li>
                    <li>Verter jugo de limón fresco sobre camarones</li>
                    <li>Dejar reposar 15-20 minutos máximo</li>
                    <li>Añadir cebolla y cilantro</li>
                    <li>Sazonar con ají y sal marina</li>
                    <li>Servir inmediatamente, muy fresco</li>
                    <li>Maridaje: Daiquiri helado</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-pantostado" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-pantostado')">×</button>
            <h2 class="modal-title">Pan Tostado con Salsa Agridulce</h2>
            <p class="modal-description">Pan casero tostado crujiente cubierto con salsa tropical agridulce, acompañamiento tropical exótico.</p>
            <div class="modal-details">
                <h4>Componentes artesanales:</h4>
                <ul>
                    <li>Pan de masa madre casero</li>
                    <li>Piña natural deshidratada finamente</li>
                    <li>Chile rojo fresco en pequeños dados</li>
                    <li>Vinagre de caña envejecido</li>
                    <li>Azúcar de caña orgánica</li>
                    <li>Gengibre fresco rallado</li>
                    <li>Cúrcuma molida (toque dorado)</li>
                    <li>Cilantro fresco para decorar</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Elaboración:</h4>
                <ul>
                    <li>Pan casero cortado y tostado lentamente</li>
                    <li>Salsa: Piña + chile + azúcar a fuego lento</li>
                    <li>Cocción: 15 minutos hasta consistencia deseada</li>
                    <li>Generosa cobertura en pan aún caliente</li>
                    <li>Decoración: Cilantro fresco picado</li>
                    <li>Maridaje: Piña Colada (combinación perfecta)</li>
                    <li>Servir: Caliente, justo después de preparar</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-pasta" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-pasta')">×</button>
            <h2 class="modal-title">Pasta Agridulce Gourmet</h2>
            <p class="modal-description">Pasta artesanal con vegetales confitados en salsa agridulce, complemento elegante y robusteco.</p>
            <div class="modal-details">
                <h4>Ingredientes refinados:</h4>
                <ul>
                    <li>Pasta fresca egg (huevo) artesanal</li>
                    <li>Tomate rojo maduro italiano</li>
                    <li>Pimiento rojo y amarillo confitados</li>
                    <li>Cebolla blanca de Vidalia</li>
                    <li>Pasas de Corinto</li>
                    <li>Piñones tostados</li>
                    <li>Vinagre balsámico envejecido</li>
                    <li>Miel de flores silvestres</li>
                    <li>Ajo y perejil frescos</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Preparación gourmet:</h4>
                <ul>
                    <li>Cocción pasta: Al dente (9 minutos)</li>
                    <li>Salsa: Vegetales confitados lentamente</li>
                    <li>Balance agridulce: Vinagre + miel</li>
                    <li>Incorporación: Pasta + salsa a temperatura</li>
                    <li>Reposo: 2 minutos antes de servir</li>
                    <li>Porción: 80-100 gramos por servicio</li>
                    <li>Maridaje: Manhattan Royal perfecto</li>
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
