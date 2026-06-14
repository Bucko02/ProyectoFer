document.addEventListener("DOMContentLoaded", () => {
    
    // Configuración del observador de scroll
    const opciones = {
        root: null, // usa el viewport del navegador
        threshold: 0.15, // se activa cuando el 15% del elemento es visible
        rootMargin: "0px"
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            // Si el elemento entra en pantalla
            if (entry.isIntersecting) {
                entry.target.classList.add("revealed");
                // Opcional: deja de observar si solo quieres que se anime una vez
                observer.unobserve(entry.target); 
            }
        });
    };

    const observer = new IntersectionObserver(callback, opciones);

    // Buscamos todos los elementos que tengan la clase 'unreveal' para vigilarlos
    const elementosParaAnimar = document.querySelectorAll(".unreveal");
    elementosParaAnimar.forEach(elemento => observer.observe(elemento));
    
});