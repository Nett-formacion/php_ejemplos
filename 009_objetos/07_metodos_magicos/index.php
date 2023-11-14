<?php // 07_metodos_magicos/
include "Racional.php";
//Se invoca al método mágico __construct
//Porque instancio un objeto de la clase
$r4 = new Racional("4/6");

//Se invoca al método mágico __toString
//Porque convierto el objeto a string
echo "<h1>Valor de r4 <span style='color:red'>$r4</span></h1>";

//Se invoca al método mágico __call
//Porque convierto el objeto a string
$rtdo = $r4->sumar(2,3);
echo "<h1>$rtdo</h1>";
//Al terminar el script
//se destruye el objeto
//porque se invoca al método mágico __destruct
?>