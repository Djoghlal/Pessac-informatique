<?php
  include_once('./API/BDD/sql.php');
  //include_once('./API/functions/shopping.php');
  include_once('./includes/start.php');
  include_once('./includes/header.php');
?>
    
  <section class="section-tag">
    <p>Parain Informatique Pessac, à votre service dans le secteur de Pessac en Gironde</p>
  </section>

  <section class="section-shop">
    <div class="container container-shop">
      <h2><i class="fas fa-store-alt"></i> Boutique</h2>
      <form method="#">
        <select name="pets" id="pet-select">
            <option value="">-- Selectionner votre recherche --</option>
            <option value="adaptateurs">Adaptateurs</option>
            <option value="alimentations">Alimentations</option>
            <option value="cordons">Cordons</option>
            <option value="memoires">Mémoires</option>
            <option value="acc-audio">Accessoires audio</option>
            <option value="peripheriques">Péripheriques</option>
            <option value="ddurs">Disques-durs</option>
            <option value="reseau">Réseau</option>
            <option value="acc-video">Accessoires vidéo</option>
            <option value="ecrans">Ecrans</option>
            <option value="ordinateurs">Ordinateurs</option>
            <option value="divers">Divers</option>
            <option value="smart-tablette">Smartphones/Tablettes</option>
        </select>
      </form>

      <div class="container-item">
        <h3>Adaptateurs</h3>
          <ul>
            <?php
              function getAdapt() {
                $reqSql = 'SELECT * FROM shop-item';
                                                
                $getItems = $dbh->prepare($reqSql);
                $getItems->execute();

                $resultItem = $getItems->fetchAll();

                foreach ($resultItem as $item) {
                  $resultFunction = $item['name'];
                }

                return $resultFunction;

                // if (empty($resultItem)) {
                //     return '<p>Il n\'y a aucun article pour cette catégorie</p>';
                // } else {

                //     foreach($resultItem as $item) {
                //         echo '
                //             <li>
                //                 <div class="card-item">
                //                     <div class="card-img">
                //                         <img src="'. htmlentities($item['img']) .'" alt="'. htmlentities($item['name']) .'">
                //                     </div>
                //                     <div class="card-title">
                //                         <p>'. htmlentities($item['name']) .'</p>
                //                     </div>
                //                     <div class="card-desc">
                //                         <p>'. htmlentities($item['desc']) .'</p>
                //                     </div>
                //                     <div class="card-price">
                //                         <p>'. htmlentities($item['price']) .'€</p>
                //                     </div>
                //                 </div>
                //             </li>
                //         ';
                //     }
                // }
              }

              getAdapt();

            ?>
          </ul>              
      </div>


    </div>
  </section>

<?php
  include_once('./includes/footer.php');
  include_once('./includes/end.php');
?>

<script src="./public/js/script.js"></script>