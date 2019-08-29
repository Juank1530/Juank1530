<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario de registro Video 42</title>
    <link rel= "stylesheet" href="eraser_CSS.css">
    <style>
        
    </style>


</head>

<body>
<h1>Registro de Artículos</h1>
    <form name="form1" method="GET" action="insertar_datos_42.php">
        <table border="0" align="center">
            <tr>
                <td>Código Artículo</td>
                <td><label for="c_art"></label>
                <input type="text" name="c_art" id="c_art"></td>
            </tr>
            <tr>
                <td>Sección</td>
                <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion"></td>
            </tr>
            <tr>
                <td>Nombre Artículo</td>
                <td><label for="n_art"></label>
                <input type="text" name="n_art" id="n_art"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><label for="precio"></label>
                <input type="text" name="precio" id="precio"></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha"></td>
            </tr>
            <tr>
                <td>Importado</td>
                <td><label for="importado"></label>
                <input type="text" name="importado" id="importado"></td>
            </tr>
            <tr>
                <td>País de Origen</td>
                <td><label for="p_orig"></label>
                <input type="text" name="p_orig" id="p_orig"></td>
            </tr>
            <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
            </tr>        
        </table>
    </form>


<?php
    
?>

</body>


</html>