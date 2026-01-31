<?php

$dados = [
    'nome' => 'Ruan',
    'nota' => 10,
    'idade' => 20,
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract($dados);
var_dump($nome, $nota, $idade);