<?php
$operador1 = rand(1,100);
$operador2 = rand(1,100);
$suma = $operador1 + $operador2;
$resta  = $operador1 - $operador2;
$multiplicacion = $operador1 * $operador2;
$division = $operador1 / $operador2;
$modulo = $operador1 % $operador2;
$exponente = $operador1 ** $operador2;
echo "<h1>$operador1 + $operador2 =$suma</h1>";
echo "<h1>$operador1 - $operador2 =$resta</h1>";
echo "<h1>$operador1 * $operador2 =$multiplicacion</h1>";
echo "<h1>$operador1 / $operador2 =$division</h1>";
echo "<h1>$operador1 % $operador2 =$modulo</h1>";
echo "<h1>$operador1 ** $operador2 =$exponente</h1>";
?>
