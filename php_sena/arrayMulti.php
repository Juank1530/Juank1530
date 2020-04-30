<?php

$usuarios = array (
    'user1' => array('Nombre'=>'Juank', 'Dirección'=>'carrera 1', 'Teléfono'=>'1', 'Fecha Cumpleaños'=>'fec1'),
    'user2' => array('Nombre'=>'Carlos', 'Dirección'=>'carrera 2', 'Teléfono'=>'2', 'Fecha Cumpleaños'=>'fec2'),
    'user3' => array('Nombre'=>'Paula', 'Dirección'=>'carrera 3', 'Teléfono'=>'3', 'Fecha Cumpleaños'=>'fec3')
);

var_dump($usuarios['user3']) .'<br>';
echo '<br>';

foreach ($usuarios as $key => $value) {
        echo $key.'<br>';

    foreach ($value as $key2 => $value2) {
        echo "$key2: ". $value2. "<br>";
    }
}

?>