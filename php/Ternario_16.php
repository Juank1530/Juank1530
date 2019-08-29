<!DOCTYPE html>
 <html lang ="es">
 <head>
    <meta charset="iso-8559-1"/>
    <meta name= "description" content ="Pàgina de enseñanza html5"/>
    <meta name= "keywords" content ="htnl5, CCS3, JavaScrip, Diseño web"/>
    <title>Ternario</title>
    <link rel ="styleSheet" href="MiHojaDeEstilo.ccs"/>	
 </head>
	<body>
		
    <?php	
        
        $frio=8;
        $respuesta="";
        
        //Ternario sirve para como un IF rápido define un valor para falso y otro verdadero
        $temperatura = ($frio < 10 ) ? $respuesta ="Hace frío" : $respuesta="No hace Frío";

        echo $temperatura;

      
        
    ?>
 </body>
</html>
