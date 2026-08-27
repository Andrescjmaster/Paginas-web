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
    <title>Alquimia | Acompañamientos Barismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/Acompañamientos barismo.css">
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
            <a href="Acompañamientos Barismo.php" class="filtro-link-premium activo">Barismo</a>
            <a href="Acompañamientos coctel.php" class="filtro-link-premium">Coctelería</a>
        </div>
    </section>

    <main class="editorial-container-67">
        
        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/Arandanos.jpg" alt="Arándanos" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 01 — FRUTAS FRESCAS</span>
                <h2 class="title-67">ARÁNDANOS <br><span>Naturales</span></h2>
                <p class="description-67">Frutas silvestres frescas y antioxidantes que complementan perfectamente la acidez del café.</p>
                <a href="#" onclick="openModal('modal-arandanos'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/Galletas.jpg" alt="Galletas" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 02 — PASTELERÍA ARTESANAL</span>
                <h2 class="title-67">GALLETAS <br><span>Crujientes</span></h2>
                <p class="description-67">Galletas artesanales elaboradas con mantequilla de calidad y ingredientes premium.</p>
                <a href="#" onclick="openModal('modal-galletas'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/marshmallows.jpg" alt="Marshmallows" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 03 — DULCES SUAVES</span>
                <h2 class="title-67">MARSHMALLOWS <br><span>Caseros</span></h2>
                <p class="description-67">Nubes de espuma dulce caseras que se derriten en la boca, perfectas para cafés calientes.</p>
                <a href="#" onclick="openModal('modal-marshmallows'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/Queso brie.jpg" alt="Queso Brie" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 04 — QUESOS GOURMET</span>
                <h2 class="title-67">QUESO BRIE <br><span>Cremoso</span></h2>
                <p class="description-67">Queso francés cremoso con corteza blanca que contrasta elegantemente con bebidas de café intenso.</p>
                <a href="#" onclick="openModal('modal-queso'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/tarta frutos rojos.jpg" alt="Tarta Frutos Rojos" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67">
                <span class="step-67">N° 05 — POSTRES FINOS</span>
                <h2 class="title-67">TARTA FRUTOS ROJOS <br><span>Delicada</span></h2>
                <p class="description-67">Tarta gourmet con crema pastelera y frambuesas frescas que complementa lattes y cappuccinos.</p>
                <a href="#" onclick="openModal('modal-tarta'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>

        <div class="product-row-67 d-flex align-items-center flex-row-reverse">
            <div class="product-visual-67">
                <div class="water-sphere-67">
                    <img src="../static/img/Acompañamientos barismo/Trufas.jpg" alt="Trufas de Chocolate" class="main-img-67">
                </div>
            </div>
            <div class="product-info-67 text-end">
                <span class="step-67">N° 06 — CHOCOLATE PREMIUM</span>
                <h2 class="title-67">TRUFAS CHOCOLATE <br><span>Oscuro</span></h2>
                <p class="description-67">Trufas de chocolate belga que hacen una pareja perfecta con cualquier café specialty.</p>
                <a href="#" onclick="openModal('modal-trufas'); return false;" class="btn-explore-67">DESCUBRIR RECETA</a>
            </div>
        </div>
    </main>

    <!-- Modales para Acompañamientos Barismo -->
    <div id="modal-arandanos" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-arandanos')">×</button>
            <h2 class="modal-title">Arándanos Frescos</h2>
            <p class="modal-description">Frutas silvestres naturales, ricas en antioxidantes que complementan la acidez del café con notas frescas.</p>
            <div class="modal-details">
                <h4>Características nutritivas:</h4>
                <ul>
                    <li>Origen: Arbustos silvestres europeos</li>
                    <li>Vitamina C: Refuerza sistema inmunológico</li>
                    <li>Antioxidantes: Ricos en antocianinas</li>
                    <li>Fibra: Favorece digestión junto al café</li>
                    <li>Bajo en calorías: Aproximadamente 57 kcal por 100g</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Sugerencias de maridaje:</h4>
                <ul>
                    <li>Con Cappuccino: Contraste de sabores</li>
                    <li>Con Flat White: Notas frescas integradas</li>
                    <li>Con Latte: Dulzura compensada</li>
                    <li>Presentación: En plato pequeño a un lado</li>
                    <li>Consejo: Acompañar con agua fresca</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-galletas" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-galletas')">×</button>
            <h2 class="modal-title">Galletas Artesanales Crujientes</h2>
            <p class="modal-description">Galletas elaboradas diariamente con mantequilla premium y técnicas tradicionales de repostería.</p>
            <div class="modal-details">
                <h4>Ingredientes principales:</h4>
                <ul>
                    <li>Harina de trigo selecta</li>
                    <li>Mantequilla francesa de calidad superior</li>
                    <li>Azúcar de caña puro</li>
                    <li>Huevos frescos de granja</li>
                    <li>Vainilla natural de Madagascar</li>
                    <li>Sal marina fina</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Tipos de galletas disponibles:</h4>
                <ul>
                    <li>Galletas de mantequilla: Clásicas y crujientes</li>
                    <li>Galletas con avellana: Toque de frutos secos</li>
                    <li>Galletas de chocolate: Para café intenso</li>
                    <li>Galletas de limón: Con espresso suave</li>
                    <li>Recomendación: 2-3 piezas por café</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-marshmallows" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-marshmallows')">×</button>
            <h2 class="modal-title">Marshmallows Caseros</h2>
            <p class="modal-description">Nubes de espuma dulce elaboradas artesanalmente que se derriten sobre el café caliente.</p>
            <div class="modal-details">
                <h4>Proceso de elaboración:</h4>
                <ul>
                    <li>Gelatina pura: Base estructural</li>
                    <li>Clara de huevo: Proporciona espuma</li>
                    <li>Azúcar: Dulzura controlada</li>
                    <li>Glucosa: Brillo y consistencia</li>
                    <li>Fécula de maíz: Acabado final</li>
                    <li>Esencias naturales: Vanilla, café o frutas</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Sugerencias de servicio:</h4>
                <ul>
                    <li>Con Cappuccino caliente: Se derriten levemente</li>
                    <li>Con Moca Coffee: Complemento perfecto</li>
                    <li>Con Viennois: Alternativa a la crema batida</li>
                    <li>Cantidad: 2-3 piezas pequeñas por taza</li>
                    <li>Efecto visual: Blanco sobre espuma marrón</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-queso" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-queso')">×</button>
            <h2 class="modal-title">Queso Brie Francés Cremoso</h2>
            <p class="modal-description">Queso de origen francés con denominación de origen controlada, cremoso y elegante.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li>Origen: Región de Île-de-France, Francia</li>
                    <li>Leche: De vaca pasteurizada</li>
                    <li>Maduración: 4-6 semanas</li>
                    <li>Costra: Blanca, hongos nobles</li>
                    <li>Textura: Cremosa, casi líquida en el centro</li>
                    <li>Sabor: Cremoso, con notas terrosas suaves</li>
                    <li>Porcentaje de grasa: 50%</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Maridaje con café:</h4>
                <ul>
                    <li>Con Espresso: Contraste elegante</li>
                    <li>Con Macchiato: Balance de intensidades</li>
                    <li>Con Americano: Complemento sobrio</li>
                    <li>Presentación: 30-40 gramos en tabla</li>
                    <li>Temperatura: Sacar 15 min antes de servir</li>
                    <li>Acompañamiento: Pan tostado crujiente</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-tarta" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-tarta')">×</button>
            <h2 class="modal-title">Tarta de Frutos Rojos Delicada</h2>
            <p class="modal-description">Postre gourmet con base de bizcocho, crema pastelera y frambuesas frescas premium.</p>
            <div class="modal-details">
                <h4>Componentes de la tarta:</h4>
                <ul>
                    <li>Base: Bizcocho casero mantecado</li>
                    <li>Primera capa: Crema pastelera francesa</li>
                    <li>Relleno: Frambuesas frescas silvestres</li>
                    <li>Cobertura: Glaseado de espejo de frambuesa</li>
                    <li>Decoración: Hojas de menta fresca</li>
                    <li>Acabado: Polvo de azúcar glas fino</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Experiencia de degustación:</h4>
                <ul>
                    <li>Con Latte: Armonía perfecta</li>
                    <li>Con Cappuccino: Equilibrio de sabores</li>
                    <li>Con Flat White: Complemento sedoso</li>
                    <li>Porción: 80-100 gramos por servicio</li>
                    <li>Temperatura: Ligeramente frío (12-15°C)</li>
                    <li>Presentación: En plato postre elegante</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-trufas" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-trufas')">×</button>
            <h2 class="modal-title">Trufas de Chocolate Belga</h2>
            <p class="modal-description">Bombones gourmet de chocolate belga con rellenos sofisticados y acabados artesanales.</p>
            <div class="modal-details">
                <h4>Variedad de sabores:</h4>
                <ul>
                    <li>Chocolate oscuro 70%: Cacao intenso y puro</li>
                    <li>Chocolate con ganache: Centro cremoso</li>
                    <li>Trufa de café: Con café tostado premium</li>
                    <li>Trufa de azahar: Notas florales delicadas</li>
                    <li>Trufa de licor: Finales sofisticados</li>
                    <li>Recubrimiento: Cacao en polvo o virutas</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Maridaje premium con café:</h4>
                <ul>
                    <li>Con Espresso: Intensidad complementaria</li>
                    <li>Con Moca Coffee: Sinergia de chocolate y café</li>
                    <li>Con Americano: Elegancia sin competencia</li>
                    <li>Con Viennois: Doblete de chocolate</li>
                    <li>Presentación: En bandeja de papel decorativo</li>
                    <li>Cantidad: 2-3 piezas por servicio</li>
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
