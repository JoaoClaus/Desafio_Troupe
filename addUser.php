<?php

    //requere o arquivo de inicialização
    require_once('insercs/initialize.php');
    //header para dados serem exibidos no formato json
    header('Content-type: application/json; charset=UTF-8');

    //cria o array de resposta 
    $response = array();

    //cria if para checar se todos os dados para adição no banco de dados estão preenchidos
    if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cpf']) && isset($_POST['email'])
     && isset($_POST['celular']) && isset($_POST['cep']) && isset($_POST['logradouro']) && isset($_POST['bairro'])
     && isset($_POST['cidade']) && isset($_POST['uf']) && $api->selUserCPF('cpf') == 0){
        //binda valores inseridos com variável
        $nome = $_POST['nome'];
        $snome = $_POST['sobrenome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $cel = $_POST['celular'];
        $cep = $_POST['cep'];
        $log = $_POST['logradouro'];
        $bair = $_POST['bairro'];
        $cid = $_POST['cidade'];
        $uf = $_POST['uf'];

        //variavel ação para executar função de adição de usuários
        $acao = $api->addUser($nome, $snome, $cpf, $email, $cel, $cep, $log, $bair, $cid, $uf);

        //if para informar se inserção de dados ocorreu tudo OK
        if($acao){
            $response['status'] = "200";
            $response['message'] = "Cadastro feito com sucesso!";
        }else{
            $response['status'] = "404";
            $response['message'] = "Problema ao efetuar cadastro!";
        }
        //echo de resposta 
        echo json_encode($response);
     //caso falte algum valor informa ao usuário
     }else{        
            $response['status'] = "400";
            $response['message'] = "Parametros faltando para cadastro!";
            echo json_encode($response);
         }
     