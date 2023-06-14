<?php
if(isset($_POST['submit1'])){
    include_once('PHP/config.php');
    $OS = $_POST['os'];
    $serviço = $_POST['serviço'];

        $result = mysqli_query($conexao, "INSERT INTO ub(OS, serviço)VALUES ('$OS','$serviço')");
        header('Location: Inicio.php');

}
?>