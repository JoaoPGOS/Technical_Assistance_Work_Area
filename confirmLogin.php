<?php
session_start();

    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
        
        include_once('PHP/config.php');
        $user = $_POST['nome'];
        $senha = $_POST['senha'];
        $date = $_POST['date'];
        if($_POST['horario'] == ""){
        $catchhorario = mysqli_query($conexao, "SELECT * FROM usuários WHERE nome='$user'");
        if($registerData = mysqli_fetch_assoc($catchhorario)){
        $horario = $registerData['horario'];
        }else{
            $horario = $_POST['horario'];
        }
        }

        //print_r("Usuário: ".$user);
        //print_r("Senha: ".$senha);


        $sql = "SELECT * FROM usuários WHERE nome = '$user' and senha = '$senha' and horario = '$horario'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1 || $date == ""){
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            unset($_SESSION['horario']);
            unset($_SESSION['date']);
            header('Location: Index.php');
        } else{
            $_SESSION['horario'] = $horario;
            $_SESSION['nome'] = $user;
            $_SESSION['senha'] = $senha;
            $_SESSION['date'] = $date;
            header('Location: Inicio.php');
        }
    }else{
        header('Location: Index.php');
    }

?>