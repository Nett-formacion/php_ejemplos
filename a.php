<?php

$saludo = function ($nombre){
    $hora = date("H");
    $msj = match($hora){
    6,7,8,9,10,11,12,13,14 =>"Buenos días",
    15,16,17,18,19 => "Buenas tardes",
    default =>"Buenas noches"
    };
    return ("Hola $nombre, $msj");


};

$sumar = function ($a, $b){
    return $a+$b;
};

echo "<h1>{$sumar(5,15)}</h1>";
echo "Saludando {$saludo("Juan")}";


