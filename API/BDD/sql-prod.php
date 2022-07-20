<?php

$host = 'localhost';
$dbname = 'rcqxzxba_parain-boutique';
$user = "rcqxzxba_Admin";
$pass = "a8Mmrq79fa8BtkM";
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