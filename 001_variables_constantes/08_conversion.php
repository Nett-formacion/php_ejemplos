<?php
$variable = 10_01_200_10.125;
$variable_string = (string)($variable);
$variable_string = (int)($variable);
$variable_object = (object)($variable);
$variable_array = (array)($variable);
$variable_bool = (bool)($variable);
$variable_float = (float)($variable);
$variable_bin = (binary)($variable);

var_dump("Valor de variable ",$variable);
echo "<hr/>";
var_dump("Variable string  ", $variable_string);
echo "<hr/>";
var_dump("Variable object  ",$variable_object);
echo "<hr/>";
var_dump("Variable array  ",$variable_array);
echo "<hr/>";
var_dump("Variable bool  ",$variable_bool);
echo "<hr/>";
var_dump("Variable float  ",$variable_float);
echo "<hr/>";
var_dump("Variable bin  ",$variable_bin1);
echo "<hr/>";
?>
