<?php 
    header('Content-type: text/plain');  // Mostrar \n

    // FUNCIONES
    
    name();

    function name() {
        echo "Hola soy una funcion \n";
    }

    
    // Condicion
    
    $age = 18;
    
    if ($age <= 18) {
        function party() {
            echo "Bienvenido a la fiesta \n";
        }
    }
    
    party();


    // Funciones dentro de funciones

    function foo() {
        function bar() {   // Si no ejecuto primero foo bar no existe
            echo "Hola ya existo";
        }
    }

    foo();
    bar();

?>