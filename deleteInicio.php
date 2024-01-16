<?php

if(!empty($_GET['id'])){
        include_once('conect.php');

        $id = $_GET['id'];


        $sqlSelect = "SELECT * FROM aparelhos WHERE id = $id";

        $selectResult =  $conexao->query($sqlSelect);

        if($selectResult->num_rows > 0){
            
            $sqlDelete = "DELETE FROM aparelhos WHERE id='$id'";
            $resultDelete = $conexao->query($sqlDelete); 
            header('Location: Inicio.php');
        }else{
            header('Location: Inicio.php');
        }
    }

    ?>