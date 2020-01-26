<?php 
    header('Content-type: text/plain');  // Mostrar \n

    function resta($num) {
        return $num - 10;
    }

    echo resta(40) . "\n";


    function hacer_cafe($tipo="capuchino") {  // VALOR PREDETERMINADO
        return "El cafe es tipo $tipo \n";
    }

    echo hacer_cafe();
    echo hacer_cafe(null);
    echo hacer_cafe("mocca");

    function persona($nombre = "fulanito", $apellido = "fulanito", $edad = 15) {
        return "Bienvenido $nombre $apellido de $edad años";
    }

    echo persona("Marinez", "Mendez") . "\n";

    function animales($animales = array("sin dato", "sin dato"), $tipo = "sin tipo") {
        return "Los animales son " . implode(",",$animales) . " $tipo \n";
    }

    echo animales();
    echo animales(array("gato", "tigre"), "Felino");


    // RETORNAR VARIOS VALORES

    function flores() {
        $flor = "Clavel";
        $color = "Morado";
        $cantidad = 10;

        return array($flor, $color, $cantidad);
    }

    list($fl, $co, $can) = flores();

    echo "Hola soy un $fl de color $co y somos $can";

?>