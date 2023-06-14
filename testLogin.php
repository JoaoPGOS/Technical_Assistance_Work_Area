<?php
session_start();

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
        
        include_once('PHP/config.php');
        $horario = $_POST['horario'];
        $user = $_POST['nome'];
        $senha = $_POST['senha'];
        //print_r("Usuário: ".$user);
        //print_r("Senha: ".$senha);


        $sql = "SELECT * FROM usuários WHERE nome = '$user' and senha = '$senha' and horario = '$horario'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            unset($_SESSION['horario']);
            header('Location: Login.php');
        } else{
            $_SESSION['horario'] = $horario;
            $_SESSION['nome'] = $user;
            $_SESSION['senha'] = $senha;
            header('Location: Inicio.php');
        }
    }else{
        header('Location:Login.php');
    }

?>