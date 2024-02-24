<?php
    $laptop = ["Acer Nitro 5", "Windows 10", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 16GB"];
    $fruits = [
        "Apples" => 10,
        "Bananas" => 20,
        "Oranges" => 9,
        "Strawberries" => 12,
        "Pears" => 17,
    ];

    foreach($laptop as $pc){
        echo $pc."<br>";
    }
    echo "\n"."<br>";
    foreach($fruits as $name => $value){
        echo "There are ".$value." ".$name."<br>";
    }
    echo "\n"."<br>";
    $products = [
        ["code" => "A001", "description" => "Mouse"],
        ["code" => "A002", "description" => "Screen"],
        ["code" => "A003", "description" => "Keyboard"],
        ["code" => "A004", "description" => "Printer"],
    ];
    foreach($products as $prod){
        echo $prod["code"]." - ".$prod["description"]."<br>";
    }

