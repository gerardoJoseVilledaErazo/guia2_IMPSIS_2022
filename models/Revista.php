<?php
    require('Publicacion.php');
    require('../interfaces/IPrestable.php');

    class Revista extends Publicacion implements IPrestable {

        // Atributos -Privados
        private $numeroRevista;

        // Metodo Magico
        function __construct($codigo, $titulo, $anioPublicacion, $numeroRevista) {

            parent::__construct($codigo, $titulo, $anioPublicacion);
            $this->numeroRevista = $numeroRevista;
        }
 
        // destructor (metodo magico)
        function __destruct(){}

        // Metodo tradicionales de clase
        function getNumeroRevista() {
            return $this->numeroRevista;
        }
        
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