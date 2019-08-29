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
		
		/*Cuando se declara la variable asi se reinicia cada 
		 vez que se llama a la función*/
		function Contador()
		{
			$num1=0;
			$num1++;
			echo "$num1 <br>";
		}

		Contador();
		Contador();
		Contador();
		Contador();

		/**Cuando se deja la variable como static la variable  
		 *mantiene su valor y lo va aumentado.  
		*/
		function Contador2()
		{
			static $num1=0;
			$num1++;
			echo "$num1 <br>";
		}
		Contador2();
		Contador2();
		Contador2();
		Contador2();

    ?>
 </body>
</html>