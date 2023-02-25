function formValidation() {
    var ids = document.registration.idCh.value;
    var prix = document.registration.prix.value;
    var typeC = document.registration.typeC.value;
    var nbBed = document.registration.nbBed.value;
    
    var reId = new RegExp("^[0-9]{1,}$");
    var reNom = new RegExp("^[0-9a-zA-Z ]+$");
    var reEt = new RegExp("^[1-7]$");
    var reNbc = new RegExp("^[0-9]{1,}$");
    var reNote = new RegExp("^(10|[0-9])$");
    
    if (reId.test(ids)==false) {
        alert("valider ID");
        return false;
    }
    
    if (reNom.test(typeC)==false) {
        alert("Valider Type");
        return false;
    } 
    
    if (reId.test(prix)==false) {
        alert("Valider PRIX");
        return false;
    }
    
    if (reId.test(nbBed)==false) {
        alert("Valider nombre lits");
        return false;
    }

}
