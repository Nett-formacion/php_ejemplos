<?php
//02_parametros_defecto.php
function numero_racional(int|string $numerador = 1, int|null $denominador = 1): string
{
    if (is_string($numerador))
        return $numerador;
    else
        return "$numerador/$denominador";
}

$r1 = numero_racional();
$r2 = numero_racional(5);
$r3 = numero_racional(5, 2);
$r4 = numero_racional("6/3");
echo "<h1>$r1</h1>";
echo "<h1>$r2</h1>";
echo "<h1>$r3</h1>";
echo "<h1>$r4</h1>";
