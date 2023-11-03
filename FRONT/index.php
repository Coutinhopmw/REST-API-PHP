<?php

$url = $_SERVER["REQUEST_URI"];

switch($url){
    case "/":
        include("src/view/cadastro.php");
        break;
    case "/cadastro": 
        include("src/view/cadastro.php");
        break;
    case "/listar":
        include("src/view/listar.php");
        break;
    default: 
        echo("Error 404");
        break;
}

?>