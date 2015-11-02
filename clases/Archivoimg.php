<?php

class Archivoimg {

    
    private $archivomp3;
    private $titulo;
    private $extension;
    
    function __construct(Archivomp3 $archivomp3=NULL, $titulo=NULL, $extension=NULL) {
        $this->archivomp3 = $archivomp3;
        $this->titulo = $titulo;
        $this->extension = $extension;
    }

    function getArchivomp3() {
        return $this->archivomp3;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getExtension() {
        return $this->extension;
    }

    function setArchivomp3($archivomp3) {
        $this->archivomp3 = $archivomp3;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }


    
    
}
