<?php
//01_valida_contenido.php
function valida_contenido_entero(int|string|float|bool $contenido):bool|int{
    if(is_int($contenido)){
        return $contenido;
    }elseif(is_string($contenido)){
        return $contenido;
    }else{
        return false;
    }
}
$edad = valida_contenido(15);$nombre = valida_contenido("manuel");
$apellido = valida_contenido(13.25);
echo "<h1>$nombre $apellido $edad </h1>";
