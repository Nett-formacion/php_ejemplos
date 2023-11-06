<?php //04_parametros_formales.php
function sumar($num1, $num2)
{
    $num1++;
    $num2++;
    echo "<h1>dentro de sumar $num1+$num2</h1>";
    return $num1 + $num2;
}

$num1 = 5;
$num2 = 7;
$total = sumar($num1, $num2);
echo "<h1>La suma de $num1 y $num2 es:$total</h1>";
?>

