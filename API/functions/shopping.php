<?php

function getItem($dbh, $cat) {
    $sqlQuery = 'SELECT * FROM `shop-item` WHERE cat = :cat';
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
                        <img src="'. htmlentities(stripslashes($item['img'])) .'" alt="'. htmlentities(stripslashes($item['name'])) .'">
                    </div>
                    <div class="card-title">
                        <p>'. htmlentities(stripslashes($item['name'])) .'</p>
                    </div>
                    <div class="card-desc">
                        <p>'. htmlentities(stripslashes($item['desc'])) .'</p>
                    </div>
                    <div class="card-price">
                        <p>'. htmlentities(stripslashes($item['price'])) .'€</p>
                    </div>
                </div>
            </li>
            ';
        }
    
        return $item;

    }

    
}