//récupération et vérifications pour le champ nom
var noms = document.getElementById('nom');
noms.addEventListener("keyup" ,function (event) {
    var recup_nom = document.getElementById("idnom");
    //recup_nom.append(event.key);
    recup_nom.textContent = noms.value;
    var error1 = document.getElementById('errorname');
    var regname = /^[a-zA-Z]{3,10}$/;
    var long = regname.test(noms.value);
    if (nom.value.length == 0) {
        error1.innerHTML = "vous devez renseigner votre nom";
        error1.style.color = "red";   
    }
    else if (long == false) {
        error1.innerHTML = "veuillez renseigner un nom valide";
        error1.style.color = "orange";
    }
    else{
        error1.innerHTML = "le champ nom a été correctement rempli!Passez au champ suivant.";
        error1.style.color = "limegreen";
    }
});

//récupération et vérifications pour le champ prenom
var prenom = document.getElementById('prenom');
    prenom.addEventListener('keyup' , function () {
       var recup_prenom = document.getElementById('idprenom');
        recup_prenom.textContent = prenom.value;
        var surnamelength = prenom.value.length;
        var regsurname = /^[a-zA-Z]{3,10}$/;
        var error2 = document.getElementById('errorsurname');
        if (surnamelength == 0) {
            error2.innerHTML = "vous devez renseigner votre prenom";
            error2.style.color = "red";   
        }
        else if (surnamelength < 3 || surnamelength > 10) {
            error2.innerHTML = "veuillez renseigner un prenom valide";
            error2.style.color = "orange";
        }
        else{
            error2.innerHTML = "le champ prenom a été correctement rempli!Passez au champ suivant.";
            error2.style.color = "limegreen";
        }
    })

    //récupération et vérifications pour le champ age
    var age = document.getElementById('age');
    age.addEventListener('change' , function () {
        var recup_age = document.getElementById('idage');
        recup_age.textContent = age.value;
        var agelength = age.value.length;
        var error3 = document.getElementById('errorage');
        if (agelength == 0) {
            error3.innerHTML = "vous devez renseigner votre age";
            error3.style.color = "red";   
        }
        else if (age.value < 0) {
            error3.innerHTML = "veuillez renseigner un age valide";
            error3.style.color = "orange";
        }
        else{
            error3.innerHTML = "le champ age a été correctement rempli!Passez au champ suivant.";
            error3.style.color = "limegreen";
        }
    })

    //récupération et vérifications pour le champ sexe
    function check () {
        var recup_sexe = document.getElementById('idsexe');
        var mas = document.getElementById('sexem');
        var fem = document.getElementById('sexef');
        if (mas.checked){
            var valeur = mas.value;
            recup_sexe.textContent = mas.value;
        }else{
             valeur = fem.value;
             recup_sexe.textContent = fem.value;
        }
    }

    
     //récupération et vérifications pour le champ e-mail
     var adresse = document.getElementById('email');
     adresse.addEventListener('change' , function () {
         var recup_adresse = document.getElementById('idmail');
         recup_adresse.textContent = adresse.value;
         var adresselength = adresse.value.length;
         var error6 = document.getElementById('errormail');
         var regmail = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
         alert(regmail.test(adresse.value))
         if (adresselength == 0) {
             error6.innerHTML = "vous devez renseigner votre adresse e-mail";
             error6.style.color = "red";   
         }
         else if (regmail.test(adresse.value) == false) {
            error6.innerHTML = "adresse e-mail non valide";
            error6.style.color = "red";   
         }
         else{
             error6.innerHTML = "adresse e-mail valide";
             error6.style.color = "limegreen";
         }
     })

      //récupération et vérifications pour le champ sport préféré
      var choix = document.getElementById('choix');
      choix.addEventListener('click' , function () {
          var error7 = document.getElementById('errorchoix');
          if (choix.value == "" ) {
              error7.innerHTML = "vous devez renseigner votre sport préféré";
              error7.style.color = "red";   
          }
          else{
              error7.innerHTML = "votre sport préféré est:" + choix.value;
              error7.style.color = "limegreen";
          }
      })

      var choix = document.getElementById('choix');
      choix.addEventListener('change' , function () {
          var recup_choix = document.getElementById('idchoix');
          recup_choix.textContent = choix.value;
      })
      var soumettre = document.getElementById('envoi');
      soumettre.addEventListener('click' , function (event) {
          event.preventDefault();
          var valider = document.getElementById('validation');
          if (long == true) {
              
          }
          valider.innerHTML = "les champs ne sont pas complètement remplis!";
          valider.style.color = "blue";
      })
      