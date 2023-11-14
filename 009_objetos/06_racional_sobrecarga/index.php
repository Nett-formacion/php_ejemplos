<?php
include "Racional.php";
$r1 = new Racional();//Espero 1/1
$r2 = new Racional(25);//Espero 25/1
$r3 = new Racional(2,5);//Espero 2/5
$r4 = new Racional("4/6");//Espero 4/6
echo "<h1>$r1 (espero 1/1)</h1>";
echo "<h1>$r2 (espero 25/1)</h1>";
echo "<h1>$r3 (espero 2/5)</h1>";
echo "<h1>$r4 (espero 4/6)</h1>";