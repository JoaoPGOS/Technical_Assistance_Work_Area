<?php
    $dbHost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbName = 'cadastro';


    $conexao = new mysqli($dbHost, $dbusername, $dbpassword, $dbName);
    echo "Conectado";
?>