<?php 
    /* and(&&) - or(||) - ! */
    $var1 = 7;
    $var2 = 4;
    var_dump($var1=="7" && $var2>2);
    var_dump($var1==="7" || $var2>2);
    var_dump($var1==="7" and $var2>2);
    var_dump($var1===7 or $var2<2 || $var1<$var2);
    var_dump(!($var1==$var2));
    var_dump(!($var1===7));
    #You can use variables to store the results