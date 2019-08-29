<!DOCTYPE html>
 <html lang ="es">
 <head>
    <meta charset="iso-8559-1"/>
    <meta name= "description" content ="Pàgina de enseñanza html5"/>
    <meta name= "keywords" content ="htnl5, CCS3, JavaScrip, Diseño web"/>
    <title>Comparadores</title>
    <link rel ="styleSheet" href="MiHojaDeEstilo.ccs"/>	
 </head>
	<body>
		
    <?php

        $variable1=8;
        $variable2="8";
        $variable3="Juank";
        $variable4=8;

        /**El operador (==) compara que sean iguales */
        if ($variable1==$variable2) {
            echo "Ejemplo 1 Son iguales <br>";
        } else {
            echo "Ejemplo 1 No son iguales <br>";
        }
        
        /**El operador (===) compara que sean iguales */
        if ($variable1===$variable2) {
            echo "Ejemplo 2 Coinciden <br>";
        } else {
            echo "Ejemplo 2 No coinciden <br>";
        }

        /**El operador (!=) identifica sí las variables 
         * son diferentes */
        if ($variable1!=$variable3) {
            echo "Ejemplo 3 las variables son diferentes <br>";
        } else {
            echo "Ejemplo 3 las variables son iguales <br>";
        }

        /**El operador (<>) identifica sí las variables
         * son diferentes tanto en valor como en tipo
         */

         if ($variable1<>$variable4) {
             echo "Ejemplo 4 Son diferentes  <br>";
         } else {
            echo "Ejemplo 4 No son diferentes <br>";
         }
         


        
        

    ?>
 </body>
</html>