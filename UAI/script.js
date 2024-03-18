//Declaramos variables
const side_menu = document.getElementById("menu_side");
const lista = document.querySelector(".lista");
const body = document.querySelector("body");
console.log(body)
const btn_open = document.getElementById("btn_open")
let isActive = true



//Evento para mostrar y ocultar menú
// function open_close_menu(){
//     body.classList.toggle("body_move");
//     side_menu.classList.toggle("menu__side_move");
//     document.querySelector('header').classList.toggle("toggle-header");
//     if (isActive) {
//         lista.classList.add('mostrar')
//         lista.classList.remove('ocultar')
//         isActive = false
//     } else {
//         lista.classList.add('ocultar')
//         lista.classList.remove('mostrar')
//         isActive = true
//     }
// }

//Ejecutar función en el evento click
btn_open.addEventListener("click", open_close_menu);















// //Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página
// // if (window.innerWidth < 760){

// //     body.classList.add("body_move");
// //     side_menu.classList.add("menu__side_move");
// // }

// //Haciendo el menú responsive(adaptable)

// console.log(lista)




// window.addEventListener("resize", function(){
//     // if (window.innerWidth > 760){
//     //     // lista.classList.add("ocultar");
//     //     console.log('aqui')
//     //     // lista.classList.remove("mostrar");
//     //     body.classList.remove("body_move");
//     //     side_menu.classList.remove("menu__side_move");
//     // }

//     // if (window.innerWidth < 760){
        
//     //     // lista.classList.add("mostrar");
//     //     // console.log(lista.classList)
//     //     // lista.classList.remove("ocultar");


//     //     body.classList.add("body_move");
//     //     side_menu.classList.add("menu__side_move");
//     // }

// });