<?php
    $user = "Isabela";
    $psw = "1234";


    if ($_POST['username'] == $user && $_POST['password'] == $psw) {
        setcookie('username', $_POST['username'], time()+60*60*24*365);
        setcookie('password', $_POST['password'], time()+60*60*24*365);

        echo "Cookie creado";
    }
    else {
        echo "Usuario o contraseña incorrectos";
    }
?>