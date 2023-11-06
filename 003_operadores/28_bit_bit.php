<?php //28_

$operador1 = 25; //  11001
$operador2 = 37; // 100101
$and = $operador1 & $operador2; // 000001
printf("%b and %b = %b<br />",$operador1, $operador2, $and);
$or = $operador1 | $operador2; // 111101
printf("%b or %b = %b<br />",$operador1, $operador2, $or);
$xor = $operador1 ^ $operador2; // 111100
printf("%b ^ %b = %b<br />",$operador1, $operador2, $xor);
$not = ~$operador1 ; // 000011
printf("~%b = %b<br />",$operador1,  $not);
$division_por_2 = 24>>1;
echo "<h1>24 >> 1 = $division_por_2</h1>";
$division_por_4 = 24>>2;
echo "<h1>24 >> 2 = $division_por_4</h1>";
$multiplicar_por_16 = 2<<4;
echo "<h1>2 << 4 = $multiplicar_por_16</h1>";
?>
