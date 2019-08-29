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

            $nombre = "Juank";

            /*Con el código así la variable dentro de la función
            solo es visible para la función*/ 
            function DameNombre1()
            {
                $nombre="Carlos";
                echo "$nombre <br>";
            }


            DameNombre1();
            echo "$nombre <br>";

            
            /* Cuando se declara global se puede acceder desde
            Cualquier parte del código */
            function DameNombre2()
            {
                global $nombre;
                echo "El nombre es $nombre <br>";
            
            }

            DameNombre2();

        ?>
		
       
   </body>
</html>