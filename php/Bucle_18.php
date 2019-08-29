<!DOCTYPE html>
 <html lang ="es">
 <head>
    <meta charset="iso-8559-1"/>
    <meta name= "description" content ="Pàgina de enseñanza html5"/>
    <meta name= "keywords" content ="htnl5, CCS3, JavaScrip, Diseño web"/>
    <title>HTML5 Page</title>
    <link rel ="styleSheet" href="MiHojaDeEstilo.ccs"/>	
 </head>
	<body>
		
    <?php
    
        $var1 =1;
        $var2 =4;

        //Ejecuta el código hasta que la condicion sea falsa 

        while ($var1 < 3) {

           echo "Ejecución de bucle<br>";

          $var1++;
        }

        echo"Fuera del bucle<br>";
        

        //Ejecuta el código del interior por lo menos una vez
        do {
            echo "Ejecución de Do while<br>";
            $var2++;
        } while ($var2 < 3);

        echo "Fuera del Do<br>";
        
        
       
    ?>
 </body>
</html>
