<?php

require_once "Conexion.php";


class Crud extends Conexion
{

    public function mostrarDatos()
    {

        $sql = "SELECT
        id,
        nombre,
        t_id,
        num_id,
        tel,
        f_nacimiento,
        f_h_creacion
    FROM
        customer";

        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        $query->close();
    }

    public function insertarDatos($datos){

        $sql = "INSERT INTO customer (id,nombre,t_id,num_id,tel,f_nacimiento,f_h_creacion)
                                VALUES(:id,:nombre,:t_id,:num_id,:tel,:f_nacimiento,:f_h_creacion)";
        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":id", $datos[''],PDO::PARAM_INT);
        $query->bindParam(":nombre", $datos['nombre'],PDO::PARAM_STR);
        $query->bindParam(":t_id", $datos['T_documento'],PDO::PARAM_STR);
        $query->bindParam(":num_id", $datos['N_Documento'],PDO::PARAM_STR);
        $query->bindParam(":tel", $datos['Telefono'],PDO::PARAM_STR);
        $query->bindParam(":f_nacimiento", $datos['Nacimiento'],PDO::PARAM_STR);
        $query->bindParam(":f_h_creacion", $datos['creacion'],PDO::PARAM_STR);
        

        return $query->execute();
        $query->close();
    }



}


/*

$datos = array(
    'nombre' => $_POST['nombre'],
    'Tipo de documento' => $_POST['Tipo de documento'],
    'N Documento' => $_POST['N Documento'],
    'Telefono' => $_POST['Telefono'],
    'Fecha de Nacimiento' => $_POST['Fecha de Nacimiento']
);
<form id="frminsert" onsubmit="return insertarDatos()" method="post">
<label>Nombre</label>
<input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
<div class="form-group">
  <label for="exampleFormControlSelect1">Tipo de documento</label>
  <select class="form-control form-control-sm" id="Tipo de documento" name="Tipo de documento">
    <option>Seleccione Uno</option>
    <option>Cédula</option>
    <option>Pasaporte</option>
    <option>Cédula de extrangería</option>
    <option>PEP</option>
    <option>Registro Civil</option>
    <option>tarjeta de Identidad</option>
  </select>
</div>
<!-- <label>Tipo de documento</label>
<input type="text" id="Tipo de documento" name="Tipo de documento" class="form-control form-control-sm" required=""> -->
<label> N° Documento</label>
<input type="number" id="N Documento" name="N Documento" class="form-control form-control-sm" required="">
<label>Teléfono</label>
<input type="number" id="Telefono" name="Telefono" class="form-control form-control-sm" required="">
<label>Fecha de Nacimiento</label>
<input type="text" id="Fecha de Nacimiento" name="Fecha de Nacimiento" class="form-control form-control-sm" required="">
<!-- <label>Fecha y hora de creación</label>
<input type="text" id="creacion" name="creacion" class="form-control form-control-sm" required=""> -->
<br>
<input type="submit" value="Guardar" class="btn btn-primary">
</form>
*/