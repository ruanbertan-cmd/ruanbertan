<?php

$notas = [
    'Marcia' => 9,
    'Jorge' => 10,
    'Roger' => 10,
];

krsort($notas);
var_dump($notas);

var_dump(in_array(10, $notas));

echo array_search(10, $notas);