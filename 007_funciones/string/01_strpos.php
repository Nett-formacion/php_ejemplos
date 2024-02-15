<?php
//01_funciones_string.php
$cadena= "Esto es una cadena de texto";
$buscar= "cadena";
if (($pos=strpos($cadena, $buscar))!=null)
    echo "<h1><span style='color:red'>$buscar</span> está en <span style='color:red'>$cadena</span> en la posición $pos</h1>";
else
    echo "<h1>$buscar no está en $cadena </h1>";
$buscar ="E";
if (($pos=strpos($cadena, $buscar))!=null)
    echo "<h1><span style='color:red'>$buscar</span> está en <span style='color:red'>$cadena</span> en la posición $pos</h1>";
else
    echo "<h1><span style='color:red'>$buscar</span> no está en <span style='color:red'>$cadena</span></h1>";
