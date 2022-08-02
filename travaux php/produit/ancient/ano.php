                <div class="stockage">
                    <div class="label"><label for="stockage">stockage</label></div>
                        <div class="memoire">
                            <input type="text" name="modifmemoire" value=<?php echo $product['memoire'];?>>
                            <label for="memoire">memoire</label>
                        </div>
                        <div class="hd">
                            <input type="text" name="modifhd" value=<?php echo $product['hd'];?>>
                            <label for="hd">disque dur</label>
                        </div>
                    </div>
                    <div class="performance">
                        <div class="label"><label for="performance">performance</label></div>
                        <div class="processeur">
                            <input type="text" name="modifprocessor" value=<?php echo $product['processor'];?>>
                            <label for="processeur">processeur</label>
                        </div>
                        <div class="se">
                            <input type="text" name="modifse" value=<?php echo $product['se'];?>>
                            <label for="se">S.E</label>
                        </div>
                    </div>
<?php        
        array_push($panier,$modifproduct);
        function filter_array($product){
            global $identifiant;
            return $product['id'] == $identifiant;
         }
         $f = array_filter($panier, 'filter_array');
         
?>   

<!-- ancien formulaire-->
<link rel = "stylesheet" href = "css/styl.css">
         <div class = "container">
                        <form method ="POST" action = "save.php">
                            <div class = "donnees">
                                <div class = "div1" >
                                <div class = lb><label for = "image">image du produit</div>
                                    <div class ="image"><input type = "file" name ="image"  id = "img" accept = "image/*" multiple value= "<?php echo "images/".$product['image'];?>"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "prix">prix du produit</div>
                                    <div class = "input"><input type ="number" name ="modifprix" placeholder = "entrer le prix du produit" id = "prize" value = "<?php echo $product['prix'];?>"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "processor">processeur</div>
                                    <div class = "input"><input  name ="modifprocessor" id = "processor" value = "<?php echo $product['processor'];?>"></div>
                                </div>
                                <div class = "div2">
                                    <div class =" lb"><label for = "stockage"> memoire</div>
                                    <div class = "input"><input  name ="modifmemoire" id = "memoire" value = "<?php echo $product['memoire'];?>"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "capacity"> disque dur</div>
                                    <div class = "input"><input  name ="modifhd" id = "hd" value = "<?php echo $product['hd'];?>"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "S.E">S.E</div>
                                    <div class = "input"><input  name ="modifse" id = "se" value = "<?php echo $product['se'];?>"></div>
                                </div>
                                <div class = "div3">
                                    <div class =" lb"><label for = "titre">titre du produit</div>
                                    <div class = "input"><input  name ="modiftitre" id = "titre" value = "<?php echo $product['titre'];?>"></div>
                                </div>
                            </div>
                            <div class = "valider">
                                <input type ="submit" value = "enregistrer" id = "envoi"/>
                                <input type ="hidden" value = "save" name = "modifmode"/>
                                <input type ="reset" value = "annuler" id = "annulation"/>
                            </div>
                        </form>
                   </div>

                   <?php
                    if (isset($action) && $action == 'modification') {
                        //echo "action valide";
                        function filter_array($product){
                         global $identifiant;
                         return $product['id'] == $identifiant;
                         }
                         $f = array_filter($panier, 'filter_array');
                         $product = $f['0'];
                        // $product = $f[1];
                    }  
                    else {
                        echo "action nulle";
                    }  
                   ?>
    

<!-- modif-form-->
    <?php session_start();?>
    <?php
         extract($_SESSION);
         extract($_POST);
         extract($_GET);
         function filter_array($product){
            global $identifiant;
            return $product['id'] == $identifiant;
            }
            $f = array_filter($panier, 'filter_array');
            for ($i=0; $i < count($panier); $i++) { 
                $product = $f;
    ?>   
        <link rel="stylesheet" href="css/ajouter.css">  
        <div class="container">
            <div class="items">
                <header>modification d'un produit</header>
                <form method="POST" action="save.php">
                    <div class="image">
                        <div class="label"><label for="image">image</label></div>
                        <div class="img"><input type="file" name="modifimage" id = "img" accept = "image/*" multiple value=<?php echo $product[$i]['image']?>></div>
                    </div>
                    <div class="champs">
                        <label for="prix">prix</label>
                        <input type="text" name="modifprix" value=<?php echo $product[$i]['prix']?>>
                    </div>
                    <div class="champs">
                        <label for="titre">titre</label>
                        <input type="text" name="modiftitre" value=<?php echo $product[$i]['titre']?>>
                    </div>
                    <div class="stockage">
                        <div class="label"><label for="stockage">stockage</label></div>
                        <div class="memoire">
                            <input type="text" name="modifmemoire" value=<?php echo $product[$i]['memoire']?>>
                            <label for="memoire">memoire</label>
                        </div>
                        <div class="hd">
                            <input type="text" name="modifhd" value=<?php echo $product[$i]['hd']?>>
                            <label for="hd">disque dur</label>
                        </div>
                    </div>
                    <div class="performance">
                        <div class="label"><label for="performance">performance</label></div>
                        <div class="processeur">
                            <input type="text" name="modifprocessor" value=<?php echo $product[$i]['processor']?>>
                            <label for="processeur">processeur</label>
                        </div>
                        <div class="se">
                            <input type="text" name="modifse" value=<?php echo $product[$i]['se']?>>
                            <label for="se">S.E</label>
                        </div>
                    </div>
                    <input type = "hidden" name ="id" value = <?php echo $product[$i]['id'];?>>
                    <div class="boutons">
                        <input type="submit" value="valider" id="valider">
                        <input type ="hidden"  name = "modifmode"/>
                        <input type="reset" value="annuler" id="annuler">
                    </div>
                </form>
            </div>
        </div>   
    <?php    
        }
    ?>
