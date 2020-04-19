var d = document.getElementById("dibujo2");
var lienzo = d.getContext("2d");
var lineas = 30;
var xi, yi, xf, yf;
var l = 0;
var color_linea = "pink";
var color_linea2 = "red";
var color_linea3 = "green";
var color_linea4 = "grey";

dibujo_linea(color_linea, 0, 0, 0, 300);
dibujo_linea2(color_linea, 1, 1, 1, 299);
dibujo_linea2(color_linea, 1, 299, 299, 299);

dibujo_linea(color_linea2, 0, 0, 300, 300);
dibujo_linea2(color_linea2, 1, 1, 299, 1);
dibujo_linea2(color_linea2, 299, 1, 299, 299);

dibujo_linea(color_linea3, 300, 0, 0, 300);
dibujo_linea2(color_linea3, 299, 1, 299, 299);
dibujo_linea2(color_linea3, 299, 299, 1, 299);

dibujo_linea(color_linea4, 0, 300, 300, 0);
dibujo_linea2(color_linea4, 1, 1, 299, 1);
dibujo_linea2(color_linea4, 1, 1, 1, 299);

function dibujo_linea(color, xi, yi, xf, yf) {
    if (xi == 300 && yi == 0 && xf == 0 && yf == 300 || xi == 0 && yi == 300 && xf == 300 && yf == 0) {
        for (i = 0; i <= lineas; i++) {
            xf = 300 - ((i + 1) * 10);
            yi = 10 * i;
            lienzo.beginPath();
            lienzo.strokeStyle = color;
            lienzo.moveTo(xi, yi);
            lienzo.lineTo(xf, yf);
            lienzo.stroke();
            lienzo.closePath();
            console.log("Línea" + i);
        }
    } else if (xi == 0 && yi == 0 && xf == 0 && yf == 300) {
        for (i = 0; i <= lineas; i++) {
            yi = 10 * i;
            xf = 10 * (i + 1);
            lienzo.beginPath();
            lienzo.strokeStyle = color;
            lienzo.moveTo(xi, yi);
            lienzo.lineTo(xf, yf);
            lienzo.stroke();
            lienzo.closePath();
            console.log("Línea" + i);
        }
    } else if (xi == 0 && yi == 0 && xf == 300 && yf == 300) {
        for (i = 0; i <= lineas; i++) {
            xi = 10 * i;
            yf = 10 * (i + 1);
            lienzo.beginPath();
            lienzo.strokeStyle = color;
            lienzo.moveTo(xi, yi);
            lienzo.lineTo(xf, yf);
            lienzo.stroke();
            lienzo.closePath();
            console.log("Línea" + i);
        }
    }
}

function dibujo_linea2(color, x_ini, y_ini, x_fin, y_fin) {
    lienzo.beginPath();
    lienzo.strokeStyle = color;
    lienzo.moveTo(x_ini, y_ini);
    lienzo.lineTo(x_fin, y_fin);
    lienzo.stroke();
    lienzo.closePath();
}