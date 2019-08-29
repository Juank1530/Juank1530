<?php

    if(isset($_POST["enviando"])){

        $contra=$_POST["contra_usuario"];
        $nombre=$_POST["nombre_usuario"];

        //uso de switch case
        switch (true) {
            case $nombre=='Juan' && $contra=='1111':
                echo "Hola Juan<br>";
                echo"Usuario con acceso";
                break;

            case $nombre=='María' && $contra=='2222':
                echo "Hola María<br>";
                echo"Usuario con acceso<br>";
                break;

            case $nombre=='Pedro' && $contra=='3333':
                echo "Hola Pedro<br>";
                echo"Usuario con acceso<br>";
                break;
            
            default:
                echo"El nombre o contaseña no valido<br>"; 
                echo"Usuario sin acceso<br>";
                break;
        }
        
    }


?>