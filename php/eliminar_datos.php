<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertar datos Video 42</title>
        <link rel= "stylesheet" href="Black_and_White.css">
      
    </head>
        <body>

<?php

//Almaceno los datos de la otra página en variables y los rescato utilizando la función $_GET
$cod=$_GET["c_art"];
$sec=$_GET["seccion"];
$nom=$_GET["n_art"];
$pre=$_GET["precio"];
$fec=$_GET["fecha"];
$imp=$_GET["importado"];
$por=$_GET["p_orig"];


require("datos_conexion.php");

//Funciion mysqli_connect para realizar la conexión. Solicita el host de la bd
//el usuario,la contraseña y el nombre de la bd
$conexion= mysqli_connect($db_host,$db_usuario,$db_password);

//Manejo para cuendo no se puede conectar a la BBDD
if(mysqli_connect_errno()){

    echo ":/ Error al Conectar la base de datos. <br> Por favor consulte a su administrador";

    exit();
}

// En caso de no encontrar la bbdd mostrará un mensaje con el error 
mysqli_select_db($conexion,$db_nombre) or die ("No se ecuentra BBDD");

//Integrar carateres latinos acentos.
mysqli_set_charset($conexion,"utf8");

  
$query="DELETE from Productos where CÓDIGOARTÍCULO='$cod'";

//Se obtienen los resultados de la consulta y se guardan en la variable. solicita la conexión a la BD y el query a ejecutar 
$resultado= mysqli_query($conexion,$query);

//Validar que se haya guardado o no el registro
if ($resultado==false) {
    echo "Error en la consulta";
} else {
    

    if (mysqli_affected_rows($conexion)==0) {
        echo "Ninún registro coincide con el Código insertado";
    } elseif (mysqli_affected_rows($conexion)==1) {
        echo "Se ha eliminado " . mysqli_affected_rows($conexion) . " registro";
    } 
    else {
        echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
    }
    


}


//Cerrar la conexión con la base de datos
mysqli_close($conexion);


?>
</body>
</html>