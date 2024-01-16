<?php

    if(isset($_POST['submitDate'])){
        session_start();
        if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            unset($_SESSION['horario']);
            unset($_SESSION['date']);
            header('Location: index.php');
        }else{
            $logado = $_SESSION['nome'];
            $horariolog = $_SESSION['horario'];
            $_SESSION['date'] = $_POST['dateChanger'];
            $date = $_SESSION['date'];
            header('Location: Serviços.php');
        }
    }else{
        header('Location: Serviços.php');
    }



?>