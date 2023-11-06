<?php
$edad = rand(1, 120);
switch (true) {
    case ($edad <= 3):
        $msj = "Eres un bebé";
        break;
    case ($edad > 3 && $edad <= 10):
        $msj = "4-10 Eres una niña";
        break;
    case ($edad > 10 && $edad <= 17):
        $msj = "11-17 Eres un adolescente";
        break;
    case($edad > 17 && $edad <= 35):
        $msj = "Eres una joven: viaja mucho";
        break;
    case ($edad > 35 && $edad <= 65):
        $msj = " Eres todo un adulto";
        break;
    default:
        $msj = "Tú que puedes,  disfruta de tu jubilación!!!";
        break;
}
        ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?="Con la edad de $edad años,<span style='color:red'> $msj</span>"?></h1>
</body>
</html>
