<?php
include "Racional.php";
$r1 = new Racional();//Espero 1/1
$r2 = new Racional(25);//Espero 25/1
echo "<h1>Actualmente hay <span style='color:green'>".Racional::$contador."</span> números racionales</h1>";unset ($r1);
unset ($r2);
echo "<h1>Actualmente hay <span style='color:green'>".Racional::$contador."</span> números racionales</h1>";$r1 = new Racional();//Espero 1/1
$r2 = new Racional(25);//Espero 25/1
$r3 = new Racional(2,5);//Espero 2/5
$r4 = new Racional("4/6");//Espero 4/6
echo "<h1>Actualmente hay <span style='color:green'>".Racional::$contador."</span> números racionales</h1>";
