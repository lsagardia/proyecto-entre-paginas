   
const formularioTurno=document.querySelector("#form-turno");
const avisoTurno=document.querySelector("#aviso-turno");

function revisarTurno(event){
    const nombre= document.querySelector("#nombre").value;
    const correo=document.querySelector("#correo").value;
    const mascota=document.querySelector("#mascota").value;

    if(nombre===""){
         event.preventDefault();
        avisoTurno.textContent="Nos falta tu nombre y tu correo para darte el turno";
        avisoturno.classList.add("error");
        avisoTurno.classList.remove("aviso-exito");
    }else if (correo.includes("@")===false){
         event.preventDefault();
        avisoTurno.textContent="Revisa tu correo - le falta el arroba.";
        avisoTurno.classList.add("error");
        avisoTurno.classList.remove("aviso-exito");
    }else{
        avisoTurno.textContent = "Turno reservado - te atiende Linn Ibeth Sagardia Serrudo";
        avisoTurno.classList.add("exito");
        avisoTurno.classList.remove("error");
    }
}
   formularioTurno.addEventListener("submit",revisarTurno);