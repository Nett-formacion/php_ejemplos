<?php
include "Fecha.php";
$f1 = new Fecha();
echo "valor de fecha ".$f1->mostrar_fecha();
echo "<h1> valor de día $f1->dia</h1>";

$f1 = new Fecha(1,1,2021);
$f2 = new Fecha(3,5,2025);
echo "<h1> valor de dia $f1->dia </h1>";

