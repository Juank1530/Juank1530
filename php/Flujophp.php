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

        /*You can use many sections of php code*/

        function Nun ()
        {
            echo "This function prints the numbers 1.2.3.. <br>";   
        }

    ?>
    
    <?php

       echo "This is the first mesage <br>";

       function Damedatos ()
       {
        echo "This is the mesage into the function <br>";
       }

       echo "This is the second mesage <br>";
       echo "This is the third mesage <br>";
       /*You can call a fuction when you want*/
       Damedatos ();
       Nun();

       /*Is possible include code from other folders*/
       include ("Funcion.php");

       Letras();

       

    ?>


 </body>

</html>