
function soumettre () {
    var name = document.getElementById('idnom').value;
    var error1 = document.getElementById('errorname');
    var surname = document.getElementById('idprenom').value;
    var error2 = document.getElementById('errorsurname');
   /* var age = document.getElementById('idage').value;
    var error3 = document.getElementById('errorage');
    var mail = document.getElementById('idmail').value;
    var error4 = document.getElementById('errormail');
    var choix = document.getElementById('idchoix').value;
    var error5 = document.getElementById('errorchoix');*/
    if (name == "") {
       error1.innerHTML = "veuillez renseigner votre nom"; 
       error1.style.background = "#b22222";
       name.focus();
       return false;
    }
    if (surname == "") {
       error2.innerHTML = "veuillez renseigner votre prenom";
       error2.style.background = "#b22222"; 
       name.focus();
       return false;
    }
   /* if (age == "") {
        error3.innerHTML = "veuillez renseigner votre age"; 
        name.focus();
       return false;
     }
     if (mail == "") {
        error4.innerHTML = "veuillez renseigner votre adresse email"; 
        name.focus();
       return false;
     }
     if (choix == "") {
        error5.innerHTML = "choisissez un sport prefere"; 
     }
       name.focus();
       return false;*/
}
function check () {
   /*var inputs = document.getElementsByName('input') ,
   inputslength = inputs.length;
   for ( var i = 0 ; i < inputslength ; i++){
          if (inputs[i].type =='radio' && inputs[i].checked) {
             alert('vous avez coché la case numero'+ inputs[i].value);
          }
   }*/
   alert('vous avez coché la case numero');
   var action = document.getElementById('idform');
   action.submit ();
   action.reset ();
}
/*function annuler () {
    alert("voulez-vous annuler votre requette?");
}*/
var myform = document.getElementById('idform');
myform.addEventListener('reset' , function (e){
   alert('vous avez reinitialiser le formulaire !');
} , true);