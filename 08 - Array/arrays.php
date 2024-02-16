<?php
    #Array scalar
    $estudiantes = ["Lautaro", "Marcelo", "Nazareno", "Luciano"];
    $estudiantes[2] = "Nicolas";
    echo $estudiantes[2];

    #Array associative
    $info = [
        "name"=>"Lautaro", 
        "lastname"=>"Santillan", 
        "edad"=>19
    ];
    $info["edad"] = 20;
    echo $info["edad"];

    #Array multidimensional
    $info_2 = [
        "name"=>"Nazareno", 
        "lastname"=>"Perez", 
        "edad"=>19,
        "cursos"=>["PHP", "Python"]
        //Could exists an array associative inside it
    ];
    $info_2["pais"] = "Argentina";
    echo $info_2["cursos"][1];
    echo $info_2["pais"];

    #Count()
    echo count($info_2);
    echo count($info_2, COUNT_RECURSIVE);