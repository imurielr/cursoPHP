<?php 
    header('Content-type: text/plain');  // Mostrar \n

   echo "<p>
            Hola Mundo
        </p>";

    // VARIABLES LOCALES
    $integer = 1;
    $float = 1.5;
    $isTrue = true;
    $arrayColores = array('Azul', 'Morado', 'Negro');
    $string = "hola";

    echo $integer; 
    echo $float;
    if ($isTrue) {
        echo "Verdadero";
    }
    else {
        echo $arrayColores[0];
        echo $string;
        echo "Falso";
    }
      

    // VARIABLES LOCALES Y GLOBALES
    function variablesGlobales() {
        $local = "Soy la variable local";
        echo $GLOBALS["global"];
        echo $local;
    }

    $global = "Soy la variable global";

    variablesGlobales();

    // VARIABLES SUPERGLOBALS
        /*
            https://www.php.net/manual/es/language.variables.superglobals.php

            $GLOBALS
            $_SERVER
            $_GET
            $_POST
            $_FILES
            $_COOKIE
            $_SESSION
            $_REQUEST
            $_ENV
            $php_errormsg
            $http_response_header
            $argc
            $argv
        */

?>