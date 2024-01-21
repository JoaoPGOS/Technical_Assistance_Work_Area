<?php
    //print_r($_REQUEST);

    if(isset($_POST['submit_pesquisa'])){
        //echo "<script>alert('Funcional')</script>";
        include_once('conect.php');

        $os_aparelho = $_POST['pesquisa'];
        $inTimeUser = $_POST['inTimeUser'];


        //print_r($os_aparelho);
        //print_r('<br>');
        //print_r($inTimeUser);

        $sql = "SELECT * FROM aparelhos WHERE os_aparelho = '$os_aparelho' && nome = '$inTimeUser'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            print_r("Não existe");
        }else{
            print_r("existe");
        }
        header('Location: Inicio.php');
    }else{
        header('Location: Inicio.php');
    }

?>