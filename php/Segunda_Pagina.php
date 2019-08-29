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

        /*like This you can declarate a vriable*/

        $nombre="Juank";
        $Edad=33;

        /* You can include variable inside the mesage and it works well*/
        echo "El nombre es $nombre y su edad es $Edad <br>";
        /*This is another way to use the variables*/
        echo "El nombre es " . $nombre . " y la edad es " . $Edad;


    ?>


 </body>

</html>