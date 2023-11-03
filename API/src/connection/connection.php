<?php

namespace connection;
require_once("vendor/autoload.php");
use PDO;

class connection{
    function connect(){
        return new PDO("pgsql:host=localhost;port=5433;dbname=api", "postgres", "1");
    }
}

?>