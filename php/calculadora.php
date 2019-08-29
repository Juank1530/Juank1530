<style>
  .resultado{
    color: #f00;
    font-weight: bold;
    font-size: 32px;
}
</style>
 
 <?php
    

            function Calcular($calculo){
              if (!strcmp("Suma",$calculo)) {
                global $numero1;
                global $numero2;
                $resultado=$numero1+$numero2;
                echo "<p class='resultado'> El resutado de la suma es: $resultado</p>";
              }

              if (!strcmp("Resta",$calculo)) {
                global $numero1;
                global $numero2;
                $resultado=$numero1-$numero2;
              echo "<p class='resultado'>El resutado de resta es: $resultado</p>";
            }

            if (!strcmp("Multiplicación",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1*$numero2;
              echo "<p class='resultado'>El resutado de la multiplicación es: $resultado</p>";  
            }

            if (!strcmp("División",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1/$numero2;
              echo "<p class='resultado'>El resutado de la división es: $resultado</p>";  
            }

            if (!strcmp("Módulo",$calculo)) {
              global $numero1;
              global $numero2;
              $resultado=$numero1%$numero2;
              echo "<p class='resultado'>El resutado de la módulo es: $resultado</p>";             
            }

            if (!strcmp("Incremento",$calculo)) {
              global $numero1;
              $numero1++;
              $resultado=$numero1;
              echo "<p class='resultado'>El resutado de la módulo es: $resultado</p>";             
            }

            if (!strcmp("Decremento",$calculo)) {
              global $numero1;
              $numero1--;
              $resultado=$numero1;
              echo "<p class='resultado'>El resutado de la módulo es: $resultado</p>";             
            }


        }


              
        
      

?>
  
