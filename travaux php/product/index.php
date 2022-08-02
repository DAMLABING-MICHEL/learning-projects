<?php session_start();?>
<?php  
    //creation du panier
    extract($_SESSION);
    extract($_POST);
    extract($_GET);
    if (!isset($panier)) {
        $panier = array();
    }
    if (isset($mode)) {
        $product = array();
        //definir l'identifiant
        $id = count($panier)+1;
        $product['id'] =$id;
        if (isset($image)) {
            $product['image'] = htmlspecialchars($image);
        }
        if (isset($prix)) {
            $product['prix'] = htmlspecialchars($prix);
        }
        if (isset($processor)) {
            $product['processor'] = htmlspecialchars($processor);
        }
        if (isset($memoire)) {
            $product['memoire'] =htmlspecialchars($memoire);
        }
        if (isset($hd)) {
            $product['hd'] = htmlspecialchars($hd);
        }
        if (isset($se)) {
            $product['se'] = htmlspecialchars($se);
        }
        if (isset($titre)) {
            $product['titre'] = htmlspecialchars($titre);
        }
        if (!empty($product)) {
            $panier[$id] = $product;
            $_SESSION['panier'] = $panier;
        }
    }
 ?>
 <?php
if (isset($modifmode)) {
      $product = $panier[$modifid];
    if ($product != null) {
        if (!empty($modifimage)) {
            $product['image'] = htmlspecialchars($modifimage);
        }
        $product['prix'] = htmlspecialchars($modifprix);
        $product['titre'] = htmlspecialchars($modiftitre);
        $product['processor'] = htmlspecialchars($modifprocessor);
        $product['memoire'] = htmlspecialchars($modifmemoire);
        $product['hd'] = htmlspecialchars($modifhd);
        $product['se'] = htmlspecialchars($modifse);
        $panier[$modifid]= ($product);
        $_SESSION['panier'] = ($panier);
    }
}
 ?>
<!DOCTYPE html>
<html lang = "fr">
    <meta charset="utf-8">
<head>
    <title>ma page produits</title>
    <link rel="stylesheet" href="styles/save.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/css/all.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="lien">
                <a href="index.php" class="lien-header">accueil</a>
                <a href="index.php?etat=<?php echo count($panier)?>" class="lien-header">etat</a>
                <a href="ajouter.php" class="lien-header">ajouter </a>
                <a href="index.php?value=vider" class="lien-header">vider </a>
            </div>
            <div class="div-bar">
                <form method ="GET" action ="resultat.php" name="recherche" id="form-search">
                    <input type="search" id="search" placeholder="recherche..." name="search"/>
                    <button id="valider">valider</button>
                </form>
            </div>
        </form>
        </header>
        <?php
            if (isset($value)) {
        ?>
                <div id="msg-suppression">
                    voulez-vous supprimer tous les produits?
                    <form method="POST">
                        <button id="valid" name="oui" value="oui">oui</button>
                        <button id="retour" value="non"><a href="index.php">non</a></button>
                    </form>    
                </div> 
                <?php
                    if (isset($oui)) {
                        $panier = array();
                        $_SESSION['panier'] = $panier;
                        echo "<h4>suppression réussie!<a href=index.php>ok</a></h4>";
                    }    
                ?>  
        <?php
            }
        ?>    
        <?php
            if (isset($action)) {  
            ?>
                <div id="msg-suppression">
                    confirmer la suppression?
                    <form method="POST">
                        <button id="valid" name="oui" value="oui">oui</button>
                        <button id="retour" value="non"><a href="index.php">non</a></button>
                    </form>    
                </div>   
            <?php 
                if (isset($oui)) {
                    echo "<h4>suppression réussie!<a href=index.php>ok</a></h4>";
                    //array_splice($panier , $identifiant , 1);
                    unset($panier[$identifiant]);
                    $_SESSION['panier'] = $panier;
                }    
            }
            if (isset($etat)) {
                if (!empty($panier)) {
        ?>
                <div id="msg-suppression">
                  <?php echo "votre panier contient&nbsp&nbsp<h3>".count($panier) ."</h3>&nbsp&nbspproduits!<a href=index.php>ok</a>";?>   
                </div>  
        <?php            
                }
                else {
        ?>
                 <div id="msg-suppression">
                  <?php echo "votre panier est vide!<a href=index.php>ok</a>";;?>   
                </div>
        <?php            
                }
            }
        ?>         
         <?php
                                foreach($panier as $product){
                            ?>
                                            <div class="items">
                                                <div class="item1">
                                                    <div id="action">
                                                        <a href = "modif-form.php?action=modifier&identifiant=<?php echo $product['id'];?>" id ="modif"><i class="fas fa-edit"></i></a> 
                                                        <a href = "index.php?action=supprimer&identifiant=<?php echo $product['id'];?>" id ="delete"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                <div id="titre" class="titre-produit"><?php echo $product['titre'];?></div>
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
   </body>
</html>
