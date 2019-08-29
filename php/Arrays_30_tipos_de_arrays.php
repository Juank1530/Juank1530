<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO</title>
    </head>
        <body>
            <?php

               //Ejemplo de Array indexado, cuando se omite el indixe php lo asume por defecto
               //es recomendado no indicar los indices para evitar errores   

               $semana[]="Lunes";
               $semana[]="Martes";
               $semana[]="Miércoles";

               echo $semana[0] ."<br>";

               //Otra forma de crear Arrays indexados
               
               $semana2=array(
                   "Lunes2",
                   "Martes2",
                   "Miércoles2",
               );

               echo $semana2[1] ."<br>";

               //Ejemplo de Array asociativo

               $datos=array(
                   //la primera parte indica el nombre del campo => el valor del campo
                   "Nombre"=>"Juan",
                   "Apellido"=>"Támara",
                   "Edad"=>33
               );

               echo $datos["Nombre"] ."<br>";

               //Otra forma de crear Arrays indexados
               $datos2 ["Nombre"]="Juan";
               $datos2 ["Apellido"]="Támara";
               $datos2 ["Edad"]=33;

               echo $datos2["Edad"] ."<br>";






            ?>
        </body>
</html>