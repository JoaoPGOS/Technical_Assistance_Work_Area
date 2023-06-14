<?php
    include_once('conect.php');

    $nomes = ['João Pedro', 'Ricardo E.', 'Kerisson Santos', 'Gabriel Tadeu', 'Bruno Prado', 'Manoel', 'Nathalia Ferreira', 'Amanda Alves', 'Camila', 'Pedro', 'Pablo Rocha', '#'];

    $sql1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'Projeto UB'";
    $sql2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'Reparo com uso de peça'";
    $sql3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'WRT'";
    $sql4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'Ag. Peça'";
    $sql5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'Perda de garantia'";
    $sql6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[0]' and serviço_realizado = 'Sem defeito'";

    $result1 = $conexao->query($sql1);
    $result2 = $conexao->query($sql2);
    $result3 = $conexao->query($sql3);
    $result4 = $conexao->query($sql4);
    $result5 = $conexao->query($sql5);
    $result6 = $conexao->query($sql6);

    $ub1 = mysqli_num_rows($result1);
    $reparo1 = mysqli_num_rows($result2);
    $wrt1 = mysqli_num_rows($result3);
    $agpeça1 = mysqli_num_rows($result4);
    $perda1 = mysqli_num_rows($result5);
    $sdefeito1 = mysqli_num_rows($result6);


    $sqla1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'Projeto UB'";
    $sqla2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqla3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'WRT'";
    $sqla4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'Ag. Peça'";
    $sqla5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'Perda de garantia'";
    $sqla6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[1]' and serviço_realizado = 'Sem defeito'";

    $resulta1 = $conexao->query($sqla1);
    $resulta2 = $conexao->query($sqla2);
    $resulta3 = $conexao->query($sqla3);
    $resulta4 = $conexao->query($sqla4);
    $resulta5 = $conexao->query($sqla5);
    $resulta6 = $conexao->query($sqla6);

    $uba1 = mysqli_num_rows($resulta1);
    $reparoa1 = mysqli_num_rows($resulta2);
    $wrta1 = mysqli_num_rows($resulta3);
    $agpeçaa1 = mysqli_num_rows($resulta4);
    $perdaa1 = mysqli_num_rows($resulta5);
    $sdefeitoa1 = mysqli_num_rows($resulta6);

    $sqlb1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'Projeto UB'";
    $sqlb2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlb3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'WRT'";
    $sqlb4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'Ag. Peça'";
    $sqlb5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'Perda de garantia'";
    $sqlb6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[2]' and serviço_realizado = 'Sem defeito'";

    $resultb1 = $conexao->query($sqlb1);
    $resultb2 = $conexao->query($sqlb2);
    $resultb3 = $conexao->query($sqlb3);
    $resultb4 = $conexao->query($sqlb4);
    $resultb5 = $conexao->query($sqlb5);
    $resultb6 = $conexao->query($sqlb6);

    $ubb1 = mysqli_num_rows($resultb1);
    $reparob1 = mysqli_num_rows($resultb2);
    $wrtb1 = mysqli_num_rows($resultb3);
    $agpeçab1 = mysqli_num_rows($resultb4);
    $perdab1 = mysqli_num_rows($resultb5);
    $sdefeitob1 = mysqli_num_rows($resultb6);

    $sqlc1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'Projeto UB'";
    $sqlc2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlc3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'WRT'";
    $sqlc4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'Ag. Peça'";
    $sqlc5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'Perda de garantia'";
    $sqlc6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[3]' and serviço_realizado = 'Sem defeito'";

    $resultc1 = $conexao->query($sqlc1);
    $resultc2 = $conexao->query($sqlc2);
    $resultc3 = $conexao->query($sqlc3);
    $resultc4 = $conexao->query($sqlc4);
    $resultc5 = $conexao->query($sqlc5);
    $resultc6 = $conexao->query($sqlc6);

    $ubc1 = mysqli_num_rows($resultc1);
    $reparoc1 = mysqli_num_rows($resultc2);
    $wrtc1 = mysqli_num_rows($resultc3);
    $agpeçac1 = mysqli_num_rows($resultc4);
    $perdac1 = mysqli_num_rows($resultc5);
    $sdefeitoc1 = mysqli_num_rows($resultc6);

    $sqld2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqld1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'Projeto UB'";
    $sqld3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'WRT'";
    $sqld4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'Ag. Peça'";
    $sqld5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'Perda de garantia'";
    $sqld6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[4]' and serviço_realizado = 'Sem defeito'";

    $resultd1 = $conexao->query($sqld1);
    $resultd2 = $conexao->query($sqld2);
    $resultd3 = $conexao->query($sqld3);
    $resultd4 = $conexao->query($sqld4);
    $resultd5 = $conexao->query($sqld5);
    $resultd6 = $conexao->query($sqld6);

    $ubd1 = mysqli_num_rows($resultd1);
    $reparod1 = mysqli_num_rows($resultd2);
    $wrtd1 = mysqli_num_rows($resultd3);
    $agpeçad1 = mysqli_num_rows($resultd4);
    $perdad1 = mysqli_num_rows($resultd5);
    $sdefeitod1 = mysqli_num_rows($resultd6);


    $sqle2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqle1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'Projeto UB'";
    $sqle3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'WRT'";
    $sqle4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'Ag. Peça'";
    $sqle5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'Perda de garantia'";
    $sqle6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[5]' and serviço_realizado = 'Sem defeito'";
    
    $resulte1 = $conexao->query($sqle1);
    $resulte2 = $conexao->query($sqle2);
    $resulte3 = $conexao->query($sqle3);
    $resulte4 = $conexao->query($sqle4);
    $resulte5 = $conexao->query($sqle5);
    $resulte6 = $conexao->query($sqle6);

    $ube1 = mysqli_num_rows($resulte1);
    $reparoe1 = mysqli_num_rows($resulte2);
    $wrte1 = mysqli_num_rows($resulte3);
    $agpeçae1 = mysqli_num_rows($resulte4);
    $perdae1 = mysqli_num_rows($resulte5);
    $sdefeitoe1 = mysqli_num_rows($resulte6);

    $sqlf2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlf1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'Projeto UB'";
    $sqlf3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'WRT'";
    $sqlf4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'Ag. Peça'";
    $sqlf5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'Perda de garantia'";
    $sqlf6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[6]' and serviço_realizado = 'Sem defeito'";
    
    $resultf1 = $conexao->query($sqlf1);
    $resultf2 = $conexao->query($sqlf2);
    $resultf3 = $conexao->query($sqlf3);
    $resultf4 = $conexao->query($sqlf4);
    $resultf5 = $conexao->query($sqlf5);
    $resultf6 = $conexao->query($sqlf6);

    $ubf1 = mysqli_num_rows($resultf1);
    $reparof1 = mysqli_num_rows($resultf2);
    $wrtf1 = mysqli_num_rows($resultf3);
    $agpeçaf1 = mysqli_num_rows($resultf4);
    $perdaf1 = mysqli_num_rows($resultf5);
    $sdefeitof1 = mysqli_num_rows($resultf6);

    $sqlg2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlg1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'Projeto UB'";
    $sqlg3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'WRT'";
    $sqlg4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'Ag. Peça'";
    $sqlg5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'Perda de garantia'";
    $sqlg6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[7]' and serviço_realizado = 'Sem defeito'";
    
    $resultg1 = $conexao->query($sqlg1);
    $resultg2 = $conexao->query($sqlg2);
    $resultg3 = $conexao->query($sqlg3);
    $resultg4 = $conexao->query($sqlg4);
    $resultg5 = $conexao->query($sqlg5);
    $resultg6 = $conexao->query($sqlg6);

    $ubg1 = mysqli_num_rows($resultg1);
    $reparog1 = mysqli_num_rows($resultg2);
    $wrtg1 = mysqli_num_rows($resultg3);
    $agpeçag1 = mysqli_num_rows($resultg4);
    $perdag1 = mysqli_num_rows($resultg5);
    $sdefeitog1 = mysqli_num_rows($resultg6);

    $sqlh2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlh1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'Projeto UB'";
    $sqlh3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'WRT'";
    $sqlh4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'Ag. Peça'";
    $sqlh5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'Perda de garantia'";
    $sqlh6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[8]' and serviço_realizado = 'Sem defeito'";

    $resulth1 = $conexao->query($sqlh1);
    $resulth2 = $conexao->query($sqlh2);
    $resulth3 = $conexao->query($sqlh3);
    $resulth4 = $conexao->query($sqlh4);
    $resulth5 = $conexao->query($sqlh5);
    $resulth6 = $conexao->query($sqlh6);

    $ubh1 = mysqli_num_rows($resulth1);
    $reparoh1 = mysqli_num_rows($resulth2);
    $wrth1 = mysqli_num_rows($resulth3);
    $agpeçah1 = mysqli_num_rows($resulth4);
    $perdah1 = mysqli_num_rows($resulth5);
    $sdefeitoh1 = mysqli_num_rows($resulth6);

    $sqli2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqli1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'Projeto UB'";
    $sqli3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'WRT'";
    $sqli4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'Ag. Peça'";
    $sqli5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'Perda de garantia'";
    $sqli6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[9]' and serviço_realizado = 'Sem defeito'";

    $resulti1 = $conexao->query($sqli1);
    $resulti2 = $conexao->query($sqli2);
    $resulti3 = $conexao->query($sqli3);
    $resulti4 = $conexao->query($sqli4);
    $resulti5 = $conexao->query($sqli5);
    $resulti6 = $conexao->query($sqli6);

    $ubi1 = mysqli_num_rows($resulti1);
    $reparoi1 = mysqli_num_rows($resulti2);
    $wrti1 = mysqli_num_rows($resulti3);
    $agpeçai1 = mysqli_num_rows($resulti4);
    $perdai1 = mysqli_num_rows($resulti5);
    $sdefeitoi1 = mysqli_num_rows($resulti6);

    $sqlj2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlj1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'Projeto UB'";
    $sqlj3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'WRT'";
    $sqlj4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'Ag. Peça'";
    $sqlj5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'Perda de garantia'";
    $sqlj6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[10]' and serviço_realizado = 'Sem defeito'";

    $resultj1 = $conexao->query($sqlj1);
    $resultj2 = $conexao->query($sqlj2);
    $resultj3 = $conexao->query($sqlj3);
    $resultj4 = $conexao->query($sqlj4);
    $resultj5 = $conexao->query($sqlj5);
    $resultj6 = $conexao->query($sqlj6);

    $ubj1 = mysqli_num_rows($resultj1);
    $reparoj1 = mysqli_num_rows($resultj2);
    $wrtj1 = mysqli_num_rows($resultj3);
    $agpeçaj1 = mysqli_num_rows($resultj4);
    $perdaj1 = mysqli_num_rows($resultj5);
    $sdefeitoj1 = mysqli_num_rows($resultj6);

    $sqlk2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'Reparo com uso de peça'";
    $sqlk1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'Projeto UB'";
    $sqlk3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'WRT'";
    $sqlk4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'Ag. Peça'";
    $sqlk5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'Perda de garantia'";
    $sqlk6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[11]' and serviço_realizado = 'Sem defeito'";

    $resultk1 = $conexao->query($sqlk1);
    $resultk2 = $conexao->query($sqlk2);
    $resultk3 = $conexao->query($sqlk3);
    $resultk4 = $conexao->query($sqlk4);
    $resultk5 = $conexao->query($sqlk5);
    $resultk6 = $conexao->query($sqlk6);

    $ubk1 = mysqli_num_rows($resultk1);
    $reparok1 = mysqli_num_rows($resultk2);
    $wrtk1 = mysqli_num_rows($resultk3);
    $agpeçak1 = mysqli_num_rows($resultk4);
    $perdak1 = mysqli_num_rows($resultk5);
    $sdefeitok1 = mysqli_num_rows($resultk6);

    $sqlge2 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Reparo com uso de peça'";
    $sqlge1 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Projeto UB'";
    $sqlge3 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'WRT'";
    $sqlge4 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Ag. Peça'";
    $sqlge5 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Perda de garantia'";
    $sqlge6 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Sem defeito'";

    $resultge1 = $conexao->query($sqlge1);
    $resultge2 = $conexao->query($sqlge2);
    $resultge3 = $conexao->query($sqlge3);
    $resultge4 = $conexao->query($sqlge4);
    $resultge5 = $conexao->query($sqlge5);
    $resultge6 = $conexao->query($sqlge6);

    $ub = mysqli_num_rows($resultge1);
    $reparo = mysqli_num_rows($resultge2);
    $wrt = mysqli_num_rows($resultge3);
    $agpeça = mysqli_num_rows($resultge4);
    $perda = mysqli_num_rows($resultge5);
    $sdefeito = mysqli_num_rows($resultge6);
?>

<!DOCTYPE HTMLa
<html>
 <head>
 <title>
 Olympus
 </title>
 <meta http-equiv="refresh" content="5">
 <link rel="stylesheet" href="CSS\monitoramento.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 </head>
 <body>
 <div class="header" id="header">
        <div class="logo_header">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navigation_header" id="navigation_header">

            <a href="Inicio.php" >Início</a>
            <a href="PecasUB.php">UB</a>
            <a href="monitoramento.php" class="active">Painel</a>
            <a href="sair.php">Sair</a>
        </div>
    </div>
  
    <canvas id="t1" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t2" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t3" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t4" class="inicial" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t5" class="inicial2" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t6" class="inicial3" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t7" class="inicial4" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t8" class="inicial5" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t9" class="inicial6" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t10" class="inicial7" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t11" class="inicial8" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t12" class="inicial9" style="max-width:250px;height:80px;width:80px"></canvas>
    <canvas id="t13" class="inicial10" style="max-width:750px;height:80px;width:80px"></canvas>


        

    </div>
<script>
    tecnico1 = document.getElementById("t1");
    tecnico2 = document.getElementById("t2");
    tecnico3 = document.getElementById("t3");
    tecnico4 = document.getElementById("t4");
    tecnico5 = document.getElementById("t5");
    tecnico6 = document.getElementById("t6");
    tecnico7 = document.getElementById("t7");
    tecnico8 = document.getElementById("t8");
    tecnico9 = document.getElementById("t9");
    tecnico10 = document.getElementById("t10");
    tecnico11 = document.getElementById("t11");
    tecnico12 = document.getElementById("t12");
    geral = document.getElementById("t13");

// Example datasets for X and Y-axes 
var serviço = ["Projeto UB", "Reparo", "WRT", "Ag. Peça", "Perda", "Sem defeito"]; //Stays on the X-axis 
var dados = [<?php echo "$ub1"?>, <?php echo "$reparo1"?>, <?php echo "$wrt1"?>, <?php echo "$agpeça1"?>, <?php echo "$perda1"?>, <?php echo "$sdefeito1"?>, 0] //Stays on the Y-axis 
var dadosa = [<?php echo "$uba1"?>, <?php echo "$reparoa1"?>, <?php echo "$wrta1"?>, <?php echo "$agpeçaa1"?>, <?php echo "$perdaa1"?>, <?php echo "$sdefeitoa1"?>, 0]
var dadosb = [<?php echo "$ubb1"?>, <?php echo "$reparob1"?>, <?php echo "$wrtb1"?>, <?php echo "$agpeçab1"?>, <?php echo "$perdab1"?>, <?php echo "$sdefeitob1"?>, 0]
var dadosc = [<?php echo "$ubc1"?>, <?php echo "$reparoc1"?>, <?php echo "$wrtc1"?>, <?php echo "$agpeçac1"?>, <?php echo "$perdac1"?>, <?php echo "$sdefeitoc1"?>, 0]
var dadosd = [<?php echo "$ubd1"?>, <?php echo "$reparod1"?>, <?php echo "$wrtd1"?>, <?php echo "$agpeçad1"?>, <?php echo "$perdad1"?>, <?php echo "$sdefeitod1"?>, 0]
var dadose = [<?php echo "$ube1"?>, <?php echo "$reparoe1"?>, <?php echo "$wrte1"?>, <?php echo "$agpeçae1"?>, <?php echo "$perdae1"?>, <?php echo "$sdefeitoe1"?>, 0]
var dadosf = [<?php echo "$ubf1"?>, <?php echo "$reparof1"?>, <?php echo "$wrtf1"?>, <?php echo "$agpeçaf1"?>, <?php echo "$perdaf1"?>, <?php echo "$sdefeitof1"?>, 0] //Stays on the Y-axis 
var dadosg = [<?php echo "$ubg1"?>, <?php echo "$reparog1"?>, <?php echo "$wrtg1"?>, <?php echo "$agpeçag1"?>, <?php echo "$perdag1"?>, <?php echo "$sdefeitog1"?>, 0]
var dadosh = [<?php echo "$ubh1"?>, <?php echo "$reparoh1"?>, <?php echo "$wrth1"?>, <?php echo "$agpeçah1"?>, <?php echo "$perdah1"?>, <?php echo "$sdefeitoh1"?>, 0]
var dadosi = [<?php echo "$ubi1"?>, <?php echo "$reparoi1"?>, <?php echo "$wrti1"?>, <?php echo "$agpeçai1"?>, <?php echo "$perdai1"?>, <?php echo "$sdefeitoi1"?>, 0]
var dadosj = [<?php echo "$ubj1"?>, <?php echo "$reparoj1"?>, <?php echo "$wrtj1"?>, <?php echo "$agpeçaj1"?>, <?php echo "$perdaj1"?>, <?php echo "$sdefeitoj1"?>, 0]
var dadosk = [<?php echo "$ubk1"?>, <?php echo "$reparok1"?>, <?php echo "$wrtk1"?>, <?php echo "$agpeçak1"?>, <?php echo "$perdak1"?>, <?php echo "$sdefeitok1"?>, 0]
var dadosGeral = [<?php echo "$ub"?>, <?php echo "$reparo"?>, <?php echo "$wrt"?>, <?php echo "$agpeça"?>, <?php echo "$perda"?>, <?php echo "$sdefeito"?>, 0]

new Chart(tecnico1, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dados, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[0]"?>',
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico2, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosa, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[1]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico3, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosb, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[2]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico4, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosc, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[3]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico5, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosd, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[4]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico6, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadose, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[5]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico7, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosf, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[6]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico8, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosg, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[7]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico9, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosh, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[8]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico10, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosi, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[9]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

   new Chart(tecnico11, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosj, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[10]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

if('<?php echo "$nomes[11]"?>' == '#'){

}else{
   new Chart(tecnico12, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosk, //Y-axis data 
    backgroundColor: '#FF003A',
    label: '<?php echo "$nomes[11]"?>', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });
}
   new Chart(geral, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dadosGeral, //Y-axis data 
    backgroundColor: '#FF003A',
    label: 'Dados Gerais', //Color of the bars 
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
   });

</script>
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
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
</html>