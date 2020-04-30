var teclas = {
    UP: 38,
    DOWN: 40,
    LEFT: 37,
    RIGHT: 39
};




console.log(teclas);

document.addEventListener("keydown", dibujarTeclado);

var cuadrito = document.getElementById("area_de_dibujo");
var papel = cuadrito.getContext("2d");
var x = 100;
var y = 100;

dibujo_linea2("red", x - 1, y - 1, x + 1, y + 1, papel);

function dibujo_linea2(color, x_ini, y_ini, x_fin, y_fin, lienzo) {
    lienzo.beginPath();
    lienzo.strokeStyle = color;
    lienzo.lineWidth = 3;
    lienzo.moveTo(x_ini, y_ini);
    lienzo.lineTo(x_fin, y_fin);
    lienzo.stroke();
    lienzo.closePath();
}


function dibujarTeclado(evento) {

    var colorcito = "green";
    var movimiento = 1;


    switch (evento.keyCode) {

        case teclas.UP:
            dibujo_linea2(colorcito, x, y, x, y - movimiento, papel);
            y = y - movimiento;
            break;
        case teclas.DOWN:
            dibujo_linea2(colorcito, x, y, x, y + movimiento, papel);
            y = y + movimiento;
            break;
        case teclas.LEFT:
            dibujo_linea2(colorcito, x - movimiento, y, x, y, papel);
            x = x - movimiento;
            break;
        case teclas.RIGHT:
            dibujo_linea2(colorcito, x + movimiento, y, x, y, papel);
            x = x + movimiento;
            break;
        default:
            console.log("Se presiono la tecla " + evento.key)
            break;
    }

}