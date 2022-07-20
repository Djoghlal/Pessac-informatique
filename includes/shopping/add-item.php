<section class="section-shop">
    <div class="container container-shop">
      <h2><i class="fas fa-lock"></i> Ajouter un article</h2>
      <?php
        
        if (isset($_SESSION['auth'])) {

          if (!isset($_POST['item-name'])) {

            echo '<form method="POST" action="" class="form" enctype="multipart/form-data">
                  <label for="item-name"></label>
                  <input type="text" name="item-name" placeholder="Nom de l\'article"/>
                  <br/>
                  <label for="item-cat"></label>
                  <select name="item-cat">
                    <option value="">-- Selectionner votre recherche --</option>
                  ';
                    $countItems = count($catItems);

                    for ($i = 0; $i < $countItems; $i++) {
                      echo '<option value="'.$catItems[$i].'">'.$titleItems[$i].'</option>';
                    }

            echo '</select>
                  <br/>
                  <label for="item-img"></label>
                  <input type="file" name="item-img">
                  <br/>
                  <label for="item-desc"></label>
                  <textarea name="item-desc" required="required">Description de l\'article</textarea>
                  <br/>
                  <label for="item-price"></label>
                  <input type="numer" name="item-price" placeholder="0€"/>
                  <br/>
                  <button type="submit">Ajouter l\'article</button>
                </form>';

          } else {

            $array_item = [
              "item-name" => $_POST['item-name'],
              "item-cat" => $_POST['item-cat'],
              "item-img-name" => $_FILES['item-img']['name'],
              "item-img-type" => $_FILES['item-img']['type'],
              "item-img-size" => $_FILES['item-img']['size'],
              "item-img-error" => $_FILES['item-img']['error'],
              "item-img-tmp" => $_FILES['item-img']['tmp_name'],
              "item-desc" => $_POST['item-desc'],
              "item-price" => $_POST['item-price']
            ];

            echo addItem($array_item, $dbh);

          }

        } else {

          header('Location: auth.php');

        }          
      ?>
    </div>
</section>