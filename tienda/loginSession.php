<?php

    $user = "Isabela";
    $psw = "1234";

    session_start();

    if ($_POST['username'] == $user && $_POST['password'] == $psw) {
        $_SESSION['login'] = 'administrador';

        echo "Session creada";
    }
    else {
        echo "Usuario o contraseña incorrecto";
    }
?>