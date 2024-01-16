<?php

session_start();
if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['horario']);
    header('Location: Login.php');
}else{
    $logado = $_SESSION['nome'];
    $horariolog = $_SESSION['horario'];

}

    include_once('conect.php');

    $sql = "SELECT * FROM aparelhos ORDER BY serviço_realizado DESC";

    $result = $conexao->query($sql);



?>
<?php

include_once('PHP\config.php');

$catchimg = mysqli_query($conexao, "SELECT * FROM usuários WHERE nome='$logado'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\sts.css">
    <link rel="stylesheet" href="CSS\nt.css">
    <link rel="stylesheet" href="CSS\imgst.css">
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

    <title>Olympus</title>

</head>
<body>

    <div class="header" id="header">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' id='imgteste' src='$registerData[img]' onClick='changePhoto()' onmouseover='mudaImagem()' onmouseout='voltaImagem()' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
        <script>
        var img = document.getElementById("imgteste");

function mudaImagem(){
    img.setAttribute('src', 'https://cdn.pixabay.com/animation/2023/06/13/15/13/15-13-23-8_512.gif');
}
function voltaImagem(){
    img.setAttribute('src', '<?php echo "$registerData[img]" ?>');
}

function changePhoto(){
    window.location.href = "https://3811f1c59d55-1636708890553654260.ngrok-free.app/0000/image_send.php";
}
        </script>
        <button onclick="sideBar()" class="btn_header">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
        </button>
        <div class="logo_header">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navigation_header" id="navigation_header">

            <a href="Inicio.php">Início</a>
            <a href="PN.php">PN</a>
            <a href="monitoramento.php">Painel</a>
            <a href="Anotações.php" class="active">Anotações</a>
            <?php if($registerData['iduser'] <= 7){
                echo "<a href='Editor.php'>Registros</>";
            }?>
            <a href="sair.php">Sair</a>
            
            <div class="mensagemHora" id="mensagemHora">
                <button onclick="sideBar()" class="btn_header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                </button>
                
                <?php
                echo "<li>$logado $horariolog:</li>"
                ?>
                <ol id="listaHora">
                </ol>
                <li>Aparelhos na bancada:0</li>
                <li id="aparelhosfeitos"></li>
                
                <button class="functionbuttons" onclick="clea()">limpar</button>
                <input type="text" value="Meta: 0" id="metageral">
                <input type="text" value="Meta Hora: 0" id="metahora">
                <button class="functionbuttons" onclick="limpar()">Limpar Meta do dia</button>
                <br/>
                <br/>
                <input type="text" value="" id="sz1" onchange="saldozero()" placeholder="OS">
                <input type="text" value="" id="sz2" onchange="saldozeroP()" placeholder="Part Numb">
                <select name="sz3" onchange="saldozero()" id="sz3">
                    <option value="" selected>Selecione Tipo</option>
                    <option value="OW">OW</option>
                    <option value="LP">LP</option>
                </select>
                <input type="text" value="" id="sz4" onchange="saldozero()" placeholder="Modelo">
                <input type="text" value="" id="sz5" onchange="saldozero()" placeholder="Peça necessária">
                <select name="revis" onchange="saldozero()" id="revis">
                    <option value="" selected>Selecione Revisão Coordenação</option>
                    <option value="SIM">SIM</option>
                    <option value="T9C">T9C</option>
                </select>
                <br/>
                <br/>
                <li>Saldo Zero</li>
                <li id="os">OS: </li>
                <li id="peça"></li>
                <li id="tipo">Tipo: </li>
                <li id="modelo">Modelo: </li>
                <li id="nome">Peça necessária: </li>
                <li>Cor:...</li>
                <li>Motivo: Saldo 0 no estoque.</li>
                <li>Lançar GPSN: ?</li>
                <li>Estoque Samsung:</li>
                <li id="rev"></li>

                <br>

            </div>
        </div>
    </div>

    <div tabindex="0" onclick="closeSidebar()" class="content" id="content">
        <textarea type="text" class="notes" id="notes" onchange="storage()"></textarea>
    </div>
    <ul>
                        <li onclick="theme1()" value="0" id="lightmode"><input name="color" id="light" type="radio" checked></li>
                            <li onclick="theme2()" value="1" id="darkmode"><input name="color" id="dark" type="radio"></li>
                            <li onclick="theme3()" value="2" id="hackermode"><input name="color" id="hacker" type="radio"></li>
                            <li onclick="theme4()" value="3" id="coffeemode"><input name="color" id="coffee" type="radio"></li>
                            <li onclick="theme5()" value="4" id="oceanmode"><input name="color" id="ocean" type="radio"></li>
                        </ul>
                        <input type="hidden" name="copyaux" id="copyaux" value="">
                        <script>
                            dataLight = document.getElementById('lightmode');
                            dataDark = document.getElementById('darkmode');
                            dataGreen = document.getElementById('hackermode');
                            dataBrown = document.getElementById('coffeemode');
                            dataBlue = document.getElementById('oceanmode');


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

function theme3(){
    
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")

    Mode.push({
        name: dataGreen.value
    });

    localStorage.setItem(localStorageMode,JSON.stringify(Mode))

}

function theme4(){
    
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")

    Mode.push({
        name: dataBrown.value
    });

    localStorage.setItem(localStorageMode,JSON.stringify(Mode))

}
function theme5(){
    
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")

    Mode.push({
        name: dataBlue.value
    });

    localStorage.setItem(localStorageMode,JSON.stringify(Mode))

}
function validation(){
    let Mode = JSON.parse(localStorage.getItem(localStorageMode) || "[]")
    var i = Mode.length - 1;
    if(`${Mode[i]['name']}` == "1"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' checked>"
        dataLight.innerHTML = "<input name='color' id='light' type='radio'>"
        dataGreen.innerHTML = "<input name='color' id='hacker' type='radio'>"
        dataBrown.innerHTML = "<input name='color' id='coffee' type='radio'>"
        dataBlue.innerHTML = "<input name='color' id='ocean' type='radio'>"
    }else if(`${Mode[i]['name']}` == "0"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' >"
        dataLight.innerHTML = "<input name='color' id='light' type='radio' checked>"
        dataGreen.innerHTML = "<input name='color' id='hacker' type='radio'>"
        dataBrown.innerHTML = "<input name='color' id='coffee' type='radio'>"
        dataBlue.innerHTML = "<input name='color' id='ocean' type='radio'>"
    }else if(`${Mode[i]['name']}` == "2"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' >"
        dataLight.innerHTML = "<input name='color' id='light' type='radio'>"
        dataGreen.innerHTML = "<input name='color' id='hacker' type='radio' checked>"
        dataBrown.innerHTML = "<input name='color' id='coffee' type='radio'>"
        dataBlue.innerHTML = "<input name='color' id='ocean' type='radio'>"
    }else if(`${Mode[i]['name']}` == "3"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' >"
        dataLight.innerHTML = "<input name='color' id='light' type='radio'>"
        dataGreen.innerHTML = "<input name='color' id='hacker' type='radio'>"
        dataBrown.innerHTML = "<input name='color' id='coffee' type='radio' checked>"
        dataBlue.innerHTML = "<input name='color' id='ocean' type='radio'>"
    }else if(`${Mode[i]['name']}` == "4"){
        dataDark.innerHTML = "<input name='color' id='dark' type='radio' >"
        dataLight.innerHTML = "<input name='color' id='light' type='radio'>"
        dataGreen.innerHTML = "<input name='color' id='hacker' type='radio'>"
        dataBrown.innerHTML = "<input name='color' id='coffee' type='radio'>"
        dataBlue.innerHTML = "<input name='color' id='ocean' type='radio' checked>"
    }
}

validation();


                        </script>
</body>
<script src="JS\scptrl.js"></script>
<script src="JS\notes.js"></script>
<script src="JS\PerfilEdit.js"></script>
</html>