<?php
  session_start();

  include_once('./API/BDD/sql.php');
  include_once('./API/functions/func_shopping.php');
  include_once('./API/functions/func_auth.php');
  include_once('./API/class/class_shopping.php');

  include_once('./includes/start.php');
  include_once('./includes/header.php');
  include_once('./includes/tag.php');

  if (isset($_GET['action'])) {
    $getRoute = htmlentities(stripcslashes($_GET['action']));
  } else {
    $getRoute = '';
  }

  switch ($getRoute) {
    case 'getItems':
      include_once('./includes/shopping/get-items.php');
      break;
    case 'addItem':
      include_once('./includes/shopping/add-item.php');
      break;
    default:
      echo 'Erreur 404';
  }
  

  include_once('./includes/footer.php');
  include_once('./includes/end.php');
?>

<script src="./public/js/script.js"></script>