<?php
//34_operador_concatenacion_asignacion.php
$caracteres ="";
for ($n=32; $n<127; $n++){
    $caracteres.= chr($n);
}
echo "<h1>$caracteres</h1>";
?>

