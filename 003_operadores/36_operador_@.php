<?php
// Suprimir un error/warning de que el fichero no existe
$contenido = @file_get_contents("fichero_inexistente.txt");

// El siguiente mensaje no se mostrará debido al operador @
echo "Contenido del fichero inexistente $contenido -\n";


