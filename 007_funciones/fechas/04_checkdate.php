<?php
//funciones/fechas/03_checkdate.php

//fecha correcta ya que es bisiesto
$dia = 29;
$mes = 2;
$year = 2000;
echo "<h1>la fecha  $dia/$mes/$year es ".(checkdate($mes, $dia, $year)? "correcta": "incorrecta")."</h1>";

//Incorrecto ya que 2001 no es bisiesto
$year = 2001;
echo "<h1>la fecha  $dia/$mes/$year es ".(checkdate($mes, $dia, $year)? "correcta": "incorrecta")."</h1>";


