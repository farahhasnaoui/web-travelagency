function verif(){
    var cin = document.getElementById("cin").value;
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var email = document.getElementById('email').value;
    var userName = document.getElementById('userName').value;
    var mdp = document.getElementById('mdp').value;
    var numTel = document.getElementById('numTel').value; 

    if(cin=="" || cin.length !=8 ){
        window.alert("The cin field is wrong !!")
        return false;
    } else if(nom ==""){
        window.alert("The nom field is wrong !!")
        return false;
    } else if (prenom ==""){
        window.alert("The prenom field is wrong !!")
        return false;
    } else if (email =="" || !verifEmail(email) ) {
        window.alert("The email field is wrong !!")
        return false;
    } else if (numTel =="" || numTel.length !=8 ) {
        window.alert("The phone number field is wrong !!")
        return false;
    } else if (mdp =="" || mdp.length < 8) {
        window.alert("The password field is wrong !!")
        return false;
    } else if (userName =="" ) {
        window.alert("The username field is wrong !!")
        return false;
    } else 
        return true; 
}

function verifEmail(email){
    var a = email.indexOf("@");
    var b = email.lastIndexOf(".");
    if(a!=-1 && b!=-1){
        if(a<b)
            return true;
        else 
            return false;
    } else
        return false;
}