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

    $prectangulo = $base * 2 + $altura * 2;
    $arectangulo = $base * $altura;

    echo $prectangulo;
    echo " // ";
    echo $arectangulo;
    ?>

    <hr>
    <br>

    <?php

    $radio = 30;
    $pi = 3.14;

    $pcirculo = 2 * $pi * $radio;
    $acirculo = $pi * $radio**2;

    echo $pcirculo;
    echo " // ";
    echo $acirculo;
    ?>

    
</body>
</html>