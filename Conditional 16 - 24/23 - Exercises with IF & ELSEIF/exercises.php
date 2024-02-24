<?php
    /* Se desea diseñar un programa que escriba los nombres de los días de la 
    semana en función del valor de una variable DIA.*/ 
    $day = 5;
    if($day == 1){
        echo "Monday";
    } else if($day == 2) {
        echo "Tuesday";
    } else if($day == 3) {
        echo "Wednesday";
    } else if($day == 4) {
        echo "Thursday";
    } else if($day == 5) {
        echo "Friday";
    } else if($day == 6) {
        echo "Saturday";
    } else if($day == 7) {
        echo "Sunday";
    } else {
        echo "ERROR: Introdujo un valor erroneo";
    }
    echo "\n";
    /* En una fabrica de computadoras se planea ofrecer a los clientes un descuento 
    que dependerá del número de computadoras que compre. Si las computadoras son menos de
    cinco se les dará un 10% de descuento sobre el total de la compra; si el número de
    computadoras es mayor o igual a cinco pero menos de diez se le otorga un 20% de descuento;
    y si son 10 o más se les da un 40% de descuento. El precio de cada computadora es de $700*/
    $cant = 3;
    $total = $cant * 700;
    if($cant<5){
        $total = $total * 0.9;
    } else if($cant>=5 && $cant<10){
        $total = $total * 0.8;
    } else if($cant>=10){
        $total = $total * 0.6;
    }
    echo "The total to pay is: $".$total;
