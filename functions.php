<?php
    function password_generator($numero_Utente) {
      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
      return substr(str_shuffle($data), 0, $numero_Utente);
    }
    $userNum = $_POST['passwordLength'];
?>