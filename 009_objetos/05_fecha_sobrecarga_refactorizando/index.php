<?php
include "Fecha.php";
$f1 = new Fecha(); //Fecha actual
$f2 = new Fecha(25);//día 25, el resto de la fecha actual
$f3 = new Fecha(12,10);//25/10, el año de la fecha actual
$f4 = new Fecha(1,12,2021); //1/12/2021
$f5 = new Fecha("10/12/2023"); //10/12/2023
$f5 = new Fecha(35); //Fecha actual ya que es incorrecta
echo "<h1>Valores de fechas</h1>";
echo "<h1>$f1 (esperado fecha actual)</h1>";
echo "<h1>$f2 (esperado 25 y resto fecha actual)</h1>";
echo "<h1>$f3 (esperado 12/10 del año actual)</h1>";
echo "<h1>$f4 (esperao 1/12/2023)</h1>";
echo "<h1>$f5 (como es incorrecta, esperado fecha actual)</h1>";

