<?php
//35_referencia.php
$variable_inicial = "Pedro";
$referenciada = &$variable_inicial;
$referenciada = "María";
echo "<h1>Valor de \$variable_inicial es $variable_inicial</h1>";
echo "<h1>Valor de \$referenciada es $referenciada</h1>";
$variable_inicial="Otro nombre";
echo "<h1>Valor de \$referenciada es $referenciada</h1>";
?>

