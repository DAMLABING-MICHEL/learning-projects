<?php
    try {
        $connect = new PDO("mysql:host=localhost;dbname=tpminitchat" , 'root' ,'');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $code = "SELECT pseudo , message FROM minitchat WHERE date = '2021-10-22'";
    } catch (PDOexception $e) {
        echo "erreur de connexion" . $e->getMessage();
    }
?> 