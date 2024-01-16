<?php

session_start();
if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['horario']);
    header('Location: index.php');
}else{
    $logado = $_SESSION['nome'];
    $horariolog = $_SESSION['horario'];

}

?>
<?php
    include_once('PHP\config.php');
    $catch = mysqli_query($conexao, "SELECT * FROM usuários");
    $catchimg = mysqli_query($conexao, "SELECT * FROM usuários WHERE nome='$logado'");
?>

<!DOCTYPE HTML>
<html>
 <head>
 <title>
 Olympus
 </title>

 <link rel="stylesheet" href="CSS\eds00.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 </head>
 <body>
 <div class="header" id="header">
 <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
        <div class="logo_header">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navigation_header" id="navigation_header">
            
            <a href="Inicio.php">Início</a>
            <a href="PN.php">PN</a>
            <a href="monitoramento.php">Painel</a>
            <a href="Anotações.php">Anotações</a>
            <a href='Editor.php' class="active">Registros</a>
            <a href="sair.php">Sair</a>
        </div>

</div>
    <div tabindex="0" onclick="closeSidebar()" class="content" id="content">
        <h1>Listagem e Edição de Usuários</h1>

        <div class="content-table1">
            <table class="content-table">
                <thead>
                    <tr class="tables"> 
                        <th class="column1" scope="col">Id</th>
                        <th class="column2" scope="col">Senha</th>
                        <th class="column3" scope="col">Horario</th>
                        <th class="column3" scope="col">Nome</th>
                        <th class="column3" scope="col"></th>
                        <td class="column3" scope="col"></td>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php
                        while($registerData = mysqli_fetch_assoc($catch))
                        {
                            
                                echo "<tr>";
                                echo "<td class='lines'>".$registerData['iduser']."</td>";
                                echo "<td class='lines'>".$registerData['senha']."</td>";
                                echo "<td class='lines'>".$registerData['horario']."</td>";
                                echo "<td class='lines'>".$registerData['nome']."</td>";
                                echo "<td class='lines'><img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
                                echo "<td class='lines'><a class='btn_edit' href='EditorRegistro.php?id=$registerData[iduser]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                              </svg></a>
                                <a class='btn_edit' href='delete.php?id=$registerData[iduser]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z'/>
                            </svg></a>
                              </td>";

                                echo "</tr>";
                        }

                    ?>

                </tbody>
            </table>
        </div>
        <a class="toggleTable" href="Serviços.php">Dados de produção</a>
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
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</html>