<?php

class AreaInteres {

    private $nombre;
    private $id;

    function __construct($nombre, $id) {
        $this->nombre = $nombre;
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }



}

?>