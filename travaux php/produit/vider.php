<?php $nav_en_cours = 'vider'; ?>
<?php session_start();?>
<?php  
    extract($_SESSION);
    extract($_POST);
    extract($_GET);
    ?>    
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>page</title>
        <link rel="stylesheet" href="page.css">
        <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.css">
    </head>
    <body>
        <div class="container">
                <div class="header">
                    <ul id="navigation">
                        <li <?php if ($nav_en_cours == 'index') {echo ' id="en-cours"';} ?>><a href="index.php">accueil </a></li>
                        <li <?php if ($nav_en_cours == 'index') {echo ' id="en-cours"';} ?>><a href="index.php">etat </a></li>
                        <li <?php if ($nav_en_cours == 'ajouter') {echo ' id="en-cours"';} ?>><a href="ajouter.php">ajouter </a></li>
                        <li <?php if ($nav_en_cours == 'vider') {echo ' id="en-cours"';} ?>><a href="vider.php?vider">vider</a></li>
                    </ul>
                    <form method ="GET" action ="resultat.php" name="recherche" id="form-search">
                        <input type="search" id="search" placeholder="recherche..." name="search"/>
                        <input type = "submit" value="valider">
                    </form>
                </div>
                <div class="content">
                    <?php
                        if ((isset($action) && $action="suppression")) {
                    ?>
                        <div class="confirm">
                            supprimer le produit?
                            <form method="POST">
                                <button name="valid">oui </button>
                                <button><a href="index.php" id="non">non</a></button>
                            </form>    
                        </div>
                    <?php
                        }
                        if (isset($valid)) {
                            unset($panier[$identifiant]);
                            $_SESSION['panier'] = $panier;
                            echo "<h4>suppression réussie!<a href= index.php>ok</a></h4>";
                        }
                        if (isset($vider)) {
                        ?>
                            <div class="confirm">
                            supprimer le produit?
                            <form method="POST">
                                <button name="supprimer">oui </button>
                                <button><a href="index.php" id="non">non</a></button>
                            </form>    
                        </div>
                        <?php    
                            if (isset($supprimer)) {
                                $panier = array();
                                $_SESSION['panier'] = $panier;
                                echo "<h4>suppression réussie!<a href= index.php>ok</a></h4>";
                            }
                        }
                    ?>
                    <?php
                    //affichage des produits
                        foreach($panier as $product){
                    ?>
                                <div class="items">
                                    <div class="item1">
                                            <div class="action">
                                                <a href="modif-form.php?action=modification&identifiant=<?php echo $product['id'];?>"><i class="fas fa-edit"></i></a>
                                                <a href="index.php?action=suppression&identifiant=<?php echo $product['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        <span class="titre-produit"><?php echo $product['titre'];?></span>
                                        </div>
                                    <img src="<?php echo "images/".$product['image'];?>" id="img">
                                    <div class="item2">
                                        <div class="prix"><?php echo $product['prix'];?>FCFA</div>
                                        <div class="describ">
                                            <i class="fas fa-check"></i>PROCESSEUR: <?php echo $product['processor'];?><br>
                                            <i class="fas fa-check"></i>RAM:<?php echo $product['memoire'];?><br>
                                            <i class="fas fa-check"></i>HD:<?php echo $product['hd'];?><br> 
                                            <i class="fas fa-check"></i>S.E:<?php echo $product['se'];?><br>
                                        
                                        </div>
                                        <div class="more-infos"><a href="#" class="more">en savoir plus</a></div>
                                    </div>
                                </div>
                    <?php
                        }
                    ?>
                </div>         
        </div>
    </body>
</html>