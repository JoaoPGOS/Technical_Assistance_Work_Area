<?php

session_start();
if((!isset($_SESSION['nome'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    unset($_SESSION['horario']);
    unset($_SESSION['date']);
    header('Location: index.php');
}else{
    $logado = $_SESSION['nome'];
    $horariolog = $_SESSION['horario'];
    $date = $_SESSION['date'];
}

?>
<?php
    include_once('PHP\config.php');

    $catchimg = mysqli_query($conexao, "SELECT * FROM usuários WHERE nome='$logado'");
?>
<?php 

    include_once('conect.php');
    if(!empty($_GET['search']) || !empty($_GET['search2']) || !empty($_GET['search3']) || !empty($_GET['search4']) || !empty($_GET['search5']) || !empty($_GET['search6']) || !empty($_GET['search7'])){

        $ub = $_GET['search'];
        $reparo = $_GET['search2'];
        $wrt = $_GET['search3'];
        $agpeça = $_GET['search4'];
        $oqc = $_GET['search5'];
        $inspeção = $_GET['search6'];
        $perda = $_GET['search7'];


        if(empty($ub)){
            $ub = 'astaroth';
        }
        if(empty($reparo)){
            $reparo = 'astaroth';
        }
        if(empty($wrt)){
            $wrt = 'astaroth';
        }
        if(empty($agpeça)){
            $agpeça = 'astaroth';
        }
        if(empty($oqc)){
            $oqc = 'astaroth';
        }
        if(empty($inspeção)){
            $inspeção = 'astaroth';
        }
        if(empty($perda)){
            $perda = 'astaroth';
        }


        $catch = mysqli_query($conexao, "SELECT * FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta'");
        $catch0 = mysqli_query($conexao, "SELECT * FROM aparelhos WHERE datareparo='$date'");
        $catchtotal = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$ub%'");
        $catchtotal2 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$reparo%'");
        $catchtotal3 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$wrt%'");
        $catchtotal4 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$agpeça%'");
        $catchtotal5 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$oqc%'");
        $catchtotal6 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$inspeção%'");
        $catchtotal7 = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta' and serviço_realizado LIKE '%$perda%'");

        $totalr = mysqli_num_rows($catchtotal);
        $total2 = mysqli_num_rows($catchtotal2);
        $total3 = mysqli_num_rows($catchtotal3);
        $total4 = mysqli_num_rows($catchtotal4);
        $total5 = mysqli_num_rows($catchtotal5);
        $total6 = mysqli_num_rows($catchtotal6);
        $total7 = mysqli_num_rows($catchtotal7);

        $total = $totalr + $total2 + $total3 + $total4 + $total5 + $total6 + $total7;

        if($total5 < $total2){
            $faltam = $total2 - $total5;
        }

    }else{
    $catch = mysqli_query($conexao, "SELECT * FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta'");
    $catch0 = mysqli_query($conexao, "SELECT * FROM aparelhos WHERE datareparo='$date'");
    $catchtotal = mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE datareparo='$date' and serviço_realizado !='Reparo Volta'");

    $total = mysqli_num_rows($catchtotal);

    }
?>

<!DOCTYPE HTML>
<html>
 <head>
 <title>
 Olympus
 </title>
 <meta http-equiv="refresh" content="120">
 <link rel="stylesheet" href="CSS\eds01.css">
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

        <div class="filtro">
            <li id="todos"><input type="radio" value="Todos" id="Todos" name="Todos" onclick="filter(this.id)" checked>Todos</li>
            <li id="ub"><input type="radio" value="" id="Projeto UB" name="Projeto UB" onclick="filter(this.id)">Projeto UB</li>
            <li id="reparo"><input type="radio" value="" id="Reparo com uso de peça" onclick="filter(this.id)" name="Reparo">Reparo</li>
            <li id="wrt"><input type="radio" value="" id="WRT" onclick="filter(this.id)" name="WRT">WRT</li>
            <li id="agpeça"><input type="radio" value="" id="Ag. Peça" onclick="filter(this.id)" >Ag. Peça</li>
            <li id="qualidade"><input type="radio" value="" id="OQC" onclick="filter(this.id)">OQC</li>
            <li id="inspeção"><input type="radio" value="" id="Inspeção Finalizada" onclick="filter(this.id)" >Inspeção</li>
            <li id="perdadegarantia"><input type="radio" value="" id="Perda de garantia" onclick="filter(this.id)">Perda</li>
            <input type="submit" name="submitFiltro" value="Filtrar" id="filtrar" onclick="searchData()">
        </div>

        <div class="changeDate">
        <form action="changeDate.php" method="POST">
        <input type="date" name="dateChanger" value="<?php echo "$date"?>">
        <input type="submit" name="submitDate" value="Mudar">
        </form>
        </div>
        <label class="total">Total Laboratório</label><br>
        <input class="total" type="text" value="<?php echo "$total"; ?>">
        <?php 
        error_reporting(0);
        if(!empty($reparo) and !empty($oqc) and $reparo != 'astaroth' and $oqc != 'astaroth'){
            if(empty($faltam)){
                $faltam = 0;
            }
            echo "<br><input class=\"totalFalta\" type=\"text\" value=\"Aparelhos sem OQC:$faltam\">";
        }
        ?>
        <div class="content-table1">
            <table class="content-table">
                <thead>
                    <tr class="headerTB"> 
                        <th class="column1" scope="col">Técnico</th>
                        <th class="column2" scope="col">Lançamentos</th>
                        <th class="column3" scope="col">Data</th>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php

                        $cong = [];


                        while($userData = mysqli_fetch_assoc($catch))
                        {
                            $quantidade = mysqli_num_rows(mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE nome='$userData[nome]' and datareparo='$date'"));


                            if(in_array($userData['nome'], $cong) == true){

                            }else if(in_array($userData['nome'], $cong) == false){
                                echo "<tr class='linesTB'>";
                                echo "<td class='lines'>".$userData['nome']."</td>";
                                echo "<td class='lines'>".$quantidade."</td>";
                                echo "<td class='lines'>".$userData['datareparo']."</td>";
                                array_push($cong, $userData['nome']);
                                echo "</tr>";
                            }
                        }

                    ?>

                </tbody>
            </table>
        </div>
        <div class="content-table0">
            <table class="content-table12">
                <thead>
                    <tr class="headerTB"> 
                        <th scope="col">Departamento</th>
                        <th scope="col">Lançamentos</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody class="filteredContentTable">
                    <?php

                        $cong2 = [];


                        while($dadosgerais = mysqli_fetch_assoc($catch0))
                        {
                            $quantidade0 = mysqli_num_rows(mysqli_query($conexao, "SELECT os_aparelho FROM aparelhos WHERE serviço_realizado='$dadosgerais[serviço_realizado]'  and datareparo='$date'"));


                            if(in_array($dadosgerais['serviço_realizado'], $cong2) == true){

                            }else if(in_array($dadosgerais['serviço_realizado'], $cong2) == false){
                                echo "<tr class = 'linesTB'>";
                                echo "<td class='lines'>".$dadosgerais['serviço_realizado']."</td>";
                                echo "<td class='lines'>".$quantidade0."</td>";
                                echo "<td class='lines'>".$dadosgerais['datareparo']."</td>";
                                array_push($cong2, $dadosgerais['serviço_realizado']);
                                echo "</tr>";
                            }
                        }

                    ?>

                </tbody>
            </table>
        </div>
        <a class="toggleTable" href="Editor.php">Registros de Usuário</a>
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
<script src="JS\filter.js"></script>
</html>