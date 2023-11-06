<?php
//30_php_comparacion_estricta.php

if (true == 1)
    echo "<h1>1.-true es igual 1</h1>";
if (true == "hola")
    echo "<h1>2.-true es igual \"hola\"</h1>";
if (true == "-5")
    echo "<h1>3.-true es igual \"-5\"</h1>";
if (false == 0)
    echo "<h1>4.-false es igual 0</h1>";
if (false == "0")
    echo "<h1>5.-false es igual \"0\"</h1>";
if (true == "0.0")
    echo "<h1>6.-true es igual \"0.0\"</h1>";
if (false == 0.0)
    echo "<h1>7.-false es igual 0.0</h1>";
if ("25hola" == 25)//en php inferior a 8
    echo "<h1>8.-25 es igual  que \"25 hola\"</h1>";
if (0 == "Manuel")//en php inferior a 8
    echo "<h1>9.-0 es igual  que \"Manuel\"</h1>";
if (0 == "")//en php inferior a 8
    echo "<h1>10.-0 es igual  que \"\"</h1>";
if (0 == "0")
    echo "<h1>11.-0 es igual  que \"0\"</h1>";
if (0 == "0.0")
    echo "<h1>12.-0 es igual  que \"0.0\"</h1>";
if (0 == 0.0)
    echo "<h1>13.-0 es igual  que 0.0</h1>";
if (25 == "                 25")
    echo "<h1>14.-25 es igual  que \"&nbsp&nbsp&nbsp&nbsp25\"</h1>";

