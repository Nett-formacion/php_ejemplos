<?php
//01_str_contains.php
$cadena= "Esto es una cadena de texto";
$buscar= "E";

if (str_contains($cadena, $buscar))
    echo "<h1><span style='color:red'>$buscar</span> está en <span style='color:red'>$cadena</span> </h1>";
else
    echo "<h1>$buscar no está en $cadena </h1>";
