<?php //07_variables_globales_funcion.php


function modifica_valor(){
    global $variable;
    echo "Valor de <b>\$variable</b> dentro de función -$variable- <br /> ";
    $variable++;
    echo "Valor de <b>\$variable</b> dentro de función modificada -$variable- <br /> ";
}

$variable = 20;

echo "Valor de <b>\$variable</b> en programa principal antes de invocar función: -$variable- <br />";
modifica_valor();
echo "Valor de <b>\$variable</b> en programa principal, después de invocar la función: -$variable- <br />";
?>