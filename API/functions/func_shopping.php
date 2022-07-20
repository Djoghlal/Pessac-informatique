<?php

function getItem($dbh, $cat) {
    $sqlQuery = 'SELECT * FROM `shop_item` WHERE item_cat = :cat';
    $query = $dbh->prepare($sqlQuery);
    $query->bindValue(':cat', $cat, PDO::PARAM_STR);
    $query->execute();

    $resultItem = $query->fetchAll();

    if (empty($resultItem)) {

        return "Il n'y a aucun produit datens cette catégorie";

    } else {

        foreach($resultItem as $item) {

            echo '
            <li>
                <div class="card-item">
                    <div class="card-img">
                        <img src="./public/images/upload/'. htmlentities(stripslashes($item['item_img'])) .'" alt="'. htmlentities(stripslashes($item['item_name'])) .'">
                    </div>
                    <div class="card-title">
                        <p>'. htmlentities(stripslashes($item['item_name'])) .'</p>
                    </div>
                    <div class="card-desc">
                        <p>'. htmlentities(stripslashes($item['item_desc'])) .'</p>
                    </div>
                    <div class="card-price">
                        <p>'. htmlentities(stripslashes($item['item_price'])) .'€</p>
                    </div>
                </div>
            </li>
            ';
        }
    
        return $item;

    }
}


function addItem($array_item, $dbh) {
    //Vérification des données entrées
    $i = 0;
    $erreur_name = null;
    $erreur_cat = null;
    $erreur_img = null;
    $erreur_img2 = null;
    $erreur_img3 = null;
    $erreur_img4 = null;
    $erreur_desc = null;
    $erreur_price = null;

    $tab_extension = explode('.', $array_item['item-img-name']);
    $extension = strtolower(end($tab_extension));
    $extensions = ['jpg', 'png', 'jpeg'];


    if (empty($array_item['item-name'])) {
        $erreur_name = '<p>Vous devez entrer un nom</p><br/>';
        $i++;
    }

    if (empty($array_item['item-cat'])) {
        $erreur_cat = '<p>Vous devez entrer une catégorie</p><br/>';
        $i++;
    }

    if (empty($array_item['item-img-name'])) {
        $erreur_img = '<p>Vous devez entrer une image</p><br/>';
        $i++;
    }

    if ($array_item['item-img-error'] > 0) {
        $erreur_img2 = '<p>Une erreur est survenue sur l\'upload de la photo</p><br/>';
        $i++;
    }

    if ($array_item['item-img-size'] > 16777216) {
        $erreur_img3 = '<p>Votre image doit être inférieur à 3Mbits</p><br/>';
        $i++;
    }

    if (!in_array($extension, $extensions)) {
        $erreur_img4 = '<p>L\'extension de l\'image n\'est pas bonne</p><br/>';
        $i++;
    }

    if (empty($array_item['item-desc'])) {
        $erreur_desc = '<p>Vous devez entrer une description</p><br/>';
        $i++;
    }

    if (empty($array_item['item-price'])) {
        $erreur_price = '<p>Vous devez entrer un prix</p><br/>';
        $i++;
    }

    if ($i === 0) {
        //On a tout testé sur l'image, maintenant on l'a transfère dans un dossier sur le serveur
        $tmpName = $array_item['item-img-tmp'];
        move_uploaded_file($tmpName, './public/images/upload/'.$array_item['item-img-name'].'');
        
        //On peut enregistrer l'item dans la BDD
        $sqlQuery = 'INSERT INTO shop_item (item_cat, item_name, item_desc, item_price, item_img) 
                    VALUES (:item_cat, :item_name, :item_desc, :item_price, :item_img)';
        $query = $dbh->prepare($sqlQuery);
        $query->bindValue(':item_cat', $array_item['item-cat'], PDO::PARAM_STR);
        $query->bindValue(':item_name', $array_item['item-name'], PDO::PARAM_STR);
        $query->bindValue(':item_desc', $array_item['item-desc'], PDO::PARAM_STR);
        $query->bindValue(':item_price', $array_item['item-price'], PDO::PARAM_INT);
        $query->bindValue(':item_img', $array_item['item-img-name'], PDO::PARAM_STR);
        $query->execute();

        $result = '<div class="valid"><p>Votre objet a été enregistré !</p></div>';

        return $result;

    } else {
        $result =
        '<div class="error">
            <p class="danger">Vous avez '.$i.' erreurs :</p>
            <br/><br/>
            '.$erreur_name.'
            '.$erreur_cat.'
            '.$erreur_img.'
            '.$erreur_desc.'
            '.$erreur_price.'
            <br/>
            <a href="./shop.php?action=addItem">Revenir au formulaire</a>
        </div>';

    }
    

    return $result;
}