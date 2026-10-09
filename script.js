// Seleccionamos el botón por su id
const botonTema = document.getElementById('btn-tema');

botonTema.addEventListener('click', () => {
    
    document.body.classList.toggle('modo-noche');

    
    if (document.body.classList.contains('modo-noche')) {
        botonTema.textContent = 'Modo Día';
    } else {
        botonTema.textContent = 'Modo Noche';
    }
});