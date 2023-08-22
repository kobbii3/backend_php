<?php

$edad = 25;

if($edad > 18){
    echo 'Es mayor de edad';
}else if($edad < 18 && $edad > 0){
    echo 'Es menor de edad';
}else{
    echo 'La edad es incorrecta';
};