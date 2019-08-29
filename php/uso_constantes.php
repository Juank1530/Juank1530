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
      
      /**The method (Define) to serve to define constants and its parameters are three: 
       * Name- Always using uppercases 
       * Value-Its value and 
       * true- to prevent mistakes when it is use */
      // ain't possible change its value
      define("AUTOR","Juank", true);

      /* isn't posibble use it inside a string is necessary to separate it and concatenate it, 
      *using the point (.)*/
      // if to used the property (true) is possible don't use Uppercase
      echo "El autor es: " . autor . "<br>";

      /*These are some examples about constants predefined, but there are many more.
       *Check the page http://php.net/manual/es/language.constants.predefined.php*/ 
      echo "La línea de esta instarucción es: " . __LINE__ . "<br>";
      echo"Estamos trabajando con el fichero: " . __FILE__ . "<br>";
    ?>
    
 </body>

</html>