//Declaramos variables
const lista = document.querySelector(".lista");
const body = document.querySelector("body");
const header = document.querySelector("header");
const menu = document.getElementById("menu_side");
const boton_abrir = document.getElementById("btn_open");

//Ejecutar función en el evento click
boton_abrir.addEventListener("click", () => {
    body.classList.toggle("body_move");
    menu.classList.toggle("menu__side_move");
    lista.classList.toggle("ocultar");
    header.classList.toggle("toggle-header");
});
