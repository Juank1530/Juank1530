<?php


/**
 * Desarollado por 
 * Juan Carlos Támara Rosas
 * Desarrollo web con php
 * Uso de funciones
 */


// Acá se define la función con los parametros que recibe 
function operaciones($num1, $num2, $Operador)
{ 
        //Acá se validad que los valores no estén vacios 
        if (is_null($num1) || is_null($num2)) {
            //Mensaje encaso de encontrar valores vacios
            echo "Uno o los dos valores estan vacios y no se puede hacer la operación";
        //Se validad que los $num1 y $num2 sean números y no letras 
        } elseif (is_numeric($num1) && is_numeric($num2)) {
            //swicht para determinar que operación se va a realizar 
            switch ($Operador) {
                case 'Suma':
                    //Operación e impresión de resultados
                    $resulset = $num1 + $num2;
                    echo "El resultado de Sumar $num1 + $num2 es igual a $resulset"; 
                    break;
                case 'Resta':
                    //Operación e impresión de resultados
                    $resulset = $num1 - $num2;
                    echo "El resultado de Restar $num1 - $num2 es igual a $resulset";
                    break;
                case 'Multiplacion':
                    //Operación e impresión de resultados
                    $resulset = $num1 * $num2;
                    echo "El resultado de Multiplicar $num1 * $num2 es igual a $resulset";
                    break;
                case 'Division':
                    //Validación de la división    
                    if ($num2 == 0) {
                        echo "No es posible dividir por $num2";
                    } else {
                        //Operación e impresión de resultados
                        $resulset = $num1 / $num2;
                        echo "El resultado de Dividir $num1 / $num2 es igual a $resulset";
                    }
                    break;
                //Caso por defecto si no se selecciona operador    
                default:
                    $resulset = $num1 + $num2;
                    echo "Como no se seleciono ninguna operación se procede por defeceto a sumar.
                    El resultado de Sumar $num1 + $num2 es igual a $resulset";
                    break;
            }
        } else {
            //Mensaje de error si se ingresan letras 
            echo 'Uno o los dos valores son incorrectos solo se deben utilizar números';
        }
        //Acá se devuelve el resultado de la operación 
        return $resulset;
}
