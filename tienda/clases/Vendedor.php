<?php
    class Vendedor extends Persona {
        private $codigoInterno;
        private $caja;

        public function __construct() {
            $this -> codigoInterno = 0;
            $this -> caja = "";
        }

        public function lluviaEstrellas() {
            $tiempo = parent::fecha(1994) + 25;
            echo "HIJO: Tu edad sera $tiempo \n";
        } 

    }

?>