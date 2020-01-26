<?php 
    header('Content-type: text/plain'); // Mostrar \n

    // CONCATENACION E INTERPOLACION

    // COMILLAS DOBLES

        // Concatenacion ------> .
        $palabra = "Codigo ";

        $union = $palabra . "facilito";  // Forma 1
        echo $union;

        $palabra .= "facilito2";  // Forma 2
        echo $palabra;

        // Interpolacion
        echo "Bienvenido a $palabra adios\n";   // Forma 1

        echo "Bienvenido a {$palabra}222 adios\n";   // Forma 2

        /*
            Es mas rapido utilizar la interpolacion que la concatenacion
        */

        // CARACTERES ESCAPADOS (Se pueden utilizar en interpolacion)
        /*
            \n, \r, \t, \v, \e, \f, \\, \$, \"
        */

        echo "Hola Mundo \n Adios ";

    // COMILLAS SIMPLES

        /*
            * No se puede realizar la interpolacion
            * No se pueden utilizar caracteres escapados
        */
        echo '$palabra hola';   // No imprime el valor de la variable
        echo 'hola \n hola';    // Imprime '\n'
        echo 'I\'m';    

?>