<?php
namespace controller;
require_once ("vendor/autoload.php");

use model\usermodel;
class usercontroller{
    function cadastro($json){
        $model = new usermodel();
        $data = json_decode($json, true);
        $result = $model -> cadastro($data["nome"], $data["telefone"]);
        if ($result != 0) {
            $data = [
                "response" => "usuario criado com sucesso!" 
            ];
            return (json_encode($data));
        }
        else{
            $data = [
                "response" => "usuario não foi criado!"
            ];
            return(json_encode($data));
        }
    }
    function listar(){
        $model = new usermodel();
        $result = $model -> listar();
        return (json_encode($result));
}


}


?>