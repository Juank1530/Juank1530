<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>POO 28</title>
    </head>
        <body>
            <?php
                //linkar el archivo de la clase php 
                include("concesionario.php");

                //para poder acceder al descuento se debe referenciar la clase donde está el método estatico, más el operador :: 
                compra_vehiculos::descuento();

                //instanciar un objeto de la clase compra_vehiculos
                $compra_Antonio=new compra_vehiculos("compacto");

                $compra_Antonio->climatizador();

                $compra_Antonio->tapiceria_cuero("blanco");

                echo $compra_Antonio->precio_final() . "<br>";

                //instanciar un objeto de la clase compra_vehiculos
                $compra_Ana=new compra_vehiculos("compacto");

                $compra_Ana->climatizador();

                $compra_Ana->tapiceria_cuero("rojo");

                echo $compra_Ana->precio_final();






            ?>
        </body>
</html>