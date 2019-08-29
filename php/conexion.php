<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Página de Consulta php</title>
        
        
        <style> 
        /*Se del da estilo a la tabla con CSS*/
            table{
                /*Ubicación en la pantalla*/
                width:50%;
                /*Borde y color del borde*/
                border:1px dotted #FF0000;
                /*Alineación Centrado*/
                margin:auto;
            }



        </style>

    </head>

    <body>

        <?php

            require("datos_conexion.php");

            //Funciion mysqli_connect para realizar la conexión. Solicita el host de la bd
            //el usuario,la contraseña y el nombre de la bd
            $conexion= mysqli_connect($db_host,$db_usuario,$db_password);

            //EManejo para cuendo no se puede conectar a la BBDD
            if(mysqli_connect_errno()){

                echo ":/ Error al Conectar la base de datos. <br> Por favor consulte a su administrador";

                exit();
            }

            //Integrar carateres latinos acentos.
            mysqli_set_charset($conexion,"utf8");

            // En caso de no encontrar la bbdd mostrará un mensaje con el error 
            mysqli_select_db($conexion,$db_nombre) or die ("No se ecuentra BBDD");



            //Se indica la consulta que se necesita
            //$query="select * from DatosPersonales";
            $query="SELECT * FROM Productos WHERE PAÍSDEORIGEN='ESPAÑA'";
            

            //Se obtienen los resultados de la consulta y se guardan en la variable. solicita la conexión a la BD y el query a ejecutar 
            $resultado= mysqli_query($conexion,$query);


            //Usar esta función permite utulizar un array asociativo para ubicar los datos con el nombre del campo 
            while ($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
            
                //Crear una tabla con HTML para organizar la información
                echo "<table><tr><td>";
                    
                //Obtener los datos del array 
                echo $fila['CÓDIGOARTÍCULO'] . "</td><td>";
                echo $fila['NOMBREARTÍCULO'] . "</td><td>";
                echo $fila['SECCIÓN'] . "</td><td>";
                echo $fila['IMPORTADO'] . "</td><td>";
                echo $fila['PRECIO'] . "</td><td>";
                echo $fila['PAÍSDEORIGEN'] . "</td><td></tr></table>";
                
    
                //Agrega espacio en blanco entre cada registro
                echo "<br>";
                echo "<br>";
    
    
                }


            /*una forma de usar mysqli_fetch_row($resultado)
            //Evaluar si $fila=mysqli_fetch_row($resultado) tiene información, en caso de que contenga 
            //seguirá ejecuntadno el bucle hasta que no ecuentre más información 
            while ($fila=mysqli_fetch_row($resultado)) {
            
            //Crear una tabla con HTML para organizar la información
            echo "<table><tr><td>";
                
            //Obtener los datos del array 
            echo $fila[0] . "</td><td>";
            echo $fila[1] . "</td><td>";
            echo $fila[2] . "</td><td>";
            echo $fila[3] . "</td><td>";
            echo $fila[4] . "</td><td>";
            echo $fila[5] . "</td><td>";
            echo $fila[6] . "</td><td></table>";

            //Agrega espacio en blanco entre cada registro
            echo "<br>";
            echo "<br>";


            }*/

            //Cerrar la conexión con la base de datos
            mysqli_close($conexion);
        

        ?>

    </body>
</html>

