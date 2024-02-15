<?php //05_parametros_referencia.php
function sumar(&$num1, &$num2)
{
    $num1++;
    $num2++;
    echo "<h1>dentro de sumar $num1+$num2</h1>";
    return $num1 + $num2;
}

$valor1 = 5;
$valor2 = 7;
echo "<h1>Voy a sumar $valor1 y $valor2</h1>";
$total = sumar($valor1, $valor2);
echo "<h1>La suma de $valor1 y $valor2 es:$total</h1>";
?>

