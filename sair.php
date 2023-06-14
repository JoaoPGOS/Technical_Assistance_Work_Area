<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['senha']);
unset($_SESSION['horario']);
header('Location: Login.php');
?>