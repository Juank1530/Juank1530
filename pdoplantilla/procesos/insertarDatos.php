<?php

require_once "../crud/Crud.php";

$datos = array(
    'id'=>'',
    'nombre' => $_POST['nombre'],
    'T_documento' => $_POST['T_documento'],
    'N_Documento' => $_POST['N_Documento'],
    'Telefono' => $_POST['Telefono'],
    'Nacimiento' => $_POST['Nacimiento'],
    'creacion'=>'creacion'
);



echo Crud::insertarDatos($datos);

