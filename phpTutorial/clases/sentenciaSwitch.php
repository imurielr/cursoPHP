<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // SENTENCIA SWITCH

    $i = 3;

    switch ($i) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        default:
            echo "No existe";
            break;
    }

    /*
        switch ($i):
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miercoles";
                break;
            default:
                echo "No existe";
                break;
        endswitch;
    */

?>