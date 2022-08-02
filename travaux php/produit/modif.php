<?php session_start();?>
<?php    
    extract($_SESSION);
    extract($_POST);
    extract($_GET);
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>modif</title>
        <link rel="stylesheet" href="styles/modif.css">
    <link rel="stylesheet" href="fontawesome6/free/css/all.css">
    </head>
    <body>
        <div class="container">
        <h1>cliquez sur le produit a modifier</h1>
            <div class="items">
            <a href = "modif-form.php?action=modification&identifiant=<?php echo $product['id'];?>" id ="modif">modification</a>
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
            <a href = "modif-form.php?action=modification&identifiant=<?php echo $product['id'];?>" id ="modif">modification</a>
                <div class="item1" id="red-item"><span class="titre-produit">acer</span></div>
                <img src="images/marq.jpg" id="img">
                <div class="item2">
                    <div class="prix"><span id ="prix">200 000 FCFA</span></div>
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
            <a href = "modif-form.php?action=modification&identifiant=<?php echo $product['id'];?>" id ="modif">modification</a>
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
                                            <a href = "modif-form.php?action=modification&identifiant=<?php echo $product['id'];?>" id ="modif">modification</a> 
                                                    <div class="item1"><span class="titre-produit"><?php echo $product['titre'];?></span></div>
                                                    <img src="<?php echo 'images/'.$product['image'];?>" id="img">
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
                                    

                 <?php
                 ?>                   
        </div>
    </body>
</html>