<?php 
    declare(strict_types = 1);  // ACTIVAR MODO ESTRICTO

    header('Content-type: text/plain');  // Mostrar \n

    // DECLARACIONES DE TIPO ESCALAR

    // modo coercitivo
    function suma(int $a, int $b) {
        return $a + $b;
    }

    var_dump(suma(6, 5));

    // modo estricto
    function resta(int $a, int $b) {
        return $a - $b;
    }

    var_dump(resta(6, 5));

    function mult($a, $b) : int{
        return $a * $b;
    }

    var_dump(mult(7, 5));

?>