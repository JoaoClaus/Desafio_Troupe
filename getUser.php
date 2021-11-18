<?php

    //requere o arquivo de inicialização
    require_once('insercs/initialize.php');
    //header para dados serem exibidos no formato json
    header('Content-type: application/json; charset=UTF-8');

    //cria o array de resposta 
    $response = array();

    //cria if para checar se o usuário quer cpf especifico
    if(isset($_GET['cpf'])){
        //binda o valor de cpf
        $cpf = $_GET['cpf'];

        //variavel ação para armazenar função com o resultado da pesquisa
        $acao = $api->selUserCPF($cpf);

        //if para informar se o dado foi encontrado ou não
        if($acao){
            $response['status'] = "200";
            $response['message'] = "Dados do Usuário:";
            $response['dados'] = $acao;
        }else{
            $response['status'] = "404";
            $response['message'] = "Dados não encontrados";
        }
    //caso não informado CPF mostrar todos os registros
    }else{
        $acao = $api->selTudo();
        $response['status'] = "200";
        $response['message'] = "Dados de todos os Usuários:";
        $response['dados'] = $acao;
    }

    //echo de resposta 
    echo json_encode($response);