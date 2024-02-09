<?php
$a = $_POST['nombre'];
echo $a;
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
<form action="a.php" method="POST">
    <input type="text" name="nombre" id="">
    <input type="submit" value="Enviar">
</form>

</body>
</html>
