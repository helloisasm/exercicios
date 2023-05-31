<?php
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
require_once('conexao.php');

$sql = "INSERT INTO aluno(id,nome,endereco) VALUES (40, '$nome', '$endereco')";
$stmt = $conexao -> prepare($sql);
if($stmt -> execute()){
    echo "<strong> OK! <strong> o aluno $nome foi incluido com sucesso";
}
?>