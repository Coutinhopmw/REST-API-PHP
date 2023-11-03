<?php

namespace model;
require_once("vendor/autoload.php");
use connection\connection;
use PDO;

class usermodel{
    function cadastro($nome, $telefone){
        $connection = new connection();
        $result = $connection -> connect() -> query("INSERT INTO usuarios (nome, telefone) VALUES ('$nome', '$telefone');") -> fetchAll(PDO::FETCH_ASSOC);
        if (isset($result[0])) {
            return $result;
        }
        else{
            return 0;
        }
    }
    function listar(){
        $connection = new connection();
        return $connection -> connect() -> query("SELECT* FROM usuarios;") -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>