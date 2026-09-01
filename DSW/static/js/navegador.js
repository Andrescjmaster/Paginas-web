// navegador.js - INYECCIÓN UNIVERSAL SIN FETCH (funciona en file://)
// Copia exacta de templates/Navegador.html para que sea UNA sola fuente sin CORS
// Si editas Navegador.html, copia el <nav> aquí también (o avísame y lo sincronizo)

const NAVEGADOR_HTML = `
<nav class="navegador" id="navegadorMain">
  <a href="__HOME__" class="logo-dsw" aria-label="DSW Inicio"><span>D</span><span>S</span><span>W</span></a>
  <ul class="nav-links" id="navLinks">
    <li><a href="__HOME__" data-page="inicio">Inicio</a></li>
    <li><a href="__SOBRE__" data-page="sobre">Sobre<br>nosotros</a></li>
    <li><a href="__SERVICIOS__" data-page="servicios">Nuestros<br>servicios</a></li>
    <li><a href="#" data-page="aliados">Aliados<br>estratégicos</a></li>
    <li><a href="#" data-page="blog">Blog</a></li>
    <li><a href="__CONTACTO__" data-page="contacto">Contactanos</a></li>
  </ul>
  <button class="btn-hamburger" id="btnHamburger" aria-label="Menú"><span></span><span></span><span></span></button>
</nav>`;

document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("navegador-container");
  if (!container) return;

  // Detectar si estamos en raíz (index.html) o en templates/
  const inTemplates = window.location.pathname.includes("/templates/");
  const homeHref  = inTemplates ? "Home.html" : "templates/Home.html";
  const sobreHref = inTemplates ? "SobreNosotros.html" : "templates/SobreNosotros.html";
  const serviciosHref = inTemplates ? "Servicios.html" : "templates/Servicios.html";
  const contactoHref = inTemplates ? "Contacto.html" : "templates/Contacto.html";

  // Inyectar SIN fetch - funciona abriendo file:// directo
  container.innerHTML = NAVEGADOR_HTML
    .replaceAll("__HOME__", homeHref)
    .replaceAll("__SOBRE__", sobreHref)
    .replaceAll("__SERVICIOS__", serviciosHref)
    .replaceAll("__CONTACTO__", contactoHref);

  // Hamburguesa
  const btn = document.getElementById("btnHamburger");
  const links = document.getElementById("navLinks");
  const nav = document.getElementById("navegadorMain");
  if (btn && links) btn.addEventListener("click", () => links.classList.toggle("open"));

  // Marcar activo según página actual
  const file = window.location.pathname.split("/").pop() || "index.html";
  if (file === "index.html" || file === "Home.html" || file === "") {
    container.querySelector('[data-page="inicio"]')?.classList.add("active");
  } else if (file === "SobreNosotros.html") {
    container.querySelector('[data-page="sobre"]')?.classList.add("active");
  } else if (file === "Servicios.html") {
    container.querySelector('[data-page="servicios"]')?.classList.add("active");
  } else if (file === "Contacto.html") {
    container.querySelector('[data-page="contacto"]')?.classList.add("active");
  }

  // Sombra al hacer scroll
  if (nav) {
    window.addEventListener("scroll", () => {
      nav.classList.toggle("scrolled", window.scrollY > 40);
    });
  }
});
