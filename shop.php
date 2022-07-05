<?php
  include_once('./API/BDD/sql.php');
  include_once('./API/functions/shopping.php');
  include_once('./API/class/shopping.php');
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

            <?php

              $countItems = count($catItems);

              for ($i = 0; $i < $countItems; $i++) {
                echo '<option value="'.$catItems[$i].'">'.$titleItems[$i].'</option>';
              }

            ?>

        </select>
      </form>

      <div class="container-item">

        <?php 

          for ($i = 0; $i < $countItems; $i++) {
            echo '<h3>'.$titleItems[$i].'</h3><ul>'; 

              getItem($dbh, $catItems[$i]); 

            echo '</ul>';
          }

        ?>
                      
      </div>


    </div>
  </section>

<?php
  include_once('./includes/footer.php');
  include_once('./includes/end.php');
?>

<script src="./public/js/script.js"></script>