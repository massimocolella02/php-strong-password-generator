<?php 
    require __DIR__ . '/functions.php';

    session_start();

    $_SESSION['password'] = password_generator($userNum);

    echo $_SESSION['password'];
?>