<?php

$time=getdate();

echo date('Y ');

echo '<pre>';
echo print_r($time);
echo '<pre/>';

$week = [
    "days" => 1,2,3,4,5,
    "star" =>6,
    "end" =>10
];


$weekend = [
    "days" => 0,6,
    "star" =>6,
    "end" =>17
];

if ($week == $time) {
    echo 'Entre semana';
}elseif ($weekend == $time) {
    echo 'fin de semana';
}


