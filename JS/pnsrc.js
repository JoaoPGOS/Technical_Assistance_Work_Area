
var service = false;
var serviceShow1 = document.getElementById('service1')
const localStorageWorks = 'Works'
var work = document.getElementById('work')




function serviceShow(){
    service = !service;
    if(service){
        serviceShow1.style.marginBottom = '0vw';
        serviceShow1.style.animationName = 'showserviceBox';
        content.style.filter = 'blur(2px)';
    }
    else{
        serviceShow1.style.marginBottom = '-100vw';
        serviceShow1.style.animationName = 'showserviceBoxback';
        content.style.filter = '';
    }
}
function closeServiceShow(){
    if(service){
        serviceShow();
    }
}

function CopyValue(clicked){

    var copyaux = document.getElementById('copyaux');
    copyaux.value = clicked;

    copyaux.select();

    navigator.clipboard.writeText(copyaux.value);

   

}



function insereLocalStorage(clicked){


    var select = clicked;

    let worksStorage = JSON.parse(localStorage.getItem(localStorageWorks) || "[]")


        worksStorage.push({
            name: select
        });

        localStorage.setItem(localStorageWorks,JSON.stringify(worksStorage))


    selectShow();
}

function selectShow(){
    let worksStorage = JSON.parse(localStorage.getItem(localStorageWorks) || "[]")
    work.innerHTML ='<option value="" selected>Selecione</option>'
    for(let i = 0; i < worksStorage.length;i++){
        work.innerHTML += `<option value="${worksStorage[i]['name']}">${worksStorage[i]['name']}</option>`
    }
}

function au(){
    selectShow();
}
au();
 


