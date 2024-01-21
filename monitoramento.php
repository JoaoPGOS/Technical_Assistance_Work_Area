
<?php

    include_once('PHP\config.php');

    $catch = mysqli_query($conexao, "SELECT * FROM usuários where iduser > 5");

    $nomes = [];
    while($registerData = mysqli_fetch_assoc($catch)){
        $nomes[] = $registerData['nome'];
    }
?>
<?php
session_start();
$date = $_SESSION['date'];
include_once('PHP\config.php');

$catchimg = mysqli_query($conexao, "SELECT * FROM usuários where iduser > 5");
?>


<?php
    error_reporting(0);
    include_once('conect.php');

    $cont = 0;
    $novosdados = [];
    $novosdados1 = [];
    $novosdados2 = [];
    $novosdados3 = [];
    $novosdados4 = [];
    $novosdados5 = [];
    $novosdados6 = [];
    $novosdados7 = [];
    $novosdados8 = [];
    $novosdados9 = [];
    $novosdados10 = [];
    $novosdados11 = [];
    $novosdados12 = [];
    $novosdados13 = [];
    $novosdados14 = [];
    $novosdados15 = [];
    $novosdados16 = [];


    $sqlge2 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Reparo com uso de peça' and datareparo = '$date'";
    $sqlge1 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Troca Frontal' and datareparo = '$date'";
    $sqlge3 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Teste de resistencia' and datareparo = '$date'";
    $sqlge4 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Ag. Peça' and datareparo = '$date'";
    $sqlge5 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Perda de garantia' and datareparo = '$date'";
    $sqlge6 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Sem defeito' and datareparo = '$date'";
    $sqlge7 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Laudo' and datareparo = '$date'";
    $sqlge8 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Montagem' and datareparo = '$date'";
    $sqlge9 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Orçamento' and datareparo = '$date'";
    $sqlge10 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Qualidade' and datareparo = '$date'";
    $sqlge11 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Avaliação do aparelho' and datareparo = '$date'";
    $sqlge12 = "SELECT * FROM aparelhos WHERE serviço_realizado = 'Fotos' and datareparo = '$date'";

    $resultge1 = $conexao->query($sqlge1);
    $resultge2 = $conexao->query($sqlge2);
    $resultge3 = $conexao->query($sqlge3);
    $resultge4 = $conexao->query($sqlge4);
    $resultge5 = $conexao->query($sqlge5);
    $resultge6 = $conexao->query($sqlge6);
    $resultge7 = $conexao->query($sqlge7);
    $resultge8 = $conexao->query($sqlge8);
    $resultge9 = $conexao->query($sqlge9);
    $resultge10 = $conexao->query($sqlge10);
    $resultge11 = $conexao->query($sqlge11);
    $resultge12 = $conexao->query($sqlge12);

    $ub = mysqli_num_rows($resultge1);
    $reparo = mysqli_num_rows($resultge2);
    $wrt = mysqli_num_rows($resultge3);
    $agpeça = mysqli_num_rows($resultge4);
    $perda = mysqli_num_rows($resultge5);
    $sdefeito = mysqli_num_rows($resultge6);
    $laudo = mysqli_num_rows($resultge7);
    $montagem = mysqli_num_rows($resultge8);
    $orçamento = mysqli_num_rows($resultge9);
    $oqc = mysqli_num_rows($resultge10);
    $saw = mysqli_num_rows($resultge11);
    $fotos = mysqli_num_rows($resultge12);

    while($cont <= sizeof($nomes)){

            $sqlo2 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Reparo com uso de peça' and datareparo = '$date'";
            $sqlo1 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Troca Frontal' and datareparo = '$date'";
            $sqlo3 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Teste de resistencia' and datareparo = '$date'";
            $sqlo4 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Ag. Peça' and datareparo = '$date'";
            $sqlo5 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Perda de garantia' and datareparo = '$date'";
            $sqlo6 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Sem defeito' and datareparo = '$date'";
            $sqlo7 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Laudo' and datareparo = '$date'";
            $sqlo8 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Montagem' and datareparo = '$date'";
            $sqlo9 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Orçamento' and datareparo = '$date'";
            $sqlo10 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Qualidade' and datareparo = '$date'";
            $sqlo11 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Avaliação do aparelho' and datareparo = '$date'";
            $sqlo12 = "SELECT * FROM aparelhos WHERE nome = '$nomes[$cont]' and serviço_realizado = 'Fotos' and datareparo = '$date'";

            $resulto1 = $conexao->query($sqlo1);
            $resulto2 = $conexao->query($sqlo2);
            $resulto3 = $conexao->query($sqlo3);
            $resulto4 = $conexao->query($sqlo4);
            $resulto5 = $conexao->query($sqlo5);
            $resulto6 = $conexao->query($sqlo6);
            $resulto7 = $conexao->query($sqlo7);
            $resulto8 = $conexao->query($sqlo8);
            $resulto9 = $conexao->query($sqlo9);
            $resulto10 = $conexao->query($sqlo10);
            $resulto11 = $conexao->query($sqlo11);
            $resulto12 = $conexao->query($sqlo12);

            $ubo1 = mysqli_num_rows($resulto1);
            $reparoo1 = mysqli_num_rows($resulto2);
            $wrto1 = mysqli_num_rows($resulto3);
            $agpeçao1 = mysqli_num_rows($resulto4);
            $perdao1 = mysqli_num_rows($resulto5);
            $sdefeitoo1 = mysqli_num_rows($resulto6);
            $laudo1 = mysqli_num_rows($resulto7);
            $montagem1 = mysqli_num_rows($resulto8);
            $orçamento1 = mysqli_num_rows($resulto9);
            $oqc1 = mysqli_num_rows($resulto10);
            $saw1 = mysqli_num_rows($resulto11);
            $fotos1 = mysqli_num_rows($resulto12);

            if($cont == 0){
                $novosdados = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 1){
                $novosdados1 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 2){
                $novosdados2 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 3){
                $novosdados3 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 4){
                $novosdados4 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 5){
                $novosdados5 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 6){
                $novosdados6 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 7){
                $novosdados7 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 8){
                $novosdados8 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 9){
                $novosdados9 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 10){
                $novosdados10 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 11){
                $novosdados11 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 12){
                $novosdados12 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 13){
                $novosdados13 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 14){
                $novosdados14 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 15){
                $novosdados15 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 16){
                $novosdados16 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }else if($cont == 17){
                $novosdados17 = [$ubo1, $reparoo1, $wrto1, $agpeçao1, $perdao1, $sdefeitoo1, $laudo1, $montagem1, $orçamento1, $oqc1, $saw1, $fotos1];
            }
            
            $cont = $cont + 1;

    }

?>


<!DOCTYPE HTML>
<html>
 <head>
 <title>
 Olympus
 </title>
 <meta http-equiv="refresh" content="120">
 <link rel="stylesheet" href="CSS\pnl.css">
 <link rel="stylesheet" href="CSS\sts.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
 </head>
 <body>
 <div class="header" id="header">
        <div class="logo_header">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navigation_header" id="navigation_header">
            <p>Ajuste a exibição para Full HD</p>
            <a href="Inicio.php">Início</a>
            <a href="PN.php">PN</a>
            <a href="monitoramento.php" class="active">Painel</a>
            <a href="Anotações.php">Anotações</a>
            <?php if($registerData['iduser'] <= 7){
                echo "<a href='Editor.php'>Registros</>";
            }?>
            <a href="sair.php">Sair</a>
        </div>
    </div>

    <div class="i1">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' onClick='changePhoto()' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
            <canvas id="t1" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>


    <div class="i2">    
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
        <canvas id="t2" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>


    <div class="i3">    
        <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
        <canvas id="t3" class="i3" style="max-width:250px;height:80px;width:80px"></canvas>    
</div>



    <div class="inicial">
        <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
        echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
        } ?>
        <canvas id="t4" class="inicial" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial2">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
        <canvas id="t5" class="inicial2" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial3">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t6" class="inicial3" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial4">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t7" class="inicial4" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial5">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t8" class="inicial5" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial6">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t9" class="inicial6" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial7">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t10" class="inicial7" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial8">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t11" class="inicial8" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial9">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t12" class="inicial9" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="i4">
        <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
        echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
        } ?>
        <canvas id="t17" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial11">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t18" class="inicial11" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial12">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t15" class="inicial12" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial13">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t14" class="inicial13" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <div class="inicial14">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t16" class="inicial14" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>



    <canvas id="t13" class="inicial10" style="max-width:750px;height:80px;width:80px"></canvas>




    <div class="inicial15">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t19" class="inicial15" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>




    <div class="inicial16">
    <?php if($registerData = mysqli_fetch_assoc($catchimg)){
    
    echo "<img class='testeimg' src='$registerData[img]' jsaction='VQAsE' class='r48jcc pT0Scc iPVvYb' style='max-width: 60px; height: 40px; margin: 0px; width: 40px;' alt='img' jsname='kn3ccd' data-iml='5289.70000000298' aria-hidden='false'>";
    } ?>
    <canvas id="t20" class="inicial16" style="max-width:250px;height:80px;width:80px"></canvas>
    </div>
        

    </div>
<script>

    canvas_ids = ["t1","t2","t3","t4","t5","t6","t7","t8","t9","t10","t11","t12","t13","t14","t15","t16","t17","t18","t19","t20"];
    i = canvas_ids.length;
    contador = 0;
    testenome = "";
    xo = 0;
    buscador = ['<?php echo $nomes[0]?>','<?php echo $nomes[1]?>','<?php echo $nomes[2]?>','<?php echo $nomes[3]?>','<?php echo $nomes[4]?>','<?php echo $nomes[5]?>','<?php echo $nomes[6]?>','<?php echo $nomes[7]?>',
    '<?php echo $nomes[8]?>','<?php echo $nomes[9]?>','<?php echo $nomes[10]?>','<?php echo $nomes[11]?>','<?php echo $nomes[12]?>','<?php echo $nomes[13]?>','<?php echo $nomes[14]?>','<?php echo $nomes[15]?>','<?php echo $nomes[16]?>','<?php echo $nomes[17]?>','<?php echo $nomes[18]?>',
    '<?php echo $nomes[19]?>','<?php echo $nomes[20]?>','<?php echo $nomes[21]?>','<?php echo $nomes[22]?>','<?php echo $nomes[23]?>','<?php echo $nomes[24]?>']


    geral = document.getElementById("t13");

// Example datasets for X and Y-axes 
var serviço = ["Troca Frontal", "Reparo", "Teste de resistência", "Ag. Peça", "Perda", "Sem defeito", "Laudo", "Montagem", "Orçamento", "Qualidade", "Avaliação do aparelho", "Fotos"]; 
var dados =  [<?php echo "$novosdados[0]" ?>, <?php echo "$novosdados[1]" ?>, <?php echo "$novosdados[2]" ?>, <?php echo "$novosdados[3]" ?>, <?php echo "$novosdados[4]" ?>, <?php echo "$novosdados[5]" ?>,<?php echo "$novosdados[6]" ?>,<?php echo "$novosdados[7]" ?>,<?php echo "$novosdados[8]" ?>,<?php echo "$novosdados[9]" ?>, <?php echo "$novosdados[10]" ?>,<?php echo "$novosdados[11]" ?>,0]
var dadosa = [<?php echo "$novosdados1[0]" ?>, <?php echo "$novosdados1[1]" ?>, <?php echo "$novosdados1[2]" ?>, <?php echo "$novosdados1[3]" ?>, <?php echo "$novosdados1[4]" ?>, <?php echo "$novosdados1[5]" ?>,<?php echo "$novosdados1[6]" ?>,<?php echo "$novosdados1[7]" ?>,<?php echo "$novosdados1[8]" ?>,<?php echo "$novosdados1[9]" ?>,<?php echo "$novosdados1[10]" ?>, <?php echo "$novosdados1[11]" ?>,0]
var dadosb = [<?php echo "$novosdados2[0]" ?>, <?php echo "$novosdados2[1]" ?>, <?php echo "$novosdados2[2]" ?>, <?php echo "$novosdados2[3]" ?>, <?php echo "$novosdados2[4]" ?>, <?php echo "$novosdados2[5]" ?>,<?php echo "$novosdados2[6]" ?>,<?php echo "$novosdados2[7]" ?>,<?php echo "$novosdados2[8]" ?>,<?php echo "$novosdados2[9]" ?>,<?php echo "$novosdados2[10]" ?>, <?php echo "$novosdados2[11]" ?>,0]
var dadosc = [<?php echo "$novosdados3[0]" ?>, <?php echo "$novosdados3[1]" ?>, <?php echo "$novosdados3[2]" ?>, <?php echo "$novosdados3[3]" ?>, <?php echo "$novosdados3[4]" ?>, <?php echo "$novosdados3[5]" ?>,<?php echo "$novosdados3[6]" ?>,<?php echo "$novosdados3[7]" ?>,<?php echo "$novosdados3[8]" ?>,<?php echo "$novosdados3[9]" ?>,<?php echo "$novosdados3[10]" ?>, <?php echo "$novosdados3[11]" ?>,0]
var dadosd = [<?php echo "$novosdados4[0]" ?>, <?php echo "$novosdados4[1]" ?>, <?php echo "$novosdados4[2]" ?>, <?php echo "$novosdados4[3]" ?>, <?php echo "$novosdados4[4]" ?>, <?php echo "$novosdados4[5]" ?>,<?php echo "$novosdados4[6]" ?>,<?php echo "$novosdados4[7]" ?>,<?php echo "$novosdados4[8]" ?>,<?php echo "$novosdados4[9]" ?>,<?php echo "$novosdados4[10]" ?>, <?php echo "$novosdados4[11]" ?>,0]
var dadose = [<?php echo "$novosdados5[0]" ?>, <?php echo "$novosdados5[1]" ?>, <?php echo "$novosdados5[2]" ?>, <?php echo "$novosdados5[3]" ?>, <?php echo "$novosdados5[4]" ?>, <?php echo "$novosdados5[5]" ?>,<?php echo "$novosdados5[6]" ?>,<?php echo "$novosdados5[7]" ?>,<?php echo "$novosdados5[8]" ?>,<?php echo "$novosdados5[9]" ?>,<?php echo "$novosdados5[10]" ?>, <?php echo "$novosdados5[11]" ?>,0]
var dadosf = [<?php echo "$novosdados6[0]" ?>, <?php echo "$novosdados6[1]" ?>, <?php echo "$novosdados6[2]" ?>, <?php echo "$novosdados6[3]" ?>, <?php echo "$novosdados6[4]" ?>, <?php echo "$novosdados6[5]" ?>,<?php echo "$novosdados6[6]" ?>,<?php echo "$novosdados6[7]" ?>,<?php echo "$novosdados6[8]" ?>,<?php echo "$novosdados6[9]" ?>,<?php echo "$novosdados6[10]" ?>, <?php echo "$novosdados6[11]" ?>,0]//Stays on the Y-axis 
var dadosg = [<?php echo "$novosdados7[0]" ?>, <?php echo "$novosdados7[1]" ?>, <?php echo "$novosdados7[2]" ?>, <?php echo "$novosdados7[3]" ?>, <?php echo "$novosdados7[4]" ?>, <?php echo "$novosdados7[5]" ?>,<?php echo "$novosdados7[6]" ?>,<?php echo "$novosdados7[7]" ?>,<?php echo "$novosdados7[8]" ?>,<?php echo "$novosdados7[9]" ?>,<?php echo "$novosdados7[10]" ?>, <?php echo "$novosdados7[11]" ?>,0]
var dadosh = [<?php echo "$novosdados8[0]" ?>, <?php echo "$novosdados8[1]" ?>, <?php echo "$novosdados8[2]" ?>, <?php echo "$novosdados8[3]" ?>, <?php echo "$novosdados8[4]" ?>, <?php echo "$novosdados8[5]" ?>,<?php echo "$novosdados8[6]" ?>,<?php echo "$novosdados8[7]" ?>,<?php echo "$novosdados8[8]" ?>,<?php echo "$novosdados8[9]" ?>,<?php echo "$novosdados8[10]" ?>, <?php echo "$novosdados8[11]" ?>,0]
var dadosi = [<?php echo "$novosdados9[0]" ?>, <?php echo "$novosdados9[1]" ?>, <?php echo "$novosdados9[2]" ?>, <?php echo "$novosdados9[3]" ?>, <?php echo "$novosdados9[4]" ?>, <?php echo "$novosdados9[5]" ?>,<?php echo "$novosdados9[6]" ?>,<?php echo "$novosdados9[7]" ?>,<?php echo "$novosdados9[8]" ?>,<?php echo "$novosdados9[9]" ?>,<?php echo "$novosdados9[10]" ?>, <?php echo "$novosdados9[11]" ?>,0]
var dadosj = [<?php echo "$novosdados10[0]" ?>, <?php echo "$novosdados10[1]" ?>, <?php echo "$novosdados10[2]" ?>, <?php echo "$novosdados10[3]" ?>, <?php echo "$novosdados10[4]" ?>, <?php echo "$novosdados10[5]" ?>,<?php echo "$novosdados10[6]" ?>,<?php echo "$novosdados10[7]" ?>,<?php echo "$novosdados10[8]" ?>,<?php echo "$novosdados10[9]" ?>,<?php echo "$novosdados10[10]" ?>, <?php echo "$novosdados10[11]" ?>,0]
var dadosk = [<?php echo "$novosdados11[0]" ?>, <?php echo "$novosdados11[1]" ?>, <?php echo "$novosdados11[2]" ?>, <?php echo "$novosdados11[3]" ?>, <?php echo "$novosdados11[4]" ?>, <?php echo "$novosdados11[5]" ?>,<?php echo "$novosdados11[6]" ?>,<?php echo "$novosdados11[7]" ?>,<?php echo "$novosdados11[8]" ?>,<?php echo "$novosdados11[9]" ?>,<?php echo "$novosdados11[10]" ?>, <?php echo "$novosdados11[11]" ?>,0]
var dadosl = [<?php echo "$novosdados12[0]" ?>, <?php echo "$novosdados12[1]" ?>, <?php echo "$novosdados12[2]" ?>, <?php echo "$novosdados12[3]" ?>, <?php echo "$novosdados12[4]" ?>, <?php echo "$novosdados12[5]" ?>,<?php echo "$novosdados12[6]" ?>,<?php echo "$novosdados12[7]" ?>,<?php echo "$novosdados12[8]" ?>,<?php echo "$novosdados12[9]" ?>,<?php echo "$novosdados12[10]" ?>, <?php echo "$novosdados12[11]" ?>,0]
var dadosm = [<?php echo "$novosdados13[0]" ?>, <?php echo "$novosdados13[1]" ?>, <?php echo "$novosdados13[2]" ?>, <?php echo "$novosdados13[3]" ?>, <?php echo "$novosdados13[4]" ?>, <?php echo "$novosdados13[5]" ?>,<?php echo "$novosdados13[6]" ?>,<?php echo "$novosdados13[7]" ?>,<?php echo "$novosdados13[8]" ?>,<?php echo "$novosdados13[9]" ?>,<?php echo "$novosdados13[10]" ?>, <?php echo "$novosdados13[11]" ?>,0]
var dadosn = [<?php echo "$novosdados14[0]" ?>, <?php echo "$novosdados14[1]" ?>, <?php echo "$novosdados14[2]" ?>, <?php echo "$novosdados14[3]" ?>, <?php echo "$novosdados14[4]" ?>, <?php echo "$novosdados14[5]" ?>,<?php echo "$novosdados14[6]" ?>,<?php echo "$novosdados14[7]" ?>,<?php echo "$novosdados14[8]" ?>,<?php echo "$novosdados14[9]" ?>,<?php echo "$novosdados14[10]" ?>, <?php echo "$novosdados14[11]" ?>,0]
var dadoso = [<?php echo "$novosdados15[0]" ?>, <?php echo "$novosdados15[1]" ?>, <?php echo "$novosdados15[2]" ?>, <?php echo "$novosdados15[3]" ?>, <?php echo "$novosdados15[4]" ?>, <?php echo "$novosdados15[5]" ?>,<?php echo "$novosdados15[6]" ?>,<?php echo "$novosdados15[7]" ?>,<?php echo "$novosdados15[8]" ?>,<?php echo "$novosdados15[9]" ?>,<?php echo "$novosdados15[10]" ?>, <?php echo "$novosdados15[11]" ?>,0]
var dadosp = [<?php echo "$novosdados16[0]" ?>, <?php echo "$novosdados16[1]" ?>, <?php echo "$novosdados16[2]" ?>, <?php echo "$novosdados16[3]" ?>, <?php echo "$novosdados16[4]" ?>, <?php echo "$novosdados16[5]" ?>,<?php echo "$novosdados16[6]" ?>,<?php echo "$novosdados16[7]" ?>,<?php echo "$novosdados16[8]" ?>,<?php echo "$novosdados16[9]" ?>,<?php echo "$novosdados16[10]" ?>, <?php echo "$novosdados16[11]" ?>,0]
var dadosq = [<?php echo "$novosdados17[0]" ?>, <?php echo "$novosdados17[1]" ?>, <?php echo "$novosdados17[2]" ?>, <?php echo "$novosdados17[3]" ?>, <?php echo "$novosdados17[4]" ?>, <?php echo "$novosdados17[5]" ?>,<?php echo "$novosdados17[6]" ?>,<?php echo "$novosdados17[7]" ?>,<?php echo "$novosdados17[8]" ?>,<?php echo "$novosdados17[9]" ?>,<?php echo "$novosdados17[10]" ?>, <?php echo "$novosdados17[11]" ?>,0]
var dadosGeral = [<?php echo "$ub"?>, <?php echo "$reparo"?>, <?php echo "$wrt"?>, <?php echo "$agpeça"?>, <?php echo "$perda"?>, <?php echo "$sdefeito"?>,<?php echo "$laudo"?>,<?php echo "$montagem"?>,<?php echo "$orçamento"?>,<?php echo "$oqc"?>, <?php echo "$saw"?>, <?php echo "$fotos"?>, 0]
novosdados = [dados, dadosa, dadosb, dadosc, dadosd, dadose, dadosf, dadosg, dadosh, dadosi, dadosj, dadosk, dadosl, dadosm, dadosn, dadoso, dadosp, dadosq]





while( contador != i){

    

tecnico = document.getElementById(canvas_ids[contador]);
if(contador == 0){
    dados = novosdados[contador];
    testenome =buscador[contador];
}else if(contador == contador){
    dados = novosdados[contador];
    testenome = buscador[contador];
}


new Chart(tecnico, {
    type: 'bar', 
    data: {
    labels: serviço, //X-axis data 
    datasets: [{
    data: dados, 
    backgroundColor: ['#9f90ea', '#00F0FF','#FF003A','#00F0FF','#00F0FF','#00F0FF','#000000','#00F0FF','#00F0FF','#00FF0F', "#111", "#111"],
    label: testenome,
    }]
    },
    options:{
    legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
    }
});
contador = contador + 1;

}
new Chart(geral, {
type: 'bar', 
data: {
labels: serviço, //X-axis data 
datasets: [{
data: dadosGeral, //Y-axis data 
backgroundColor: ['#9f90ea', '#00F0FF','#FF003A','#00F0FF','#00F0FF','#00F0FF','#000000','#00F0FF','#00F0FF','#00FF0F', "#111", "#111"],
label: 'Dados Gerais', //Color of the bars 
}]
},
options:{
legend: {display: true}, //Remove the legend box by setting it to false. It's true by default. []
}
});


</script>

</body>
<script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>

</html>