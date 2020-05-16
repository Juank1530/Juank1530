<?php

$signo = 'Leo';
function imprimeSigno($sig)
{
    echo "Tu signo es $sig<br>";
}

imprimeSigno($signo);

function verLibro($libro = '100 Años de Soledad')
{
    echo "Mi libro favorito es $libro<br>";
}

verLibro();

function valorAsignado(&$cadena)
{
    $cadena .= " Mundo !!";
}

$texto = "Hola ";

valorAsignado($texto);

echo $texto;
