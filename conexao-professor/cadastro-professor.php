<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link rel="stylesheet" href="cadastro-professor.css">
</head>
<body>
    <div class="conteudo">
        <h1 style="color:rgb(97, 48, 48);">Cadastrar Professor:</h1><br>
    <form class="form" method="get" action="testeconexao.php">
        <div class="linha1">
        <div class="nome">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome"/> 
        </div>
        <div class="cpf">
             <label for="cpf">CPF:</label><br>
            <input type="number" name="cpf" />
        </div>
        </div>
        <div class="linha2">
        <div class="endereco">
            <label for="endereco">Endereço:</label><br>
             <input type="text" name="endereco" />
        </div>
        </div>
        <div class="linha3">
        <div class="email">
            <label for="email">Email:</label><br>
            <input type="email" name="email" />
        </div>
        <div class="senha">
            <label for="senha">Senha:</label><br>
            <input type="number" name="senha" />
        </div>
        </div>
        <div class="linha4">
        <div class="curso">
              <label for="curso">Curso:</label><br>
              <input type="text" name="curso" />
        </div>
        </div>
    <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
    <br><br>
    <button type="submit" class="btn"> 
    <b>Salvar</b>
    </button>
    </div>
</body>
</html>