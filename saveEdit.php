<?php
    include_once('PHP\config.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $senhaconf = $_POST['senhaconf'];
        $horario = $_POST['horario'];    
        $img = $_POST['insertFoto'];

        if($img == ""){
            $img = "arquivos/6498c2fe36b3b.jpg";
        }


        $sqlUpdate = "UPDATE usuários SET nome='$nome', senha='$senha', senhaconf='$senhaconf', horario='$horario', img='$img' WHERE iduser='$id'";
        $resultUpdate = $conexao->query($sqlUpdate);
    }
    header('Location: Editor.php');


?>