<?php
$numero1 = rand(1,100);
$numero2 = rand(1,100);
$resultado = $numero1<=> $numero2;
match ($resultado) {
   -1 => "<h1>$numero1 es menor que $numero2</h1>",
    0 => "<h1>$numero1 es igual que $numero2</h1>",
    1 => "<h1>$numero1 es mayor que $numero2</h1>",
};
//Versus
if ($numero1> $numero2)
    echo "<h1>$numero1 es mayor que $numero2</h1>";
elseif ($numero1< $numero2)
    echo "<h1>$numero1 es menor que $numero2</h1>";
else
    echo "<h1>$numero1 es igual que $numero2</h1>";
?>

