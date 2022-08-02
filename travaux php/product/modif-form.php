<?php session_start();?>
    <?php
         extract($_SESSION);
         extract($_POST);
         extract($_GET);
           if (isset($identifiant)) {
            $product = $panier[$identifiant];
           }
    ?>   
        <link rel="stylesheet" href="css/ajouter.css">  
        <div class="container">
            <header>
                <a href="index.php">accueil</a>
                 enregistrement d'un produit
            </header>
            <div class="items">
                <form method="POST" action="index.php">
                    <div class="image">
                        <div class="label"><label for="image">image</label></div>
                        <div class="img"><input type="file" name="modifimage" id = "img" accept = "image/*" multiple></div>
                    </div>
                    <div class="champs">
                        <label for="prix">prix</label>
                        <input type="number" name="modifprix" value=<?php echo $product['prix'];?>>
                    </div>
                    <div class="champs">
                        <label for="titre">titre</label>
                        <input type="text" name="modiftitre" value=<?php echo $product['titre'];?>>
                    </div>
                    <div class="champ-caract">
                        <label for="stockage">stockage</label>
                        <div class="item-caract">
                            <fieldset>
                                <legend>memoire</legend>
                                <input type="text" class="field-input" name="modifmemoire" value="<?php echo $product['memoire'];?>"/>
                            </fieldset>
                            <fieldset>
                                <legend>disque dur</legend>
                                <input type="text" name="modifhd" value="<?php echo $product['hd'];?>"/>
                            </fieldset>
                        </div>
                    </div>
                    <div class="champ-caract" id="champ-caract">
                        <label for="performance">performance</label>
                        <div class="item-caract">
                            <fieldset>
                                <legend>processeur</legend>
                                <input type="text" name="modifprocessor" value="<?php echo $product['processor'];?>"/>
                            </fieldset>
                            <fieldset>
                                <legend>S.E</legend>
                                <input type="text" name ="modifse" value="<?php echo $product['se'];?>"/>
                            </fieldset>
                        </div>
                    </div>
                    <input type = "hidden" name ="modifid" value="<?php echo $product['id'];?>"/>
                    <div class="boutons">
                        <button id="valider">valider</button>
                        <input type = "hidden" name = "modifmode"> 
                        <input type="reset" value="annuler" id="annuler">
                    </div>
                </form>
            </div>
        </div>
