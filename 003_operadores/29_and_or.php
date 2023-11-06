<?php //29_

// La asignación tiene menor  preferencia que &&
// mayor que AND, observa el ejemplo
$resultado = true && false;
echo $resultado == true ? "true && false =true": "true && false = false";
echo "<hr />";
$resultado = true AND false;
echo $resultado == true ? " true AND false = true": "true AND false = false";
echo "<hr />";
$resultado = false || true;
echo $resultado == true ? "false || true = true": "false || true = = false";
echo "<hr />";
$resultado = false OR true;
echo $resultado == true ? "false OR true = true": "false OR true = false";
//Tanto AND como && tiene menor preferencia que > y <
$numero = rand(1,300);
if ($numero > 100 && $numero <200)
echo "<h1>El número $numero está entre 100 y 200</h1>";
else
    echo "<h1>El número $numero NO está entre 100 y 200</h1>";
?>
