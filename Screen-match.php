<?php

echo "Bem vindo ao servidor de filmes!\n\n";

$nomeFilme = "O renascimento - Wolverine";
$nomeFilme = "Documentario - David Goggins";
$nomeFilme = "Se Beber Não Case";

$anoLancamento = 2025;
$anoAtual = date("Y");

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
   $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
foreach ($notas as $nota) {
   $somaDeNotas += $notas[$i];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
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

$filme = [
   "nome" = "O renascimento - Wolverine";
   "ano" = 2021;
   "nota" = 5.6;
   "genero" = "Ação"
] 

echo $filme ["nome"]