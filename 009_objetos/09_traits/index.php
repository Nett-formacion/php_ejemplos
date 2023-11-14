<?php
$carga = fn($clase)=>require "$clase.php";
spl_autoload_register($carga);

function carga ($clase){
    require ("$clase.php");
}
sql_autoload_register(function ($clase){
    require "$clase.php";
}
);

require "Trabajador.php";

require "Persona.php";
require "Medico.php";
require "Bailarin.php";




$medico = new Medico("María", "Niveves", 2003, "Cardiología");
$bailarin = new Bailarin("Pedro", "Juarez", "Danza");

echo "<h1>$medico</h1>";
echo "<hr  />";
echo "<h1>$bailarin</h1>";
$medico->set_sueldo(1000);
$bailarin->set_sueldo(3500);

echo "<h1>$medico  tiene un sueldo ".$medico->get_sueldo()."</h1>";
echo "<h1>$bailarin tiene un sueldo ".$bailarin     ->get_sueldo()."</h1>";





?>
