<?php

    try {

        $user = "root";
        $pass = "";
        $dbh = new PDO('mysql:host=localhost;dbname=parain_informatique', $user, $pass);

        //print "Connexion BDD réussie !";

    } catch (PDOException $e) {

        print "Erreur SQL connect : " . $e->getMessage() . "<br/>";
        die();

    }

?>