<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // ARRAY INDEXADO Y ASOCIATIVO

    $color = "Morado";
    $arrayIndexado = array(1,2,"hola",$color);

    echo $arrayIndexado[2] . "\n";
    echo $arrayIndexado[3] . "\n";

    // Recorrer array indexado

    for ($i = 0; $i < count($arrayIndexado); $i++) {
        echo $arrayIndexado[$i] . "\n";
    }

    // Array Asociativo

    $arrayAsociativo = array('nombre' => 'Isabela', 'color' => 'Morado', 'saludo' => 'Hola');

    echo $arrayAsociativo['nombre'] . "\n";
    
    // Recorrer array asociativo
    foreach ($arrayAsociativo as $clave => $valor) {
        echo "Clave: $clave --> Valor: $valor \n";
    }

?>