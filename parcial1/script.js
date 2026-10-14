document.addEventListener("DOMContentLoaded", function() {
    const boton = document.querySelector("#btn-confirmar");
    const mensaje = document.querySelector("#mensaje");

    boton.addEventListener("click", function() {
        mensaje.textContent = "Pedido confirmado te atiende [Sagardia Serrudo Linn Ibeth]";
        mensaje.classList.remove("oculto");
    });
});