var texto = document.getElementById("textbox1");
var boton = document.getElementById("button1");

boton.addEventListener("click", DibujoPorClic);


var d = document.getElementById("dibujo2");
var lienzo = d.getContext("2d");








function DibujoPorClic() {


    var ancho_canvas = d.width;
    var num_lineas = parseInt(texto.value);
    var xi, yi, xf, yf;
    var l = 0;
    var color_linea = "pink";
    var color_linea2 = "red";
    var color_linea3 = "green";
    var color_linea4 = "grey";
    var espacio = ancho_canvas / num_lineas;

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
            for (i = 0; i <= num_lineas; i++) {
                xf = 300 - ((i + 1) * espacio);
                yi = espacio * i;
                lienzo.beginPath();
                lienzo.strokeStyle = color;
                lienzo.moveTo(xi, yi);
                lienzo.lineTo(xf, yf);
                lienzo.stroke();
                lienzo.closePath();
                console.log("Línea" + i);
            }
        } else if (xi == 0 && yi == 0 && xf == 0 && yf == 300) {
            for (i = 0; i <= num_lineas; i++) {
                yi = espacio * i;
                xf = espacio * (i + 1);
                lienzo.beginPath();
                lienzo.strokeStyle = color;
                lienzo.moveTo(xi, yi);
                lienzo.lineTo(xf, yf);
                lienzo.stroke();
                lienzo.closePath();
                console.log("Línea" + i);
            }
        } else if (xi == 0 && yi == 0 && xf == 300 && yf == 300) {
            for (i = 0; i <= num_lineas; i++) {
                xi = espacio * i;
                yf = espacio * (i + 1);
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


}