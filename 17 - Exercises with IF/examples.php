<?php
/* Realizar un programa en donde se pide la edad del usuario;
si es mayor de edad debe aparecer un mensaje indicándolo. */
$age = 20;
if($age >= 18){
    echo "Mayor de edad";
}

/* En una almacén se hace un 20% de descuento a los clientes cuya compra
supere los $100 ¿Cuál será la cantidad que pagará una persona por su compra? */
$total = 320;
if($total >= 100){
    $total = $total - ($total * 0.20);
}
echo "El total a pagar es de: $".$total;