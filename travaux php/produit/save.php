<?php
    // recuperation des donnees modifies
    if (isset($modifmode)) {
        $modifproduct = array();
        if (isset($modifprix)) {
            $modifproduct['modifprix'] = $modifprix;
        }
        if (isset($modifprocessor)) {
            $modifproduct['modifprocessor'] = $modifprocessor;
        }
        if (isset($modifmemoire)) {
            $modifproduct['modifmemoire'] = $modifmemoire;
        }
        if (isset($modifhd)) {
            $modifproduct['modifhd'] = $modifhd;
        }
        if (isset($modifse)) {
            $modifproduct['modifse'] = $modifse;
        }
        if (isset($modiftitre)) {
            $modifproduct['modiftitre'] = $modiftitre;
        }
        array_push($panier,$modifproduct);
        function filter_array($product){
            global $identifiant;
            return $product['id'] == $identifiant;
         }
         $f = array_filter($panier, 'filter_array');
         $product['prix']=$modifproduct['modifprix'];
         $product['processor']=$modifproduct['modifprocessor'];
         $product['memoire']=$modifproduct['modifmemoire'];
         $product['hd']=$modifproduct['modifhd'];
         $product['se']=$modifproduct['modifse'];
         $product['titre']=$modifproduct['modiftitre'];
         $product = $f;
         echo json_encode($f);
    }
?>
<!DOCTYPE html>
<head>
    <title>ma page produits</title>
    <link rel="stylesheet" href="styles/save.css">
    <link rel="stylesheet" href="fontawesome6/free/css/all.css">
</head>
<body>
    <div class="container">
        <header class="header">
        <a href="#" class="lien-header">accueil</a>
        <a href="ajouter.php" class="lien-header">ajouter </a>
        <a href="modif.php" class="lien-header">modifier </a>
        <a href="delete.php" class="lien-header">supprimer</a>
        <form method ="GET" action ="resultat.php" name="recherche">
                <input type="search" id="search" placeholder="recherche..." name="search"/>
                <input type = "submit" value="valider">
                <!--<div id="search-icon"><a href="#"><i class="fas fa-search"></i></a></div>-->
        </form>
        </header>
        <div class="items">
            <div class="item1"><span class="titre-produit">dell</span></div>
            <img src="images/marq2.jpg" id="img">
            <div class="item2">
                <div class="prix">200 000 FCFA</div>
                <div class="describ">
                <i class="fas fa-check"></i>PROCESSEUR:1.6ghz<br>
                <i class="fas fa-check"></i>RAM:4go<br>
                <i class="fas fa-check"></i>HD :500go<br>
                <i class="fas fa-check"></i>S.E:windows 10 pro 64bits
                </div>
                <div class="more-infos"><a href="#" class="more">en savoir plus</a></div>
            </div>
        </div>
        <div class="items">
            <div class="item1" id="red-item"><span class="titre-produit">acer</span></div>
            <img src="images/marq.jpg" id="img">
            <div class="item2">
                <div class="prix">200 000 FCFA</div>
                <div class="describ">
                <i class="fas fa-check"></i>PROCESSEUR:1.6ghz<br>
                <i class="fas fa-check"></i>RAM:4go<br>
                <i class="fas fa-check"></i>HD :500go<br>
                <i class="fas fa-check"></i>S.E:windows 10 pro 64bits
                </div>
                <div class="more-infos"><a href="#" class="more">en savoir plus</a></div>
            </div>
        </div>
        <div class="items">
            <div class="item1"><span class="titre-produit">asus</span></div>
            <img src="images/marq3.jpg" id="img">
            <div class="item2">
                <div class="prix">200 000 FCFA</div>
                <div class="describ">
                <i class="fas fa-check"></i>PROCESSEUR:1.6ghz<br>
                <i class="fas fa-check"></i>RAM :4go<br>
                <i class="fas fa-check"></i>HD :500go<br>
                <i class="fas fa-check"></i>S.E:windows 10 pro 64bits
                </div>
                <div class="more-infos"><a href="#" class="more">en savoir plus</a></div>
            </div>
        </div>
        <?php
      
                                 foreach($panier as $product){
                            ?>
                                            <div class="items">
                                                <?php echo $product['id'];?>
                                                <div class="item1"><span class="titre-produit"><?php echo $product['titre'];?></span></div>
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
                     <!-- ajout produit-->
    <!--<div class="ajout"></div>-->
</body>
</html>