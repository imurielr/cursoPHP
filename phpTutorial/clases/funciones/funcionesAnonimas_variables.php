<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // FUNCIONES VARIABLES Y ANONIMAS


    // Funciones anonimas
    $saludo = function($nombre) {
        echo $nombre . "\n";
    };

    $saludo("Isabela");

    $suma = function($num1, $num2) {
        return $num1 + $num2;
    };

    echo $suma(4, 6) . "\n";


    // Funciones variables

    function saludo($saludo) {
        echo "Soy la variable funcion $saludo \n";
    }

    $variable = 'saludo';   
    echo $variable("hola");    // Busca una funcion que tenga este nombre


    // FUNCIONES INTERNAS DE PHP

    if (function_exists('array_filter')) {
        echo "La funcion existe\n";
    }
    else {
        echo "La funcion no existe\n";
    }

    if (function_exists('hola_hola')) {
        echo "La funcion existe\n";
    }
    else {
        echo "La funcion no existe\n";
    }


    print_r(get_extension_funcs("xml")); // Saber las funciones que se encuentran en el modulo de xml


?>