<?php

class Conexion{

    public function conectar(){
        $conexion= new PDO('mysql:host=localhost;dbname=juank','root','');
        return $conexion;
    }

}
// 'mysql:host=localhost;dbname=udemy','juank',''