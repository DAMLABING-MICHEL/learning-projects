<?php session_start();?>
<?php include("database.php");?>
<?php extract($_POST);?>
<?php extract($_SESSION);?>
<?php 
    //recuperation des donnees issues de la base de donnees
    $donnees = "SELECT pseudo,message FROM minitchat ORDER  BY id DESC LIMIT 2";
    $requete = $connect->query($donnees);
?>
<?php
    if (!isset($visiteurs)) {
        $visiteurs = array();
    }
    if (isset($rejoindre)) {
        $visitor = array();
        $id = count($visiteurs)+1;
        $visitor['id'] = $id;
        if (isset($login)) {
            $visitor['login'] = $login;
        }
        if (!empty($visitor)) {
            array_push($visiteurs , $visitor);
            $_SESSION['visiteurs'] = $visiteurs;
        }
        echo json_encode($visiteurs);
    }
?>

<?php
    if (isset($entrer)) {
        foreach ($visiteurs as $visitor) {
            if ($visitor['login'] != $pseudonyme) {
                echo "vous n'etes pas inscrit!";
                echo "cliquez <a href='rejoindre.php'>ici</a> pour vous inscrire";
            }
        }
    }
?>
<form action="minitchat_post.php" method="POST">
    <div>
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo"  value="<?php if (isset($entrer)) {
            foreach ($visiteurs as $value) {
               if ($value['login'] == $pseudonyme ) {
                   $visitor = $value;
               }
                echo $visitor['login'];
            }
        }?>" required/>
    </div>
    <div style="margin-top:20px;">
        <label for="msg">message</label>
        <textarea type="text" name="message" required></textarea>
    </div>
    <div style="margin-top:10px;">
        <button  name="envoie">envoyer</button>
    </div>
</form>


<?php
//affichage des donnees issues de la base de donnees
    while ($resultat = $requete->fetch()) {
        
        echo '<p><strong>' . htmlspecialchars($resultat['pseudo']) .
        '</strong> : ' . htmlspecialchars($resultat['message']) . '</p>';
    }
    $requete->closecursor();
?>

<a href="index_minitchat.php">deconnexion</a>

<?php
?>