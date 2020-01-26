<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // ARGUMENTOS DE FUNCIONES

    function suma($num1, $num2) {
        $suma = $num1 + $num2;
        echo "La suma es $suma \n";
    }

    suma(10, 15);

    function suma_array($entrada) {
        $num1 = $entrada[0];
        $num2 = $entrada[1];

        echo "El resultado es " . ($num1 + $num2) . "\n";
    }

    suma_array(array(10, 5));

    // Funcion por referencia

    function resta(&$num) {
        $num = 20 - $num;
    }

    $result = 13;

    resta($result);

    echo $result . "\n";

    // Funciones recursivas

    function recursividad($a) {
        if ($a < 20) {
            echo "$a\n";
            recursividad(++$a);
        }
    }

    recursividad(1);

?>