<?php
header("Content-Type: application/json");
require("vendor/autoload.php");
use controller\usercontroller;

$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    switch ($url) {
        case '/cadastro':
            $usuario = new usercontroller();
            $result = $usuario -> cadastro(file_get_contents("php://input"));
            echo $result;
            break;
        
        default:
            echo "Rota não existe";
            break;
    }
}
if ($method == "GET") {
    switch($url) {
        case '/listar':
            $usuario = new usercontroller();
            $result = $usuario -> listar();
            echo $result;
            break;
        default:
            echo "Rota não existe";
            break;
    }
} if ($method != "GET" && $method != "POST") {

    // se o método passado não está em nenhum if então ele não faz sparte da api logo
    // a mensagem abaixo é retornada no echo
    $response = [
        "status" => 405,
        "message" => "Metodo $method nao permitido"
    ];
    header ("HTTP/1.0 405 Method Not Allowed");
    echo (json_encode ($response));
}

?>