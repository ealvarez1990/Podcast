<?php

class Archivomp3 {
    private $usuario;
    private $categoria;
    private $titulo;
    private $extension;
    
    function __construct($usuario=NULL, $categoria=NULL, $titulo=NULL, $extension=NULL) {
        $this->usuario = $usuario;
        $this->categoria = $categoria;
        $this->titulo = $titulo;
        $this->extension = $extension;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getExtension() {
        return $this->extension;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }



    
}
