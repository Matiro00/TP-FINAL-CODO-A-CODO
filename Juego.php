<?php

class Juego{
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;

    function __construct($nombre,$descripcion,$precio,$imagen){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->precio=$precio;
        $this->imagen=$imagen;

    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function setPrecio($precio){
        $this->precio=$precio;
    }
    public function setImagen($imagen){
        $this->imagen=$imagen;
    }


}