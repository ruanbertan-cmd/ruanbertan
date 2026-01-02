<?php

$string = '.,Teste de Integração com PHP,...';

echo mb_strlen($string) . PHP_EOL;
echo trim(mb_strtoupper($string), ",.");

/* funções com MB servem para textos com caracteres especiais (ç, á ....)*/
