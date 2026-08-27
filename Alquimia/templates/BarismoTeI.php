<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barismo | Tratamientos e Instrumentos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/css/BarismoTeI.css">
    <link rel="stylesheet" href="../static/css/modales.css">
</head>
<body>

    <nav class="navegacion">
        <h1 class="logo">Alquimia</h1>
        <div class="menu">
            <a href="Home.php">Inicio</a>
            <a href="Barismo.php"class="active">Barismo</a>
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
    
    <section class="seccion-filtros">
        <div class="filtros-container">
            <a href="Barismo.php" class="filtro-link">Recetas</a>
            <a href="BarismoTeI.php" class="filtro-link activo">Instrumentos</a>
        </div>
    </section>

    <main class="container-treatment">
        
        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">PORTAFILTROS</h3>
                <p class="treatment-text">Corazón del barismo profesional. Extrae espresso mediante presión de 9 bares, creando la base de todos nuestros cafés.</p>
                <a href="#" onclick="openModal('modal-espresso'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/portafiltro.jpg" alt="Máquina de Espresso" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/Molinillo de cafe.jpg" alt="Molinillo" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">MOLINILLO DE CAFE</h3>
                <p class="treatment-text">Muele los granos de café fresco a la granulometría perfecta. Crucial para extraer el mejor sabor del espresso.</p>
                <a href="#" onclick="openModal('modal-grinder'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">JARRA DE VAPOR</h3>
                <p class="treatment-text">Calienta y vaporiza la leche para crear microespuma sedosa. Técnica fundamental para cappuccinos y lattes.</p>
                <a href="#" onclick="openModal('modal-wand'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/Jarra de vapor.jpg" alt="Varilla de Vapor" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/tampper.jpg" alt="Tamper" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">TAMPER</h3>
                <p class="treatment-text">Compacta el café molido en el portafiltro. La presión correcta es vital para una extracción uniforme y equilibrada.</p>
                <a href="#" onclick="openModal('modal-tamper'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

        <div class="treatment-row">
            <div class="treatment-info shadow-blue">
                <h3 class="treatment-title">HERRAMIENTA WDT</h3>
                <p class="treatment-text">Distribuidor de agujas que rompe grumos en el café molido, asegurando una densidad uniforme antes del prensado.</p>
                <a href="#" onclick="openModal('modal-wdt'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/WDT.jpg" alt="WDT Tool" class="drink-img">
            </div>
        </div>

        <div class="treatment-row reverse">
            <div class="treatment-image">
                <img src="../static/img/Instrumentos barismo/Termometro.jpg" alt="Balanza" class="drink-img">
            </div>
            <div class="treatment-info shadow-blue-inv">
                <h3 class="treatment-title">TERMOMETRO DIGITAL</h3>
                <p class="treatment-text">Mide con exactitud la temperatura de la leche y el agua. Garantiza consistencia y previene quemar las bebidas.</p>
                <a href="#" onclick="openModal('modal-scales'); return false;" class="btn-shop">VER MÉTODO</a>
            </div>
        </div>

    </main>

    <div id="modal-espresso" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-espresso')">×</button>
            <h2 class="modal-title">Portafiltros y Canastas</h2>
            <p class="modal-description">El portafiltro es el recipiente con mango que sostiene la canasta metálica (filtro) donde se deposita el café molido. Es la conexión directa entre el barista y la máquina de espresso.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Diámetro comercial:</strong> Típicamente de 58mm, el estándar para máquinas profesionales, aunque existen de 54mm o 53mm.</li>
                    <li><strong>Tipos de diseño:</strong> "Naked" o sin fondo (ideal para diagnosticar extracciones) y tradicionales de una o dos salidas.</li>
                    <li><strong>Material:</strong> Latón cromado de alta resistencia o acero inoxidable macizo para una óptima retención térmica.</li>
                    <li><strong>Canastas de precisión:</strong> Filtros microperforados con láser (ej. VST o IMS) que garantizan un flujo de agua perfectamente simétrico.</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Diagnóstico visual:</strong> Usar un portafiltro sin fondo permite ver si hay "channeling" (canalización) o chorros disparejos.</li>
                    <li><strong>Mantenimiento de temperatura:</strong> Debe mantenerse siempre encajado en la máquina caliente antes de preparar un café para no provocar un choque térmico.</li>
                    <li><strong>Limpieza (Knock-out):</strong> Técnica de golpeo en la caja "knockbox" para desechar la pastilla de café (puck) en un solo movimiento seco.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-grinder" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-grinder')">×</button>
            <h2 class="modal-title">Molinillo de Café Profesional</h2>
            <p class="modal-description">Considerado por muchos expertos como una herramienta incluso más importante que la propia máquina de espresso. Determina la superficie de contacto del café con el agua, afectando la extracción, el cuerpo y el dulzor.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Tipos de Muelas (Burrs):</strong> Planas (resaltan la claridad y acidez del café) o Cónicas (resaltan el cuerpo y la textura). Suelen ser de acero templado o titanio (64mm a 83mm+).</li>
                    <li><strong>Ajuste micrométrico:</strong> Permite cambios diminutos en la distancia entre las muelas ("stepless") para lograr el tiempo de extracción exacto.</li>
                    <li><strong>Baja retención:</strong> Sistemas diseñados para que queden menos de 0.1g de café molido atrapado en el interior, garantizando frescura.</li>
                    <li><strong>Estilos:</strong> "On-demand" (con tolva para flujo continuo de trabajo) o "Single Dose" (para pesar y moler cada dosis individualmente).</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Dialing-in (Calibración):</strong> Proceso diario de afinar la molienda (más fina o más gruesa) según la humedad ambiental y los días de tueste del grano.</li>
                    <li><strong>Purga:</strong> Descartar unos gramos de café por la mañana para eliminar los restos oxidados del día anterior.</li>
                    <li><strong>Mantenimiento preventivo:</strong> Uso de cepillos especiales, aspiradoras y pastillas limpiadoras para remover aceites rancios acumulados en las muelas.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-wand" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-wand')">×</button>
            <h2 class="modal-title">Jarra de Vapor (Pitcher)</h2>
            <p class="modal-description">Jarra metálica especialmente diseñada en conjunto con la lanza de vapor de la máquina para emulsionar la leche, crear microespuma y permitir el vertido de Latte Art.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Capacidades estándar:</strong> 350ml (12oz) para bebidas pequeñas, 600ml (20oz) para lattes grandes, y 900ml (32oz) para múltiples servicios.</li>
                    <li><strong>Diseño del pico (Spout):</strong> Picos anchos y redondeados para figuras clásicas (corazones, tulipanes) o picos afilados y finos para diseños complejos (cisnes, rosetas detalladas).</li>
                    <li><strong>Material y acabados:</strong> Acero inoxidable de grado alimenticio. Pueden incluir revestimientos de teflón para evitar que la leche se pegue al calentarse.</li>
                    <li><strong>Ergonomía:</strong> Mangos angulados o diseños sin mango (handleless) forrados en cuero o silicona para mayor control táctil.</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Fase de aireación (Stretching):</strong> Inyectar aire en la leche fría bajando ligeramente la jarra hasta escuchar un sonido de "rasgado" suave.</li>
                    <li><strong>Fase de texturización (Rolling):</strong> Sumergir ligeramente la punta de la lanza para crear un vórtice que rompe las burbujas grandes, creando una crema densa y brillante.</li>
                    <li><strong>Técnica de vertido:</strong> Control de la altura, el caudal y el movimiento de la muñeca (wiggle) para crear contrastes de color en la taza.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-tamper" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-tamper')">×</button>
            <h2 class="modal-title">Tamper (Prensador)</h2>
            <p class="modal-description">Herramienta manual esencial utilizada para nivelar y compactar la cama de café molido dentro del portafiltro, creando la resistencia necesaria para que el agua presurizada extraiga el espresso correctamente.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Diámetros de precisión:</strong> Modernamente se utilizan diámetros de 58.4mm a 58.5mm para cubrir hasta el borde de la canasta y evitar canalización lateral ("donut extraction").</li>
                    <li><strong>Tipos de base:</strong> Completamente plana (la más recomendada en barismo moderno) o ligeramente convexa (diseño más tradicional).</li>
                    <li><strong>Tampers calibrados:</strong> Modelos avanzados con resortes internos que aseguran que siempre se aplique exactamente la misma presión (ej. 15 kg a 20 kg) independientemente del barista.</li>
                    <li><strong>Materiales:</strong> Base sólida de acero inoxidable para mayor peso y mangos ergonómicos de madera, aluminio o resina.</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Postura ergonómica:</strong> Formar un ángulo de 90 grados con el codo y usar el peso del cuerpo, no solo la muñeca, para prevenir lesiones (RSI).</li>
                    <li><strong>Nivelación (Leveling):</strong> Asegurar que la pastilla de café quede perfectamente horizontal; un tampado inclinado causará sobre-extracción de un lado y sub-extracción del otro.</li>
                    <li><strong>Presión firme y única:</strong> Se requiere presionar hasta que el café deje de ceder. No es necesario golpear el portafiltro (evita romper la pastilla).</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-wdt" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-wdt')">×</button>
            <h2 class="modal-title">Herramienta WDT</h2>
            <p class="modal-description">WDT (Weiss Distribution Technique) es un accesorio revolucionario en el café de especialidad. Utiliza finas agujas para romper grumos microscópicos y homogeneizar la densidad del café antes de compactarlo.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Grosor de las agujas:</strong> Crucial que midan entre 0.25mm y 0.40mm. Agujas más gruesas desplazan demasiado café y crean surcos en lugar de deshacer grumos.</li>
                    <li><strong>Flexibilidad:</strong> Agujas de acero inoxidable flexible o agujas de acupuntura adaptadas para no rayar el fondo de las canastas de precisión.</li>
                    <li><strong>Configuración:</strong> Generalmente de 4 a 9 agujas distribuidas en un patrón circular u ovalado.</li>
                    <li><strong>Accesorios complementarios:</strong> Se suele usar junto con un embudo dosificador (Dosing Funnel) magnético para evitar derrames durante la mezcla.</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Deep WDT (Mezcla profunda):</strong> Llegar hasta el fondo de la canasta haciendo círculos concéntricos para asegurar que la parte inferior no tenga zonas densas.</li>
                    <li><strong>Raking (Peinado superficial):</strong> Movimientos ligeros en la superficie superior para nivelar visualmente el café antes de usar el tamper.</li>
                    <li><strong>Resultados en taza:</strong> Reduce drásticamente la astringencia, incrementa el porcentaje de extracción (EY) y produce espressos mucho más dulces y balanceados.</li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal-scales" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal('modal-scales')">×</button>
            <h2 class="modal-title">Termómetro Digital</h2>
            <p class="modal-description">Instrumento de medición térmica indispensable para el control de calidad. Garantiza que la leche alcance su punto máximo de dulzor natural sin quemar sus proteínas, y que el agua esté en el rango ideal.</p>
            <div class="modal-details">
                <h4>Características técnicas:</h4>
                <ul>
                    <li><strong>Velocidad de lectura:</strong> Sensores digitales de alta respuesta que actualizan la temperatura en fracciones de segundo, evitando pasarse de temperatura por latencia.</li>
                    <li><strong>Sonda (Probe):</strong> Varilla de acero inoxidable de grado alimenticio, larga y delgada, diseñada para sumergirse profundamente en jarras grandes o pequeñas.</li>
                    <li><strong>Diseño de montaje:</strong> Clips de fijación ajustables para sostener el termómetro en el borde de la jarra de vapor, liberando las manos del barista.</li>
                    <li><strong>Calibración:</strong> Capacidad de recalibrarse en agua con hielo (0°C) para mantener una precisión milimétrica a lo largo del tiempo.</li>
                </ul>
            </div>
            <div class="modal-details">
                <h4>Usos y técnicas:</h4>
                <ul>
                    <li><strong>Texturización de leche:</strong> Detener la vaporización entre los 60°C y 65°C. Por encima de 70°C, la leche pierde su dulzor natural y adquiere sabor a "hervido".</li>
                    <li><strong>Control para filtrados:</strong> Verificar que el agua para métodos como V60 o Chemex esté entre 88°C y 94°C (dependiendo del nivel de tueste del café).</li>
                    <li><strong>Consistencia en la barra:</strong> Excelente herramienta para el entrenamiento de nuevos baristas hasta que desarrollen la memoria muscular y táctil del calor.</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>Alquimia 2026 | Todos los derechos reservados.</p>
            <div class="social-links">
                <a href="https://www.instagram.com/andrew.bift5" target="_blank" rel="noopener noreferrer" class="social-link instagram">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 7.2a4.8 4.8 0 104.8 4.8A4.81 4.81 0 0012 7.2zm0 7.9a3.1 3.1 0 113.1-3.1 3.11 3.11 0 01-3.1 3.1zm4.95-7.9a1.12 1.12 0 11-1.12-1.12 1.12 1.12 0 011.12 1.12z"/><path d="M17.5 2.5H6.5A4 4 0 002.5 6.5v9A4 4 0 006.5 19.5h11a4 4 0 004-4v-9a4 4 0 00-4-4zm2.5 13a2.5 2.5 0 01-2.5 2.5h-11a2.5 2.5 0 01-2.5-2.5v-9a2.5 2.5 0 012.5-2.5h11a2.5 2.5 0 012.5 2.5z"/></svg>
                </a>
                <a href="https://wa.me/3214319033" target="_blank" rel="noopener noreferrer" class="social-link whatsapp">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.149-.672.149s-.771.967-.945 1.166c-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.654-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.15-.172.2-.297.3-.496.099-.199.05-.373-.025-.522-.075-.149-.672-1.612-.92-2.207-.242-.579-.487-.5-.672-.51l-.573-.01c-.199 0-.522.075-.795.373s-1.04 1.016-1.04 2.479 1.064 2.876 1.213 3.074c.149.199 2.095 3.2 5.076 4.487.709.306 1.261.489 1.692.627.71.226 1.356.194 1.867.118.569-.085 1.758-.719 2.006-1.412.248-.694.248-1.29.173-1.412-.074-.123-.273-.199-.57-.347z"/><path d="M12 2C6.486 2 2 6.485 2 12.001c0 2.11.626 4.068 1.707 5.717L2 22l4.516-1.597A9.93 9.93 0 0012 22c5.514 0 10-4.486 10-9.999C22 6.486 17.514 2 12 2zm0 18.165c-1.496 0-2.955-.405-4.23-1.17l-.303-.18-2.678.947.9-2.617-.197-.314A7.994 7.994 0 014.995 12.001c0-4.414 3.58-7.999 7.998-7.999 4.415 0 7.997 3.585 7.997 7.999 0 4.414-3.582 7.999-7.997 7.999z"/></svg>
                </a>
                <a href="https://www.instagram.com/kdanny_1202" target="_blank" rel="noopener noreferrer" class="social-link instagram">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 7.2a4.8 4.8 0 104.8 4.8A4.81 4.81 0 0012 7.2zm0 7.9a3.1 3.1 0 113.1-3.1 3.11 3.11 0 01-3.1 3.1zm4.95-7.9a1.12 1.12 0 11-1.12-1.12 1.12 1.12 0 011.12 1.12z"/><path d="M17.5 2.5H6.5A4 4 0 002.5 6.5v9A4 4 0 006.5 19.5h11a4 4 0 004-4v-9a4 4 0 00-4-4zm2.5 13a2.5 2.5 0 01-2.5 2.5h-11a2.5 2.5 0 01-2.5-2.5v-9a2.5 2.5 0 012.5-2.5h11a2.5 2.5 0 012.5 2.5z"/></svg>
                </a>
                <a href="https://wa.me/3228766062" target="_blank" rel="noopener noreferrer" class="social-link whatsapp">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.149-.672.149s-.771.967-.945 1.166c-.173.199-.347.223-.644.075-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.654-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.15-.172.2-.297.3-.496.099-.199.05-.373-.025-.522-.075-.149-.672-1.612-.92-2.207-.242-.579-.487-.5-.672-.51l-.573-.01c-.199 0-.522.075-.795.373s-1.04 1.016-1.04 2.479 1.064 2.876 1.213 3.074c.149.199 2.095 3.2 5.076 4.487.709.306 1.261.489 1.692.627.71.226 1.356.194 1.867.118.569-.085 1.758-.719 2.006-1.412.248-.694.248-1.29.173-1.412-.074-.123-.273-.199-.57-.347z"/><path d="M12 2C6.486 2 2 6.485 2 12.001c0 2.11.626 4.068 1.707 5.717L2 22l4.516-1.597A9.93 9.93 0 0012 22c5.514 0 10-4.486 10-9.999C22 6.486 17.514 2 12 2zm0 18.165c-1.496 0-2.955-.405-4.23-1.17l-.303-.18-2.678.947.9-2.617-.197-.314A7.994 7.994 0 014.995 12.001c0-4.414 3.58-7.999 7.998-7.999 4.415 0 7.997 3.585 7.997 7.999 0 4.414-3.582 7.999-7.997 7.999z"/></svg>
                </a>
            </div>
        </div>
    </footer>

    <script src="../static/js/modales.js"></script>
    <?php include 'chat_widget.php'; ?>
</body>
</html>
