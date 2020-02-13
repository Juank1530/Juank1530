<?php

try {
    //Conexion a la db
    $conection = new PDO('mysql:host=localhost;dbname=Local_tests','juank','');

    $statement = $conection->prepare('UPDATE test_on_off SET prendido = 0 WHERE id = :id LIMIT 1;');

    $statement->execute(array(':id' => 1));

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

}
