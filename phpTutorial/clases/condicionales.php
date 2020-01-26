<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // IF, ELSE, ELSE IF

    $a = 10;
    $b = 10;

    if ($a < $b) {
        echo "a es menor" . "\n";
    }
    else {
        echo "a es mayor" . "\n";
    }

    if ($a < $b):
        echo "a es menor" . "\n";
    else:
        echo "a es mayor" . "\n";
    endif;

    if ($a < $b):
        echo "a es menor" . "\n";
    elseif ($a == $b):
        echo "a y b son iguales" . "\n";
    endif;

?>