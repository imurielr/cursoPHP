<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // BUCLE WHILE Y DO WHILE

    // While

    $contador = 1;

    while ($contador <= 10) {
        echo "Valor del contador: $contador" . "\n";
        ++$contador;
    }

    // Do while

    do {
        echo "Valor del contador do while: $contador" . "\n";
        ++$contador;
    } while ($contador <= 10);

?>