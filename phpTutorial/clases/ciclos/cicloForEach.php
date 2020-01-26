<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // FOREACH

    $array = array(1, 2, 3, 4, 5);

    foreach ($array as $valor) {
        echo $valor . "\n";
    } 

    // Modificar los elementos en cada posicion del arreglo
    foreach ($array as &$valor) {
        $valor *= 2;
    } 

    foreach ($array as $clave => &$valor2) {  // Clave --> Posicion del apuntador       valor2 ---> Valor actual
       echo "$clave ..... $valor2 \n";
    } 

?>