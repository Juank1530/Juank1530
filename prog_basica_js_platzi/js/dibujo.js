// Acá nos conectamos al canvas utilizando el id 
var d = document.getElementById("dibujo1");
// Acá declaramos el lienzo y se asignamos al elemento
var lienzo = d.getContext("2d");
console.log(lienzo);
// Acá abre el lienzo para empezar a dibujar
lienzo.beginPath();
// Acá se define el color que se va a utilizar
lienzo.strokeStyle = "red";
// Acá se ubica el punto inicial
lienzo.moveTo(100, 100);
// Acá se determina el punto final del trazo 
lienzo.lineTo(200, 200);
// Acá se realiza el trazo
lienzo.stroke();
// Acá se libera el trazo
lienzo.closePath();

// Este es un ejemplo de otra línea 
lienzo.beginPath();
lienzo.strokeStyle = "blue";
lienzo.moveTo(200, 200);
lienzo.lineTo(200, 100);
lienzo.stroke();
lienzo.closePath();


/*Todas la funciones en JavaScript se cargan de primero en memoria, no importa en que parte del código se creen
 */
function dibujo_linea(color, x_ini, y_ini, x_fin, y_fin) {
    lienzo.beginPath();
    lienzo.strokeStyle = color;
    lienzo.moveTo(x_ini, y_ini);
    lienzo.lineTo(x_fin, y_fin);
    lienzo.stroke();
    lienzo.closePath();
}

dibujo_linea("black", 0, 0, 150, 200);

dibujo_linea("yellow", 200, 150, 0, 0);