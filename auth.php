<?php
    session_start();
    include_once('./includes/start.php');
    include_once('./includes/header.php');
    include_once('./includes/tag.php');

    if (isset($_POST['password-auth'])) 
    {
        include_once('./API/functions/func_auth.php');
        $result_auth = ask_connect($_POST['password-auth']);

        if ($result_auth) {
            $_SESSION['auth'] = true;
            header('Location: ./shop.php?action=addItem');
        } 
        
        else {
            header('Location: ./auth.php');
        }
    } 

    elseif (isset($_SESSION['auth'])) 
    {
        header('Location: ./shop.php?action=getItems');
    }
    
    else 
    {
        echo '<section class="section-shop">
                <div class="container container-shop">
                <h2> Espace réservé</h2>
                    <form method="POST" action="" class="form">
                        <label for="password-auth">Entrez votre mot de passe</label>
                        <input type="password" name="password-auth" required="required" />
                        <button type="submit">Connexion</button>
                    </form>
                </div>
            </section>';
    }

    include_once('./includes/footer.php');
    include_once('./includes/end.php');
?>

<script src="./public/js/script.js"></script>