<!DOCTYPE html>
<html>

<head>
    <title>Unidad 3 - Ejemplo 1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>

    <?php
    /* En este programa se presenta el funcionamiento de una función
         * simple, creada por el usuario
         */
    /* Inencionalmente se escribió primero el llamado a la función antes que
         * su definición con el fin de demostrar que no importa donde se haga
         * el llamado de una función, si antes o despues de si declaración
         */
    imprimeTabla();
    /* La función imprimeTabla() genera una tabla HTML de 3 filas por 4
         * columnascon con una fila de encabezado que contien los titulos de
         * las columnas, la fiunción no recibe argumentos ni devuelve valores
         */
    function imprimeTabla()
    {
    ?>
        <table border="1">
            <thead>
                <td>Nombre</td>
                <td>Direcci&oacute;n</td>
                <td>Tel&eacute;fono</td>
                <td>Fecha de Nacimiento</td>
            </thead>
            <tr>
                <td>JuanK</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
        </table>
    <?php
    }
    ?>

    <?php

    imprimeTabla();

    ?>


</body>

</html>