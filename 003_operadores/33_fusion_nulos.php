<?php
$nombre = $_POST['nombre'] ?? $_GET['nombre'] ?? "Anonimo";

//Versus
if (isset ($_POST['nombre']))
    $nombre = $_POST['nombre'];
elseif (isset ($_GET['nombre']))
    $nombre = $_GET['nombre'];
else
    $nombre = "Anonimo";

//Versus
$nombre = isset ($_POST['nombre']) ? $_POST['nombre'] : (isset ($_GET['nombre']) ? $_GET['nombre'] : "Anonimo");


?>

