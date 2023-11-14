<?php
$carga = fn($clase)=>require_once"$clase.php";
spl_autoload_register($carga);

$perro = new Perro("Bobby", "Pastor Aleman");
$gato = new Gato("Misifu", "Siames");
$pato = new Pato("Donald", "Blanco");

echo "<h1>$perro dice <span style='color:red'>".$perro->hablar()."</span></h1>";
echo "<h1>$gato  dice <span style='color:red'>".$gato->hablar()."</span></h1>";
echo "<h1>$pato  dice <span style='color:red'>".$pato->hablar()."</span></h1>";



