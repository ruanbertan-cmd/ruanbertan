<?php

$notasBimetre1 = [
    'Marcia' => 9,
    'Jorge' => 10,
    'Roger' => 10,
];

$notasBimetre2 = [
    'Marcia' => 9,
    'Jorge' => 3,
];

$alunosFaltantes = array_diff_key($notasBimetre1, $notasBimetre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));