<?php 

    abstract class Publicacion {

        // Atributos #protegidos
        protected $codigo;
        protected $titulo;
        protected $anioPublicacion;
 
        // Metodo magico
        function __construct($codigo, $titulo, $anioPublicacion) {
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->anioPublicacion = $anioPublicacion;
        }
 
        // destructor (metodo magico)
        function __destruct(){}

        // Metodos tradicionales de clase 
        function getCodigo(){
            return $this->codigo;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function getAnioPublicacion(){
            return $this->anioPublicacion;
        }

        abstract function getTipoPublicacion();

    }

?>