<?php

    $reqSql = "SELECT * FROM `shop-item` WHERE cat = :cat";
                                    
    $getItems = $db->prepare($reqSql);
    $getItems->execute([
    'cat' => 'alimentation',
    ]);

    $resultItem = $getItems->fetchAll();

    if (empty($resultItem)) {
        echo '<p>Il n\'y a aucun article pour cette catégorie</p>';
    } else {

        foreach($resultItem as $item) {
            echo '
                <li>
                    <div class="card-item">
                        <div class="card-img">
                            <img src="'. htmlentities($item['img']) .'" alt="'. htmlentities($item['name']) .'">
                        </div>
                        <div class="card-title">
                            <p>'. htmlentities($item['name']) .'</p>
                        </div>
                        <div class="card-desc">
                            <p>'. htmlentities($item['desc']) .'</p>
                        </div>
                        <div class="card-price">
                            <p>'. htmlentities($item['price']) .'€</p>
                        </div>
                    </div>
                </li>
            ';
        }
    }
?>

    
        
            
        