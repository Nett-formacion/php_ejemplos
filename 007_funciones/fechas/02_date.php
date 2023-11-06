<?php
//funciones/fechas/02_date.php
$fecha_actual =date("d/m/Y H:i:s");
echo "<h1>La fecha actual es <span style='color:red'>$fecha_actual</span></h1>";

$fecha_futura =date("d/m/Y H:i:s", time()+24*60*60);
echo "<h1>La fecha de mañana será  <span style='color:red'>$fecha_futura</span></h1>";


