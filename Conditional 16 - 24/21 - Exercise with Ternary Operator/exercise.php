<?php
    /* Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas
    o más se aplica un descuento del 20% sobre el total, y si son menores de 3 camisas habrá un descuento 
    del 10% */
    $shirts = 6;
    $price = 11;
    $total = $shirts * $price;
    $total = ($shirts >= 3) ? $total * 0.8 : $total * 0.9;
    echo "El total a pagar es $".$total;