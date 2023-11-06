<?php


//Declaración de constantes de dos formas
const  A = 1;
define("B", "Cadena");

//Visualización de valores
echo "valor de la constante A " . A . "<br />";
echo "valor de la constante B " . B . "<br />";
echo "tipo de la constante A " . gettype(A) . "<br />";
echo "tipo de la constante B {B}" . gettype(B) . "<br />";


?>
