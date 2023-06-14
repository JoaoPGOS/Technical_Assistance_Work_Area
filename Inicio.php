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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\newstyle.css">
    <link rel="stylesheet" href="CSS\newmonitoring.css">
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

    <title>Olympus</title>

</head>
<body>

    <div class="header" id="header">
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

            <a href="Inicio.php" class="active">Início</a>
            <a href="Peças UB.php">UB</a>
            <a href="monitoramento.php">Painel</a>
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
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <button class="functionbuttons" onclick="limpar()">Limpar Meta do dia</button>
                <br/>
                <br/>
            </div>
        </div>
    </div>

    <div tabindex="0" onclick="closeSidebar()" class="content" id="content">

        <h1>Registro de aparelhos</h1>
        <div class="registro">
            <form action="sendData.php" method="POST">
            <label>OS</label>
            <input type="text" name="ordem_serviço" value="" id="ordem_serviço">
            <label>Serviço</label>
            <select name="serviço_realizado" id="serviço">
                <option value="" selected>Selecione</option>
                <option value="Projeto UB">Projeto UB</option>
                <option value="Reparo com uso de peça">Reparo com uso de peça</option>
                <option value="Ag. peça">Ag. peça</option>
                <option value="WRT">WRT</option>
                <option value="Perda de garantia">Perda de garantia</option>
                <option value="Sem defeito">Sem defeito</option>
                <option value="OQC">OQC</option>
                <option value="SAW">SAW</option>
            </select>
            <input type="submit" name="submit_registro" class="functionbuttons" onclick="registro()">
            <br/>
            <input type="text" name="inTimeRegister" value="<?php echo "$logado"?>" id="inTimeRegister">

            </form>
        </div>
        <div class="content-table1">
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="column1" scope="col">OS</th>
                        <th class="column2" scope="col">Serviço</th>
                        <th class="column3" scope="col">Técnico</th>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php
                        while($registerData = mysqli_fetch_assoc($result))
                        {
                            if($registerData['nome'] == $logado){
                                echo "<tr>";
                                echo "<td class='lines'>".$registerData['os_aparelho']."</td>";
                                echo "<td class='lines'>".$registerData['serviço_realizado']."</td>";
                                echo "<td class='lines'>".$registerData['nome']."</td>";
                                echo "</tr>";
                            }
                        }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
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
<script src="JS\script.js"></script>
</html>