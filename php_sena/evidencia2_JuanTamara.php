<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php
    /**
     * Desarrollado por
     * Juan Carlos Támara
     */

    //Se crea el array de los usuarios  
    $users = array(
        array("Juan Perez", "Cra 45 #45-56", "3456789", "23/12/1997", "Amarillo", ""),
        array("Pablo Manrrique", "Cra 23 #12-19 Sur", "3214567", "12/10/1980", "Verde", ""),
        array("Nancy Peña", "Av. 34 #16-12", "2135423", "07/06/2000", "Rojo", ""),
        array("Juan Tamara", "Cra 83 #64a-55 Sur", "5777777", "15/10/1980", "Azul", "")
    );
    //Se crea el array de los colores
    $colores = array(
        'Rojo' => 'Persona Apasionado',
        'Blanco' => 'Persona Tranquila',
        'Negro' => 'Persona Misteriosa',
        'Azul' => 'Persona Feliz',
        'Verde' => 'Persona pacifica',
        'Amarillo' => 'persona Activa',
    );

    //Recorremos el array de users para obtener los colores
    foreach ($users as $array) {

        if ($array[5]) {
            $colores[$array[4]] = $array[5];
        }
    }

    // rellenamos los colores sin significado
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i][5] == "" && array_key_exists($users[$i][4], $colores)) {
            $users[$i][5] = $colores[$users[$i][4]];
        }
    }
    ?>
    <!-- Acá se procede a la creación de la tabla para el HTML -->
    <table border="1" align="center">
        <thead>
            <tr>
                <?php
                //Se crea un array con los encabezados que va a tener la tabla 
                $array = array("Nombre ", "Dirección ", "Teléfono ", "Fecha de cumpleaños ", "Color favorito ", "Significado");
                //Se recorre el array y se imprimen los encabezados 
                foreach ($array as $valor) {
                    echo '<th>' . $valor . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Se recorre el array de users para llenar la tabla con los datos del array completos incluido el color y su significado
            foreach ($users as $array) {
                echo "<tr>";
                foreach ($array as $contenido) {
                    echo "<td>" . $contenido . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>