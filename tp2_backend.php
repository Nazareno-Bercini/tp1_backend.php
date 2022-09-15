<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp2 Backend</title>
</head>
<body>

    <?php
        $n = 7;

        if ($n > 0 ){
            echo "$n es un numero positivo";
        } else {
            echo "$n no es un numero positivo";
        }

    ?>

    <hr>
    <br>

    <?php
    $n = 7;
    if ($n > 1 && $n <10){
        echo "$n esta entre 0 y 10";
    } else {
        echo "$n no esta entre 0 y 10";
    }
    ?>

    <hr>
    <br>

    <?php
    $n = 11;
    if ($n > 10 || $n <2){
        echo "$n es mayor a 10 o es menor a 2";
    } else {
        echo "$n no es mayor a 10 ni menor a 2";
    }
    ?>

    <hr>
    <br>

    <?php
    $numero1 = 9;
    $numero2 = 8;

    if ($numero1 > $numero2){
        echo $numero1 + $numero2;
        ?>
        <?php
        echo $numero1 - $numero2;

    } elseif ($numero2 > $numero1){
        echo $numero2 * $numero1;
        ?>
        <?php
         echo $numero2 / $numero1;
         ?>
         <?php
         echo $numero2 % $numero1;
    } else{
        echo "Los números ingresados son iguales";
    }


    ?>
    
</body>
</html>