<?php //12_funcion_recursiva.php
function suma_lista_numeros ($numero){
    return ($numero ==1)? 1: $numero + suma_lista_numeros($numero-1);
}
$suma = suma_lista_numeros(100);
echo "<h1>La suma de los 100 primeros  números es: $suma</h1>";

function mcd($num1, $num2){
    return ($num2 == 0)? $num1: mcd($num2, $num1 % $num2);
}

$mcd = mcd(24, 36);
echo "<h1>El máximo común divisor de 24 y 36 es: $mcd</h1>";
?>