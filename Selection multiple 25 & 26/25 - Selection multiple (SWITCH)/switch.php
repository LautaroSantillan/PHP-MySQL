<?php
    $fruit = "apple";
    switch($fruit){
        case "banana":
            echo "That's a banana";
        break;
        case "apple":
            echo "That's an apple";
        break;
        default:
            echo "That isn't a banana or an apple";
    }
    echo "\n";
    $day = 5;
    switch($day){
        case 1:
            echo "Monday";
        break;
        case 2:
            echo "Tuesday";
        break;
        case 3:
            echo "Wednesday";
        break;
        case 4:
            echo "Thursday";
        break;
        case 5:
            echo "Friday";
        break;
        case 6:
            echo "Saturday";
        break;
        case 7:
            echo "Sunday";
        break;
        default:
            echo "Put a number between 1 and 7";
    }