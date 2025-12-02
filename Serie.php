<?php

class Serie extends Titulo
{
    private function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodios,
        public readonly int $minutosPorEpisodios,
    ) {
        __construct($nome, $anoLancamento, $genero);
    }
}