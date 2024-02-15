<?php //10_funcion_flecha_2.php
$num1=5;
$sumar = fn($num2) => $num1 + $num2;
$total = $sumar(7);

echo "<h1>La suma de 5 y 7 es: $total</h1>";
?>