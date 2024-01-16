
localStorageNotes = 'note';
textarea = document.getElementById('notes');
function storage(){
 


    let notev = JSON.parse(localStorage.getItem(localStorageNotes) || "[]")
    notev.push({
        name: textarea.value
    });
    localStorage.setItem(localStorageNotes,JSON.stringify(notev))


}

function showNotes(){
    let notev = JSON.parse(localStorage.getItem(localStorageNotes) || "[]")
    localStorage.setItem(localStorageNotes,JSON.stringify(notev))
    i = notev.length - 1;

        textarea.innerHTML = `${notev[i]['name']}`;
    
}

showNotes();