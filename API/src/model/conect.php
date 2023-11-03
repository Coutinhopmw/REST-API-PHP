<?php
    namespace model;
    require_once("vendor/autoload.php");
    use PDO;
    class conect{
        function conect(){
            $conn = new PDO("pgsql:host=localhost;port=5433;dbname=db", "postgres", "1");
            return $conn;
        }
    }

