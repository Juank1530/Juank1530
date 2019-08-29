<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones</title>
    </head>
        <body>
            <?php
                
                $palabra="JUANK";
                $palabra2="juank";

                echo"<h1>Ejemplos de Funciones sencillas</h1>";
                echo(strtolower($palabra) . "<br>");

                echo"<p>" . (strtoupper($palabra2) . "</p>");

                //Funcion propia
                function suma($n1, $n2){

                    $resultado = $n1+$n2;

                    return $resultado;
                }

                echo (suma(4,8) . "<br>");

                echo "<h3>Función con parametros por defecto</h3>";

                function frase_mayus($frase, $conversion=true){

                    $frase=strtolower($frase);

                    if ($conversion==true) {
                        $resultado=ucwords($frase);
                    } else {
                        $resultado=strtoupper($frase);
                    }

                    return $resultado;
                    
                }
                // si se le paso el parametro por defecto afecta al flujo de ejecución
                echo "<p>" . (frase_mayus ("esto es una prueba</P>", false));

            ?>
        </body>
</html>
