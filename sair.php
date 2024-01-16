<?php
session_start();
unset($_SESSION['nome']);
unset($_SESSION['senha']);
unset($_SESSION['horario']);
unset($_SESSION['date']);
header('Location: index.php');
?>