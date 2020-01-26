<?php
    header('Content-type: text/plain');  // Mostrar \n

    // CONVERSION A NUMEROS ENTEROS

    // Contexto
    $variable1 = "20.1 Hola Mundo";  // El numero debe ser al comienzo
    $suma = 20 + $variable1;

    echo $suma;
    echo gettype($suma);

    // Forzado de tipo
    $variable2 = 9.1;
    $int = (int)$variable2;
    echo $int;
    echo gettype($int);


    // Funcion
    $variable3 = 10.1;
    $funcion = intval($variable3);
    echo $funcion;
    echo gettype($funcion);

    // CONVERSION A NUMEROS TIPO ARRAY

    //Funcion explode
    $numeros = "1,2,3,4";
    $arrayNumeros = explode(",", $numeros);   // Similar a split()
    echo $arrayNumeros[0];

    // Tipo forzado
    $array = (array)$variable1;  // Se guarda la variable en la posicion 0 del arreglo
    echo $array[0];

    // ARRAY A STRING
    $arrayColores = array('Azul', 'Rojo', 'Morado');
    $string = implode(", ", $arrayColores);
    echo $string;
    
?>