<?php
    session_start();
    $logado = $_SESSION['nome'];
    include_once('PHP\config.php');


    if(isset($_FILES['arquivo'])){
        $nome = $_POST['usuario'];
        $arquivo = $_FILES['arquivo'];

        if($arquivo['error']){
            die("Erro no envio do arquivo");
        }


        if($arquivo['size'] > 31457280){
            die('Arquivo muito grande');
        }
        $pasta = 'arquivos/';
        $nomeDoArquivo = $arquivo['name'];
        $novoNomeDoArquivo = uniqid();
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != "png" && $extensao != "gif"){
            die("Tipo de arquivo inválido");
        }

        $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);

        if($deu_certo){
            $conexao->query("INSERT INTO imagens(nome_usuario, img, nome_arquivo) VALUES ('$nome','$path','$nomeDoArquivo')");
            $conexao->query("UPDATE usuários SET img='$path' WHERE nome='$nome'");
            header('Location: Inicio.php');
        }
        else{
            echo "<p>falha ao enviar</p>";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input:hover{
            border: 1px solid #FF003A;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\cadn.css">
</head>
<body>
    <div class="cadastro">
    <form method="POST" enctype="multipart/form-data" action="image_send.php">  
        <p>
        <input class="functionbuttons" name="arquivo" type="file"></p>
        <br>
        <input class="functionbuttons" name="usuario" type="text" value="<?php echo "$logado"?>" placeholder="Insira o Login">
        <button class="functionbuttons" name="submit" type="submit" >Enviar</button>
    </form>

    <a href="Inicio.php">Voltar</a>
    </div>
</body>
</html>
