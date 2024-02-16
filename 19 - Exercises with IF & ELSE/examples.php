<?php
    /* Calcular el total que una persona debe pagar en una llantera, el precio c/u es 
    de $800 si se compran menos de 5 llantas y de $700 si se compran 5 o más */
    $cant = 9;
    if($cant < 5){
        $total = $cant * 800;
    }else{
        $total = $cant * 700;
    }
    echo "El total a pagar es de $".$total;

    /* Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobará si su
    promedio de 3 calificaciones es mayor o igual a 7.0, reprueba en caso contrario*/
    $not1 = 7; 
    $not2 = 9; 
    $not3 = 5; 
    $prom = ($not1+$not2+$not3)/3;
    if($prom >= 7.0){
        echo "Estudiante aprobado con promedio de: ".$prom;
    }else{
        echo "Estudiante desaprobado con promedio de: ".$prom;
    }