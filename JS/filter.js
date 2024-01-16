
todos = document.getElementById('todos')
ub = document.getElementById('ub')
reparo = document.getElementById('reparo')
wrt = document.getElementById('wrt')
agpeça = document.getElementById('agpeça')
oqc = document.getElementById('qualidade')
inspeção = document.getElementById('inspeção')
perda = document.getElementById('perdadegarantia')



btnfiltro = document.getElementById('filtrar')

ubs = document.getElementById('Projeto UB')
reparos = document.getElementById('Reparo com uso de peça')
wrts = document.getElementById('WRT')
agpeças = document.getElementById('Ag. Peça')
oqcs = document.getElementById('OQC')
inspeçãos = document.getElementById('Inspeção Finalizada')
perdas = document.getElementById('Perda de garantia')

function filter(filterid){
    i = document.getElementById(filterid);

    
    if(filterid != "Todos"){
        todos.innerHTML = "<input type='radio' value='Todos' id='Todos' name='Todos' onclick='filter(this.id)'>Todos"

        if(filterid == 'Projeto UB'){
            i.value = filterid;
        }
        if(filterid == 'WRT'){
            i.value = filterid;
        }
        if(filterid == 'Reparo com uso de peça'){
            i.value = filterid;
        }
        if(filterid == 'Ag. Peça'){
            i.value = filterid;
        }
        if(filterid == 'OQC'){
            i.value = filterid;
        }
        if(filterid == 'Inspeção Finalizada'){
            i.value = filterid;
        }
        if(filterid == 'Perda de garantia'){
            i.value = filterid;
        }



    }else if(filterid == "Todos"){
        todos.innerHTML = "<input type='radio' value='Todos' id='Todos' name='Todos' onclick='filter(this.id)' checked>Todos"
        ub.innerHTML = "<input type='radio' value='' id='Projeto UB' name='Projeto UB' onclick='filter(this.id)'>Projeto UB"
        reparo.innerHTML = "<input type='radio' value='' id='Reparo com uso de peça' onclick='filter(this.id)' name='Reparo'>Reparo"
        wrt.innerHTML = "<input type='radio' value='' id='WRT' onclick='filter(this.id)' name='WRT'>WRT"
        agpeça.innerHTML = "<input type='radio' value='' id='Ag. Peça' onclick='filter(this.id)'>Ag. Peça"
        oqc.innerHTML = "<input type='radio' value='' id='OQC' onclick='filter(this.id)'>OQC"
        inspeção.innerHTML = "<input type='radio' value='' id='Inspeção Finalizada' onclick='filter(this.id)'>Inspeção"
        perda.innerHTML = "<input type='radio' value='' id='Perda de garantia' onclick='filter(this.id)'>Perda"

    }

  
}

function searchData(){
    window.location = 'Serviços.php?search='+ubs.value+'&'+'search2='+reparos.value+'&'+'search3='+wrts.value+'&'+'search4='+agpeças.value+'&'+'search5='+oqcs.value+'&'+'search6='+inspeçãos.value+'&'+'search7='+perdas.value;
}
