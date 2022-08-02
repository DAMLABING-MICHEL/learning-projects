<?php session_start();?>
<?php extract($_SESSION);?>
<?php extract($_POST);?>
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
    }
?>

<?php
    //  if (isset($entrer)) {
    //     foreach ($visiteurs as $visitor) {
    //     if ($visitor['login'] != $pseudonyme) {
    //          echo "vous n'etes pas inscrit!";
    //          echo "cliquez <a href='rejoindre.php'>ici</a> pour vous inscrire";
    //     }
    //  }
    //  }
?>
<form action="#" method="POST">
    <div>
        <label for="pseudonyme">pseudonyme</label>
        <input type="text" name="pseudonyme" value="<?php if (isset($rejoindre)) {echo $login;}?>" required/>
    </div>
    <div style="margin-top:10px;">
        <input  type="hidden"  name="entrer"></input>
        <button  name="entrer" value="entrer">se connecter</button>
    </div>
</form>
<a href="rejoindre.php">s'inscrire</a>
<?php
    echo json_encode($visiteurs);
      if (isset($entrer)) {
        //  echo json_encode($visiteurs);
        foreach ($visiteurs as $visitor) {
        if ($visitor['login'] == $pseudonyme) {
            header('location:minitchat.php');
        }
        elseif (($visitor['login'] != $pseudonyme) && $pseudonyme != "") {
            header('location:rejoindre.php');
        }
     }
     }
?>