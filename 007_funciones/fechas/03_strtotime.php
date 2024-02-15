<?php
//funciones/fechas/03_strtotime.php
$time= strtotime("01/01/1969");
echo "<h1>Un valor anterior a 1970 01/01/1969  $time</h1>";
echo "<h1>Segundos transcurridos desde el 1/1/1970 <span style='color:red'>$time</span></h1>";
$time =strtotime("05/10/23 13:31");
echo "<h1>Marca de tiempo de ahora $time</h1>";
$time =strtotime("+5 days");
echo "<h1>Marca de tiempo dentro de 5 días $time</h1>";
$time1 = strtotime("5/01/2023");
$time2 = strtotime("06/01/2023");
$diff = $time2 - $time1;
echo "<h1>Segundos del mes de mayo $diff</h1>";



