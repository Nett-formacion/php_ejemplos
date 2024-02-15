<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fnac = $_POST['fnac'];
$genero = $_POST['genero'];
$estudios = $_POST['estudios'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="../favicon.ico"/>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Formulario</title>
</head>
<body>
<fieldset style="background:azure;width:50%;margin-left:10%">
    <legend>Ficha usuario</legend>
    <div class="listado">
    <h1><?= "$nombre" ?>    </h1>
    <h1><?= "$apellido" ?></h1>
    <h1><?= "$fnac" ?>    </h1>
    <h1><?= "$genero" ?>    </h1>
    <h1><?= "$estudios" ?></h1>
    </div>

    </form>

</fieldset>

</body>
</html>
