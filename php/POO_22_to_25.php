
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>POO</title>
    </head>
    <body>
        <?php
//          Incluir el còdigo de otro archivo externo 
            include("Vehiculos.php");
            
            $mazda = new Coche();
            
            $pegaso= new Camion();

            $Seat= new Coche();

            $Ferrari= new Coche();
            
            
            echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
            echo "El Mazda tiene un motor de " . $mazda->get_motor() . " CC<br>";
            echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas<br>";
            echo "El Pegaso tiene un motor de " . $pegaso->get_motor() . " CC<br>";
            
            /*echo "" . $pegaso->ruedas . " ruedas<br>";

            echo "" . $pegaso->motor . " motor<br>";

            echo "" . $mazda->motor . " motor<br>";

            echo "El Seat tiene " . $Seat->ruedas . " ruedas<br>";

            echo "El Ferrari tiene un motor" . $Ferrari->motor . "<br>";*/

            $pegaso->frenar();

            $pegaso->set_color("negro","Pegaso");
            $pegaso->arrancar();

            $mazda->arrancar();
            
            


            

            



           
           

      
        
        ?>
    </body>
</html>
