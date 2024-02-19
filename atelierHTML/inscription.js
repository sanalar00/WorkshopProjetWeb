function validerDateOfBirth(){
    var elementDate = 
    document.getElementById("date_naissance")
    var elementValue = new Date(elementDate.value) ;
    const dateAujourdhui= new Date();
    if(elementValue>=dateAujourdhui)
    {
        alert("Please select a correct date that is before today");
        }
        else {
            alert("Date is valid");
        }
}

var formElement = document.getElementById("form") 
var nameElement = document.getElementById("nom");
var prenomElement= document.getElementById("prenom")
var telephoneElement= document.getElementById("telephone")
var passElement=document.getElementById("mot_de_passe");

formElement.addEventListener("submit", function(event){
    event.preventDefault()
    validateName()
    validatePrenom()
    validateTelephone()

});


function validateName(){
    var NameValue = nameElement.value ;
    var pattern = /^[a-z A-Z]+$/
    var nameError = document.getElementById("NameError")
    if(!NameValue.match(pattern)){
          nameError.innerHTML=
    "<span style='color :red' > Nom ne doit contenir que des lettres et doit avoir au moins 1 caractère </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    }
}
 
function validatePrenom(){
    var NameValue = nameElement.value ;
    var pattern = /^[a-z A-Z]+$/
    var nameError = document.getElementById("PrenomError")
if(!NameValue.match(pattern)){          nameError.innerHTML=
    "<span style='color :red' > Prenom  doit avoir au moins 1 caractère </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    } }

function validateTelephone() {
var NameValue = nameElement.value ;
    var pattern = /^\d{8}$/
    var nameError = document.getElementById("telephoneError")
    if(!NameValue.match(pattern)){
          nameError.innerHTML=
    "<span style='color :red' > telephone ne doit pas contenir des lettres et doit conetenir 8 chiffres </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    }
}

function validatePass() {

var NameValue = nameElement.value ;
    var pattern = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/
    var nameError = document.getElementById("passError")
    if(!NameValue.match(pattern)){
          nameError.innerHTML= "<span style='color :red' > mot de passe doit contenir au moins 8 caractères incluant au moins un chiffre une  lettre minuscule et une lettre majuscule </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    }}



nameElement.addEventListener("keyup",function() {
validateMail();

})

function validateMail() {
var NameValue=nameElement.value;

//var pattern= /^S+@esprit.tn$/ 
var pattern= /^[a-z A-Z 0-9 _%.+-]+@esprit.tn$/
    var nameError = document.getElementById("mailError")
    if(!NameValue.match(pattern)){
          nameError.innerHTML= "<span style='color :red' > veuillez entrer une adresse email valide </span>"
    }else {
        nameError.innerHTML= "<span style='color :green'>Correct</span>"
    }
}