<?php
include_once('PHP/config.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\index_style_2.css">
    <title>Login</title>
</head>
<body>
    <form action="confirmLogin.php" method="post">
        <div class="login">
            <h1 class="title">Login</h1>
            <input type="text" name="nome" id="usuario" placeholder="Usuário" onchange="">
            <br/>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br/>
            <input type="hidden" name="horario" id="horario" value="">
            <input type="date" name="date" value="" id="teste">

            <br>
            <input type="submit" value="Entrar" name="submit" id="submit" class="functionbuttons">
            <br/>

            <a class="linkColors" href="Cadastro.php">Cadastro</a>
            <br>

    </div>
    </form>
                        <script>
datanova = document.getElementById('teste');

function dataFormatada(){

    let data = new Date(),
        dia  = data.getDate().toString(),
        diaF = (dia.length == 1) ? '0'+dia : dia,
        mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0'+mes : mes,
        anoF = data.getFullYear();
    

    var dataF = `${anoF}-${mesF}-${diaF}`;


    datanova.value = dataF;

    
}
dataFormatada();



</script>
</body>
</html>