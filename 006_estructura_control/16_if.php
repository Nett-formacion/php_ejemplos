<?php
$numero= rand(1,100);
echo "<h1>Número generado $numero</h1>";
if ($numero %2 ==0)
    echo "<h1>El número $numero es par</h1>";
else
    echo "<h1>El número $numero es impar</h1>";