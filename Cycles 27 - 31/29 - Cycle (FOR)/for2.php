<?php
    /* Diseñe un programa que imprima la tabla de multiplicar de un numero dado,
    desde el factor 1 hasta el 20 (Incremento y Decremento) */
    $number = 4;
    for($i=1; $i<=12; $i++){
        echo $number." X ".$i." = ".$number*$i."<br>";
    }
    echo "\n"."<br>";
    for($i=12; $i>=1; $i--){
        echo $number." X ".$i." = ".$number*$i."<br>";
    }