<?php

namespace controller;
require_once ("vendor/autoload.php");
use api\api;

class usercontroller{
    function cadastrar($nome, $telefone){
        $api = new api();
        $url = "http://localhost:8001/cadastro";    
        $data = [
            "nome" => $nome, 
            "telefone" => $telefone
        ];
    $method = "post";
    $response = $api -> Api($url, $method, json_encode($data));
    return $response;
    }
    
    function listar(){
        $api = new api();
        $url = "http://localhost:8001/listar";
        $data = [];
    $method = "get";
    $response = $api -> Api($url, $method, json_encode($data));
    return $response;
    }
}

?>