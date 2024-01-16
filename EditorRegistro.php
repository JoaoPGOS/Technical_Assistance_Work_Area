<?php

session_start();
if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['horario']);
    header('Location: index.php');
}else{
    $logado = $_SESSION['nome'];
    $horariolog = $_SESSION['horario'];

}

    if(!empty($_GET['id'])){
        include_once('PHP/config.php');

        $id = $_GET['id'];


        $sqlSelect = "SELECT * FROM usuários WHERE iduser = $id";

        $selectResult =  $conexao->query($sqlSelect);

        if($selectResult->num_rows > 0){

            while($registerData = mysqli_fetch_assoc($selectResult)){
                $nome = $registerData['nome'];
                $senha = $registerData['senha'];
                $senhaconf = $registerData['senhaconf'];
                $horario = $registerData['horario'];
                $img = $registerData['img'];
            }   
        }else{
            header('Location: Editor.php');
        }





    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\cadn.css">
    <title>Edição de Registro</title>
</head>
<body>

    <form action="saveEdit.php" method="post">
        <div class="cadastro">
            <h1 class="title">Edição de Registro</h1>
            <br/>
            <input type="text" name="insertFoto" id="insertFoto" placeholder="Insira a URL da foto" value="<?php echo "$img" ?>"><a class='btn_edit' href='image_send.php?id=<?php echo "$id"; ?>'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                              </svg></a>
            <br/>
            <input type="text" name="nome" id="usuario" placeholder="Usuário" value="<?php echo "$nome" ?>">
            <br/>
            <input type="text" name="senha" id="senha" placeholder="Senha" value="<?php echo "$senha" ?>">
            <br/>
            <input type="text" name="senhaconf" id="senhaconf" placeholder="Digite novamente a senha" value="<?php echo "$senhaconf" ?>">
            <br/>
            <input type="text" name="horario" id="horario" placeholder="Horário Ex: 11h ás 20h" value="<?php echo "$horario" ?>">
            <br/>
            <input type="text" name="id" value="<?php echo "$id" ?>"
            <br/>
            <input type="submit" value="Editar" name="update" class="functionbuttons"><br/>
            <a href="Editor.php">Voltar</a>
        </div>
    </form>

</body>
</html>