<?php
    if(isset($_POST['submit'])){
        include_once('PHP/config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $senhaconf = $_POST['senhaconf'];
        $horario = $_POST['horario'];


        if($senhaconf != $senha){
            echo ("<script>alert('As duas senhas não são iguais')</script>");           
        }else if($_POST['senhacord'] == "teste" && $senhaconf == $senha){

            $result = mysqli_query($conexao, "INSERT INTO usuários(nome, senha, senhaconf, horario)VALUES ('$nome', '$senha', '$senhaconf','$horario')");
            echo ("<script>alert('Cadastro realizado')</script>");
        }else{
            echo ("<script>alert('Senha do coordenador errada')</script>");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\cadastro.css">
    <script src="JS\passapag.js"></script>
    <title>Cadastro</title>
</head>
<body>

    <form action="Cadastro.php" method="post">
        <div class="cadastro">
            <h1 class="title">Cadastro</h1>
            <input type="text" name="nome" id="usuario" placeholder="Usuário">
            <br/>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br/>
            <input type="password" name="senhaconf" id="senhaconf" placeholder="Digite novamente a senha">
            <br/>
            <input type="text" name="horario" id="horario" placeholder="Horário Ex: 11h ás 20h">
            <br/>
            <input type="password" name="senhacord" id="senhacord" placeholder="Senha do coordenador">
            <br/>
            <input type="submit" value="Cadastrar" name="submit" id="submit" class="functionbuttons"><br/>
            <a href="index.php">Voltar ao Login</a>
        </div>
    </form>
</body>
</html>