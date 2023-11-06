<?php
$mes = rand(1,12);

switch ($mes){
    case 1:
        $nombre = $nombre ?? "enero";
    case 3:
        $nombre = $nombre ?? "marzo";
    case 5:
        $nombre = $nombre ?? "mayo";
        $dias = 31;
        break;
    case 7:
        $nombre = "enero";
        $dias = 31;
        break;
    case 8:
        $nombre = "enero";
        $dias = 31;
        break;
    case 10:
        $nombre = "octubre";
        $dias = 31;
        break;
    case 4:
        $nombre = "abril";
        $dias = 31;
        break;
    case 6:
        $nombre = "junio";
        $dias = 31;
        break;
    case 9:
        $nombre = "septiembre";
        $dias = 31;
        break;
    case 11:
        $nombre = "noviembre";
        $dias = 31;
        break;
}
echo "<h1>El mes elegido es $mes y tiene $dias días</h1>";