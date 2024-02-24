<?php
    /* Pida al usuario la edad y el genero, para que la computadora le indique si ya puede
    jubilarse. Tome en cuenta que un "Hombre" se puede jubilar cuando tenga 60 años o más, 
    en cambio, una "Mujer" se jubilará si tiene más de 54 años. */
    $age = 20;
    $gender = "M";
    if($gender == "M"){
        if($age>=60){
            echo "You can retire";
        } else {
            echo "You can't retire";
        }
    } else if($gender == "F"){
        if($age>54){
            echo "You can retire";
        } else {
            echo "You can't retire";
        }
    } else {
        echo "Put a correct option";
    }
