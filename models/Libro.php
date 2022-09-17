<?php
    require('Publicacion.php');
    require('../interfaces/IPrestable.php');

    class Libro extends Publicacion implements IPrestable {

        // Atributos -Privados
        private $estadoPrestamo;

        // Metodo Magico
        function __construct($codigo, $titulo, $anioPublicacion) {

            parent::__construct($codigo, $titulo, $anioPublicacion);
            $this->estadoPrestamo = false;
        }
 
        // destructor (metodo magico)
        function __destruct(){}

        // Metodo tradicionales de clase
        function getTipoPublicacion() {
            return 1;
        }

        // Metodos de la interface IPrestable.php
        function Prestar() {
            $this->estadoPrestamo = true;
        }

        function Devolver() {
            $this->estadoPrestamo = false;
        }

        function Prestado() {
            return $this->estadoPrestamo;
        }

    }

?>