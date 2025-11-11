<?php 

    // print_r($_REQUEST);//retorna os dados do formulário.

    //verificação para ver se o 'submit' está sendo ativado
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa

        include_once('conexao.php');//arquivo de conexao com o banco de dados

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: '.$email);
        // print_r('<br>');
        // print_r('Senha: '.$senha);

        //comando sql para buscar os valores dos campos no banco de dados
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";

        $result = $conexao->query($sql);

        print_r($sql);//imprime os dados enviados
        print_r('<br>');
        print_r($result);//impime a resposta do banco de dados




    }else{
        //não acessa 
    }

?>