<?php
    $cont = 1;
    while($cont<=20){
        echo $cont."<br>";
        if($cont == 8){
            break;
        }
        $cont ++;
    }

    echo "\n"."<br>";

    $pc = ["SO", "SSD", "GPU", "RAM", "CPU"];
    foreach($pc as $component){
        echo $component."<br>";
        if($component == "RAM"){
            break;
        }
    }

    echo "\n"."<br>";

    $pc = ["SO", "SSD", "GPU", "RAM", "CPU"];
    foreach($pc as $component){
        if($component == "GPU"){
            continue;
        }
        echo $component."<br>";
    }

    echo "\n"."<br>";

    for($i=0; $i<=9; $i++){
        if($i==5){
            continue;
        }
        echo $i."<br>";
    }

    echo "\n"."<br>";

    while($i<=20){
        if($i==11 || $i==14 || $i==19){
            $i++;
            continue;
        }
        echo $i."<br>";
        $i++;
    }

