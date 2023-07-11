<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $endereco = $_GET["endereco"];
        $email = $_GET["email"];
        $senha = $_GET["senha"];
        $curso = $_GET["curso"];

        ##codigo SQL
        $sql = "INSERT INTO professor(nome,cpf,endereco,email,senha,curso) VALUES ('$nome', '$cpf','$endereco', '$email', '$senha', '$curso')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o aluno
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='index.html'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $curso = $_POST["curso"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, cpf= :cpf, endereco= :endereco, email= :email, senha= :senha, curso= :curso WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_INT);
    $stmt->bindParam(':email',$email, PDO::PARAM_INT);
    $stmt->bindParam(':senha',$senha, PDO::PARAM_INT);
    $stmt->bindParam(':curso',$curso, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o aluno
             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaalunos.php'>voltar</a></button>";
        }

}

        
?>

