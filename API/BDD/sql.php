<?php

$host = 'localhost';
$dbname = 'parain_informatique';
$user = "root";
$pass = "";
$dsn = "mysql:host = $host;dbname = $dbname";

    try {

        $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.'',$user,$pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //print "Connexion BDD réussie !";

    } catch (PDOException $e) {

        print "Erreur SQL connect : " . $e->getMessage() . "<br/>";
        die();

    }

?>