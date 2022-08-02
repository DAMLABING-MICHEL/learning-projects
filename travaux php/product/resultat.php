<?php session_start();?>
<?php
extract($_SESSION);
extract($_GET);
    if (isset($search)) {
        $result = array();
        function recherche($product) {
            global $search;
            return $product['titre'] == $search;
        }
        $f = array_filter($panier , 'recherche');
        $product = $f;
    }
?>    



            <link rel="stylesheet" href="styles/save.css">
            <link rel="stylesheet" href="fontawesome6/free/css/all.css">
            <div class="container">
            <div class="items">
                <div class="item1">
                    <div id="action">
                        <a href = "modif-form.php?action=modifier&identifiant=<?php echo $product['id'];?>" id ="modif"><i class="fas fa-edit"></i></a> 
                        <a href = "delete.php?action=supprimer&identifiant=<?php echo $product['id'];?>" id ="delete"><i class="far fa-trash-alt"></i></a>
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
            </div>