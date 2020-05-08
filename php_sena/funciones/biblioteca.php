<?php

function operacion($num1, $num2, $Operador)
{ 
        if (is_null($num1) || is_null($num2)) {
            echo "Uno o los dos valores estan vacios y no se puede hacer la operación";
        } elseif (is_numeric($num1) && is_numeric($num2)) {
    
            switch ($Operador) {
                case 'Suma':
                    $resulset = $num1 + $num2;
                    echo "El resultado de Sumar $num1 + $num2 es igual a $resulset"; 
                    break;
                case 'Resta':
                    $resulset = $num1 - $num2;
                    echo "El resultado de Restar $num1 - $num2 es igual a $resulset";
                    break;
                case 'Multiplacion':
                    $resulset = $num1 * $num2;
                    echo "El resultado de Multiplicar $num1 * $num2 es igual a $resulset";
                    break;
                case 'Division':
                    if ($num2 == 0) {
                        echo "No es posible dividir por $num2";
                    } else {
                        $resulset = $num1 / $num2;
                        echo "El resultado de Dividir $num1 / $num2 es igual a $resulset";
                    }
    
                    break;
    
                default:
                    $resulset = $num1 + $num2;
                    echo "Como no se seleciono ninguna operación se procede por defeceto a sumar.
                    El resultado de Sumar $num1 + $num2 es igual a $resulset";
                    break;
            }
        } else {
            echo 'Uno o los dos valores son incorrectos solo se deben utilizar números';
        }
    
        return $resulset;
        

    

   
}
