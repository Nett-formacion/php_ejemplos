<?php

$fruta="fresa";
$$fruta = 25;
echo "<h1>Valor de fruta $fruta y su precio {$$fruta}</h1>";
$fruta = "manzana";
$$fruta = 30;
echo "<h1>Valor de fruta $fruta y su precio {$$fruta}</h1>";
$fruta = "melones";
$$fruta = 15;
echo "<h1>Valor de fruta $fruta y su precio {$$fruta}</h1>";
$fruta = "zanahorias";
$$fruta = 12;
echo "<h1>Valor de fruta $fruta y su precio {$$fruta}</h1>";
//Otra forma mas compleja de hacerlo
$fruta="fresa";
${$fruta."_precio"} = 25;
echo "<h1>Valor de fruta $fruta y su precio ".${$fruta."_precio"}." </h1>";
//echo ${$fruta . "_precio"};
$fruta = "manzana";
${$fruta."_precio"} = 30;
echo "<h1>Valor de fruta $fruta y su precio ". ${$fruta."_precio"}."</h1>";
$fruta = "melones";
${$fruta."_precio"} = 15;
echo "<h1>Valor de fruta $fruta y su precio ". ${$fruta."_precio"}."</h1>";
$fruta = "zanahorias";
${$fruta."_precio"} = 12;
echo "<h1>Valor de fruta $fruta y su precio ". ${$fruta."_precio"}."</h1>";
