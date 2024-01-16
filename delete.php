<?php

if(!empty($_GET['id'])){
        include_once('PHP/config.php');

        $id = $_GET['id'];


        $sqlSelect = "SELECT * FROM usuários WHERE iduser = $id";

        $selectResult =  $conexao->query($sqlSelect);

        if($selectResult->num_rows > 0){
            
            $sqlDelete = "DELETE FROM usuários WHERE iduser='$id'";
            $resultDelete = $conexao->query($sqlDelete); 
            header('Location: Editor.php');
        }else{
            header('Location: Editor.php');
        }
    }

    ?>