<?php
require "Persona.php";
require "Medico.php";
require "Bailarin.php";




$medico = new Medico("María", "Niveves", 2003, "Cardiología");
$bailarin = new Bailarin("Pedro", "Juarez", "Danza");

echo "<h1>$medico</h1>";
echo "<hr  />";
echo "<h1>$bailarin</h1>";





?>
