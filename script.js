// Seleccionamos el botón por su id
const botonTema = document.getElementById('btn-tema');

// Función que alterna el modo noche
botonTema.addEventListener('click', () => {
    // Alterna la clase 'modo-noche' en el body
    document.body.classList.toggle('modo-noche');

    // Cambia el texto del botón según el estado
    if (document.body.classList.contains('modo-noche')) {
        botonTema.textContent = 'Modo Día';
    } else {
        botonTema.textContent = 'Modo Noche';
    }
});