<h1>Page de connexion PHPMyAdmin</h1>

<?php
    try {
        $connect = new PDO("mysql:host=localhost;dbname=parain_informatique;charset=utf8", 'root', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    } catch(Exception $e) {
        die ("Erreur : " . $e->getMessage());
    }

    $connect = null;
?>