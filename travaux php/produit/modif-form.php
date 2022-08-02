<?php $nav_en_cours = 'modif-form'; ?>
<?php session_start();?>
    <?php
         extract($_SESSION);
         extract($_POST);
         extract($_GET);
       if (isset($action)) {
           $product = $panier[$identifiant];
       }
    ?>
   
   <!DOCTYPE html>
<html>
    <head>
        <title>modification d'un produit</title>
        <link rel="stylesheet" href="css/ajouter.css">
    </head>
    <body>
        <div class="container">
            <div class="items">
                <header>enregistrement d'un produit</header>
                <form method="POST" action="index.php">
                    <div class="image">
                        <div class="label"><label for="image">image</label></div>
                        <div class="img"><input type="file" name="modifimage" id = "img" accept = "image/*" multiple value=<?php echo $product['image']?>></div>
                    </div>
                    <div class="champs">
                        <label for="prix">prix</label>
                        <input type="text" name="modifprix" value=<?php echo $product['prix']?>>
                    </div>
                    <div class="champs">
                        <label for="titre">titre</label>
                        <input type="text" name="modiftitre" value=<?php echo $product['titre']?>>
                    </div>
                    <div class="stockage">
                        <div class="label"><label for="stockage">stockage</label></div>
                        <div class="memoire">
                            <input type="text" name="modifmemoire" value=<?php echo $product['memoire']?>>
                            <label for="memoire">memoire</label>
                        </div>
                        <div class="hd">
                            <input type="text" name="modifhd" value=<?php echo $product['hd']?>>
                            <label for="hd">disque dur</label>
                        </div>
                    </div>
                    <div class="performance">
                        <div class="label"><label for="performance">performance</label></div>
                        <div class="processeur">
                            <input type="text" name="modifprocessor" value=<?php echo $product['processor']?>>
                            <label for="processeur">processeur</label>
                        </div>
                        <div class="se">
                            <input type="text" name="modifse" value=<?php echo $product['se']?>>
                            <label for="se">S.E</label>
                        </div>
                    </div>
                    <input type = "hidden" name ="modifid" value = <?php echo $product['id'];?>>
                    <div class="boutons">
                        <input type="submit" value="valider" id="valider">
                        <input type ="hidden"  name = "modifmode" value="index"/>
                        <input type="reset" value="annuler" id="annuler">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
