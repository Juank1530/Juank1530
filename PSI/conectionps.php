<?php

//Establecer las variables para la conexión con la BD
$db_host="192.168.10.192";
$db_nombre="api_pages";
$db_usuario="meta";
$db_password="F4rm4l4t4m*";

/*
$conetion=mysqli_connect($db_host,$db_usuario,$db_password); 

if (mysqli_connect_errno()) {
    
    echo 'Fallo al conectar con la base de BBDD';
    exit();
}

mysqli_select_db($conetion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conetion, "utf8");


$consulta ="select * from PSI";

$resultado = mysqli_query($conetion,$consulta);

while($fila=mysqli_fetch_row($resultado)){

$fila=mysqli_fetch_row($resultado);

echo $fila[0];
echo $fila[1];
echo $fila[2];
echo $fila[3];
echo $fila[4];
echo "<br>";

}

mysqli_close($conetion);

*/



?>
