<section class="section-shop">
    <div class="container container-shop">
      <h2 id="shopTitle"><i class="fas fa-store-alt"></i> Boutique</h2>
      <form method="#">
        <select name="pets" id="pet-select" onchange="document.location.href=this.value">
            <option value="#shopTitle">-- Selectionner votre recherche --</option>
              <?php

                $countItems = count($catItems);

                for ($i = 0; $i < $countItems; $i++) {
                  echo '<option value="#'.$catItems[$i].'">'.$titleItems[$i].'</option>';
                }

              ?>
        </select>
      </form>

      <div class="container-item">
        <?php 

          for ($i = 0; $i < $countItems; $i++) {
            echo '<h3 id='.$catItems[$i].'>'.$titleItems[$i].'</h3><ul>'; 

              getItem($dbh, $catItems[$i]); 

            echo '</ul>';
          }

        ?>           
      </div>
    </div>
</section>