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
        
        //Ciclo For inicio de variable, condicion e incremento de la variable
        echo "<h1>Ejemplo ciclo</h1>";
        for ($i=0; $i <=10 ; $i++) {
            
            echo "<p>" . $i . " Hemos entrado en el blucle For<br></p>";
        
        }
        
        //Ejemplo de for 
        echo "<h1>Tabla del 9</h1>";
        for ($i=0; $i < 11; $i++) { 
            
            echo "<p> 9 x $i = " . $i*9 . "</p>";
        }
        
        echo "<h1>Romper un ciclo</h1>";
        for ($i = 0; $i <= 10; $i++) {
            
            echo "<p>" . $i . " Entramos al ciclo que se va a romper<br>";
            
            if ($i==6) {
                echo "<h3>Se rompe el ciclo for</h3>";
                break;
            }
    
        }
        
        echo "<h1>Dividir por 9</h1>";        
        for ($i= 10; $i >= -10; $i--){
            
            if ($i==0) {
                
                echo "<br>La divisi�n en cero no es posible<br>";
                continue;
                
            }
            
            echo "<p> 9 / $i = " . 9 / $i . "<br>";
          
        }

    ?>
 </body>
</html>
