<!DOCTYPE html>
 <html lang ="es">
 <head>
    <meta charset="iso-8559-1"/>
    <meta name= "description" content ="Pàgina de enseñanza html5"/>
    <meta name= "keywords" content ="htnl5, CCS3, JavaScrip, Diseño web"/>
    <title>HTML5 Page</title>
    
    <style>
        .resaltar
        {
            color: #F00;
            font-weight:bold;
        }
    </style>

 </head>
	<body>
		
    
    <?php
        
        //Ejemplos para aplicar estilos a php 
        //esta es una manera de hacerlo
        echo "<p class='resaltar'>Este es un ejemplo de frase 1</p>";
        //esta es otra manera de hacerlo
        echo '<p class="resaltar">Este es un ejemplo de frase 2</p>';
        //así se hace un escape de comillas 
        echo "<p class=\"resaltar\">Este es un ejemplo de frase 3</p>";
    ?>

    <?php

        $Variable1="Casa";
        $Variable2="CASA";

        //strcase analiza el string teniendo en cuenta nayusculas 
        $resultado=strcasecmp($Variable1,$Variable2);

        if (!$resultado) {
            echo "No coinciden <br>";
        } else {
            echo "Coinciden <br>";
        }
        

        //strcase analiza el string sin tener en cuenta nayusculas 
        $resultado=strcmp($Variable1,$Variable2);

        if (!$resultado) {
            echo "No coinciden <br>";
        } else {
            echo "Coinciden <br>";
        }
    ?>
 </body>
</html>