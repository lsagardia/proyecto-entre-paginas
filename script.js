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
    const botonMenu = document.getElementById('btn-menu');
     const menuNav = document.getElementById('menu-nav');
     botonMenu.addEventListener('click', () => {
    menuNav.classList.toggle('abierto');
});
const formularioContacto=document.querySelector("#form-contacto");
const avisoContacto=document.querySelector("#aviso-contacto");

function revisarContacto(event){
    event.preventDefault();
    const nombre= document.querySelector("#nombre").value;
    const correo=document.querySelector("#correo").value;

    if(nombre===""){
        avisoContacto.textContent="Falta tu nombre";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("aviso-exito");
    }else if (correo.includes("@")===false){
        avisoContacto.textContent="Ese correo no parece correo le falta el @";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("aviso-exito");
    }else{
        avisoContacto.textContent="contacto recibido";
        avisoContacto.classList.add("aviso-exito");
        avisoContacto.classList.remove("error");
    }
}
   formularioContacto.addEventListener("submit",revisarContacto);