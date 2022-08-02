<?php include('connect.php');?> 
<?php extract($_GET);?> 
<?php 
    $code ="SELECT id,titre,contenu,DATE_FORMAT(date_creation,'%d/%m/%Y à %Hh%imin%ss') AS creation FROM billets";
    $req = $connect->prepare($code);
    $req->execute();
    //affichage des commentaires
    $code_comment ="SELECT id_billet,auteur,commentaire,DATE_FORMAT(date_commentaire,'%d/%m/%Y à %Hh%imin%ss') AS time_comment FROM commentaires";
    $requete = $connect->prepare($code_comment);
    $requete->execute();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>tp tp blog</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1> mon blog</h1>
        <h5><a href='index.php'>retour à la liste des billets</a></h5>
        <?php 
            while ($rep = $req->fetch()) {
                if (isset($identifiant)) {
                    if ($identifiant == $rep['id']) {
        ?>
                    <div class="content-letter">
                        <div class="entete">
                            <?php echo $rep['titre'];?> le <?php echo $rep['creation'];?>
                        </div>
                        <div class="contenu">
                            <?php echo $rep['contenu']?> 
                        </div>
                        <a href='commentaires.php?identifiant=<?php echo $rep['id']?>'>commentaires</a>
                    </div>
        <?php
                }
            }
     }
    $req->closecursor();
?>
        <?php
        //affichage des commentaires
            echo "<h2> commentaires</h2>";
            while ($reponse = $requete->fetch()) {
                if (isset($identifiant)) {
                    if ($identifiant == $reponse['id_billet']) {
        ?> 
            <div class="comments">
                <?php echo $reponse['auteur'] ;?> le <?php echo $reponse['time_comment'] ;?>
            </div>
            <div class="comments"><?php echo $reponse['commentaire'] ;?></div>
        <?php               
                    }
                }
            }
            $req->closecursor();
        ?>
    </body>
</html>