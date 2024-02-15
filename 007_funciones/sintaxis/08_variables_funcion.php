<?php //08_variables.php
$saludo = function(string $nombre="Anónimo"){
    echo "<h1>Hola $nombre</h1>";
};

$saludo();
$saludo("Nieves");
echo "<h1>La variable \$saludo es de tipo ".gettype($saludo)."</h1>";
var_dump($saludo);