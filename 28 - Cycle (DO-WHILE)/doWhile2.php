<?php
    /* 2) Diseñe un programa que imprima la tabla de multiplicar
    de un numero dado, desde el factor 1 hasta el 12 (Incremento 
    y Decremento) */
    $number = 6;
    $cont = 1;
    do{
        echo $number." X ".$cont." = ".$number*$cont."<br>";
        $cont ++;
    }while($cont <= 12);
    echo "\n"."<br>";
    $cont --;
    do{
        echo $number." X ".$cont." = ".$number*$cont."<br>";
        $cont --;
    }while($cont >= 1);