<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // CONSTANTES sin signo $ (mayusculas)
    $variables;

    // const
    const CONSTANTE = "Soy una constante";
    const NUMEROS = 1;
    const COLORES = array('Amarillo', 'Azul', 'Rojo');

    echo NUMEROS;
    echo CONSTANTE;
    echo COLORES[1];

    // define
    define('CONSTANTE2', "Hola Mundo");

    echo CONSTANTE2;

    define('COLORES2', array('amarillo', 'verde', 'morado'));

    echo COLORES2[2];

    echo PHP_INT_MIN;
    echo PHP_FLOAT_DIG;

    // CONSTANTES PREDEFINIDAS
        /*
            https://www.php.net/manual/es/language.constants.predefined.php

            PHP_INT_MIN
            PHP_FLOAT_DIG
            PHP_FLOAT_EPSILON
            PHP_FLOAT_MIN
            PHP_FLOAT_MAX
            PHP_FD_SETSIZE
        

            // CONSTANTES QUE PUEDEN CAMBIAR VALOR DEPENDIENDO DE DONDE SE ENCUENTREN
            
                __LINE__
                __FILE__
                __DIR__
                __FUNCTION__
                __CLASS__

                __TRAIT__

                __METHOD__

                __NAMESPACE__
        */

?>