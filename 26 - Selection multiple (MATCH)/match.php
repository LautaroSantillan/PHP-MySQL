<?php
    $a = 100;
    $b = 10;
    $c = 1;
    $d = 100;
    /*$result = match ($a) {
          $b => "Same value that 'b'",
          $c => "Same value that 'c'",
          $d => "Same value that 'd'",
          default => "Not match with any variable"
    };
    echo $result;*/
    # ----- #
    echo "\n\n\n";
    $result = match ($a) {
          $b, $d => "Same value that 'b' or 'd'",
          $c => "Same value that 'c'",
          default => "Not match with any variable"
     };
     echo $result;