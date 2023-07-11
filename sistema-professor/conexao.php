<?php 
    define('HOST', 'localhost');
    define('USUARIO', 'root');
    define('SENHA', 'ifbaiano');
    define('DB', 'Ifbaiano');

    try{
        $conexao = new pdo ('mysql:host='. HOST. ';dbname='. DB, USUARIO, SENHA);
    } catch (PDOException $e) {
        echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
         Erro gerado " . $e->getMessage();
    }

?>