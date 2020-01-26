<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // ARRAY MULTIDIMENSIONAL

    $presonas = array(
                    array('Isabela', 'Muriel', 20),
                    array('Luisa', 'Vasquez', 20),
                    array('Felipe', 'Cortes', 21),
                    array('Rafael', 'Villegas', 20)
    );

    echo $presonas[1][1] . "\n";

    for ($fila = 0; $fila < count($presonas); $fila++) {
        for ($column = 0; $column < count($presonas[$fila]); $column++) {
            echo $presonas[$fila][$column] . "   ";
        }
        echo "\n";
    }

    // MULTIDIMENSIONAL MIXTO

    $barcos = array(
                    'A' => array('nada', 'nada', 'Barco'),
                    'B' => array('nada', 'nada', 'nada'),
                    'C' => array('Barco', 'nada', 'nada'),
                    'D' => array('nada', 'nada', 'Barco')
    );

    echo $barcos['A'][2];

    foreach ($barcos as $clave => $valor) {
        echo "\n";
        for ($i = 0; $i < count($valor); $i++) {
            echo "Coordenadas -> " . $clave . "-" . $i . "  Valor -> " . $valor[$i] . "\n";
        }
    }

?>