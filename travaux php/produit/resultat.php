<?php session_start();?>
<?php    
    extract($_SESSION);
    extract($_POST);
    extract($_GET);
?>
<?php  
   if (isset($search)) {
       $result = array();
       foreach ($panier as $product) {
        if ($product['titre'] == $search ) {
            array_push($result , $product);
        }
       }
   }
?>   
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>page</title>
        <link rel="stylesheet" href="page.css">
        <link rel="stylesheet" href="fontawesome6/free/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <header>
                <div id="lien-header">
                    <a href="index.php" class="lien-header">accueil</a>
                    <a href="index.php" class="lien-header">etat </a>
                    <a href="ajouter.php" class="lien-header">ajouter </a>
                    <a href="index.php" class="lien-header">vider</a>
                </div>
            </header>
                <div class="content">
                    <?php
                        foreach($result as $product){
                    ?>
                                <div class="items">
                                    <?php echo $product['id'];?>
                                    <div class="item1">
                                            <div class="action">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                <a href="#"><i class=" fa-search"></i></a>
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
    </body>
</html>   
        