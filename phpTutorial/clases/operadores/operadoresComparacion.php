<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // OPERADORES DE COMPARACION

    //Operador ==
    $Numero1 = 13;
    $Numero2 = "14";

    echo "Hola soy el operador == \n";

    var_dump($Numero1 == $Numero2);

    // Operador Identico

    echo "Hola soy el operador identico === \n";

    var_dump($Numero1 === $Numero2);

    // Operador Diferente

    echo "Hola soy el operador diferente != o <> \n";

    var_dump($Numero1 != $Numero2);

    // Operador No Identico

    echo "Hola soy el operador no identico !== \n";

    var_dump($Numero1 !== $Numero2);

    // Operador >

    $a = 14;
    $b = 13;

    echo "Hola soy el operador mayor que > \n";

    var_dump($a > $b);

    // Operador <

    echo "Hola soy el operador menor que < \n";

    var_dump($a < $b);

    // Operador mayor o igual que

    echo "Hola soy el operador mayor o igual que >= \n";

    var_dump($a >= $b);

    // Operador menor o igual que

    echo "Hola soy el operador menor o igual que <= \n";

    var_dump($a <= $b);

    // Operador nave espacial 

    echo "Hola soy el operador nave espacial <=> \n";

    var_dump($a <=> $b); // 1  (a < b)
    var_dump($b <=> $a); // -1 (b > a)
    var_dump($b <=> $b); // 0  (b = b)

    // Operador de elvis

    $resultado;

    echo "Hola soy el operador de elvis ?: \n";

    var_dump(isset($resultado) ?: 'no hay datos');    // Si la primera opcion es verdadera retorna true, sino retorna la segunda opcion

    // Operador ternario

    echo "Hola soy el operador ternario ? \n";

    var_dump(isset($resultado) ? 'soy verdadero' : 'soy falso');    // Retorna la primera si es verdadera, sino retorna la segunda opcion

    // Operador de fusion null

    echo "Hola soy el operador de fusion null ?? \n";

    var_dump($resultado ?? 'no hay datos');    // Funciona como el operador elvis


?>