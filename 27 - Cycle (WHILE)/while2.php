<?php
    /* 2) Diseñe un programa que imprima la tabla de multiplicar
    de un numero dado, desde el factor 1 hasta el 12 (Incremento 
    y Decremento) */
    $number = 8;
    $cont = 1;
    while($cont<=12){
        echo $number*$cont."<br>";
        $cont ++;
    }
    $cont --;
    while($cont>=1){
        echo $number*$cont."<br>";
        $cont --;
    }