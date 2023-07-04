<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$endereco = $_GET['endereco'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$curso = $_GET['curso'];
require_once('conexao.php');

$sql = "INSERT INTO professor(nome,cpf,endereco,email,senha,curso) VALUES ('$nome', '$cpf','$endereco', '$email', '$senha', '$curso')";
$stmt = $conexao -> prepare($sql);
if($stmt -> execute()){
    echo "<strong> OK! <strong> o aluno $nome foi incluido com sucesso";
}
?>