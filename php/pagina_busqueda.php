<?php

//Almacenar el dato que de envie desde la caja de texto en la variable $busqueda
$busqueda=$_GET["buscar"];

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



//Se indica la consulta que se necesita utulizando los carecteres comdín delante y atrás para asegurar las búsquedas   
$query="SELECT * FROM Productos WHERE NOMBREARTÍCULO LIKE'%$busqueda%'";


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

//Cerrar la conexión con la base de datos
mysqli_close($conexion);


?>