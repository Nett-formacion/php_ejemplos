<?php
//include_require/include_require.php
//Vamos a incluir ficheros con include, require, include_once y require_once
//Los fichero están bajo la carpeta ficheros de este ejercicio/ejemplo
echo "<h2>Ahora vamos a incluir un fichero con include</h2>";
include 'ficheros/fichero_include.php';

echo "<h2>ahora vamos a incluir un fichero con require</h2>";
require 'ficheros/fichero_require.php';

echo "<h2>Ahora vamos a incluir un fichero con include_once</h2>";
include_once 'ficheros/fichero_include_once.php';

echo "<h2>Ahora vamos a incluir un fichero con require_once</h2>";
require_once 'ficheros/fichero_require_once.php';

echo "<h2>Ahora vamos a incluir un fichero que no existe  con include</h2>";
include 'ficheros/fichero_no_existe_include.php';
echo "Vemos que no pasa nada, por que el fichero no existe pero sigue <hr />";

echo "<h2>Ahora volvemos  a incluir un fichero con include_once</h2>";
include_once 'ficheros/fichero_include_once.php';
echo "Vemos que no pasa nada, por que el fichero ya se había incluido y no se vuelve a incluir<hr />";

echo "<h2>Ahora volvemos  a incluir un fichero con require_once</h2>";
require_once 'ficheros/fichero_require_once.php';
echo "Vemos que no pasa nada, por que el fichero ya se había incluido y no se vuelve a incluir<hr />";

echo "<h2>Ahora vamos a incluir un fichero con include para ver que sí que se vuelve a incluir</h2>";
include 'ficheros/fichero_include.php';

echo "<h2>Ahora vamos a incluir un fichero con require y vemos que sí se vuelve a incluir</h2>";
require 'ficheros/fichero_require.php';

echo "<h2>Ahora no incluimos con require un fichero que no existe</h2>";
require 'ficheros/fichero_no_existe_require.php';
echo "Esta línea ya no se imprimirá ni nada que vaya después de aquí";
?>
