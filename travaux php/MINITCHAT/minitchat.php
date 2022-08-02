<?php session_start();?>
<?php include("database.php");?>
<?php extract($_POST);?>
<?php extract($_GET);?>
<?php extract($_SESSION);?>

<?php 
    //recuperation des donnees issues de la base de donnees
    $donnees = "SELECT pseudo,message FROM minitchat ORDER  BY id DESC LIMIT 2";
    $requete = $connect->query($donnees);
?>
<?php 
    $code = "SELECT pseudo, message FROM minitchat ORDER BY id DESC";
    $req = $connect->query($code);
?>

<?php 
            foreach ($visiteurs as $visitor) {
                $pseudonyme = $visitor['login'];
            }
                setcookie('nom', $pseudonyme, time() + 365*24*3600, null, null,
                false, true);
?>
<a href='minitchat.php?refresh'>raffraichir</a>
<form action="minitchat_post.php" method="POST">
    <div>
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo"  value="<?php echo $_COOKIE['nom'];?>" required/>
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
<a href='minitchat.php?anciens'>anciens messages</a>

<?php
    if (isset($anciens)) {
        while ($ancien = $req->fetch()) {
        
            echo '<p><strong>' . htmlspecialchars($ancien['pseudo']) .
            '</strong> : ' . htmlspecialchars($ancien['message']) . '</p>';
        }
        $req->closecursor();
       
    }
?>