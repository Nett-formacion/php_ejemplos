<?php

$comillas_dobles="<h2>Esto es una cadena</h2>";
$comillas_simples='<h2>Aparentemente igual que con comillas dobles</h2>';
echo $comillas_dobles;
echo $comillas_simples;
$nombre = "Manuel";
$comillas_dobles="<h1>Sustituirá el valor por la variable <span style='color:red'>$nombre</span></h1>";
$comillas_simples='<h1>No Sustituirá el valor por la variable <span style=\'color:red\'>$nombre</span></h1>';
echo $comillas_simples;
echo $comillas_dobles;
$comillas_dobles="<h1>Puedo interpretar caracteres especiales <span style='color:red'>\\ \" \n \t\t\t\t\t\t \$nombre</span></h1>";
$comillas_simples='<h1>No Puedo interpretar caracteres especiales <span style=\'color:red\'>\n \t\t \$nombre</span>  solo <span style=\'color:red\'>\\ \'</span> </h1>';
echo $comillas_dobles;
echo $comillas_simples;
$comillas_dobles="<h1>En html el salto es &ltbr&gt <br /> pero el fichero verá un \n como otra línea \n y otra</h1>";
echo $comillas_dobles;


?>
'