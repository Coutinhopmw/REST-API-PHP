<?php
    namespace model;
    require_once("vendor/autoload.php");
    use PDO;
    use model\conect;
class data {
    function listarUsuarios(){
        $conn = new conect();
        $result = $conn->conect()->query('
            SELECT * FROM usuarios; 
        ');
         $result = $result-> fetchAll(PDO::FETCH_ASSOC);
         return $result;
    }

    function cadastroUsuarios($nome,$cpf){
        $conn = new conect();
        $result = $conn->conect()->query("
            INSERT INTO usuarios (nome, cpf)
            VALUES('$nome','$cpf');
        ");
         $result = $result-> fetchAll(PDO::FETCH_ASSOC);
         return $result;
    }
}
?>
