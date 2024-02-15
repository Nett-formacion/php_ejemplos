<?php //11_funcion_recursiva.php

function factorial ($numero){
    return ($numero ==0)? 1: $numero * factorial($numero-1);
}
$factorial_5= factorial(5);
echo "<h1>El factorial de 5 es: $factorial_5</h1>";

?>