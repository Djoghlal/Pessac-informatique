<?php

    function ask_connect($pass) {
        $password_ask = htmlspecialchars(stripslashes($pass));
        $password_hash = '$2y$10$UpjcRqo1rAWfFEOCAv2mtOFFEnHRCT1T9dTBPN7y08AJc6bgDXpPa';

        if (password_verify($password_ask, $password_hash)) {
            //Le mot de passe est bon, alors on créer la SESSION auth
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

?>



