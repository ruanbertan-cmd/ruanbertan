<?php

echo "Bem vindo ao servidor de filmes!\n\n";

$nomeFilme = "O renascimento - Wolverine";
$nomeFilme = "Documentario - David Goggins";
$nomeFilme = "Se Beber Não Case";

$anoLancamento = $argv[1] ?? 2025;
$anoAtual = date("Y");

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < $anoAtual;

echo "Nome do Filme: $nomeFilme\n";
echo "Nota do Filme: $notaFilme\n";
echo "Ano de Lançamento: $anoLancamento\n";

if ($anoLancamento > $anoAtual) {      
   echo "Esse filme é lançamento!\n";
} elseif ($anoLancamento > $anoAtual -3 && $anoLancamento <= $anoAtual) {
   echo "Esse filme é recente!\n";
} else {
   echo "Não é um lançamento\n";
}

$genero = match ($nomeFilme) {
    "O renascimento - Wolverine" => "Ação",
    "Documentario - David Goggins" => "Motivação",
    "Se Beber Não Case" => "Comédia",
    default => "indefinido",
};

echo "Gênero: $genero\n";