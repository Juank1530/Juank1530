<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
 
<body>
 
<?php
$valores=array(
    array("Juan Perez","Cra 45 #45-56","3456789","23/12/1997","Amarillo",""),
    array("Nancy Peña","Av. 34 #16-12","2135423","07/06/2000","Rojo",""),
    array("Pablo Manrrique","Cra 23 #12-19 Sur","3214567","12/10/1980","Verde",""),
    array("xve","Cra 23 #12-19 Sur","3214567","12/10/1980","Negro","")
);
$colores = array(
    'Rojo' => 'Persona Apasionado',
    'Blanco' => 'Persona Tranquila',
    'Negro' => 'Persona Misteriosa',
    'Azul' => 'Persona Feliz',
    'Verde' => 'Persona pacifica',
    'Amarillo' => 'persona Activa',
);
 
// obtenemos los colores
foreach ($valores as $array){
    if($array[5])
    {
        $colores[$array[4]]=$array[5];
    }
}
 
// rellenamos los colores sin significado
for($i=0;$i<count($valores);$i++){
    if($valores[$i][5]=="" && array_key_exists($valores[$i][4], $colores))
    {
        $valores[$i][5]=$colores[$valores[$i][4]];
    }
}
?>
 
<table border="1" align="center">
    <thead>
        <tr>
            <?php
              $array = array("Nombre ","Dirección ","Teléfono ","Fecha de cumpleaños ","Color favorito ","Significado");
                foreach ($array as $valor) {
                  echo '<th>'.$valor.'</th>';
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        // obtenemos los colores
        foreach ($valores as $array){
            echo "<tr>";
                foreach($array as $contenido)
                {
                    echo "<td>".$contenido."</td>";
                }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
 
</body>
</html>