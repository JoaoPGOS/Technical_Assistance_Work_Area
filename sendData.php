<?php

    if(isset($_POST['submit_registro'])){
        //print_r($_POST['ordem_serviço']);
        //print_r($_POST['serviço_realizado']);
        //print_r($_POST['inTimeRegister']);

        include_once('conect.php');


        $ordem_serviço = $_POST['ordem_serviço'];
        $serviço_realizado = $_POST['serviço_realizado'];
        $inTimeRegister = $_POST['inTimeRegister'];


        $result = mysqli_query($conexao, "INSERT INTO aparelhos(os_aparelho, nome, serviço_realizado) VALUES('$ordem_serviço','$inTimeRegister','$serviço_realizado')");
        header('Location: Inicio.php');
    }else{
        header('Location: Inicio.php');
    }



?>