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

?>
<?php

include_once('PHP\config.php');



$catchimg = mysqli_query($conexao, "SELECT * FROM usuários WHERE nome='$logado'");


if(!empty($_GET['search'])){
    $data = $_GET['search'];
    $dataS = $_GET['searchS'];

    $sql = "SELECT * FROM servicos WHERE modelo LIKE '%$data%' and servicocad LIKE '%$dataS%' ORDER BY ids";

}else{
    $sql = "SELECT * FROM servicos ORDER BY servicocad";
}


$result = $conexao->query($sql);


?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Olympus</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS\sts.css">
        <link rel="stylesheet" href="CSS\nss.css">
        <link rel="stylesheet" href="CSS\imgst.css">
</head>
	<body>
		<div class="header">
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
                <a href="PN.php" class="active">PN</a>
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


<div tabindex='0' onclick='closeSidebar() - closeServiceShow()' onclick="" class='content' id='content'>

	<h1>Peças</h1>

<br/>
<br/>
        <div class="box-search">
		<input class='subinputtitle' type='search' name='phone' value='' id='phone' placeholder="Pesquisar"> 
        <select class='subinputtitle' type='text' name='work' value='' id='work'>
    </select>
    <button class="functionbuttons" onclick="searchNote()">Buscar</button>
        </div>

<br/>
<div class="content-table1">
            <table class="content-table">
                <thead>
                    <tr>
                    <?php
                    if(!empty($data)){
                    echo "<th class='column1' scope='col'>Modelo</th>";
                    echo "<th class='column2' scope='col'>Peças</th>";
                    echo "<th class='column3' scope='col'>Técnico</th>";
                    }else{
                        echo "<th class='column1' scope='col'>Serviço</th>";
                        echo "<th class='column3' scope='col'>Técnico</th>";
                    }
                    ?>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php
                            $i = 0;
                            $x = $i + 1;
                            $y = $x + 1;
                            $z = $y + 1;

                        if(!empty($data)){
                            while($userData = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td class='lines' id='$x'>".$userData['modelo']."</td>";
                                echo "<td class='lines' ><input type='text' id='$y' value='".$userData['pecas']."' onclick='CopyValue(this.value)''></td>";
                               echo "<td class='lines' id='$z'>".$userData['tecnico']."</td>";
                                echo "</tr>";
                                $i++;
                                $x++;
                                $y++;
                                $z++;
                            }
                        }else{
                            $cong = [];
                            while($userData = mysqli_fetch_assoc($result)){
       

                            if(in_array($userData['servicocad'], $cong) == true){
                            }else if(in_array($userData['servicocad'], $cong) == false){
                                echo "<tr>";
                                echo "<td class='lines'><input type='text' id='$i' value='".$userData['servicocad']."' onclick='insereLocalStorage(this.value)'></td>";
                                echo "<td class='lines'>".$userData['tecnico']."</td>";
                                array_push($cong, $userData['servicocad']);
                                echo "</tr>";
                            }

                            $i++;
                            $x++;
                            $y++;
                            $z++;
                        }
                        }
                    ?>
                </tbody>
            </table>
                    </div> 


</div>
<div class="selector">
        <button class="serviceBtn" onclick="serviceShow()">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
</svg>
</button>
    </div>
    <form action="cadService.php" method="post">
        <div class="serviceCad" id="service1">
                <h3>Cadastro de Serviços</h3>
                <br>
                <label>Modelo e Serviço</label>
                <div class="inputrow">
                <input class='subinputtitle' name="cadModel" type='text' value='' id='cadModel'> <input class='subinputtitle' name="cadServ" type='text' value='' id='cadServ'>
                </div>
                <label>Peças</label>
                <div class="inputrow">
                <input class='subinputtitle' name="1" type='text' value='' id='1'><input class='subinputtitle' name="2" type='text' value='' id='2'>
                </div>
                <div class="inputrow">
                <input class='subinputtitle' name="3" type='text' value='' id='3'><input class='subinputtitle' name="4" type='text' value='' id='4'>
                </div>
                <div class="inputrow">
                <input class='subinputtitle' name="5" type='text' value='' id='5'><input class='subinputtitle' name="6" type='text' value='' id='6'>
                </div>
                <div class="inputrow">
                <input class='subinputtitle' name="7" type='text' value='' id='7'><input class='subinputtitle' name="8" type='text' value='' id='8'>
                </div>
                <div class="inputrow">
                <input class='subinputtitle' name="9" type='text' value='' id='9'><input class='subinputtitle' name="10" type='text' value='' id='10'>
                </div>
                <input type="hidden" name="tecnico" value="<?php echo "$logado" ?>">
                <input type="submit" name="CadService" id="CadService" class="functionbuttons">

            </div>
    </form>
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
<script src="JS\pnsrc.js"></script>
<script src="JS\scptrl.js"></script>
<script>
    var search = document.getElementById('phone')
    var searchS = document.getElementById('work')

    search.addEventListener("keydown",function(event){
        if(event.key == "Enter"){
            searchNote();
        }
    });


    function searchNote(){
        window.location = 'PN.php?search='+search.value+'&'+'searchS='+searchS.value;
    }




</script>
</html>