<?php
function sumar_lista (...$numeros):int{
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

$total = sumar_lista (5,6,7,8,9);
echo "<h1>$total</h1>";
?>