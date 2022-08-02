<?php include('connect.php');?> 
<?php 
    $code ="SELECT id,titre,contenu,DATE_FORMAT(date_creation,'%d/%m/%Y à %Hh%imin%ss') AS creation FROM billets";
    $req = $connect->prepare($code);
    $req->execute();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>tp blog</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1> mon tp blog</h1>
        <h5>derniers billets du blog:</h5>
    <?php 
    while ($rep = $req->fetch()) {
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
    $req->closecursor();
?>
    </body>
</html>