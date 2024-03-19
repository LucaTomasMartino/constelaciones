const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
});

document.addEventListener("DOMContentLoaded", function() {
    const overlay = document.getElementById("overlay");
    const acceptButton = document.getElementById("accept-button");

    acceptButton.addEventListener("click", function() {
        overlay.style.display = "none";
    });
    
});