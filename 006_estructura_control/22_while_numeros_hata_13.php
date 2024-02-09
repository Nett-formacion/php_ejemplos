<?php
$numero = rand(1,15); //inicializo la variable
$suma=0;
$contador=0;
while ($numero!=13) { //Establezo la condición
    $suma += $numero;
    $contador++;
    echo "<h1>El número actual es $numero</h1>";
    $numero = rand(1,15);//Actualizo

}
echo "<h1>En total han salido $contador números</h1>";
echo "<h1>La suma total de los número $suma</h1>";




