<?php
function saludar($nombre){
    echo 'Hola '.$nombre.'<br>';
}

function sumar ($a, $b){
    return $a + $b;
}

saludar('Jose');
echo sumar(3,5);