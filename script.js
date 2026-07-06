// ...existing code...
document.addEventListener('DOMContentLoaded', function() {
    const items = Array.from(document.querySelectorAll('.carrusel-item'));
    const prevBtn = document.querySelector('.carrusel-control.prev');
    const nextBtn = document.querySelector('.carrusel-control.next');
    const indicadores = Array.from(document.querySelectorAll('.carrusel-indicadores .indicador'));
    const container = document.querySelector('.carrusel-container');
    if (!items.length || !container) return; // seguridad

    const ANIM_DURATION = 600; // ms (debe coincidir con CSS)
    let current = 0;
    let interval = null;
    let animating = false;

    // Inicializar estado
    items.forEach((it, i) => {
        it.classList.toggle('active', i === 0);
        it.style.opacity = i === 0 ? '1' : '0';
    });
    indicadores.forEach((ind, i) => ind.classList.toggle('active', i === 0));

    function updateIndicadores(idx) {
        indicadores.forEach((ind, i) => ind.classList.toggle('active', i === idx));
    }

    function showSlide(idx, direction = 'right') {
        if (animating || idx === current) return;
        animating = true;
        const prev = current;
        const next = idx;

        const prevItem = items[prev];
        const nextItem = items[next];

        // Limpiar clases anteriores
        items.forEach(it => it.classList.remove('slide-in-left','slide-in-right','slide-out-left','slide-out-right'));

        // Determinar clases de entrada/salida según dirección:
        // si vamos "right" (siguiente) -> nuevo entra desde la derecha, actual sale hacia la izquierda
        // si vamos "left" (anterior)  -> nuevo entra desde la izquierda, actual sale hacia la derecha
        if (direction === 'right') {
            prevItem.classList.add('slide-out-left');
            nextItem.classList.add('slide-in-right');
        } else {
            prevItem.classList.add('slide-out-right');
            nextItem.classList.add('slide-in-left');
        }

        // Preparar opacidades para transición
        nextItem.style.opacity = '1';

        // Esperar a que termine la animación
        setTimeout(() => {
            // dejar solo el nuevo como activo
            items.forEach(it => {
                it.classList.remove('active');
                it.style.opacity = '0';
            });
            nextItem.classList.add('active');
            nextItem.style.opacity = '1';

            // limpiar clases de animación
            items.forEach(it => it.classList.remove('slide-in-left','slide-in-right','slide-out-left','slide-out-right'));

            current = next;
            updateIndicadores(current);
            animating = false;
        }, ANIM_DURATION);
    }

    function nextSlide() {
        const idx = (current + 1) % items.length;
        showSlide(idx, 'right');
    }
    function prevSlide() {
        const idx = (current - 1 + items.length) % items.length;
        showSlide(idx, 'left');
    }

    // Eventos botones (con guardas)
    if (nextBtn) nextBtn.addEventListener('click', () => { stopAutoPlay(); nextSlide(); startAutoPlay(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { stopAutoPlay(); prevSlide(); startAutoPlay(); });

    // Indicadores
    indicadores.forEach((ind, i) => {
        ind.addEventListener('click', () => {
            if (i === current) return;
            const dir = i > current ? 'right' : 'left';
            showSlide(i, dir);
        });
    });

    // Autoplay
    function startAutoPlay() {
        stopAutoPlay();
        interval = setInterval(nextSlide, 5000);
    }
    function stopAutoPlay() {
        if (interval) { clearInterval(interval); interval = null; }
    }
    container.addEventListener('mouseenter', stopAutoPlay);
    container.addEventListener('mouseleave', startAutoPlay);

    // Soporte táctil simple (swipe)
    let touchStartX = 0;
    container.addEventListener('touchstart', (e) => {
        stopAutoPlay();
        touchStartX = e.touches[0].clientX;
    }, {passive: true});
    container.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].clientX;
        const diff = touchEndX - touchStartX;
        if (Math.abs(diff) > 50) {
            if (diff < 0) nextSlide(); else prevSlide();
        }
        startAutoPlay();
    });

    // Iniciar autoplay
    startAutoPlay();
});

// Validación existente del formulario
function validarFormulario() {
    const contrasena = document.getElementById('contrasena')?.value || '';
    const confirmarContrasena = document.getElementById('confirmarContrasena')?.value || '';
    const errorMensaje = document.getElementById('errorMensaje');
    if (!errorMensaje) return contrasena === confirmarContrasena;

    if (contrasena !== confirmarContrasena) {
      errorMensaje.textContent = "Las contraseñas no coinciden.";
      return false; // evita el envío del formulario
    }

    errorMensaje.textContent = ""; // limpia el mensaje si todo está bien
    return true;
}





