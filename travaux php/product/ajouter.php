<?php session_start();?>
<?php
    //extraction de la session
    extract($_SESSION);
    extract($_POST);
    extract($_GET);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>enregistrement d'un produit</title>
        <link rel="stylesheet" href="css/ajouter.css">
    </head>
    <body>
        <div class="container">
            <header>
               <a href="index.php">accueil</a>
                enregistrement d'un produit
            </header>
            <div class="items">
                <form method="POST" action="index.php">
                    <div class="image">
                        <div class="label"><label for="image">image</label></div>
                        <div class="img"><input type="file" name="image" id = "img" accept = "image/*" multiple></div>
                    </div>
                    <div class="champs">
                        <label for="prix">prix</label>
                        <input type="number" name="prix">
                    </div>
                    <div class="champs">
                        <label for="titre">titre</label>
                        <input type="text" name="titre">
                    </div>
                    <div class="champ-caract">
                        <label for="stockage">stockage</label>
                        <div class="item-caract">
                            <fieldset>
                                <legend>memoire</legend>
                                <input type="text" class="field-input" name="memoire"/>
                            </fieldset>
                            <fieldset>
                                <legend>disque dur</legend>
                                <input type="text" name="hd"/>
                            </fieldset>
                        </div>
                    </div>
                    <div class="champ-caract" id="champ-caract">
                        <label for="performance">performance</label>
                        <div class="item-caract">
                            <fieldset>
                                <legend>processeur</legend>
                                <input type="text" name="processor"/>
                            </fieldset>
                            <fieldset>
                                <legend>S.E</legend>
                                <input type="text" name ="se"/>
                            </fieldset>
                        </div>
                    </div>
                    <input type = "hidden" name ="id">
                    <div class="boutons">
                        <input type="submit" value="valider" id="valider">
                        <input type ="hidden" value = "save" name = "mode"/>
                        <input type="reset" value="annuler" id="annuler">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>