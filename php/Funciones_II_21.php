<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones 2</title>
    </head>
    <body>
        <?php
        
        echo "<h1>Paso de parametros por referencia</h1>";
        
//        Cuando se agrega el & afecta el valor de las varibles externas
           
        echo "<h3>Ejemplo 1</h3>";
        
            function incrementa(&$valor1){
                
                $valor1++;
                
                return $valor1;
            }
            
            $numero=5;
            
            echo incrementa($numero) . "<br>";
            
            echo $numero . "<br>";
            
            echo "<h3>Ejemplo 2</h3>";
            
            function cambia_mayus(&$param) {
                
                $param=strtolower($param);
                
                $param=ucwords($param);
                
                return $param;
                
            }
            
            $cadena="hoLA mUnDO";
            
            echo cambia_mayus($cadena) . "<br>";
            
            echo $cadena;
            
            
        
        ?>
    </body>
</html>
