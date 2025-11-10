<?php
    //conectando com o servidor de banco de dados
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "projeto-login";

    //criando variavel para conexão com o banco de dados
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //condição para verificar se a conexão esta correta
    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }

?>