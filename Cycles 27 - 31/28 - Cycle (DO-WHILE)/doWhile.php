<?php
    /* 1) Diseñe un programa que imprima los numeros del 1 hasta 
    el 20 (Incremento y Decremento) */
    $cont = 1;
    do{
        echo $cont."<br>";
        $cont ++;
    }while($cont <= 20);
    $cont --;
    do{
        echo $cont."<br>";
        $cont --;
    }while($cont >= 1);
