<?php 
    namespace service;
    require_once("vendor/autoload.php");
    use model\data;
    class userService{
        function listarUsuarios(){
            $obj =  new data();
            $result = $obj->listarUsuarios();
            return json_encode($result);
        }
        function cadastroUsuarios($json){
            $obj =  new data();
            $data = json_decode($json, true);
            $nome = $data["nome"];
            $cpf = $data["cpf"];
            $result = $obj->cadastroUsuarios($nome,$cpf);

            if (isset($result[0])) {
                $data = [
                    "response" => "Usuario criado com sucesso"
                ];
                return json_encode($data);
            }else{
                $data = [
                    "response" => "Falha na criação"
                ];
                return json_encode($data);
            }

        }
    }
?>