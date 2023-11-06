<?php

$listado = `ls /var/www/html`;
echo "<h1>$listado</h1>";
echo "<hr />";
$listado = shell_exec("ls /var/www/html");
echo "<h1>$listado</h1>";
?>
