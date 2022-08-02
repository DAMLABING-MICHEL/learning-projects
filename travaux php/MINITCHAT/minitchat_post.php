<?php include("database.php");?>
<?php extract($_POST);?>
<?php
    //seecurisation des variables issues du formulaire
    $pseudo = htmlspecialchars($pseudo);
    $message = htmlspecialchars($message);
    //insertion des donnees dans la base de donnees
    $insertion = "INSERT INTO minitchat(pseudo,message) VALUES(? , ?)";
    $requete = $connect->prepare($insertion);
    $requete->execute(array($pseudo , $message));
    header("location:minitchat.php");
?>