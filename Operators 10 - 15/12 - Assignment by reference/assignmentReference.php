<?php
    $text = "Argentina";
    $var_1 = $text;
    $var_2 = &$text;
    echo $var_2;

    $text = "Lautaro Santillan";
    echo $var_2;