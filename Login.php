<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Login.css">
    <title>Login</title>
</head>
<body>
    <form action="testLogin.php" method="post">
        <div class="login">
            <h1 class="title">Login</h1>
            <input type="text" name="nome" id="usuario" placeholder="Usuário">
            <br/>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br/>
            <input type="text" name="horario" id="horario"placeholder="Horario Ex: 11h ás 20h">
            <br/>
            <input type="submit" value="Entrar" name="submit" id="submit" class="functionbuttons">
            <br/>
            <a class="linkColors" href="Cadastro.php">Cadastro</a>
    </div>
    </form>
    <ul>
                            <li onclick="theme1()" value="0" id="lightmode"><input name="color" id="light" type="radio" checked></li>
                            <li onclick="theme2()" value="1" id="darkmode"><input name="color" id="dark" type="radio"></li>
                        </ul>
                        <script>
                            dataLight = document.getElementById('lightmode');
                            dataDark = document.getElementById('darkmode');


const localStorageMode = 'lightmode'



function theme1(){
    
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")

    Mode.push({
        name: dataLight.value
    });

    localStorage.setItem(localStorageMode,JSON.stringify(Mode))
}

function theme2(){
    
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")

    Mode.push({
        name: dataDark.value
    });

    localStorage.setItem(localStorageMode,JSON.stringify(Mode))

}

function validation(){
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")
    var i = Mode.length - 1;
    if(`${Mode[i]['name']}` == "1"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' checked>"
        dataLight.innerHTML = "<input name='color' id='light' type='radio'>"
    }
}

validation();


                        </script>
</body>
</html>