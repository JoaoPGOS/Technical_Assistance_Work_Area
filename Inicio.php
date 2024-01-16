
<?php

session_start();
if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['horario']);
    unset($_SESSION['date']);
    header('Location: Index.php');
}else{
    $logado = $_SESSION['nome'];
    $horariolog = $_SESSION['horario'];
    $date = $_SESSION['date'];

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
    <style>
        #aviso{
            width:30%;
            font-size: large;
        }
        @media screen {
    .armazem{
        font-family: Arial, Helvetica, sans-serif;
        display: none;
        position:absolute;
        background-color: transparent;
        width: 35ew;
        padding: 1em;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding-left: 30px;
        padding-right: 30px;
        text-decoration: none;
        font-weight: bold;
        z-index: 2;

    } 
}
    #peça{
        display: flex;
        flex-direction: column;
    }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\popup.css">
    <link rel="stylesheet" href="CSS\mts.css">
    <link rel="stylesheet" href="CSS\sts.css">
    <link rel="stylesheet" href="CSS\imgst.css">
    <link rel="stylesheet" href="CSS\delete.css">
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
    window.location.replace("image_send.php");
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

            <a href="Inicio.php" class="active">Início</a>
            <?php if($logado != 'Changer'){
                echo "<a href='PN.php'>PN</a>";
            }?>
            <a href="monitoramento.php">Painel</a>
            <a href="Anotações.php">Anotações</a>
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
                <ol id="peça"></ol>
                <li id="tipo">Tipo: </li>
                <li id="modelo">Modelo: </li>
                <li id="nome">Peça necessária: </li>
                <li>Cor:...</li>
                <li>Motivo: Saldo 0 no estoque.</li>
                <li>Lançar: ?</li>
                <li>Estoque:</li>
                <li id="rev"></li>

                <br>

            </div>
        </div>
    </div>

    <div tabindex="0" onclick="closeSidebar()" class="content" id="content">

        <div class="popup" id="popup">
            <button onclick="fechar()">X</button>
            <p>Não esqueça de checar o estoque do técnico</p>
        </div>
        <h1>Registro de aparelhos</h1>

        <div class="registro">
            <form action="sendData.php" method="POST">
            <label>OS</label>
            <input type="text" name="ordem_serviço" value="" id="ordem_serviço">
            <label>Serviço</label>
            <select name="serviço_realizado" id="serviço" onchange="selector()">
                <option value="" selected>Selecione</option>
                <option value="Orçamento">Orçamento</option>
                <option value="Montagem">Montagem</option>
                <option value="Laudo">Laudo</option>
                <option value="Reparo Volta">Reparo Volta</option>
                <option value="Inspeção Finalizada">Inspeção Finalizada</option>
                <option value="Troca Frontal">Troca Frontal</option>
                <option value="Reparo com uso de peça">Reparo com uso de peça</option>
                <option value="Ag. peça">Ag. peça</option>
                <option value="Teste de resistencia">Teste de resistencia</option>
                <option value="Perda de garantia">Perda de garantia</option>
                <option value="Sem defeito">Sem defeito</option>
                <option value="Qualidade">Qualidade</option>
                <option value="Avaliação do aparelho">Avaliação do aparelho</option>
                <option value="Fotos">Fotos</option>
            </select>
            <input type="submit" name="submit_registro" class="functionbuttons" onclick="registro()">
            <br/>
            <input type="text" name="inTimeRegister" value="<?php echo "$logado"?>" id="inTimeRegister">                <input type="date"  name="dataReparo" value="<?php echo "$date"?>">

            </form>
        </div>
        <div class="content-table1">
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="column1" scope="col">OS</th>
                        <th class="column2" scope="col">Serviço</th>
                        <th class="column3" scope="col">Técnico</th>
                        <th class="column3" scope="col">Data</th>
                        <th class="column3" scope="col">...</th>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php
                        while($registerData = mysqli_fetch_assoc($result))
                        {
                            if($registerData['nome'] == $logado && $registerData['datareparo'] == $date){
                                echo "<tr>";
                                echo "<td class='lines'>".$registerData['os_aparelho']."</td>";
                                echo "<td class='lines'>".$registerData['serviço_realizado']."</td>";
                                echo "<td class='lines'>".$registerData['nome']."</td>";
                                echo "<td class='lines'>".$registerData['datareparo']."</td>";
                                echo "<td class='lines'><a class='btn_edit' onclick='excluir()' href='deleteInicio.php?id=$registerData[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/>
                            </svg></a></td>";
                                echo "</tr>";
                            }
                        }

                    ?>

                </tbody>
            </table>




</body>
<script src="JS\scptrl.js"></script>
<script>
body = document.querySelector('body');
shiftKey = false;
var armazem = false;
var armazemShow1 = document.getElementById('armazem')

function armazemShow(){
    armazem = !armazem;
    if(armazem){
        armazemShow1.style.display = 'flex';

    }
    else{
        armazemShow1.style.display = 'none';

    }
}

    body.addEventListener('keydown', function(e) {
    if (e.keyCode == 120) {
        armazemShow();
  }});



</script>
<script>
const localStoragePopUp = 'PopUp'
const hoje = new Date()
popup1 = document.getElementById("popup")

  function popup(){
    let popupl = JSON.parse(localStorage.getItem(localStoragePopUp) || "[]")
    if(popupl[0] == 'ok'){
        popup1.style.display = 'none';
    }else{
    popupl.push('ok');
    localStorage.setItem(localStoragePopUp,JSON.stringify(popupl))


    popup1.style.display = 'flex';
    }
  }
  if(hoje.getHours() > 16){
    popup();
  }
  function fechar(){
    popup1.style.display = 'none';
  }

</script>

</html>