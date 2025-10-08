<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'Ruan-pause79';
    $dbName = 'formulario-proposta';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_error)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão realizada com sucesso";
    }

    ?>
    