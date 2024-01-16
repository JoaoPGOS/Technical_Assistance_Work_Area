<?php

    if(isset($_POST['submit_registro'])){
        //print_r($_POST['ordem_serviço']);
        //print_r($_POST['serviço_realizado']);
        //print_r($_POST['inTimeRegister']);

        include_once('conect.php');


        $ordem_serviço = $_POST['ordem_serviço'];
        $serviço_realizado = $_POST['serviço_realizado'];
        $inTimeRegister = $_POST['inTimeRegister'];
        $data = $_POST['dataReparo'];

        $confirm = mysqli_query($conexao, "SELECT * FROM aparelhos WHERE nome = '$inTimeRegister' and serviço_realizado = '$serviço_realizado' and os_aparelho = '$ordem_serviço' and datareparo = '$data'");

            if(mysqli_num_rows($confirm) >= 1){
                header('Location: Inicio.php');
            }else{
                $result = mysqli_query($conexao, "INSERT INTO aparelhos(os_aparelho, nome, serviço_realizado, datareparo) VALUES('$ordem_serviço','$inTimeRegister','$serviço_realizado','$data')");
                header('Location: Inicio.php');
            }
    }else{
        header('Location: Inicio.php');
    }



?>