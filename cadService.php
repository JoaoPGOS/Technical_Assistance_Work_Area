<?php

if(isset($_POST['CadService'])){
    include_once('PHP/config.php');

    $modelo = $_POST['cadModel'];
    $servico = $_POST['cadServ'];
    $tecnico = $_POST['tecnico'];
    $_1 = $_POST['1'];
    $_2= $_POST['2'];
    $_3 = $_POST['3'];
    $_4 = $_POST['4'];
    $_5 = $_POST['5'];    
    $_6 = $_POST['6'];
    $_7 = $_POST['7'];
    $_8 = $_POST['8'];    
    $_9 = $_POST['9'];
    $_10 = $_POST['10'];

    $peças = [$_1,$_2,$_3,$_4,$_5,$_6,$_7,$_8,$_9,$_10];
    $i = 0;

    while($i != sizeof($peças)){
        if($peças[$i] != ''){
        $result = mysqli_query($conexao, "INSERT INTO servicos(modelo, servicocad, pecas, tecnico)VALUES ('$modelo', '$servico', '$peças[$i]', '$tecnico')");
        }
        $i++;
    }
        header('Location: PN.php');

}





?>