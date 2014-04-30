<?php

class Institucion {

    private $id;
    private $nombre;
    private $logo;
    private $direccion;
    private $descripcion;
    private $telefono;
    private $email;
    private $web;

    function __construct($id, $nombre, $logo, $direccion, $descripcion, $telefono, $email, $web) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->direccion = $direccion;
        $this->descripcion = $descripcion;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->web = $web;
    }

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getWeb() {
        return $this->web;
    }

    public function setWeb($web) {
        $this->web = $web;
    }

}

?>
