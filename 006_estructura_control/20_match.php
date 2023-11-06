<?php
$idiomas = ['fr', 'en', 'es'];
$idioma = $idiomas[rand(0,2)];
$msj = match($idioma){
    "fr"=> "Idioma seleccionado Francés",
    "en"=> "Idioma seleccionado Inglés",
    "es"=> "Idioma seleccionado Español",
    default => "Idioma incorrecto"
};

echo "<h1>$msj</h1>";
