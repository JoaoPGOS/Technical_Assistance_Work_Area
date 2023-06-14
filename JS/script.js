var header = document.getElementById("header");
var navigation = document.getElementById("navigation_header")
var content = document.getElementById("content");
var showSidebar = false;
var mensagemHora1 = document.getElementById('mensagemHora')
const localStorageNameHora = 'mensagemHora'
const localStorageMetaHora = 'MetaHora'
const localStorageMetaGeral = 'MetaGeral'


function sideBar(){
    showSidebar = !showSidebar;
    if(showSidebar){
        mensagemHora1.style.marginLeft = '-60vw';
        mensagemHora1.style.animationName = 'showSidebar';
        content.style.filter = 'blur(2px)';
    }
    else{
        mensagemHora1.style.marginLeft = '-100vw';
        mensagemHora1.style.animationName = 'showSidebarback';
        content.style.filter = '';
    }
}
function closeSidebar(){
    if(showSidebar){
        sideBar();
    }
}
function mensagemHora(){
    eleA = document.getElementById("ordem_serviço");

	let mensagemHora = JSON.parse(localStorage.getItem(localStorageNameHora) || "[]")
    let metaHora = JSON.parse(localStorage.getItem(localStorageMetaHora) || "[]")
    let metaGeral = JSON.parse(localStorage.getItem(localStorageMetaGeral) || "[]")
 

    mensagemHora.push({
        name: eleA.value
    });
    metaGeral.push({
        name: eleA.value
    })
    metaHora.push({
        name: eleA.value
    })
    localStorage.setItem(localStorageNameHora,JSON.stringify(mensagemHora))
    localStorage.setItem(localStorageMetaHora,JSON.stringify(metaHora))
    localStorage.setItem(localStorageMetaGeral,JSON.stringify(metaGeral))
    showMensagemHora();

}
function clea(){
    let mensagemHora = JSON.parse(localStorage.getItem(localStorageNameHora) || "[]")
    let metaHora = JSON.parse(localStorage.getItem(localStorageMetaHora) || "[]")

    while(metaHora != 0 && mensagemHora != 0){
        mensagemHora.pop();
        metaHora.pop();
        localStorage.setItem(localStorageNameHora,JSON.stringify(mensagemHora))
        localStorage.setItem(localStorageMetaHora,JSON.stringify(metaHora))
    }

    meta();
    showMensagemHora();
}

function meta(){
    metahora = document.getElementById("metahora");
    metageral = document.getElementById("metageral");
    let metaGeral = JSON.parse(localStorage.getItem(localStorageMetaGeral) || "[]")
    let metaHora = JSON.parse(localStorage.getItem(localStorageMetaHora) || "[]")
    let mensagemHora = JSON.parse(localStorage.getItem(localStorageNameHora) || "[]")
    
    metahora.value = "Meta hora: "+ metaHora.length
    metageral.value = "Meta: "+ metaGeral.length;

    if(metaHora.length >= 3){
        metahora.value = "Meta hora(OK): "+metaHora.length
    }

    if(metaGeral >= 24){
        metageral.value = "Meta(OK): "+metaGeral.length;
    }
}

function registro(){
    eleA = document.getElementById("ordem_serviço");
    aux();
    refresh();
}

function limpar(){
    let metaGeral = JSON.parse(localStorage.getItem(localStorageMetaGeral) || "[]")

    while(metaGeral != 0){
        metaGeral.pop();
        localStorage.setItem(localStorageMetaGeral,JSON.stringify(metaGeral))
    }
    meta();
}
function showMensagemHora(){
    let mensagemHora = JSON.parse(localStorage.getItem(localStorageNameHora) || "[]")
    let metaHora = JSON.parse(localStorage.getItem(localStorageMetaHora) || "[]")
    let list = document.getElementById('listaHora');
    let feitos = document.getElementById('aparelhosfeitos');
    list.innerHTML = '';
    for(let i = 0; i < mensagemHora.length;i++){
        list.innerHTML += `<li>${mensagemHora[i]['name']}</li>`
    }

    feitos.innerHTML = "Aparelhos feitos: "+metaHora.length
}
function aux(){
    mensagemHora();
    meta();
}


meta();
showMensagemHora();
