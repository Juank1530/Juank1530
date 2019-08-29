<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO</title>
    </head>
        <body>
            <?php

                //Así se construye un array multidimensional
                /* Array $alimetos es el array principal
                *de este se desprenden fruta, leche y carne
                *este es un array asociativo*/

                /**Fruta es elnombre del array, tropical el identificador
                 * y kiwi el elemento. Así para todos los elementos del array 
                 */
                $alimetos=array("fruta"=>array("tropical"=>"Kiwi",
                                               "citricos"=>"Mandarina",
                                               "otros"=>"Manzana"),

                                "leche"=>array("animal"=>"Vaca",
                                               "vegetal"=>"Coco"),

                                "carne"=>array("vacuno"=>"Lomo",
                                               "porcino"=>"Pata")
                            );

                //acceder a un elemento especifico del array
                
                echo "<h4>Accediendo a el lomo del array carne</h4>";

                echo $alimetos["carne"] ["vacuno"] . "<br>";

                echo "<h4>Recorriendo todas las dimensiones del array</h4>";


                /**El foreach entra alimentos e imprime la varaible $key
                 * para este caso imprimiria Fruta, Leche y Carne 
                 */
                foreach ($alimetos as $key => $value) {

                    echo "$key: <br>";

                    /**El while usa la funciòn list(), que recibe dos parametros clave y valor
                     *de cada array 
                     */

                    while(list($clave, $valor)=each($value)){

                        echo "$clave=$valor<br>";
                    
                }

                echo "<br>";

            }

            //La funciòn var_dump(), como parametro un array 
            //var_dump($alimetos);
                                    
                
            ?>
        </body>
</html>
