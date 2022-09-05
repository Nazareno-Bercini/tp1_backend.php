<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo practico n 1</h1>
    <?php
    echo "Hola mundo";
    ?>

    <hr>
    <br>
    
    <?php
    $mensaje = "Hola mundo";

    echo $mensaje;
    ?>

    <hr>
    <br>

    <?php
    $var1 = 25;
    $var2 = 5;

    $suma = $var1 + $var2;
    $resta = $var1 - $var2;
    $multip = $var1 * $var2;
    $division = $var1 / $var2;
    $resto = $var1 % $var2;

    echo $suma;
    echo $resta;
    echo $multip;
    echo $division; 
    echo $resto;
    ?>

    <hr>
    <br>

    <?php

    $gcelcius = 20;
    
    $gfah = $gcelcius * 9/5 + 32;

    echo $gfah;

    ?>

    <hr>
    <br>

    <?php

    $base = 18;
    $altura = 12;

    $rectangulo = $base * 2 + $altura * 2;

    echo $rectangulo;
    ?>

    <hr>
    <br>

    <?php

    $radio = 30;
    $pi = 3.14;

    $circulo = 2 * $pi * $radio;

    echo $circulo;
    ?>

    
</body>
</html>