<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>

    <?php

    require_once './biblioteca3.php';

    $lista = array(
        array(
            'nombre' => 'Juank',
            'apellido' => 'Tamara',
            'celular' => '30000',
        ),
        array(
            'nombre' => 'Lola',
            'apellido' => 'Perez',
            'celular' => '500000',
        ),
        array(
            'nombre' => 'Diego',
            'apellido' => 'Ruiz',
            'celular' => '60000',
        ),
    );

    muestraListadoTabla($lista);

    get_loaded_extensions();

    phpinfo();




    ?>

</body>

</html>