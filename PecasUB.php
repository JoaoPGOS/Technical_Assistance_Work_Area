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

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Olympus</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="CSS\newstyle.css">
</head>
	<body>
		<div class="header">
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
				<a href="Peças UB.php" class="active">UB</a>
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
            </div>
			</div>
		</div>


<div tabindex="0" onclick="closeSidebar()" class="content" id="content">

	<h1>Peças</h1>
<br/>
<br/>
		<p class=para1>Digite o nome do aparelho para retornar as peças necessárias para o UB.</p>
<br/>
PEÇAS
<br/>
<br/>
		<input class="subinputtitle" type="text" value="" id="phone"> <button class="functionbuttons" onclick="changeValue()">Pesquisar</button>

<br/>
		<input type="text" value="" id="1"> <button class="functionbuttons" onclick="myFunction2()">Copiar</button> 


<br/>
		<input type="text" value="" id="2"> <button class="functionbuttons" onclick="myFunction3()">Copiar</button> 

<br/>
		<input type="text" value="" id="3"> <button class="functionbuttons" onclick="myFunction4()">Copiar</button>

<br/>
		<input type="text" value="" id="4"> <button class="functionbuttons" onclick="myFunction5()">Copiar</button>

<br/>
		<input type="text" value="" id="5"> <button class="functionbuttons" onclick="myFunction6()">Copiar</button>

<br/>
		<input type="text" value="" id="6"> <button class="functionbuttons" onclick="myFunction7()">Copiar</button>

<br/>
		<input type="text" value="" id="7"> <button class="functionbuttons" onclick="myFunction8()">Copiar</button>
</p>
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
<script src="JS\ub.js"></script>
<script src="JS\script.js"></script>
</html>