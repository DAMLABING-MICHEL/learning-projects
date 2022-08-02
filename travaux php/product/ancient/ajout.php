<?php 
    session_start();
?>

<!DOCTYPE html>
    <html lang = "fr">
        <meta charset = "utf-8">
            <head><title>mon formulaire php</title>
            <link rel = "stylesheet" href = "css/styl.css">
            </head>
                <body>
                   <div class = "container">
                        <form method ="POST" action = "save.php">
                            <div class = "donnees">
                                <div class = "div1" >
                                <div class = lb><label for = "image">image du produit</div>
                                    <div class ="image"><input type = "file" name ="image"  id = "img" accept = "image/*" multiple></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "prix">prix du produit</div>
                                    <div class = "input"><input type ="number" name ="prix" placeholder = "entrer le prix du produit" id = "prize"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "processor">processeur</div>
                                    <div class = "input"><input  name ="processor" id = "processor"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "stockage"> memoire</div>
                                    <div class = "input"><input  name ="memoire" id = "memoire"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "capacity"> disque dur</div>
                                    <div class = "input"><input  name ="hd" id = "hd"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "S.E">S.E</div>
                                    <div class = "input"><input  name ="se" id = "se"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "titre">titre du produit</div>
                                    <div class = "input"><input  name ="titre" id = "titre"></div>
                                </div>
                            </div>
                            <div class = "valider">
                                <input type ="submit" value = "enregistrer" id = "envoi"/>
                                <input type ="hidden" value = "save" name = "mode"/>
                                <input type ="reset" value = "annuler" id = "annulation"/>
                            </div>
                        </form>
                   </div>
                </body>
    </html>
