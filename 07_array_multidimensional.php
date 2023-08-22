<?php

$calificaciones = [
    'Ana' => [
        "Matematicas" => 3,
        "Historia" => 4,
        "Ingles" => 1
    ],
    'Juan' => [
        "Matematicas" => 5,
        "Historia" => 3,
        "Ingles" => 4
    ],
    'Francisco' => [
        "Matematicas" => 5,
        "Historia" => 5,
        "Ingles" => 5
    ]
];

//count numero de elementos
echo 'Total de califica: '. count($calificaciones,COUNT_RECURSIVE);

//cambiar info
$calificaciones['Ana']['Matematicas']=5;
echo "<pre>";
print_r($calificaciones);
echo "</pre>";