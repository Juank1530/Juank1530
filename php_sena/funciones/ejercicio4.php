<?php

$persona = array(
    'nombre' => 'Juank',
    'apellido' => 'Tamara',
    'celular' => '30000',
);

$key = array_search('Tamara', $persona);

echo $key . '<br>';

$numero = array(
    'Uno',
    'Dos',
    'Tres',
);

$key2 = array_search('Tres', $numero);

echo $key2 . '<br>';
