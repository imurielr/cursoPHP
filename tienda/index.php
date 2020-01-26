<?php
    // declare(strict_types = 1);

    // header('Content-type: text/plain');  // Mostrar \n
    /* 
        include --> Si no lo encuentra genera una advertencia y continua
        require --> Si no lo encuentra detiene la ejecucion del script
        include_once
        require_once
    */

    // require_once 'clases/Persona.php';
    // require_once 'clases/Vendedor.php';

    // $persona1 = new Persona();

    // $persona1 -> obtenerEdad(1999);
    // $persona1 -> setNombre("Isabela");

    // echo "Hola " . $persona1 -> getNombre() . "\n";

    // echo $persona1::$miStatic . "\n";


    // $persona2 = new Persona();

    // $persona2 -> obtenerEdad(1971);
    // $persona2 -> nombre = "Nora";  // setter con metodos magicos

    // echo "Hola " . $persona2 -> nombre . "\n";  // getter con metodos magicos

    // echo $persona2::$miStatic . "\n";

    // $vendedor = new Vendedor();
    // $vendedor -> lluviaEstrellas();
    // $vendedor -> obtenerEdad(1994);

    session_start();
    // session_destroy();
    // unset($_SESSION['login']);

    if (isset($_SESSION['login'])) {
        echo "Bienvenido session " . $_SESSION['login'];
        $_SESSION['login'] = "hola";

        unset($_COOKIE['username']);
        setcookie("username", null, -1); //Eliminar cookie

        unset($_COOKIE['password']);
        setcookie("password", null, -1); //Eliminar cookie
    }
    else {
        echo "sin sesion";
    }

    if (isset($_COOKIE['username'])) {
        echo "Bienvenido Cookie " . $_COOKIE['username'];
        setcookie("username", "hola");
    }
    else {
        echo "Sin cookie";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="loginSession.php"> 
        Usuario: <input type="text" name="username"/> <br/>
        Contraseña: <input type="password" name="password"/> <br/>
        <input type="submit" name="submit"/> <br/>
    </form>
</body>
</html>