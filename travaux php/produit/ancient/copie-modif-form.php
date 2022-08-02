<?php 
    session_start();
?>
<?php 
    extract($_SESSION);
    extract($_POST);
    if (!isset($panier)) {
        $panier = array();
    }
    if (isset($_SESSION['click'])) {
        $product = array();
        if (isset($image)) {
            $product['image'] = $image;
        }
        if (isset($prix)) {
            $product['prix'] = $prix;
        }
        if (isset($processor)) {
            $product['processor'] = $processor;
        }
        if (isset($memoire)) {
            $product['memoire'] = $memoire;
        }
        if (isset($hd)) {
            $product['hd'] = $hd;
        }
        if (isset($se)) {
            $product['se'] = $se;
        }
        if (isset($titre)) {
            $product['titre'] = $titre;
        }
        if (!empty($product)) {
            array_push($panier , $product);
        }
        $_SESSION['panier'] = $panier;
    }
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
                                    <div class ="image"><input type = "file" name ="image-modif"  id = "img" accept = "image/*" multiple value = '<img src="<?php echo "images/".$product['image'];?>'></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "prix">prix du produit</div>
                                    <div class = "input"><input type ="number" name ="prix" placeholder = "entrer le prix du produit" id = "prize"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "processor">processeur</div>
                                    <div class = "input"><input  name ="processor" id = "processor" value = "<?php echo $product['processor'];?>"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "stockage"> memoire</div>
                                    <div class = "input"><input  name ="memoire" id = "memoire" value = "<?php echo $product['memoire'];?>">></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "capacity"> disque dur</div>
                                    <div class = "input"><input  name ="hd" id = "hd" value = "<?php echo $product['hd'];?>">></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "S.E">S.E</div>
                                    <div class = "input"><input  name ="se" id = "se" value = <?php echo $product['se'];?>>></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "titre">titre du produit</div>
                                    <div class = "input"><input  name ="titre" id = "titre" value = <?php echo $product['titre'];?>></div>
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
