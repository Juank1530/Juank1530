<?php

require_once "../crud/Crud.php";

$obj = new Crud();

$datos = $obj->mostrarDatos();

$tabla = '<table class="table table-dark table-responsive">
                    <thead>
                        <tr class="font-weight-bold">
                            <td>Nombre</td>
                            <td>Tipo de Documento</td>
                            <td>N° Documento</td>
                            <td>Teléfono</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Fecha y hora de creación</td>
                            <td>Editar</td>
                            <td>Eliminar</td>
                        </tr>
                    </thead>
                    <tbody>';

$datosTabla="";

foreach ($datos as $key => $value) {
    $datosTabla=$datosTabla.'<tr>
                            <td>'.$value['nombre'].'</td>
                            <td>'.$value['t_id'].'</td>
                            <td>'.$value['num_id'].'</td>
                            <td>'.$value['tel'].'</td>
                            <td>'.$value['f_nacimiento'].'</td>
                            <td>'.$value['f_h_creacion'].'</td>
                            <td>
                                <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
                                    <i class="fas fa-edit"></i>
                                </span>
                                
                            </td>
                            <td>
                                <span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
                                    <li class="fas fa-trash-alt"></li>
                                </span>
                            </td>
                        </tr>';
}

echo $tabla.$datosTabla.'</tbody></table>';