<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO</title>
    </head>
        <body>
            <?php

                $datos3=array(
                    "Nombre"=>"Carlos",
                    "Apellido"=>"Rosas",
                    "Edad"=>33
                );

                //Así se agregan elementos a un array asociativo
                
                $datos3["País"]="Colombia";
                
                $cosa =0;

                //Es muy importante no repetir el nombre de un array con el nombre de una variabe
                //la función is_arrya(); sirve para saber si el objeto utilizado es un array
                
                if(is_array($cosa)){
                    echo "Es una array <br>";
                } else{
                    echo "No es un arry <br>";
                }

                if(is_array($datos3)){
                    echo "Es una array <br>";
                } else{
                    echo "No es un arry <br>";
                }

                //Maneras de recorres un array

                foreach ($datos3 as $key => $value) {
 
                    //Primero imprime la clave o sea, $key y desuès su valor $value
                    echo "A $key le corresponde $value <br>";
                }

                //Array indexado
                $semana []="Lunes";
                $semana []="Martes";
                $semana []="Miércoles";
                $semana []="Jueves";

                //Así se recorre un arrya indexado
                //Como no siempre vamos a saber el tamaño del array lo mejor es utilizar la función count() paraque
                //el recorrido se haga hasta el final de array

                for ($i=0; $i < count($semana); $i++) { 
                    echo $semana[$i] . "<br>";
                }

                //Así se agrega otro elemento a un array indexado

                $semana[]="Viernes";

                //Volver a recorrerlo
                for ($i=0; $i < count($semana); $i++) { 
                    echo $semana[$i] . "<br>";
                }

                //
                $numeros=array(
                    "Uno",
                    "Dos",
                    "Tres",
                    "Cuatro",
                    "Cinco"
                );

                //la función sort() sirve para organizar los arrays de manera alfabetica

                sort($numeros);

                for ($i=0; $i < count($numeros) ; $i++) { 
                    echo $numeros[$i] . "<br>";
                }



            ?>
        </body>
</html>
