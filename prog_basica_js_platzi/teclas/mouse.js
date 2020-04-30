var cuadrito = document.getElementById("area_de_dibujo");
var papel = cuadrito.getContext("2d");
var colorcito = "Green";
var xi, yi, xf, yf;
var coordenadasi;
var coordenadasf;
var pintarMove = false;

document.addEventListener("mousemove", pintar);



function pintar(evento) {
    console.log(evento);

}













// //Por Carlos Abril
// document.addEventListener("mousedown", iniciaPintura);
// document.addEventListener("mouseup", paraPintura);
// document.addEventListener("mousemove", dibujarPunto);
// var l = document.getElementById("area_de_dibujo");
// var papel = l.getContext("2d");

// var coord = { x: 0, y: 0 }; //Posición inicial del cursor
// var pintar = false;

// function dibujarPunto(evento) {
//     if (!pintar) return; //No hace nada si pintar es falso
//     papel.beginPath();
//     papel.strokeStyle = "green";
//     papel.lineWidth = 3;
//     papel.lineCap = "round";
//     papel.moveTo(coord.x, coord.y);
//     capturaPosicion(evento); //Actualiza la posición del mouse para iniciar trazado
//     papel.lineTo(coord.x, coord.y);
//     papel.stroke();
//     papel.closePath();
// }

// function capturaPosicion(evento) {
//     coord.x = evento.clientX - papel.canvas.offsetLeft; // Posición exacta del puntero del mouse x
//     coord.y = evento.clientY - papel.canvas.offsetTop; // Posición exacta del puntero del mouse y
//     console.log("X: " + coord.x + ", Y: " + coord.y);
// }

// //Funciones para habilitar o no la pintada.
// // Con mousedown habilita pintar y actualiza posición
// // Con mouseUp deshabilita pintar
// function iniciaPintura(evento) {
//     pintar = true;
//     capturaPosicion(evento);
// }

// function paraPintura() {
//     pintar = false;
// }