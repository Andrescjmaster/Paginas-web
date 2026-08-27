// Funciones para manejar modales
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
    }
}

// Cerrar modal cuando se hace clic en el overlay
document.addEventListener('DOMContentLoaded', function() {
    const modalOverlays = document.querySelectorAll('.modal-overlay');
    
    modalOverlays.forEach(overlay => {
        const closeBtn = overlay.querySelector('.modal-close');
        
        // Cerrar con botón X
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                overlay.classList.remove('active');
            });
        }
        
        // Cerrar al hacer clic en el overlay (pero no en el contenido)
        overlay.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        });
    });
    
    // Cerrar modal con tecla Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modalOverlays.forEach(overlay => {
                overlay.classList.remove('active');
            });
        }
    });
});
