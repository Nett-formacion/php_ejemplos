<?php
//function genera_notas():iterable{
//    return  [1,3,45,5,6];
//}
//$notas = genera_notas();
//foreach ($notas as $nota) {
//    //...
//}
function generateNumbers($start, $end):iterable {
    for ($i = $start; $i <= $end; $i++) {
        yield $i;
    }
}

// Llamamos a la función y obtenemos un objeto generador
$numbers = generateNumbers(1, 5);
var_dump($numbers);
// Iteramos a través del objeto generador
foreach ($numbers as $number) {
    echo $number . ' ';
}
