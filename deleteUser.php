<?php

    //requere o arquivo de inicialização
    require_once('insercs/initialize.php');
    //header para dados serem exibidos no formato json
    header('Content-type: application/json; charset=UTF-8');

    //cria o array de resposta 
    $response = array();

    //cria if para checar se o id para exclusão foi informado
    if(isset($_POST['id'])){
        //binda o valor inserido com variavel
        $id = $_POST['id'];

        //variavel de ação para executar função de exclusão
        $acao = $api->deleteUser($id);

        //if para informar se o exclusão ocorreu OK
        if($acao){
            $response['status'] = "200";
            $response['message'] = "Cadastro deletado com sucesso!";
        }else{
            $response['status'] = "404";
            $response['message'] = "Problema ao deletar cadastro!";
        }
        //echo de resposta
        echo json_encode($response);
     //informa se id não foi inserido
     }else{
        $response['status'] = "400";
        $response['message'] = "Parametros faltando para exclusão!";
        echo json_encode($response);
     }