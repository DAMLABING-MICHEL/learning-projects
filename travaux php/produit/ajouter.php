<?php $nav_en_cours = 'ajouter'; ?>
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
                    <ul id="navigation">
                        <li><a href="index.php">accueil </a></li>
                        <li><a href="index.php">etat </a></li>
                        <li <?php if ($nav_en_cours == 'ajouter') {echo ' id="en-cours"';} ?>><a href="ajouter.php">ajouter </a></li>
                        <li><a href="index.php">vider</a></li>
                    </ul>
            <div class="items">
                <form method="POST" action="index.php">
                    <div class="image">
                        <div class="label"><label for="image">image</label></div>
                        <div class="img"><input type="file" name="image" id = "img" accept = "image/*" multiple></div>
                    </div>
                    <div class="champs">
                        <label for="prix">prix</label>
                        <input type="text" name="prix">
                    </div>
                    <div class="champs">
                        <label for="titre">titre</label>
                        <input type="text" name="titre">
                    </div>
                    <div class="stockage">
                        <div class="label"><label for="stockage">stockage</label></div>
                        <div class="memoire">
                            <input type="text" name="memoire">
                            <label for="memoire">memoire</label>
                        </div>
                        <div class="hd">
                            <input type="text" name="hd">
                            <label for="hd">disque dur</label>
                        </div>
                    </div>
                    <div class="performance">
                        <div class="label"><label for="performance">performance</label></div>
                        <div class="processeur">
                            <input type="text" name="processor">
                            <label for="processeur">processeur</label>
                        </div>
                        <div class="se">
                            <input type="text" name="se">
                            <label for="se">S.E</label>
                        </div>
                    </div>
                    <!--<input type = "hidden" name ="id" value = >-->
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