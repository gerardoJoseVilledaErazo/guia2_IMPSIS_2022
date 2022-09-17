<?php

    require_once '../models/Libro.php';

    if(isset($_POST)) {

        $codigo = $_POST['codigo'];
        $titulo = $_POST['titulo'];
        $anioPublicacion = $_POST['anioPublicacion'];

        // CREANDO INSTANCIA DE CLASE
        $Publicacion = new Libro($codigo,$titulo,$anioPublicacion);

        echo '<h1>Código: </h1>'.$Publicacion->getCodigo();
        echo '<h1>Título: </h1>'.$Publicacion->getTitulo();
        echo '<h1>Año de Publicación: </h1>'.$Publicacion->getAnioPublicacion();
        echo '<br>';
        $Publicacion->Prestar();
        echo '<br>';
        $Publicacion->Devolver();
        echo '<br>';
        $Publicacion->Prestado();
        echo '<br>';
        echo '<a class="nav-link" href="http://localhost:8080/guia2_2022/">Home</a>';
    }
?>