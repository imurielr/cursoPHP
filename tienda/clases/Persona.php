
<?php 

    class Persona {
        private $nombre;
        private $apellido;
        public static $miStatic = 2020;
        
        public function __construct() {
            $this -> nombre = "";
            $this -> apellido = "";
        }

        // Funciones magicas
        public function __set($propiedad, $valor) {
            $this -> propiedad = $valor;
        }

        public function __get($propiedad) {
            return $this -> propiedad;
        }


        // Getters y setters normales

        public function setNombre(string $nombre) {
            $this -> nombre = $nombre;
        }

        public function getNombre() : string {
            return $this -> nombre;
        }

        public function setApellido(string $apellido) {
            $this -> apellido = $apellido;
        }

        public function getApellido() : string {
            return $this -> apellido;
        }

        public function obtenerEdad($f) {
            echo "PADRE: Tu edad es " . $this -> fecha($f) . "\n";
        }

        protected function fecha($f) {
            return self::$miStatic - $f;
        }

        public function __destruct() {
            echo "Se murió \n";
        }
    }
?>