<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // OPERADORES DE ASIGNACION

    $a = 15;
    $b = 5;

    // Operadores combinados 
    // +, -, *, /, **, %

    $a += $b;
    echo $a . "\n";

    // Operadores incremento y decremento

    // Incremento
    $a = 15;

    echo "Post-incremento " . $a++ . "\n";
    echo "Resultado " . $a . "\n";

    $a = 15;

    echo "Pre-incremento " . ++$a . "\n";
    echo "Resultado " . $a . "\n";

     // Decremento
     $a = 15;

     echo "Post-decremento " . $a-- . "\n";
     echo "Resultado " . $a . "\n";
 
     $a = 15;
 
     echo "Pre-decremento " . --$a . "\n";
     echo "Resultado " . $a . "\n";

?>