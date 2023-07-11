<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <style>
        *{
    margin: 0%;
    }
    .conteudo{
        height: 420px;
        width: 1fr;
        padding-left: 155px;
        padding-right: 0%;
        margin-top: 100px;
    }
    .nome, .cpf, .email, .senha, .disciplinas{
        height: 50px;
        width: 600px;
        padding: 10px;
        background-color: white;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font: rgb(97, 48, 48);
    }
    .endereco, .curso{
        height: 50px;
        width: 600px;
        padding: 10px;
        background-color: white;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font: rgb(97, 48, 48);
    }
    input{
        height: 25px;
        background-color: rgb(231, 191, 196);
        border-radius: 10px;
        width: 100%;
    }
    #cadastrar{
      background-color: antiquewhite;
        height: 30px;
        width: 100px;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font: rgb(97, 48, 48);
        border-radius: 20px;
    }
    .linha1, .linha2, .linha3, .linha4{
        display: flex;
        flex-wrap: wrap;
    }
    
    button{
        background-color: antiquewhite;
        height: 30px;
        width: 100px;
        font-family:Georgia, 'Times New Roman', Times, serif;
        font: rgb(97, 48, 48);
        border-radius: 20px;
    }
    h1{
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    </style>
</head>
<body>
    <div class="conteudo">
        <h1 style="color:rgb(97, 48, 48);">Cadastrar Professor:</h1><br>
    <form class="form" method="get" action="crudprofessor.php">
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
    <input TYPE="submit" NAME="cadastrar" VALUE="cadastrar" id="cadastrar"> 
    <br><br>
    <button class="button"><a href="index.php">Voltar</a></button>
    </div>
</body>
</html>