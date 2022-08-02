<?php
   try{
       $connect = new PDO("mysql:host=localhost;dbname=tpminitchat",'root','');
       $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
       echo "erreur de connexion".$e->getMessage();
   }
?>