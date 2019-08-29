<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Funciones y casting</title>
    </head>
        <body>
            <?php

                $num1=rand(10000,99999);
                echo"El número es $num1<br>";

                $num2=pow(5,3);
                echo"El número es $num2<br>";

                $num3=5.25;
                echo "El número es: " . round($num3,1) . "<br>";

                $num4="5";
                $num5=3;
                /**Casting explicito */
                $resultado=(int)$num4+$num5;
                echo"El número es: " . $resultado;


            ?>
        </body>
</html>