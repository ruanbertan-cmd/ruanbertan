<?php

$alunos2021 = [
    'Marcia',
    'Jorge',
    'Roger',
];

$alunos2022 = [
    'Marcio',
    'Rose',
    'Larissa',
];


$turma2022 = array_merge($alunos2021, $alunos2022);

var_dump($turma2022);