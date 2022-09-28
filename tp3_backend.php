<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Tarea 4 - TP-3</title>
</head>
<body>
    <h2>1. Mostrar los números del 1 al 100.</h2>

    <?php
	    $i=1;
	    while ($i <= 100){
	    print "<p> $i </p>\n ";
	    $i++;
	    }
    ?>

    <hr>
    <br>

    <h2>2. Mostrar los números del 100 al 1.</h2>

    <?php
	    for ($i = 100; $i >= 1; $i--){
	    print "<p> $i </p>\n ";
	    }
    ?>

    <hr>
    <br>

    <h2>3. Mostrar los números pares del 1 al 100.</h2>

    <?php

	    for ($i =0; $i <= 100; $i++){
	    if(($i%2)==0){
	    print "<p> $i </p>\n ";
	    }
	    }
    ?>

    <hr>
    <br>

    <h2>4. Mostrar los números impares del 1 al 100.</h2>

    <?php

	    for ($i =0; $i <= 100; $i++){
	    if(($i%2)!==0){
	    print "<p> $i </p>\n ";
	    }
	    }
    ?>

    <hr>
    <br>

    <h2>5. Mostrar la suma de los números de 1 a 20.</h2>

    <?php

        $suma = 0;
        for ($i = 1; $i <= 20; $i++) {
        $suma += $i;
        }
        print "<p> $suma.</p>\n";

    ?>

    <hr>
    <br>

    <h2>6. Mostrar la suma de números pares de 1 a 20.</h2>

    <?php

        $suma = 0;
        for ($i = 1; $i <= 20; $i++) {
        if(($i%2)==0){
        $suma += $i;
        }}
        print "<p> $suma.</p>\n";

    ?>




    
</body>
</html>